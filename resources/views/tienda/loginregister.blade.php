<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@500&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Inicio de Sesión </title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="{{route('tienda')}}">CalzadoManía</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link " href="#">Varones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mujeres</a>
            </li>
           
         <!--   <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>-->
          </ul>
        <style>
           .b{
                height: 30px;
                width: 170px;
                margin-right: -2cm  ;
             
                border:none;
                padding: 3px 17px 20px 25px;
                outline: none;
                background-color: rgb(243, 36, 181);
                color: white;
                font-weight: 700;
                text-decoration: none;
                border-radius:60px;
              }
              .b:hover{
                color:yellow;
              }

            

          </style>


            

        </div>
        <a class="b" href="{{route('tienda')}}">Menú Principal</a>
      </div>
    </nav>

    <style>
      input {
        width: 230px;
        padding: 5px;
      }
      .confondo {
        background-color: rgb(243, 247, 250);
        border-radius: 5px;
        color:rgb(19, 20, 22);
        
      }
      ::placeholder{
        color:rgb(204, 201, 201);
        font-family:Arial, Helvetica, sans-serif;
      }
      .letra1{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .botonIni{
          width: 130px;
          border-radius: 5px;
          background: rgba(16, 179, 79, 0.774);
          padding: 10px;
          color:rgb(255, 255, 255);
          text-decoration: none;
          margin-left: 20px
        }
        .botonIni:hover{
          color:rgb(219, 204, 204);
        }
        .alert{
        opacity: 0;
        transition: opacity 0.5s;
        }
        .show{
        opacity: 1;
        }
    </style>

  <div class="container"></div>
      <div class="row">
        
        <div class="col">
          <div class="tarjeta ">
            <div class="titulo text-center ">Iniciar Sesión</div>
              <div class="cuerpo">
                  <form  class="form1"action ="#" method="POST" id="" >
                      <div class="col-md-8" >
                          <label class="letra1" for="usuario">
                                Nombre Usuario:
                          </label>
                          <input class="confondo" type="text" name="usuario" id="usuario"  placeholder="Usuario">                 
                          <br>
                      </div>
                      <div class="col-md-8 ">
                          <label  class="letra1" for="password">
                              Contraseña:
                          </label>
                          <input class="confondo"  type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
                      </div><br>
                          <div class="col-md-9">
                            <a href="" class="botonIni  letra1 text-center">Iniciar Sesión</a>   
                        </div>
                  </form>
              </div>   
         </div>
        </div>

      
      </div>
      <div class="col">
        <div class="tarjeta1">
          <div class="titulo text-center ">¿Aún no tienes cuenta? </div>
          <div class="cuerpo1">
           
              <form  class="form1"action ="{{route('clientes.store1')}}" method="POST" id="" >
                @csrf 
                @method('POST')
            <style>
              input {
                width: 250px;
                padding: 5px;
              }
              .confondo {
                background-color: rgb(243, 247, 250);
                border-radius: 5px;
                color:rgb(19, 20, 22);
                
              }
              ::placeholder{
                color:rgb(204, 201, 201);
                font-family:Arial, Helvetica, sans-serif;
              }
              .letra1{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                }
                .botonIni{
                  width: 130px;
                  border-radius: 5px;
                  background: rgba(16, 179, 79, 0.774);
                  padding: 10px;
                  color:rgb(255, 255, 255);
                  text-decoration: none;
                  margin-left: 20px
                }
                .botonIni:hover{
                  color:rgb(219, 204, 204);
                }
                .letra2{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                color: rgb(102, 102, 177);
                font-size: 20px; 
                padding: 0 0 0 15px
              }
            </style>
          
                  <div class="col-md-8" >
                    <p class="letra2">Regístrate</p>
                      <label class="letra1" for="usuario">
                          Nombres:
                      </label>
                      <input class="confondo" type="text" name="nombre" id="nombre"  placeholder="Usuario">
                  </div> 
                  <div class="col-md-8 ">
                      <label  class="letra1" for="apellidos">
                          Apellidos:
                      </label>
                      <input class="confondo"  type="text" name="apellido" id="apellido" placeholder="Ingrese sus apellidos" >
                 </div>

                  <div class="col-md-8 ">
                    <label  class="letra1" for="password">
                        Teléfono:
                    </label>
                    <input class="confondo"  type="text" name="telefono" id="telefono" placeholder="Ingrese sus telefono o celular" >
                </div>

                <div class="col-md-8 ">
                  <label  class="letra1" for="email">
                      Correo:
                  </label>
                  <input class="confondo"  type="text" name="email" id="email" placeholder="Ingrese su e-mail" >
              </div>

              <div class="col-md-8 ">
                <label  class="letra1" for="password">
                    Contraseña:
                </label>
                <input class="confondo"  type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" >
            </div>

                  <br>
                  <div class="col-md-8">
                    <!--<a href="" class="botonIni  letra1 ">Registrarme</a> -->     
                    
                    
                    <button type="submit" class="btn btn-sm btn-success float-right"onclick="pregunta()";> 
                      <i class="fa fa-save"></i>
                      &nbsp;
                      Guardar
                    </a>
                  </div>
                    </form>
           
          </div>
        </div>

      </div>
   <script>
   function pregunta(){  
    swal({
      title: "Registrado exitosamente!",
      text: "Redireccionando in 2 segundos.",
      type: "success",
      timer: 2000,
      showConfirmButton: false
    }, function(){
          window.location.href = "/";
    });
         } 
   </script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />

  <section class="news">
    
    <div class="container py-5">
      
          <div class="col-lg-8 m-auto text-center">
           
            <h1 class="letraabajo">CalzadoManía</h1>
            <h1 class="letra2">Atención al cliente</h1>
            <p> De Lunes a Sábados en el horario de 09:00hs a 19:00hs y Domingos de 10:00hs a 16:00hs</p>
            <textarea name="comentarios" rows="7" cols="83" placeholder="Esciba aquí su consulta o reclamo"></textarea>
            <h1 class="letra2 align-left">Su correo:</h1>   <input type="email" class="col-lg-9 m-auto text-left" placeholder="Ingrese su correo">
         <br><br>
            <button class="btn2">Enviar</button>
          </div>
        </div>
        
     
</section>    
  </body>
</html>