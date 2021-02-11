

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <script src="https://kit.fontawesome.com/3b9095d4bc.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">

    <div class=" bg-light img-fluid"> 
    <figure class=" d-flex justify-content-center ">
 
 <img class=" img-fluid" src="<?= base_url('assets/img/8.png') ?>" >
</figure>

    <section class="container-fluid">
    <div >
        <div >
            <div >
                <div >
                    <h1 class="telefonoNumero d-flex justify-content-center">Préstamos</h1>
                    <p class="lead d-flex justify-content-center">Solicita un prestamos de acuerdo a tus necesidades y proximamente nos comunicaremos con vos.</p>
                    <p class="lead d-flex justify-content-center">
                        <b>REQUISITOS</b> CONSULTA via mail:
                        Recibo de Sueldo (ultimos 2)
                        Movimientos Bancarios (ultimos 20)
                    </p>
                </div>
                                   
                <div class="d-flex justify-content-center" style="min-height: 600px;">

                    <div  >

                        <h2 class="text-center p-4 fw-lighter ">
                            Completá un solo formulario y recibí muchas ofertas de credito
                        </h2>
                        <div class="d-flex justify-content-center">
                            <span><i class="fas fa-lock  "></i> Tus datos se guardan de forma segura.</span>
                        </div>  
                            <br>
                        <!-- Formulario solicitud de prestamo -->
                        <form action="<?= base_url(route_to('solicitar_prestamo')) ?>" method="post">
                            <!-- Nombre y Apellido -->
                            <div class=" sombra1 form-floating mb-3">
                                <input type="text"  class="form-control" name="nomyape" id="nomyape" value="<?= old('nomyape') ?>" required>
                                <label for="nomyape">Nombre y Apellido</label>
                                
                            </div>

                            <div class="row g-2">

                                

                                <!-- Fecha de Nacimieno -->
                                <div class="col col-md">
                                    <div class=" sombra1 form-floating mb-3">
                                        <input type="date" name="fechanac" class="form-control" name="fechanac" id="fechanac" required>
                                        <label for="fechanac"><i class="fas fa-calendar"></i> Fecha de Nacimiento</label>
                                        
                                    </div>
                                </div>

                            </div>

                       
                           
                           
                           
                            
                            

                            <!-- Fuente de ingresos -->
                            <div class="sombra1 form-floating mb-3">
                                
                                <select name="fuente_ingresos" id="selectFuenteHaberes" class="form-select" required>
                                    <option value="" selected>Elige una opcion . . .</option>
                                    
                                    <option value="Empleado publico">Empleado municipal/provincial</option>
                                    <option value="Empleado privado">Empleado privado</option>
                                    <option value="Jubilación / Pensión">Jubilación / Pensión</option>
                                    <option value="Pension Graciable">Pension Graciable</option>
                                    <option value="Fuerzas">Fuerzas</option>
                                    <option value="Otros">Otros</option>
                                </select>
                                <label for="selectFuenteHaberes">Fuente de Ingresos</label>
                                
                            </div>

                            <div class="sombra1 form-floating mb-3">
                                
                                <select name="banco" id="banco" class="form-select" required>
                                    <option value="" selected>Elige una opcion . . .</option>
                                    
                                    <option value="Nacion">Nación</option>
                                    <option value="Patagonia">Patagonia</option>
                                    <option value="Santander">Santander Río</option>
                                    <option value="BBVA">BBVA</option>
                                    <option value="Otro">Otro Bnaco</option>
                                </select>
                                <label for="banco">Banco</label>
                                
                            </div>
                            

                            <div class="row g-2">
                                <div class="col col-md">
                                    <div class="sombra1 form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="inputEmail4" value="<?= (old('email')) ?>" required>
                                        <label for="email"><i class="far fa-envelope"></i> Email</label>
                                        
                                    </div>
                                </div>
                                <div class="col col-md">
                                    <div class="sombra1 form-floating mb-3">
                                        <input type="text" name="telefono" class="form-control" id="telefono" value="<?= old('telefono') ?>" required>

                                        <label for="telefono"> <i class="fab fa-whatsapp"></i> Whatsapp</label>
                                       
                                    </div>
                                </div>

                               
                            </div>


                            <div class="row g-2">
                                <div class="col col-md">
                                    <div class="sombra1 form-floating mb-3">
                                    <select name="monto" id="monto" class="form-select" required>
                                    <option value="" selected>Elige una opcion . . .</option>
                                    
                                    <option value="1000">1000</option>
                                    <option value="3000">3000</option>
                                    <option value="5000">5000</option>
                                    <option value="10000">10000</option>
                                    <option value="20000">20000</option>
                                    <option value="Otro monto">Otro monto</option>
                                </select>
                                <label for="selectFuenteHaberes">Monto</label>
                                
                                    </div>
                                </div>
                                <div class="col col-md">
                                    <div class="sombra1 form-floating mb-3">
                                    <select name="cuota" id="cuota" class="form-select" required>
                                    <option value="" selected>Elige una opcion . . .</option>
                                    
                                    <option value="1">1</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="9">9</option>
                                    <option value="12">12</option>
                                    <option value="Otro monto">Otros</option>
                                </select>
                                <label for="selectFuenteHaberes">Cuota</label>
                            
                                    </div>
                                </div>

                               
                            </div>

                          

                           
                           
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1" name="terminos" id="terminos" required>
                                <label class="form-check-label" for="defaultCheck2">
                                    Acepto los <a class="text-decoration-none text-info font-weight-bold" href="<?= base_url(route_to('front/terminos')) ?>">terminos y condiciones</a>
                                </label>
                                
                            </div>
                            <hr class="my-4">


                            <div class="input-group mb-3 d-flex justify-content-center">
                                <button class="sombra1 btn btn-warning">
                                    Confirmar
                                </button>
                            </div>

                            


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</div>