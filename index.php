<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>DEV - Tu Gruero - Canje de Tarjetas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/bootstrap-pincode-input.css' rel='stylesheet'>
    <link href='vendor/font-awesome-4.7/css/font-awesome.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&family=Nunito:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>


<body>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <img src="img/logoTG.png" class="logo">
                    <h2><strong>Canjea tu Tarjeta Tugruero</strong></h2>
                    <p>Llena todo el formulario para continuar</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="" method="POST" class="needs-validation" novalidate>
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="payment"><strong>Tarjeta</strong></li>
                                    <li id="personal"><strong>Personal</strong></li>
                                    <li id="account"><strong>Vehiculo</strong></li>
                                    <li id="confirm"><strong>Finalizar</strong></li>
                                </ul>
                                <!-- Primer paso -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Informacion de la Tarjeta</h2>
                                        <img class="img-tarjetas" loading="lazy" src="/img/tarjetastugruero-01.png" />
                                        <label>Codigo de la tarjeta</label>
                                        <input type="text" id="codigo" name="codigo" class="" value="" placeholder="Codigo"/>
                                        <div class="valid-feedback">
                                            Bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Error
                                        </div>
                                        <p>¿Estas renovando tu plan?</p>

                                        <label class="radio-container m-r-55">Si
                                            <input type="radio" checked="checked" name="exist" required>
                                            <span class="checkmark"></span>
                                            
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="exist" required>
                                            <span class="checkmark"></span>
                                        </label>
                                        </input>
                                        <!-- Segundo paso -->
                                    </div>

                                    <input id="next" type="button" name="next" onclick="validate1(0)" class="next action-button" value="Siguiente">

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Tu plan</h2>

                                        <label class="radio-container m-r-55">Plan Classic
                                            <input type="radio" checked="checked" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Plan Plus
                                            <input type="radio" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Plan Gold
                                            <input type="radio" name="exist">
                                            <span class="checkmark"></span>
                                        </label>

                                        <h2 class="fs-title">Informacion personal</h2>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label>Nombres</label>
                                                <input type="text" name="fname" placeholder="" required/>
                                                <div class="valid-feedback"> Bien!</div>
                                                <div class="invalid-feedback">Error</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label>Apellidos</label>
                                                <input type="text" name="lname" placeholder="" required/>
                                                <div class="valid-feedback"> Bien!</div>
                                                <div class="invalid-feedback">Error</div>
                                            </div>
                                        </div>

                                        <div class="form-row">

                                            <div class="col-md-4 mb-3">

                                                <select class="custom-select per d-block w-100" id="state" required>
                                                <option></option>        
                                              <option>V- </option>
                                              <option>J- </option>
                                              <option>E- </option>
                                              <option>G- </option>
                                            </select>
                                                <div class="invalid-feedback">
                                                    Selecciona una opcion valida
                                                </div>
                                            </div>

                                            <div class="col-md-8 mb-3">

                                                <input type="number" name="cedula" placeholder="Cedula / RIF" required/>
                                            </div>
                                        </div>

                                        <div class="form-row">

                                            <div class="col-md-4 mb-3">

                                                <select class="custom-select per d-block w-100" id="celular" required>
                                                <option value=""></option>
                                              <option>0414</option>
                                              <option>0424</option>
                                              <option>0412</option>
                                              <option>0416</option>
                                              <option>0426</option>
                                            </select>
                                                <div class="invalid-feedback">
                                                    Selecciona una opcion valida
                                                </div>

                                            </div>
                                            <div class="col-md-8 mb-3">

                                                <input type="number" name="celular" placeholder="Celular" required/>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label>Fecha de Nacimento</label>
                                            <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="inputAddress">Direccion</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 caracas" required>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Ciudad</label>
                                                <input type="text" class="form-control" id="ciudad" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Estado</label>
                                                <select id="inputState" class="form-control per" required>
                                                <option selected></option>
                                                <option></option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-row">

                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputState">Estado Civil</label>
                                                <select id="inputState" class="form-control per" required>
                                                 <option selected disabled value=""></option>
                                                <option>Soltera/o</option>
                                                <option>Casada/o</option>
                                                <option>Divorciada/o</option>
                                                <option>viuda/o</option>
                                               </select>
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputState">Contacto inicial</label>
                                                <select id="inputState" class="form-control per" required>
                                                <option selected disabled ></option>
                                                <option>Stand de venta</option>
                                                <option>Instagram</option>
                                                <option>Facebook</option>
                                                <option>Busqueda en Google</option>
                                              </select>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" name="Buscar" for="inputGroupFile01">Carnet de circulacion</label>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                                                <label class="custom-file-label" name="Buscar" for="inputGroupFile01">Cedula de identidad</label>
                                            </div>
                                        </div>



                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                </fieldset>


                                <!-- Paso 3 informacion del vehiculo -->

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Informacion del Vehiculo </h2>

                                        <div class="form-row">

                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputState">Clase</label>
                                                <select id="inputState" class="form-control per" required>
                                                <option selected disabled ></option>
                                                <option>Automovil</option>
                                                <option>Camioneta</option>
                                                <option>Moto</option>
                                                <option>Rustico</option>
                                               </select>
                                            </div>
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputState">Año</label>
                                                <select id="inputState" class="form-control per" required>
                                                <option selected disabled ></option>
                                                <option>2000</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="inputCity">Marca</label>
                                                <select id="inputState" class="custom-select per d-block w-100" required>
                                                    <option selected disabled ></option>
                                                <option >Acura</option>
                                                <option >Alfa Romeo</option>
                                                <option >Aprilia</option>
                                                <option >Aston Martin</option>
                                                <option >Audi</option>
                                                <option >Bajaj</option>
                                                <option >Bera</option>
                                                <option >BMW</option>
                                                <option >BMW</option>
                                                <option >Buick</option>
                                                <option >BYD</option>
                                                <option >Cadillac</option>
                                                <option >Can-Am</option>
                                                <option >Chana</option>
                                                <option >Changhe</option>
                                                <option >Chery</option>
                                                <option >Chevrolet</option>
                                                <option >Chrysler</option>
                                                <option >Citroën</option>
                                                <option >Corvette</option>
                                                <option >Daewoo</option>
                                                <option >Daihatsu</option>
                                                <option >Dodge</option>
                                                <option >Dongfeng</option>
                                                <option >Ducati</option>
                                                <option >Empire</option>
                                                <option >ENCAVA</option>
                                                <option >Ferrari</option>
                                                <option >Fiat</option>
                                                <option >Ford</option>
                                                <option >FREIGHTLINER</option>
                                                <option >Geely</option>
                                                <option >Gilera</option>
                                                <option >Great Wall</option>
                                                <option >Hafei</option>
                                                <option >Haima</option>
                                                <option >HAOJUE</option>
                                                <option >Harley Davidson</option>
                                                <option >Honda</option>
                                                <option >Hummer</option>
                                                <option >Husqvarna</option>
                                                <option >Hyundai</option>
                                                <option >Infiniti</option>
                                                <option >Isuzu</option>
                                                <option >IVECO</option>
                                                <option >JAC</option>
                                                <option >JACK</option>
                                                <option >Jaguar</option>
                                                <option >Jeep</option>
                                                <option >JMC</option>
                                                <option >Kawasaki</option>
                                                <option >Keeway</option>
                                                <option >KENWORTH</option>
                                                <option >Kia</option>
                                                <option >KTM</option>
                                                <option >Lada</option>
                                                <option >Land Rover</option>
                                                <option >Lexus</option>
                                                <option >Lifan</option>
                                                <option >Lincoln</option>
                                                <option >LML</option>
                                                <option >MACK</option>
                                                <option >Maserati</option>
                                                <option >MD</option>
                                                <option >Mercedes Benz</option>
                                                <option >Mercury</option>
                                                <option >Mini</option>
                                                <option >Mitsubishi</option>
                                                <option >Nissan</option>
                                                <option >Otra</option>
                                                <option >Peugeot</option>
                                                <option >PIAGGIO</option>
                                                <option >Polifit</option>
                                                <option >Pontiac</option>
                                                <option >Porsche</option>
                                                <option >Renault</option>
                                                <option >Saic Wuling</option>
                                                <option >Saipa/Venirauto</option>
                                                <option >Scion</option>
                                                <option >Seat</option>
                                                <option >Skoda</option>
                                                <option >Skygo</option>
                                                <option >Smart</option>
                                                <option >Subaru</option>
                                                <option >Suzuki</option>
                                                <option >Tata</option>
                                                <option >Toyota</option>
                                                <option >Triumph</option>
                                                <option >Tyanye</option>
                                                <option >Unico</option>
                                                <option >United Motors</option>
                                                <option >Venirauto</option>
                                                <option >Vespa</option>
                                                <option >Volkswagen</option>
                                                <option >VOLVO</option>
                                                <option >Yamaha</option>
                                                <option >Zhongxing</option>
                                                <option >Zotye</option>
                                              </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="placa">Placa</label>
                                                <input type="text" name="placa" placeholder="" required/>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="modelo">Modelo</label>
                                                <input type="text" name="modelo" placeholder="" required/>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="modelo">Color</label>
                                                <input type="text" name="color" placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="placa">Tipo</label>
                                                <select class="custom-select per d-block w-100" id="Tipo" required>
                                                    <option selected disabled ></option>
                                                    <option >Coupé</option>
                                                    <option >Cross Over</option>
                                                    <option >Furgón</option>
                                                    <option >Hatchback</option>
                                                    <option >Mini Van</option>
                                                    <option >Panel</option>
                                                    <option >Pick Up</option>
                                                    <option >Rústico</option>
                                                    <option >Sedán</option>
                                                    <option >Sport Wagon</option>
                                                    <option >Station Wagon</option>
                                                    <option >Techo Duro</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecciona una opcion valida
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="placa">Serial carroceria</label>
                                                <input type="text" name="Serial" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="regresar" class="previous action-button-previous" value="Regresar" /> <input type="submit" name="make_payment" class="next action-button" value="Confirmo" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='vendor/jquery/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="js/bootstrap-pincode-input.js?ver=1.2"></script>
	<script>
	function canjeCallBack(e){
		console.log('this: ' + e);
	}
        function validate1(val) {
            v1 = document.getElementById("codigo");
            flag1 = true;
            if (val >= 1 || val == 0) {
                if (v1.value == "") {
                    v1.style.borderColor = "red";
                    flag1 = false;
                } else {
                    v1.style.borderColor = "green";
                    flag1 = true;
                }
            }
            flag = flag1;
            return flag;
        }
        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            $(".next").click(function() {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });
            $(".previous").click(function() {
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();
                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                //show the previous fieldset
                previous_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });
            $('.radio-group .radio').click(function() {
                $(this).toggleClass('selected');
            });
			$('#codigo').pincodeInput({inputs:8,pattern:'[a-zA-Z0-9 ]',inputtype:'text',inputmode:'text',complete:function(value, e, errorElement){
				console.log("code entered: " + value);
				$.ajax({
    url: "https://admin.tugruero.io/api/val_canje.php",
    dataType: "jsonp", // jsonp
    method: "POST",
    jsonpCallback: 'canjeCallBack', // add this property
	//data: { name: "John", location: "Boston" }
	data: {number: $('#codigo').val()},
    contentType: "application/json; charset=utf-8",
    success: function (data, status, xhr) {
        console.log(data);
		if(data.success){
							Swal.fire({
								  icon: 'success',
								  title: 'Correcto',
								  text: data.msg,
								  confirmButtonColor: '#f37021',
								})
						}else{
							Swal.fire({
								  icon: 'error',
								  title: 'Oops...',
								  text: data.msg,
								  confirmButtonColor: '#f37021',
								})
						}
    },
    error: function (xhr, status, error) {
        console.log("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
		Swal.fire({
								  icon: 'error',
								  title: 'Oops...',
								  text: "Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText,
								  confirmButtonColor: '#f37021',
								})
    }
});
          /*do some code checking here*/
          /*$.post( "https://admin.tugruero.io/api/val_canje.php", { number:value}, function( data ) {
						console.log(data); // John
						
						}, "json");*/
        }});
        });
    </script>
</body>


</html>