<?php

require_once __DIR__ . '/../config/connection.php';
require_once __DIR__ . '/../helpers/jwt.php';
require_once __DIR__ . '/../config/env.php';

class UserService
{
    private $conn;

    public function __construct()
    {
        $connection = new ConnectionDB();
        $this->conn = $connection->getConnection();
    }

    public function getUsers($id_usuario)
    {
        try {
            $query = $this->conn->prepare('SELECT id_usuario, nombres, apellidos, usuario, rol, imagen_perfil, eliminado, fecha_registro 
                FROM usuarios WHERE id_usuario = :id_usuario;');
            $query->execute([
                ':id_usuario' => $id_usuario
            ]);
            $fetch_user = $query->fetch(PDO::FETCH_ASSOC);
            return [
                'status' => 200,
                'success' => true,
                'message' => 'ok',
                'data' => $fetch_user
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la lectura de los usuarios: ' . $e->getMessage()
            ];
        }
    }

    public function userBelongsToUser($id_usuario)
    {
        $query = $this->conn->prepare('SELECT id_usuario FROM usuarios WHERE id_usuario = :id_usuario;');

        $query->execute([
            ':id_usuario' => $id_usuario
        ]);

        return $query->rowCount() > 0;
    }
}
