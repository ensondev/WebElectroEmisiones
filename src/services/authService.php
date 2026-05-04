<?php

require_once __DIR__ . '/../config/connection.php';
require_once __DIR__ . '/../helpers/jwt.php';
require_once __DIR__ . '/../config/env.php';

class AuthService
{
    private $conn;
    private $jwt;
    public function __construct()
    {
        $connection = new ConnectionDB();
        $this->conn = $connection->getConnection();
        $this->jwt = new JwtToken($GLOBALS['JWT_SECRET']);
    }

    public function register($nombres, $apellidos, $usuario, $password)
    {
        try {
            $check_user = $this->conn->prepare('SELECT id_usuario FROM usuarios WHERE usuario = :usuario LIMIT 1;');

            $check_user->execute([
                ':usuario' => $usuario
            ]);

            if ($check_user->rowCount() > 0) {
                return [
                    'status' => 400,
                    'succes' => false,
                    'message' => 'Usuario ya exite'
                ];
            }

            $query = $this->conn->prepare('INSERT INTO usuarios(nombres, apellidos, usuario, password) 
                VALUES(:nombres, :apellidos, :usuario, :password);');

            $query->execute([
                ':nombres' => $nombres,
                ':apellidos' => $apellidos,
                ':usuario' => $usuario,
                ':password' => password_hash($password, PASSWORD_DEFAULT)
            ]);

            return [
                'status' => 201,
                'success' => true,
                'message' => 'cuenta creada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la creacion de la cuenta' . $e->getMessage()
            ];
        }
    }

    public function login($usuario, $password)
    {
        try {
            $query = $this->conn->prepare('SELECT id_usuario, nombres, apellidos, usuario, password, rol, imagen_perfil, eliminado, fecha_registro 
                FROM usuarios WHERE usuario = :usuario;');

            $query->execute([
                ':usuario' => $usuario
            ]);

            $user_fetch = $query->fetch(PDO::FETCH_ASSOC);

            if ($user_fetch && password_verify($password, $user_fetch['password'])) {
                $payload = [
                    'id_usuario' => $user_fetch['id_usuario'],
                    'nombres' => $user_fetch['nombres'],
                    'apellidos' => $user_fetch['apellidos'],
                    'usuario' => $user_fetch['usuario'],
                    'rol' => $user_fetch['rol'],
                    'imagen_perfil' => $user_fetch['imagen_perfil'],
                    'eliminado' => $user_fetch['eliminado'],
                    'fecha_registro' => $user_fetch['fecha_registro']
                ];

                $token = $this->jwt->encode($payload);

                return [
                    'status' => 200,
                    'success' => true,
                    'message' => 'OK',
                    'data' => [
                        'access_token' => $token,
                        'token_type' => 'Bearer',
                        'expires_in' => time() + $GLOBALS['JWT_EXP']
                    ]
                ];
            } else {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'credenciales incorrectas'
                ];
            }
        } catch (PDOException $e) {
            return [
                'status' => 401,
                'success' => false,
                'message' => 'usuario o password incorrecto' . $e->getMessage()
            ];
        }
    }

    public function updateImageProfile($id_usuario, $file)
    {
        try {
            $uploadDir = __DIR__ . '/../../public/image/perfil/';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileName = uniqid() . '_' . basename($file['name']);
            $filePath = $uploadDir . $fileName;

            if (!move_uploaded_file($file['tmp_name'], $filePath)) {
                return [
                    'status' => 500,
                    'success' => false,
                    'message' => 'Error al mover el archivo'
                ];
            }

            $query = $this->conn->prepare(
                'UPDATE usuarios SET imagen_perfil = :imagen WHERE id_usuario = :id'
            );

            $query->execute([
                ':imagen' => $fileName,
                ':id' => $id_usuario
            ]);

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Imagen actualizada',
                'imagen_perfil' => $fileName
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
