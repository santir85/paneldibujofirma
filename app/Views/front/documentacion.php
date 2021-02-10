

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3b9095d4bc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
  
   
<br>
    <div class=" d-flex justify-content-center">
    <img class=" img-fluid"  src="<?= base_url('assets/img/8.png') ?>" >
</div>




    


<section>
    <div class="container-fluid" >
        <div class="container-fluid" >
            <div class="container-fluid">
                <div class="container-fluid">
                    <h1 class="telefonoNumero d-flex justify-content-center">Firmar Documentación</h1>
                    <p class="lead d-flex justify-content-center">Leé antes de firmar los <br><a class="text-decoration-none text-info font-weight-bold" href="<?= base_url(route_to('front/terminos')) ?>"> terminos y condiciones</a></p>
                    
                </div>
                                   
                <div class="d-flex justify-content-center" style="min-height: 600px;">

                    <div  >

                        <h2 class="text-center p-4 fw-lighter ">
                            Completá un solo formulario 
                        </h2>
                        
                            <br>
                        <!-- Formulario solicitud de prestamo -->
                        <form action="<?= base_url(route_to('enviar_documentacion')) ?>" enctype="multipart/form-data" method="post">

                        
                             <!-- cargar foto-->
                             <p> Presione "seleccionar Archivo" para sacar una foto del celular ó para elegir una foto desde la pc </p>
                            <div class=" sombra1 d-flex justify-content-center form-floating mb-3">
                                
                                <input type="file" class="form-control "  accept="image/*"  id="foto" name="foto" capture="camera">
                                
                            </div>

                            <!-- Nombre y Apellido -->
                            <p>Ingrese su Nombre Y Apellido </p>
                            <div class=" sombra1 form-floating mb-3">
                                <input type="text" name="nomyape" id="nomyape" class="form-control" name="nomyape"  value="<?= old('nomyape') ?>" required>
                                <label for="nomyape">Nombre y Apellido</label>
                                
                            </div>
                            <br>
                                <!-- panel de firma -->

                               
                               
                            <div class="contenedor">

                                    <div class="row">
                                    <div class="col-md-12">
                                        <canvas  id="draw-canvas" name="draw-canvas" width="620" height="360"class="sombra1" >
                                            No tienes un buen navegador.
                                        </canvas>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <input type="button" class="sombra1  btn btn-warning " id="draw-submitBtn" value="Guardar Imagen"></input>
                                        <input type="button" class="sombra1  btn btn-warning " id="draw-clearBtn" value="Borrar Firma"></input>

                                                <label>Color</label>
                                                <input type="color" id="color">
                                                <label>Tamaño Puntero</label>
                                                <input type="range" id="puntero" min="1" default="1" max="5" width="10%">


                                    </div>
                                    <div class="contenedor">
			<div class="col-md-12">
				<img id="draw-image" src="" alt="Tu Imagen aparecera Aqui!"/>
			</div>
		</div>

</div>

<br/>
<div class="input-group mb-3 d-flex justify-content-center">
                                <button class="sombra1 btn btn-warning">
                                   Enviar
                                </button>
                            </div>
<br/>


	        

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url('assets/js/draw-canvas.js'); ?>" ></script>
    