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
        $this->link = pg_connect("host=".$this->host." dbname=".$this->database." user=".$this->username." password=".$this->password)
            OR die("There was a problem connecting to the database.");
        return true;
    }

    // You will need to research and update this to work with (right now it's ripe for SQL injection)!
    public function query($query) {
        $result = pg_query($query);
        if (!$result) die('Invalid query. ');
        return $result;
    }

    // Close connection
    public function __destruct() {
        pg_close($this->link)
            OR die("There was a problem disconnecting from the database.");
    }

}
?>
