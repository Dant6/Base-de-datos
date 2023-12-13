<?php 

include_once('../config/config.php');
include('consultantes.php');

?>
<!DOCTYPE htlm>
<htlm>
    <head>
        <meta charset="UTF-8" />
        <title> Registrar Sesion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" >
        <?php
        if (isset($mensaje)) {
        echo $mensaje;
         }

         ?>
         <h2 class="text-center mb-2 ">Registrar sesion</h2>
         <form method="POST" enctype="multipart/form.data">

         <div class="row mb-2">
             <div class="col" >
             <input type="text" name="nombrecompleto" id="nombrecompleto" placeholder="nombres del paciente" class="form-control"/>
         </div>
         
         <div class="col">
             <input type="number" name="numerodeldocumento" id="numerodeldocumento"placeholder="documento del paciente" class="form-control"/>
         </div>
         <div class="row mb-2">
             <div class="col">
             <input type="email" name="correo" id="correo"placeholder="correo del paciente" class="form-control"/>
         </div>
         
                <div class="col">
                <input type="date" name="date" id="fechacita"placeholder="fecha cita del paciente" class="form-control"/>
                 </div>
         </div>
         <div class="row mb-2">
             <div class="col">
             <input type="text" name="psicologo" id="psicologo"placeholder="psicologo del paciente" class="form-control"/>
         </div>
         </div>
         <button class="btn btn-success">Registrar</button>

        </form>
      </div>
    </body>

</htlm>