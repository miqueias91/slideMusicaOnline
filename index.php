<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Slide de Música Online</title>
  </head>
  <body>
    <style type="text/css"> 
      body {
        background-color: #f5f5f5;
      }
      main {
        width: 100%;
        height: 500px;       
        overflow: auto;
      }
      main .interno {
        background: #fff;
        padding: 20px;
        border-radius: 20px;
        transform: translate(-50%, -50%);
        position: absolute;
        top: 50%;
        left: 50%;
      }
      h1 {
        color: #111111;
        font-weight: bold;
        font-size: 1.5em;
        text-align: center;
      }
      @media (max-width: 800px) {
        main .interno {
          position: relative;
          margin: 15px;        
        }
        .buscar {
          margin-top: 10px;
          text-align: center;
        }
        .form-control {
          margin-bottom: 10px;
        }
      }
      
    </style>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light" style="background-color: #111111!important;">
      <div class="container">
        <a class="navbar-brand" href="#" style="color:#fff!important;font-weight: bold!important;">
          <img src="img/music-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
          SMO
        </a>    
      </div>
    </nav>
    <main class="row d-flex justify-content-center">
      <div class="interno">
        <h1>Slide de Música Online</h1> 
        <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-10">          
              <input class="form-control" type="text" id="pesquisa" placeholder="Pesquise uma música ou cantor...">
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-2 buscar"> 
              <button type="button" class="btn btn-outline-dark buscar_1">Buscar</button>
            </div>      
        </div> 

        <br>
        <h1>OU</h1>
        <br>

        <div id="">
          <div class="row">            
            <div class="col-xs-12 col-sm-12 col-md-5">          
              <input class="form-control" type="text" id="musica" placeholder="Nome da música...">
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-5">          
              <input class="form-control" type="text" id="cantor" placeholder="Nome do cantor...">
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-2 buscar"> 
              <button type="button" class="btn btn-outline-dark buscar_2">Buscar</button>
            </div>      
          </div> 
        </div>
        <br>
        <div id="resultado_busca"></div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/buscaLetra.js"></script>
  </body>
</html>