<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotyAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
</head>
<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
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
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>

          <section id="banner">

            <div>
               <h1>BIENVENIDOS</h1>
               <a href="" class="btn btn-info">Conoce más</a> 
            </div>

          </section>

    </header>
    
    <main>
      
        <div class = "container-fluid mt-5 mb-5">
            <div class ="row">
                <div class = "col-6">
                    <img src="imagen2.png" alt="imagen2" class= "img-fluid w-100">
                </div>

                <div class = "col-6 p-5">
                    <form class="border p-5" action="index.php#formulario" method = "POST" id ="formulario">
                        <h3>Calcula tu IMC</h3>
                        <div class="mb-3">
                            <label  class="form-label">Peso en Kg</label>
                            <input type="number" class="form-control" name="peso" step="any">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Altura en mtrs</label>
                            <input type="number" class="form-control" name="estatura" step="any">
                        </div>
                        
                            <button type="submit" class="btn btn-primary" name="botonCalcular">Calcula</button>
                    </form>

                    <?php
                    
                    if(isset($_POST["botonCalcular"])){

                        $peso = $_POST["peso"];
                        $estatura = $_POST["estatura"];

                        $imc = $peso / ($estatura*$estatura);

                        //echo ("Su imc es = ".$imc);

                        if($imc < 18.5){

                            echo ("Su peso es insuficiente");

                        }else if ($imc >= 18.5 && $imc < 24.9){

                            echo ("Su peso es normal");
                        }
                        else if ($imc >= 24.9 && $imc < 26.9){

                          echo ("Sobrepeso grado I");
                        }
                        else if ($imc >= 26.9 && $imc < 29.9){

                          echo ("Sobrepeso grado II (preobesidad)");
                        }
                        else if ($imc >= 29.9 && $imc < 34.9){

                          echo ("Obesidad de tipo I");
                        }
                        else if ($imc >= 34.9 && $imc < 39.9){

                          echo ("Obesidad de tipo II");
                        }
                        else if ($imc >= 39.9 && $imc < 49.9){

                          echo ("Obesidad de tipo III (Morbida)");
                        }
                        else if ($imc >= 49.9 ){

                          echo ("Obesidad de tipo IV (extrema)");
                        }
                        
                    }
                    
                    ?>
                </div>
            </div>
        </div>

    </main>



    <footer class ="fondoFooter">
        <div class ="container-fluid">
            <div class ="row">
                <div class = "col-6 p5 text-end text-white mt-3">
                    <p>Jhon Jairo Sanchez &copy;</p>
                    <p>Medellín - Colombia</p>
                    <p>2021</p>
                </div>
                <div class="col-6 p5 text-white border-start mt-3">
                    <a href=""><i class="fab fa-linkedin fa-3x "></i></a>
                    <a href=""><i class="fab fa-facebook-f fa-3x"></i></a>
                    <p>iroh314@gmail.com</p>
                </div>
            </div>
        </div>

    </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 
</body>
</html>