<?php
$key = file_get_contents("C:/www/Secure/clé.bin");
$plain_pwd = "stat";
$iv = "1234567890123456";

$encrypted = openssl_encrypt(
    $plain_pwd,
    "AES-256-CBC",
    $key,
    OPENSSL_RAW_DATA,
    $iv
);
echo base64_encode($encrypted);
?>
