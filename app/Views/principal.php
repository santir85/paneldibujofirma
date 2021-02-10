<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">
  <!-- boton whatsaap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body>

<div class="container-fluid "> 
<br>

<!-- boton whatsaap -->
<a href="https://api.whatsapp.com/send?phone=1140395729&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20%20%20." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  



<figure class=" d-flex justify-content-center ">
 
  <img class="sombra1 img-fluid" src="<?= base_url('assets/img/1.png') ?>" >
</figure>


<br>
<br>


<div class="Iam d-flex justify-content-center">

<p>Te ofrecemos </p>
<b>
  <div class="innerIam d-flex justify-content-center">
    PRESTAMOS <br/>
    EN EL ACTO <br /> 
    CON O SIN VERAZ<br />
    A SOLA FIRMA<br />
    ACCEDE YA!! <br>
     MUTAL PILARENSES<br>
    </div>
</b>
<br>
</div>
<br>
<br>
  <div class="d-grid gap-2 col-6 mx-auto">
  <a  href="<?php echo base_url().'/front/solicitud/'?>" class="btn btn-warning sombra1"  type="solicitud"><img  src="<?= base_url('assets/img/2.png') ?>" >Soliciud de Préstamos <br> </a>
    <br>
  <a  href="<?php echo base_url().'/front/requisitos/'?>" class="btn btn-warning sombra1" type="requisitos"> <img  src="<?= base_url('assets/img/3.png') ?>" >Enviar Requisitos</a>
    <br>
  <a href="<?php echo base_url().'/front/documentacion/'?>" class="btn btn-warning sombra1" type="button"><img  src="<?= base_url('assets/img/4.png') ?>" >Firmar Documentación</a>
    <br>
                      
  </div>


<!-- telefono -->
<h1 class="telefono d-flex justify-content-center"> TELEFONOS: </h1>

  <figure class=" d-flex justify-content-center ">
  
    <img  src="<?= base_url('assets/img/5.png') ?>" > 
    <div clas="telefonoNumero">
    <h2 clas="telefonoNumero">0230 443-5166</h2>
    </div>
  </figure>

  <figure class=" d-flex justify-content-center ">
  
    <img  src="<?= base_url('assets/img/6.png') ?>" > 
    <div clas="telefonoNumero">
    <h2 clas="telefonoNumero"> 54 11 4039-5729</h2>
    </div>
  </figure>

<br>
<br>

</div>
<footer class="py-5 bg-blue-full img-fluid">
    <div class="container-fluid ">
        <hr class="bg-white">
        <div class="row text-white font-sans text-center">
        <p class="m-0 text-center text-white px-3">
            <h2>comercial@mutualpilarenses.com.ar</h2>
        </p>
       
          
        <hr class="bg-white">
        
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
