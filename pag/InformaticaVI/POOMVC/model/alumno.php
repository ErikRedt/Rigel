<?php
    include '../model/Conex_DB.php';//agrega la clase conection

    class alumno{

      //atrubutos
      private $id, $nocta, $noalumno, $appaterno, $apmaterno;
      private $db;

      //metodos
      public function __construct(){
        $this->db = new conection;
      }

        //set
      public function set($atributo,$valor){
        $this->$atributo=$valor;
      }
        //get
        public function get($atributo){
        return $this->$atributo;
      }

      public function selectAlumno(){
        $result = $this->db->query("SELECT * FROM alumno");

        echo "<table>";
        echo "<tr class='titulos'><th>ID</th><th># cuenta</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th></tr>";
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td data-label='ID'>".          $row['idalumno'].  "</td>";
            echo "<td data-label='Cuenta'>".      $row['nocta'].     "</td>";
            echo "<td data-label='Nombre'>".      $row['noalumno'].  "</td>";
            echo "<td data-label='Ap paterno'>".  $row['appaterno']. "</td>";
            echo "<td data-label='Ap materno'>".  $row['apmaterno']. "</td>";

            echo "</tr>";
          }
          echo "</table>";
      }

      public function insertAlumno(){
        $sql = "INSERT INTO alumno VALUES (
          '$this->id',
          '$this->nocta',
          '$this->noalumno',
          '$this->appaterno',
          '$this->apmaterno' )";

        //$this->db->query($sql);

        if ($this->db->query($sql) == TRUE) {
          echo'<script type="text/javascript">
          alert("alumno Guardado");
          window.location.href="../index.php";
          </script>';
          //header("location: ../index.php");
        } else {
          header("location: .self");
        }

      }

      public function deleteAlumno(){
        $result = $this->db->query("DELETE FROM alumno WHERE idalumno = $this->id");
        if ($result == TRUE) {
          echo'<script type="text/javascript">
          alert("alumno Eliminado");
          window.location.href="../index.php";
          </script>';
        } else {
            header("location: .self");
        }
      }

      public function updateAlumno(){
        $sql = "UPDATE alumno SET nocta='$this->nocta',
          noalumno='$this->noalumno',
          appaterno='$this->appaterno',
          apmaterno='$this->apmaterno'
          WHERE idalumno='$this->id'";

          //$this->db->query($sql);
          if ($this->db->query($sql) == TRUE) {
            echo'<script type="text/javascript">
            alert("alumno Actualizado");
            window.location.href="../index.php";
            </script>';
          } else {
            header("location: .self");
          }
        }
    }


?>
