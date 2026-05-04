<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

class MailService
{

    public function sendCitaEstado($correo, $nombre_cliente, $telefono, $marca, $modelo, $anio, $placa, $kilometraje, $combustible, $servicio, $mensaje, $estado, $fecha_creacion)
    {

        $mail = new PHPMailer(true);
        $owner = new PHPMailer(true);

        try {
            /* $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nvelez4967@utm.edu.ec';
            $mail->Password = 'erjcqwiqlegdwuos';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('nvelez4967@utm.edu.ec', 'ElectroEmisiones');
            $mail->addAddress('nvelez4967@utm.edu.ec', 'ElectroEmisiones');
            $mail->addAddress($correo, $nombre_cliente);

            $mail->isHTML(true);

            if ($estado === "aceptada") {
                $mail->Subject = "Tu cita fue aceptada";
            }

            $mail->Body = "
                <h2>ElectroEmisiones</h2>
                <p>
                    Por medio de la presente, se informa que se ha registrado una nueva solicitud de cita en el sistema. A continuación, se detallan los datos proporcionados por el cliente:
                    Nombre del cliente: $nombre_cliente
                    Teléfono de contacto: $telefono
                    Correo electrónico: $correo
                    Marca del vehículo: $marca
                    Modelo: $modelo
                    Año: $anio
                    Placa: $placa
                    Kilometraje: $kilometraje km
                    Tipo de combustible: $combustible
                    Servicio solicitado: $servicio
                    Observaciones del cliente: $mensaje
                    Estado actual de la cita: $estado
                    Fecha de registro: $fecha_creacion
                </p>
                <p>Se solicita revisar la información y proceder con la gestión correspondiente conforme a los lineamientos establecidos.</p>
                <p>Atentamente, Sistema Automatizado de ElectroEmisiones</p>
            ";

            $mail->send();
            return true; */

            $owner = new PHPMailer(true);

            $owner->isSMTP();
            $owner->Host = 'smtp.gmail.com';
            $owner->SMTPAuth = true;
            $owner->Username = 'nvelez4967@utm.edu.ec';
            $owner->Password = 'erjcqwiqlegdwuos';
            $owner->SMTPSecure = 'ssl';
            $owner->Port = 465;

            $owner->setFrom('nvelez4967@utm.edu.ec', 'ElectroEmisiones');
            $owner->addAddress('nvelez4967@utm.edu.ec', 'Electroemisiones');

            $owner->isHTML(true);
            $owner->Subject = 'Nueva cita - ElectroEmisiones';

            $owner->Body = "
                <h2>ElectroEmisiones</h2>
                <p>
                    Por medio de la presente, se informa que se ha registrado una nueva solicitud de cita en el sistema. A continuación, se detallan los datos proporcionados por el cliente:
                    Nombre del cliente: $nombre_cliente
                    Teléfono de contacto: $telefono
                    Correo electrónico: $correo
                    Marca del vehículo: $marca
                    Modelo: $modelo
                    Año: $anio
                    Placa: $placa
                    Kilometraje: $kilometraje km
                    Tipo de combustible: $combustible
                    Servicio solicitado: $servicio
                    Observaciones del cliente: $mensaje
                    Estado actual de la cita: $estado
                    Fecha de registro: $fecha_creacion
                </p>
                <p>Se solicita revisar la información y proceder con la gestión correspondiente conforme a los lineamientos establecidos.</p>
                <p>Atentamente, Sistema Automatizado de ElectroEmisiones</p>
            ";

            $owner->send();

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nvelez4967@utm.edu.ec';
            $mail->Password = 'erjcqwiqlegdwuos';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('nvelez4967@utm.edu.ec', 'ElectroEmisiones');
            $mail->addAddress($correo, $nombre_cliente);

            $mail->isHTML(true);

            if ($estado === "aceptada") {
                $mail->Subject = "Tu cita fue aceptada";
                $mensajeCliente = "Hola $nombre_cliente, tu cita para <b>$servicio</b> fue ACEPTADA.";
            } else {
                $mail->Subject = "Tu cita fue rechazada";
                $mensajeCliente = "Hola $nombre_cliente, tu cita fue RECHAZADA.";
            }

            $mail->Body = "
    <h2>ElectroEmisiones</h2>
    <p>$mensajeCliente</p>
";

            $mail->send();
        } catch (Exception $e) {
            error_log("MAIL ERROR: " . $mail->ErrorInfo);
            return false;
        }
    }
}
