<?php

require_once __DIR__ . '/../config/connection.php';
require_once __DIR__ . '/../helpers/jwt.php';
require_once __DIR__ . '/../config/env.php';
require_once __DIR__ . '/mailService.php';

class ContactService
{
    private $conn;
    private $jwt;
    public function __construct()
    {
        $connection = new ConnectionDB();
        $this->conn = $connection->getConnection();
        $this->jwt = new JwtToken($GLOBALS['JWT_SECRET']);
    }

    public function readContact()
    {
        try {
            $query = $this->conn->prepare('SELECT id_cita, nombre_cliente, telefono, correo, marca, modelo, anio, placa, kilometraje, combustible, servicio, mensaje, estado, fecha_creacion, eliminado
                FROM citas WHERE eliminado = FALSE');
            $query->execute();

            $contact_fetch = $query->fetchAll(PDO::FETCH_ASSOC);

            return [
                'status' => 200,
                'success' => true,
                'message' => 'ok',
                'data' => $contact_fetch
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la lectura de las citas: ' . $e->getMessage(),
            ];
        }
    }

    public function insertContact($nombre_cliente, $telefono, $correo, $marca, $modelo, $anio, $placa, $kilometraje, $combustible, $servicio, $mensaje)
    {
        try {
            $check_query = $this->conn->prepare('SELECT id_cita FROM citas 
                WHERE placa = :placa AND servicio = :servicio AND fecha_creacion = now();');

            $check_query->execute([
                ':placa' => $placa,
                ':servicio' => $servicio
            ]);

            if ($check_query->rowCount() > 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'Ya haz solicitado una cita para hoy... intentalo mas tarde.'
                ];
            }

            $query = $this->conn->prepare('INSERT INTO citas(nombre_cliente, telefono, correo, marca, modelo, anio, placa, kilometraje, combustible, servicio, mensaje)
                VALUES (:nombre_cliente, :telefono, :correo, :marca, :modelo, :anio, :placa, :kilometraje, :combustible, :servicio, :mensaje);');

            $query->execute([
                ':nombre_cliente' => $nombre_cliente,
                ':telefono' => $telefono,
                ':correo' => $correo,
                ':marca' => $marca,
                ':modelo' => $modelo,
                ':anio' => $anio,
                ':placa' => $placa,
                ':kilometraje' => $kilometraje,
                ':combustible' => $combustible,
                ':servicio' => $servicio,
                ':mensaje' => $mensaje
            ]);

            return [
                'status' => 201,
                'success' => true,
                'message' => 'citación enviada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la cita' . $e->getMessage()
            ];
        }
    }

    public function softDeleteContact($id_cita)
    {
        try {
            $query = $this->conn->prepare('UPDATE citas
                SET eliminado = TRUE
                WHERE id_cita = :id_cita AND eliminado = FALSE');

            $query->execute([
                ':id_cita' => $id_cita
            ]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'La cita no existe o ya fue eliminada'
                ];
            }

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Cita eliminada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la eliminación de la cita' . $e->getMessage()
            ];
        }
    }

    public function hardDeleteContact($id_cita)
    {
        try {
            $query = $this->conn->prepare('DELETE FROM citas
                WHERE id_cita = :id_cita');

            $query->execute([
                ':id_cita' => $id_cita
            ]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'La cita no existe'
                ];
            }

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Cita eliminada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la eliminación de la cita' . $e->getMessage()
            ];
        }
    }

    public function acceptContact($id_cita)
    {
        try {
            $query = $this->conn->prepare("
            UPDATE citas 
            SET estado = 'aceptada'
            WHERE id_cita = :id_cita AND eliminado = FALSE
        ");

            $query->execute([':id_cita' => $id_cita]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'No se pudo actualizar'
                ];
            }

            $get = $this->conn->prepare("SELECT nombre_cliente, telefono, correo, marca, modelo, anio, placa, kilometraje, combustible, servicio, mensaje, fecha_creacion FROM citas WHERE id_cita = :id");
            $get->execute([':id' => $id_cita]);
            $data = $get->fetch(PDO::FETCH_ASSOC);

            //ENVIAR CORREO CON MAILSERVICE
            $mailService = new MailService();
            $mailService->sendCitaEstado(
                $data['correo'],
                $data['nombre_cliente'],
                $data['telefono'],
                $data['marca'],
                $data['modelo'],
                $data['anio'],
                $data['placa'],
                $data['kilometraje'],
                $data['combustible'],
                $data['servicio'],
                $data['mensaje'],
                'aceptada',
                $data['fecha_creacion']
            );

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Cita aceptada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /* public function acceptContact($id_cita)
    {
        try {
            $query = $this->conn->prepare('UPDATE citas
                SET estado = "aceptada"
                WHERE id_cita = :id_cita AND eliminado = FALSE AND estado = "pendiente"');

            $query->execute([
                ':id_cita' => $id_cita
            ]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 409,
                    'success' => false,
                    'message' => 'Esta cita ya fue procesada'
                ];
            }

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Cita aceptada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al aceptar la cita: ' . $e->getMessage()
            ];
        }
    } */

    public function rejectContact($id_cita)
    {
        try {
            $query = $this->conn->prepare('UPDATE citas
                SET estado = "rechazada"
                WHERE id_cita = :id_cita AND eliminado = FALSE AND estado = "pendiente"');

            $query->execute([
                ':id_cita' => $id_cita
            ]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 409,
                    'success' => false,
                    'message' => 'Esta cita ya fue procesada'
                ];
            }

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Cita rechazada correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al rechazar la cita: ' . $e->getMessage()
            ];
        }
    }
}
