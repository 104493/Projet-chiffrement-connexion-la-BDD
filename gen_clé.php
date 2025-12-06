<?php
// Génère une clé AES-256 (32 octets)
$key = random_bytes(32);

// Vérifie que le dossier existe
$path = "C:\www\Secure";

// Enregistre la clé dans key.bin
file_put_contents("$path/clé.bin", $key);

echo "✔ Clé générée avec succès :C:\www\Secure\clé.bin\n";
echo "✔ Taille : " . strlen($key) . " octets\n";
?>
