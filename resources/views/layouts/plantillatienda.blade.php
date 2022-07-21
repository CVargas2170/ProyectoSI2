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
   
   
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <title>Tienda de Zapatos </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="{{route('tienda')}}">CalzadoManía</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
 
          </ul>
      <!--    <form class="d-flex">
            <input class=" px-4 search" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn0 " type="submit">Buscar</button>
          </form>-->
            <style>
              .b{
              height: 30px;
              margin-right: -3cm;
              width: 140px;
              border:none;
              padding: 3px 7px 20px 25px;
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

            .b1{
              height: 30px;
              width: 170px;
              margin-right: -2cm  ;
           
              border:none;
              padding: 5px 15px 10px 18px;
              outline: none;
              background-color: rgb(243, 36, 181);
              color: white;
              font-weight: 700;
              text-decoration: none;
              border-radius:60px;
            }
            .b1:hover{
              color:yellow;
            }

            .b2{
              height: 30px;
              width: 170px;
              margin-right: -2cm  ;
           
              border:none;
              padding: 5px 15px 10px 18px;
              outline: none;
              background-color: rgb(43, 33, 187);
              color: white;
              font-weight: 700;
              text-decoration: none;
              border-radius:60px;
            }
            .b2:hover{
              color:yellow;
            }

            
          

            .b3{
              height: 30px;
              width: 170px;
              margin-right: -2cm  ;
           
              border:none;
              padding: 5px 15px 10px 18px;
              outline: none;
              background-color: rgb(12, 12, 12);
              color: white;
              font-weight: 700;
              text-decoration: none;
              border-radius:60px;
            }
            .b3:hover{
              color:yellow;
            }
              </style>
           @yield('menu')
        </div>
      
        <form class="d-flex">
          <!-- <input class=" px-2 search" type="search" placeholder="Buscar" aria-label="Search">-->
          @yield('iconousuario')

          </form>
      </div>
    </nav>
  
    @yield('content')

  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>