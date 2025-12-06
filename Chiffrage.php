// ---------------------------------------------------------------- Chiffrage MDP -------------------------------------------------------

$conf = include 'C:/www/Secure/Connexion.php';
$clé = file_get_contents("C:/www/Secure/clé.bin");
$mdp = openssl_decrypt(
    base64_decode($conf['mdp_encode']),
    "AES-256-CBC",
    $clé,
    OPENSSL_RAW_DATA,
    $conf['iv']
);

echo "[D][DB SESSION KILLER] Début :".date('d/m/Y H:i:s')."\n";
$concort = oci_connect( $conf['user'],$mdp,$conf['serv']) or die("Erreur de connection au serveur Oracle cortexte!");
