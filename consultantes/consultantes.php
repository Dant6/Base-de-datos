<?php

    include_once('../config/config.php');
    include('../config/database.php');

    class consultantes{

       public $conexion;

       function __construct(){
         $db = new Database();
         $this->conexion = $db->connectToDatabase();
     }

     function save($params){
        $nombrescompletos = $params ['nombrescompletos'];
        $nombrescompletos = $params ['numerodeldocumento'];
        $nombrescompletos = $params ['correo'];
        $nombrescompletos = $params ['celular'];
        $nombrescompletos = $params ['fechacita'];
        $nombrescompletos = $params ['psicologo'];

        $insert = "INSERT INTO consultantes VALUES ('$nombrescompletos', '$numerodeldocumento', '$correo', '$celular', '$fechacita', '$psicologo')";
        return mysqli_query($this->conexion, $insert);
     }

 }
?>