<?php

require_once __DIR__ . '/../config/connection.php';
require_once __DIR__ . '/../helpers/jwt.php';
require_once __DIR__ . '/../config/env.php';

class HistoryService
{
    private $conn;
    public function __construct()
    {
        $connection = new ConnectionDB();
        $this->conn = $connection->getConnection();
    }

    public function readHistory()
    {
        try {
            $query = $this->conn->prepare('SELECT 
                    hs.id_historial,
                    hs.marca,
                    hs.modelo,
                    hs.anio,
                    hs.combustible,
                    hs.descripcion,
                    hs.eliminado,
                    hi.ruta_imagen,
                    hs.fecha_registro
                FROM historial_servicios hs
                LEFT JOIN historial_imagenes hi 
                    ON hs.id_historial = hi.id_historial
                WHERE hs.eliminado = FALSE;');

            $query->execute();

            $history_fetch = $query->fetchAll(PDO::FETCH_ASSOC);

            return [
                'status' => 200,
                'success' => true,
                'message' => 'ok',
                'data' => $history_fetch
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar la lectura del historial de servicios: ' . $e->getMessage(),
            ];
        }
    }

    public function insertHistory($marca, $modelo, $anio, $combustible, $descripcion, $ruta_imagen)
    {
        try {
            /* $check = $this->conn->prepare('SELECT id_historial FROM historial_servicios
                WHERE marca = :marca
                AND modelo = :modelo
                AND anio = :anio
                AND combustible = :combustible
                AND DATE(fecha_registro) = CURDATE()
                AND eliminado = FALSE');

            $check->execute([
                ':marca' => $marca,
                ':modelo' => $modelo,
                ':anio' => $anio,
                ':combustible' => $combustible
            ]);

            if ($check->rowCount() > 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'Ya existe un servicio registrado para este vehículo hoy'
                ];
            } */

            $this->conn->beginTransaction();

            $query_history = $this->conn->prepare('INSERT INTO historial_servicios(marca, modelo, anio, combustible, descripcion)
                VALUES (:marca, :modelo, :anio, :combustible, :descripcion);');

            $query_history->execute([
                ':marca' => $marca,
                ':modelo' => $modelo,
                ':anio' => $anio,
                ':combustible' => $combustible,
                ':descripcion' => $descripcion,
            ]);

            $id_historial = $this->conn->lastInsertId();

            $query_image = $this->conn->prepare('INSERT INTO historial_imagenes(id_historial, ruta_imagen)
                VALUES (:id_historial, :ruta_imagen);');

            $query_image->execute([
                ':id_historial' => $id_historial,
                ':ruta_imagen' => $ruta_imagen
            ]);

            $this->conn->commit();

            return [
                'status' => 201,
                'success' => true,
                'message' => 'servicio registrado correctamente'
            ];
        } catch (PDOException $e) {
            $this->conn->rollBack();
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al procesar el servicio' . $e->getMessage()
            ];
        }
    }

    public function updateHistory($id_historial, $marca, $modelo, $anio, $combustible, $descripcion, $ruta_imagen)
    {
        try {
            $this->conn->beginTransaction();

            $query_history = $this->conn->prepare('UPDATE historial_servicios
                SET marca = :marca,
                    modelo = :modelo,
                    anio = :anio,
                    combustible = :combustible,
                    descripcion = :descripcion
                WHERE id_historial = :id_historial');

            $query_history->execute([
                ':marca' => $marca,
                ':modelo' => $modelo,
                ':anio' => $anio,
                ':combustible' => $combustible,
                ':descripcion' => $descripcion,
                ':id_historial' => $id_historial
            ]);

            $query_image = $this->conn->prepare('UPDATE historial_imagenes
                SET ruta_imagen = :ruta_imagen
                WHERE id_historial = :id_historial');

            $query_image->execute([
                ':ruta_imagen' => $ruta_imagen,
                ':id_historial' => $id_historial
            ]);

            $this->conn->commit();

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Historial actualizado correctamente'
            ];
        } catch (PDOException $e) {
            $this->conn->rollBack();

            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al actualizar: ' . $e->getMessage()
            ];
        }
    }

    public function softDeleteHistory($id_historial)
    {
        try {
            $query = $this->conn->prepare('UPDATE historial_servicios
                SET eliminado = TRUE
                WHERE id_historial = :id_historial AND eliminado = FALSE');

            $query->execute([
                ':id_historial' => $id_historial
            ]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'El historial no existe o ya fue eliminado'
                ];
            }

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Historial eliminado correctamente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al eliminar el historial: ' . $e->getMessage()
            ];
        }
    }

    public function hardDeleteHistory($id_historial)
    {
        try {
            $query = $this->conn->prepare('DELETE FROM historial_servicios
                WHERE id_historial = :id_historial');

            $query->execute([
                ':id_historial' => $id_historial
            ]);

            if ($query->rowCount() === 0) {
                return [
                    'status' => 400,
                    'success' => false,
                    'message' => 'El historial no existe'
                ];
            }

            return [
                'status' => 200,
                'success' => true,
                'message' => 'Historial eliminado permanentemente'
            ];
        } catch (PDOException $e) {
            return [
                'status' => 500,
                'success' => false,
                'message' => 'Error al eliminar el historial: ' . $e->getMessage()
            ];
        }
    }
}
