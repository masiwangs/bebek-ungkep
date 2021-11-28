<?php

namespace App\Helpers;

class API {
    public function get($url, $data) {
        $curl = curl_init();
        if ($data) {
            $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'key: '.env('RAJA_ONGKIR_API_KEY'),
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){
            die("Connection Failure");
        }
        curl_close($curl);
        return json_decode($result, false);
    }

    public function get_new($url, $data) {
        $curl = curl_init();
        if($data) {
            $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL             => $url,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_ENCODING        => "",
            CURLOPT_MAXREDIRS       => 10,
            CURLOPT_TIMEOUT         => 30,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST   => "GET",
            CURLOPT_HTTPHEADER      => array(
                                            "key: ".env('RAJA_ONGKIR_API_KEY')
                                        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return json_decode($response);
    }
}