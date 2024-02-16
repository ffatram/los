<?php
class api_middleware extends Controller
{

    function base64_decode_custom($data)
    {
        return base64_decode($data);
    }

    function base64_encode_custom($data)
    {
        return base64_encode($data);
    }




    function encryptDataAES($data)
    {
        $key = $this->base64_encode_custom('qY1t3!Fp6@eGvZnHjKmNqPrStVwYzB&E');
        $iv = openssl_random_pseudo_bytes(16);

        try {
            if (openssl_encrypt($data, 'aes-256-gcm', $this->base64_decode_custom($key), OPENSSL_RAW_DATA, $iv, $tag) === false) {
                throw new Exception('Encryption failed');
            }

            $base64Encrypted = $this->base64_encode_custom($data . '|' . time());
            $base64Iv = $this->base64_encode_custom($iv);
            $base64Tag = $this->base64_encode_custom($tag);

            return $base64Encrypted . '.' . $base64Iv . '.' . $base64Tag;
        } catch (Exception $e) {
            echo 'ERROR : ' . $e->getMessage();
            return false;
        }
    }

    function decryptDataAES($encryptedData)
    {
        $key = $this->base64_encode_custom('qY1t3!Fp6@eGvZnHjKmNqPrStVwYzB&E');

        try {
            list($data, $iv, $tag) = explode('.', $encryptedData);
            list($realData, $time) = explode('|', $this->base64_decode_custom($data));

            $timeNow = time();
            $encryptedTime = $this->base64_decode_custom($time);
            $diffTime = $timeNow - $encryptedTime;

            if ($diffTime < 600) {
                $decrypted = openssl_decrypt($this->base64_decode_custom($realData), 'aes-256-gcm', $this->base64_decode_custom($key), OPENSSL_RAW_DATA, $this->base64_decode_custom($iv), $this->base64_decode_custom($tag));
                return $decrypted;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo 'ERROR : ' . $e->getMessage();
            return false;
        }
    }


    public function encdummydata()
    {
        $data = array(
            'nama' => 'John'
        );

        $encryptedData = $this->encryptDataAES(json_encode($data));
        echo 'Hasil Encrypt : ' . $encryptedData . PHP_EOL;
    }


    // public function decdummydata()
    // {
    //     $decryptedData = $this->decryptDataAES($encryptedData);
    //     echo 'Hasil Decrypt : ' . $decryptedData . PHP_EOL;
    // }


    public function  encrypt()
    {
        $key = 'qY1t3!Fp6@eGvZnHjKmNqPrStVwYzB&E';

        $plaintext = '{"data": "test"}';
        $method = "aes-256-gcm";
        $iv = openssl_random_pseudo_bytes(16);
        $unixtime = time();

        $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv, $tag);

        $base64ChiperText = base64_encode(base64_encode(bin2hex($ciphertext)) . '|' . base64_encode($unixtime));
        $base64IV = base64_encode($iv);
        $base64Tag = base64_encode($tag);

        return $base64ChiperText . '.' . $base64IV . '.' . $base64Tag;
    }

    public function tes()
    {

        $key = 'qY1t3!Fp6@eGvZnHjKmNqPrStVwYzB&E';
        $plaintext = '{"data": "test"}';
        $encryptedData = $this->encrypt();

        echo "PLAIN TEXT: {$plaintext}";
        echo "\n";
        echo "ENCRYPTED DATA: {$encryptedData}";
    }
}
