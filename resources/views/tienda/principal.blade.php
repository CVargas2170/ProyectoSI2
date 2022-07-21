
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>CalzadoManía</title>
     

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
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

   
 

    <link rel="stylesheet" href="{{asset('css/s1.css')}}">
    <link rel="stylesheet" href="{{asset('css/oficial.css')}}">
    <link rel="stylesheet" href="css/oficial.css">

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

      
      <li class=" nav-item"  role="presentation">
        <a class="nav-link" id="pills-iniciosesion-tab" data-bs-toggle="pill" data-bs-target="#pills-iniciosesion" type="button" role="tab" aria-controls="pills-iniciosesion" aria-selected="false">Inicio de Sesión</a>      </li>
    
      </ul>
  

  </header>

  <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Calzado añadido al carrito
  </div>
  <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
    Calzado removido del carrito!
  </div>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-principal" role="tabpanel" aria-labelledby="pills-principal-tab">
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
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            <tbody class="CarritoCompras text-center">
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
      </form>
      </div>
      <div class="tab-pane fade" id="pills-iniciosesion" role="tabpanel" aria-labelledby="pills-iniciosesion-tab">
        <div class="card bg-light text-dark">
          <img src="../img/img4.jpg" class="card-img" alt="...">
          <div class="card-img-overlay">
            <div class="row">
            <div class="col-sm-6">
              <h3 class="card-title nav-link1">Ya soy cliente</h3>
              <div class="card tarjeta__InicioSesion">
                <div class="card-body">
                  <div class="titulo text-center ">Inicia tu sesión aquí</div>
                  <h6 class="card-title text-center">Complete los campos</h6>
                  <form action ="{{route('loguear')}}" method="POST" id="" >
                    @csrf 
                  
                    <div class="input-group ">
                      <span class="input-group-text  col-sm-2" > Usuario</span>
                      <input type="text" aria-label="usuario" name="email" class="form-control">
                    </div>
                    <div class="input-group">
                      <span class="input-group-text col-sm-2 text-center">Password</span>
                      <input type="password" aria-label="password" name="password" class="form-control"> 
                    </div><br>
                  <div class="d-grid gap-2 d-md-flex  justify-content-md-center">
                    <button type ="submit"class="btn btn-primary">Ingresar</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <h3 class="card-title nav-link1">Soy cliente nuevo</h3>
              <div class="card tarjeta__Registro">
                <div class="card-body">             
                  <div class="titulo text-center ">Regístrate</div><br>
                  <h6 class="card-title text-center">Complete los campos</h6>
                  <form action ="{{route('clientes.store2')}}" method="POST" id="form" >

                  <form action ="{{route('clientes.store2')}}" method="POST" id="" >
                    @csrf 
                    @method('POST')
                    <div class="input-group ">
                      <span class="input-group-text  col-sm-2" >Nombres</span>
                      <input type="text" aria-label="usuario" name="nombre" class="form-control">
                    </div>
                    <div class="input-group">
                      <span class="input-group-text col-sm-2 text-center">Apellidos</span>
                      <input type="text" aria-label="password" name="apellido" class="form-control"> 
                    </div>
                    <div class="input-group">
                      <span class="input-group-text col-sm-2 text-center">Teléfono</span>
                      <input type="text" aria-label="password" name="telefono" class="form-control"> 
                    </div>                  
                    <div class="input-group">
                      <span class="input-group-text col-sm-2 text-center">Correo</span>
                      <input type="text" aria-label="password" name="email" class="form-control"> 
                    </div>
                    <div class="input-group">
                      <span class="input-group-text col-sm-2 text-center">Password</span>
                      <input type="password" aria-label="password" name="password" class="form-control"> 
                    </div><br>
                    
                  <div class="d-grid gap-2 d-md-flex  justify-content-md-center">
                    <button  type="submit"class="btn btn-primary">Registrarse</button>
                  </div>
                </form>
                </div>
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

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <!-- JavaScript Bundle with Popper -->
    <script
    
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
  </body>
</html>