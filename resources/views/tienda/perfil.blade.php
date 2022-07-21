<?php
   session_start();
 if((!isset($nombre)) && (!isset($cerrar))){
   $estado = false;
 }else{
      if((($nombre != null)) && (!isset($cerrar))){
      
        $_SESSION['nombre'] =$nombre;
        $_SESSION['ID'] =$id;
        $estado = true;
       }else{
        if(isset($cerrar)){
          session_unset();
        session_destroy();
        $estado = false; 
  
        }
       }
      }        

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />

    <meta name="csrf-token" content="{{ csrf_token() }}">

 


    <title>CalzadoManía</title>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @livewireStyles
    @livewireScripts
    <!-- CSS only -->
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
    <!--Fuentes-->
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
    <!--*********************************************************************************************************************************************************************-->



 



  

    <link rel="stylesheet" href="{{secure_asset('css/oficial.css')}}">

    <link rel="stylesheet" href="css/oficial.css ">
  </head>

  <body>
   
    <header class=" header-altura container-fluid  position-sticky top-0">
    <ul class="nav nav-pills mb-3 py-3  " id="pills-tab" role="tablist">
      <a class="navbar-brand " href="{{route('tienda')}}">CalzadoManía</a>
      <li class="nav-item" role="presentation">        
        <a class="nav-link active" id="pills-principal-tab" data-bs-toggle="pill" data-bs-target="#pills-principal" type="button" role="tab" aria-controls="pills-principal" aria-selected="true">Principal</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link " id="pills-hombres-tab" data-bs-toggle="pill" data-bs-target="#pills-hombres" type="button" role="tab" aria-controls="pills-hombres" aria-selected="false">Hombres</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link " id="pills-mujeres-tab" data-bs-toggle="pill" data-bs-target="#pills-mujeres" type="button" role="tab" aria-controls="pills-mujeres" aria-selected="false">Mujeres</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-carrito-tab" data-bs-toggle="pill" data-bs-target="#pills-carrito" type="button" role="tab" aria-controls="pills-carrito" aria-selected="false">Carrito</a>
      </li>
      <li class="nav-item"  role="presentation">
        <a class="nav-link" id="pills-perfil-tab" data-bs-toggle="pill" data-bs-target="#pills-perfil" type="button" role="tab" aria-controls="pills-perfil" aria-selected="false">Perfil</a>      
      </li>
        <li class="nav-item" role="presentation">   
        <a class="nav-link" href="{{route('salir')}}">SALIR</a>
        </li>
      </ul>
  

  </header>
  
 
  <div class="alert container position-sticky top-0 alert-primary welcome" role="alert" id ="mydiv">
    <div class="row ">
      <div class="col">
        Has iniciado sesión correctamente <?php  echo $nombre ?>
      </div>
      <div class="col ">
        <button  class="btn btn-primary boton_bienvenida"onclick="desaparecer()">Aceptar</button>
      </div>
    </div>
   </div> 
 

  <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Calzado añadido al carrito
  </div>
  <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
    Calzado removido del carrito!
  </div>

    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade " id="pills-principal" role="tabpanel" aria-labelledby="pills-principal-tab">

  

          <section class="main">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-7 pt-5 text-center">
                      <h1 class="text-danger">La moda </h1>     
                      <h1 class="h0 text-light"> caduca,</h1>  
                      <h1 class="text-primary"> el estilo</h1>
                      <h1 class="text-light"> jamás</h1>                 
                      <!--<button class="btn1 mt-3"></button> -->
                    </div>
                </div>
            </div>
        </section>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            @forelse ($promociones as $promocion)
            <li type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{$promocion->id}} class="@if($loop->index ==0) active @endif"></li>
            @empty            
            @endforelse
          </ol>
      
          <div class="carousel-inner">
            @forelse($promociones as $promocion)
          
            <div class="carousel-item  @if($loop->index ==0) active @endif" data-bs-interval="2000">
              <img src="./img/carrusel/{{$promocion->imagen}}" class="d-block w-100 imagen_carrusel" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$promocion->descuento}}%</h5>
                <p>{{$promocion->descripcion}}</p>
              </div>
            </div>
         
            @empty            
            @endforelse
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

   
          <div class=" container py-5">
            <div class="row ">
                <div class="col-lg-5 m-auto text-center">
                  <label class="fuente3" href="#">Calzados destacados</label>
                    <h6 style="color:red;"> Casuales</h6><br>
                </div>
            </div>
              <div class="row">
                @foreach ($calzados as $calzado)
                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">
                    <div class="card-body">
                      <img src="./img/promocion/{{$calzado->imagen}}" class=" imagen_fija img-fluid img-thumbnail" alt="" >
                    </div>
                  </div>
                  <h6  class="id" style ="visibility:collapse; display:none;">{{$calzado->id}}</h6>
                  <h6 class= "marca"> {{$calzado->marca}}</h6>
                  <h6 class= "detalle"> {{$calzado->detalle}}</h6>
                  <h5 class=" precio text-primary ">Bs. {{$calzado->precio}}</h5>
                  {{--<p>Bs. {{$calzado->precio}}</p>--}}
                  <?php
                  $carpeta = "promocion";
                  ?>
                        <!--<a type ="button" class="btn btn-success" href="{{route('listarcalzado',['id' =>$calzado->id ,'carpeta'=>$carpeta] )}}">Agregar Carrito</a>-->
                    <button class="btn btn-success button" id="AgregarCarrito"
                    data-id={{$calzado->id}}
                    data-marca={{$calzado->marca}}
                    data-detalle={{$calzado->detalle}}
                    data-precio={{$calzado->precio}}
                    data-imagen= {{$calzado->imagen}}
                    data-carpeta = {{$carpeta}}
                    >Agregar Carrito</button>              
                </div>
                @endforeach
             </div>
           </div>
          
          <div class="container py-3">
              <div class="row">
                  <div class="col-lg-5 m-auto text-center">
                    <label class="fuente2" href="#">Para mujeres</label>
                      <h6 style="color:red;"> Destacados</h6><br>
                  </div>
              </div>
              <div class="row">
                @foreach ($calzados1 as $calzado1)
                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">
                      <img src="./img/womanh/{{$calzado1->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">
                      
                    </div>
                  </div>
                  <h6 class= "marca"> {{$calzado1->marca}}</h6>
                  <h6 class= "detalle"> {{$calzado1->detalle}}</h6>
                  <h6  class="id" style ="visibility:collapse; display:none;">{{$calzado1->id}}</h6>
                  <h5 class="precio text-primary">Bs. {{$calzado1->precio}}</h5>
                  <?php
                  $carpeta = "womanh";
                  ?>
            <button class="btn btn-success button" id="AgregarCarrito"
            data-id={{$calzado1->id}}
            data-marca={{$calzado1->marca}}
            data-detalle={{$calzado1->detalle}}
            data-precio={{$calzado1->precio}}
            data-imagen={{$calzado1->imagen}}
            data-carpeta = {{$carpeta}}
            >Agregar Carrito</button> 
                </div>
                @endforeach
              </div><br>
            
          </div>
          <div class="container py-3">
              <div class="row ">
                  <div class="col-lg-5 m-auto text-center">
                    <label class="fuente1" href="#">Para Varones</label>
                      <h6 style="color:red;"> Destacados</h6><br>
                  </div>
              </div>
              <div class="row">
                @foreach ($calzados2 as $calzado2)
                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">
                    <div class="card-body">
                      <img src="./img/homeh/{{$calzado2->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">            
                    </div>
                  </div>
                  <h6  class="id" style ="visibility:collapse; display:none;">{{$calzado2->id}}</h6>
                  <h6 class= "marca"> {{$calzado2->marca}}</h6>
                  <h6 class= "detalle"> {{$calzado2->detalle}}</h6>
                  
                  <h5 class="precio text-primary">Bs. {{$calzado2->precio}}</h5>
                  <?php
                  $carpeta = "homeh";
                  ?>
                   <button class="btn btn-success button" id="AgregarCarrito"
                   data-id={{$calzado2->id}}
                   data-marca={{$calzado2->marca}}
                   data-detalle={{$calzado2->detalle}}
                   data-precio={{$calzado2->precio}}
                   data-imagen={{$calzado2->imagen}}
                   data-carpeta = {{$carpeta}}
                   >Agregar Carrito</button> 

                </div>
                @endforeach            
            </div>
            <br>
          </div>
        </div>
      <div class="tab-pane fade " id="pills-hombres" role="tabpanel" aria-labelledby="pills-hombres-tab">
        <div class="container py-5">
          <div class="row">
              <div class="col-lg-5 m-auto text-center">
                <label class="fuente1" >Para Varones</label>
                  <h6 style="color:red;"> Destacados</h6>
              </div>
          </div>
           <div class="row">
      
            @foreach ($hombres as $hombre)
           
            <div class="col-lg-3 text-center">
              <div class="card border-0 bg-light mb-2">
                <div class="card-body">
                  <img src="./img/man/{{$hombre->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">            
                </div>
              </div>
              <h6 class= "marca"> {{$hombre->marca}}</h6>
              <h6  class="id" style ="visibility:collapse; display:none;">{{$hombre->id}}</h6>
              <h6 class= "detalle"> {{$hombre->detalle}}</h6>
              <h5 class="precio text-primary">Bs. {{$hombre->precio}}</h5>
              <?php
              $carpeta = "man";
              ?>
                <button class="btn btn-success button" id="AgregarCarrito"
                data-id={{$hombre->id}}
                data-marca={{$hombre->marca}}
                data-detalle={{$hombre->detalle}}
                data-precio={{$hombre->precio}}
                data-imagen={{$hombre->imagen}}
                data-carpeta = {{$carpeta}}
                >Agregar Carrito</button>   
                <br>    <br>    <br>    <br>
            </div>
            @endforeach
          </div>
        </div>
          <br>
          <div class="container ">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                  <label class="fuente1" href="#">Para Niños</label>
                    <h6 style="color:red;"> Destacados</h6>
                </div>
            </div>
             <div class="row">
        
              @foreach ($niños as $niño)
             
              <div class="col-lg-3 text-center">
                <div class="card border-0 bg-light mb-2">
                  <div class="card-body">
                    <img src="./img/kidman/{{$niño->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">            
                  </div>
                </div>
                <h6  class="id" style ="visibility:collapse; display:none;">{{$niño->id}}</h6>
                <h6 class="marca"> {{$niño->marca}}</h6>
                <h6 class= "detalle"> {{$niño->detalle}}</h6>
                
                <h5 class="precio text-primary">Bs. {{$niño->precio}}</h5>
                <?php
                $c= $niño; 
                $carpeta = "kidman";
                ?>
                  <button class="btn btn-success button" id="AgregarCarrito"
                  data-id={{$hombre->id}}
                  data-marca={{$hombre->marca}}
                  data-detalle={{$hombre->detalle}}
                  data-precio={{$hombre->precio}}
                  data-imagen={{$hombre->imagen}}
                  data-carpeta = {{$carpeta}}
                  >Agregar Carrito</button>  
               <br>    <br>    <br>    <br>
              </div>
              @endforeach
            </div>
            <br>
          </div>   
      </div>
      <div class="tab-pane fade " id="pills-mujeres" role="tabpanel" aria-labelledby="pills-mujeres-tab">
        <div class="container py-5">
          <div class="row">
              <div class="col-lg-5 m-auto text-center">
                <label class="fuente2" href="#">Para mujeres</label>
                <h6 style="color:red;"> Destacados</h6>
              </div>
          </div>
           <div class="row">
      
            @foreach ($mujeres as $mujer)
           
            <div class="col-lg-3 text-center">
              <div class="card border-0 bg-light mb-2">
                <div class="card-body">
                  <img src="./img/woman/{{$mujer->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">            
                </div>
              </div>
              <h6 class="marca"> {{$mujer->marca}}</h6>
              <h6  class="id" style ="visibility:collapse; display:none;">{{$mujer->id}}</h6>
              <h6 class="detalle"> {{$mujer->detalle}}</h6>
              <h5 class="precio text-primary">Bs. {{$mujer->precio}}</h5>
              <?php
              $carpeta = "woman";
              ?>
                <button class="btn btn-success button" id="AgregarCarrito"
                data-id={{$mujer->id}}
                data-marca={{$mujer->marca}}
                data-detalle={{$mujer->detalle}}
                data-precio={{$mujer->precio}}
                data-imagen={{$mujer->imagen}}
                data-carpeta = {{$carpeta}}
                >Agregar Carrito</button>   
                <br>    <br>    <br>    <br>
            </div>
            @endforeach
          </div>
        </div>
        <div class="container py-5">
          <div class="row">
              <div class="col-lg-5 m-auto text-center">
                <label class="fuente2" href="#">Para niñas</label>
                <h6 style="color:red;"> Destacados</h6>
              </div>
          </div>
           <div class="row">
      
            @foreach ($niñas as $niña)
           
            <div class="col-lg-3 text-center">
              <div class="card border-0 bg-light mb-2">
                <div class="card-body">
                  <img src="./img/kidwoman/{{$niña->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">            
                </div>
              </div>
              <h6 class="marca"> {{$niña->marca}}</h6>
              <h6 class="id" style ="visibility:collapse; display:none;">{{$niña->id}}</h6>
              <h6 class="detalle"> {{$niña->detalle}}</h6>
              <h5 class="precio text-primary">Bs. {{$niña->precio}}</h5>
              <?php
              $carpeta = "kidwoman";
              ?>
                <button class="btn btn-success button" id="AgregarCarrito"
                data-id={{$niña->id}}
                data-marca={{$niña->marca}}
                data-detalle={{$niña->detalle}}
                data-precio={{$niña->precio}}
                data-imagen={{$niña->imagen}}
                data-carpeta = {{$carpeta}}
                >Agregar Carrito</button>   
                <br>    <br>    <br>    <br>
            </div>
            @endforeach
          </div>
        </div>

      </div>
      <div class="tab-pane fade carrito" id="pills-carrito" role="tabpanel" aria-labelledby="pills-carrito-tab">
        <h3 class="fuente3"> Lista de calzados</h3><br>

        <table class="table table-dark table-striped t">
      
            <thead>
              <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Calzado</th>
                <th style="visibility: collapse; display:none" scope ="col">ID</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            <tbody class="CarritoCompras text-center" id="tabla-calzados">
              <tr >
                            
              </tr>           
            </tbody>      
        </table>
        <br><br>
        <div class="row mx-4">
          <div class="col">
            <h3 class="itemCartotal">Total: 0</h3>
          </div>
          <div class="col d-flex justify-content-end">
            <button class="btn btn-success">Comprar</button>
          </div>
        </div>

      </div>
  
      <div class="tab-pane fade show active" id="pills-perfil" role="tabpanel" aria-labelledby="pills-perfil-tab">  
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Cuenta</h2>
          </div>
        </div><br>
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
              <div class="list-group ">
                <div class="card-header">Cuenta</div><br>
                <h6 class="card-title">Información del contacto</h6>
                <div class="card-body">
                  <label>Nombre del cliente</label>
                  <p class="card-text">   {{$cliente->nombre}}  {{$cliente->apellido}}  </p>   
                  <label>Correo electrónico del cliente</label>
                  <p class="card-text">   {{$cliente->email}}  </p>  
                  <label>Teléfono de contacto del cliente</label>
                  <p class="card-text">   {{$cliente->telefono}}  </p>
                </div>
           
            </div>
          </div>
          <div class="col-sm-5">
            Notificaciones

          </div>
          <div class="col-sm-5">
            <h4 class="card-title">Chat</h4>
            <div class="card" >
              <div class="card-body">      
                @livewire('chat-list', ['id' => $id])
                @livewire('chat-form', ['id' => $id])
                
               
              </div>
            </div>
          </div>
        </div>
        
      

      </div>
    
    </div>
     
  </div>
     <footer class="bg-dark p-3 mt-5">
        <p class=" navbar-brand text-center m-0 text-muted ">
          CalzadoManía
        </p>
     </footer>

     <script src="https://code.jquery.com/jquery-3.6.0.js" 
     integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
     crossorigin="anonymous"></script>

 <!--     <script src="https://cdnjs.cloudflare.com/ajax/lisb/jquery/3.2.1/jquery.js"></script>


     <script src="https://cdnjs.cloudflare.com/ajax/lisb/jquery/3.2.1/jquery.js"></script>
>>>>>>> 5ffede569412badfc308fb417679ed4f2487ae3c

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>





 


    <script src="js/scripts.js"></script>
  </body>
</html>

