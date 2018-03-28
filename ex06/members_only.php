

<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>";
    echo "Unauthorized access";
} else {
    if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys"){
        echo "<html><body>";
        echo "Bonjour Zaz<br />\n";
        echo "<img src=\"";
        $f = file_get_contents("../img/42.png");
        echo base64_encode($f);
        echo "\">";
        echo "</body></html>";
    } else {
        header('HTTP/1.0 401 Unauthorized');
        echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
    }
}
?>
