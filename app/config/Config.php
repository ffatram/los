<?php

// cek ip
$ip = "";

if (isset($_SERVER)) {

    if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        $ip =  $_SERVER["HTTP_X_FORWARDED_FOR"];

    if (isset($_SERVER["HTTP_CLIENT_IP"]))
        $ip = $_SERVER["HTTP_CLIENT_IP"];

    $ip = $_SERVER["REMOTE_ADDR"];
}

if (getenv('HTTP_X_FORWARDED_FOR'))
    $ip = getenv('HTTP_X_FORWARDED_FOR');


if (getenv('HTTP_CLIENT_IP'))
    $ip = getenv('HTTP_CLIENT_IP');





// wifi
// 192.168.51.52

// lan
// 192.168.51.77



// define('BASEURL', "http://192.168.51.52/los1");
define('BASEURL', "http://192.168.51.91/los1");

// define('BASEURL', "http://" . $ip . "/los1");
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_los_hsm');

// api
define('API_KREDIT_ONLINE', 'http://192.168.51.91:8000');


// warna tombol
define('w_ungu', '#9311c4'); // warna untuk tombol log
define('w_orange', '#EC994B'); //warna untuk tombol detail
define('w_brown', '#561C24'); //warna untuk tombol detail

// tes


// nama tabel database
