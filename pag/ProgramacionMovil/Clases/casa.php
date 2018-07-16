<?php
    include 'Conex_DB.php';//agrega la clase conection

    class casa{

      //atrubutos
      private $idcasa, $nombre, $descripcion, $like, $dislike, $p1, $p2, $p3, $p4, $p5, $p6;
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

      public function listarCasa(){
        $result = $this->db->query("SELECT * FROM casa");

        echo "<table>";
        while ($row = mysql_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><img  width='200px'src=../Resources/imagenes/".$row['p1']."></img></td><td><a class='opt' style='text-decoration:none; color:white; margin-left:2em;'href='./verCasa.php?id=".$row['idcasa']."'>Ver casa</a></td>";
            echo "</tr>";
          }
          echo "</table>";
      }

      public function verCasa(){
        $sql = "SELECT * FROM casa
          WHERE idcasa='$this->idcasa'";

          //$this->db->query($sql);
          $result = $this->db->query($sql);
          $reg = mysql_fetch_assoc($result);
          $rate = ($reg["like"]/($reg["like"]+$reg["dislike"]))*100;
          $rate = (int)$rate;

            echo "<ul>
                    <li><a href='./select.php'><button class='opt'><i style='color:white'>Atras</i></button></a></li>
                    <li style='margin-left:2em; padding:0;'><h4 style='color:white' align='center'>".$reg['nombre']."</h4></li>
                    <li style='float:right;'><h4 style='color:white; '>Rate: ".$rate."%</h4></li>
                  </ul>";
            echo "";
            echo "<div>";
            echo "";

            echo "<div>";
            echo "  <img width='100%' id='slider' src='../Resources/imagenes/".$reg['p1']."'/>";
            echo "  <button id='ctrl1' class='opt' onclick='prev()'><i style='color:white'>Anterior</i></button>";
            echo "  <button id='ctrl2' class='opt' onclick='next()'><i style='color:white'>Siguente</i></button>";
            echo "  <a><img style='width:30px; float:right; padding: 0 1em;' src='../Resources/like.png'></a";
            echo "  <a><img style='width:30px; float:right; padding: 0 1em;' src='../Resources/dislike.png'></a";
            echo "</div>";

            echo "<div style='padding: 5px; margin:0.5em; background-color:white; border:solid 1px gray; border-radius:20px;''>";
            echo "<h3 align='center'>Descripción</h3>";
            echo "<p>".$reg['descripcion']."</p>";
            echo "</div>";
            echo "</div>";

            echo "
            <script>
            var images= [
            	'../Resources/imagenes/".$reg['p1']."',
            	'../Resources/imagenes/".$reg['p2']."',
            	'../Resources/imagenes/".$reg['p3']."',
            	'../Resources/imagenes/".$reg['p4']."',
            	'../Resources/imagenes/".$reg['p5']."',
            	'../Resources/imagenes/".$reg['p6']."'
            ]
            var num = 0;
            function next() {
                var slider = document.getElementById('slider');
                num++;
                if(num >= images.length) {
                    num = 0;
                }
                slider.src = images[num];
            }
            function prev() {
                var slider = document.getElementById('slider');
                num--;
                if(num < 0) {
                    num = images.length-1;
                }
                slider.src = images[num];
            }
            </script>";

        }




}
?>
