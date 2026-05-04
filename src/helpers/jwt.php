<?php

class JwtToken {
    private $secret;
    private $time;

    public function __construct($secret, $time = 3600) {
        $this->secret = $secret;
        $this->time = $time;
    }

    public function base64url_encode($data){
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data){
        $resto = strlen($data) % 4;
        if($resto) $data .= str_repeat('=', 4 - $resto);
        return base64_decode(strtr($data, '-_', '+/'));
    }

    public function encode(array $payload){
        $header = ['alg' => 'HS256' , 'typ' => 'JWT'];
        $now = time();
        $payload['iat'] = $now;
        $payload['exp'] = $now + $this->time;

        $segments = [];
        $segments[] = $this->base64url_encode(json_encode($header));
        $segments[] = $this->base64url_encode(json_encode($payload));

        $signing_input = implode('.', $segments);
        $signature = hash_hmac('sha256', $signing_input, $this->secret, true);
        $segments[] = $this->base64url_encode($signature);

        return implode('.', $segments);
    }

    public function decode($jwt, $verifyExp = true) {
        $parts = explode('.', $jwt);

        if (count($parts) !== 3) {
            throw new Exception('Token inválido');
        }

        list($b64header, $b64payload, $b64sig) = $parts;
        $header = json_decode($this->base64url_decode($b64header), true);
        $payload = json_decode($this->base64url_decode($b64payload), true);
        $sig = $this->base64url_decode($b64sig);

        if (!isset($header['alg']) || $header['alg'] !== 'HS256') {
            throw new Exception('Algoritmo no soportado');
        }

        $signing_input = $b64header . '.' . $b64payload;
        $expected_sig = hash_hmac('sha256', $signing_input, $this->secret, true);

        if (!hash_equals($expected_sig, $sig)) {
            throw new Exception('Firma inválida');
        }

        if ($verifyExp && isset($payload['exp']) && time() >= $payload['exp']) {
            throw new Exception('Token expirado');
        }

        return $payload;
    }
}

?>
