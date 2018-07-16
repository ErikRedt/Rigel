<?php
class conection {

    private $link;
    private $host, $username, $password, $database;

    public function __construct(){
        $this->host        = 'localhost';
        $this->username    = 'li313294633';
        $this->password    = 'SecureSSHRigel27';
        $this->database    = 'li313294633';

        // Check connection (which also checks selection of database)
        $this->link = mysql_connect($this->host, $this->username, $this->password)
            or die('No se pudo conectar: ' . mysql_error());
            mysql_select_db($this->database) or die('No se pudo seleccionar la base de datos');

        return true;
    }

    // You will need to research and update this to work with (right now it's ripe for SQL injection)!
    public function query($query) {
        $result = mysql_query($query);
        if (!$result) die('Consulta unavalida:'. mysql_error());
        return $result;
    }

    // Close connection
    public function __destruct() {
        mysql_close($this->link)
            OR die("no se ha podido desconectar de la base de datos:".mysql_error);
    }

}
?>
