<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Maintec</title>
    <style>
    .navbarone {
        background-color: #2c2c2c;/*cor do fundo*/
        padding: 1rem;/*preenchimento do tamanho da font (1rem) */
        position: sticky;/*mantem a posicao do nav fixo na pagina*/
        top: 0;/*altura totalmente em cima da pagina*/
        box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
        z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .navbartwo {
        background-color: #2c2c2c;/*cor do fundo*/
        padding: 1rem;/*preenchimento do tamanho da font (1rem) */
        /*position: sticky;mantem a posicao do nav fixo na pagina*/
        top: 0;/*altura totalmente em cima da pagina*/
        z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
        box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/        
    }
    .carroceu{
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 98;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .margin{
      margin-top: 80px;        
    }
    .margincard{
      margin-bottom: 50px;
    }
    #priv{
      color: rgb(214, 214, 214);
    }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbarone navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid row">
          <a href="index.php" class="text-center">
            <img src="img/logo.png" alt="Logo">
          </a>
        </div>
      </nav>
      <nav class=" navbartwo navbar-expand-lg bg-body-tertiary shadow row">
        <div class="container-fluid text-center">
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-1 mb-lg-0 text-center" style="margin:auto;"> <!-- Adicionado estilo inline -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clientes.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produtos.php">Produtos</a>
              </li>
            </ul>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>
    <main>
      <section>
        <div id="carouselExample" class="carousel slide carousel-fade carroceu" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/cell.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/tv.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/gel.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <section>
        <div class="container-fluid margin">      
          <div class="row ">
            <div class="col-md-6 margincard">
              <div class="card mx-auto" style="width: 21rem;">
                <img src="img/cli.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Clientes MAINTEC</h5>
                  <p class="card-text">Acesse a página para consultar clientes MAINTEC já cadastrados e para cadastrar novos clientes</p>
                  <div class="card-body text-center">
                    <a href="clientes.html" class="btn btn-primary">Entrar</a>
                  </div>                  
                </div>
              </div>
            </div>          
            <div class="col-md-6 margincard">
              <div class="card mx-auto" style="width: 21rem;">
                <img src="img/pro.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Produtos MAINTEC</h5>
                  <p class="card-text">Acesse a página para consultar produtos MAINTEC já cadastrados e para cadastrar novos produtos</p>
                  <div class="card-body text-center">
                    <a href="produtos.html" class="btn btn-primary">Entrar</a>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>        
      </section>
      <section>
        <div class="container-fluid margin">      
          <div class="row justify-content-around">
            <div class="col-md-2 margincard">
              <div class="card mx-auto" style="width: 11rem;">
                <img src="img/imp.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Novidades</h5>                  
                  <div class="card-body text-center">
                    <a href="produtos.html" class="btn btn-primary">Entrar</a>
                  </div>                  
                </div>
              </div>
            </div>            
            <div class="col-md-2 margincard">
              <div class="card mx-auto" style="width: 11rem;">
                <img src="img/maisvend.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mais vendidos</h5>                  
                  <div class="card-body text-center">
                    <a href="produtos.html" class="btn btn-primary">Entrar</a>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="col-md-2 margincard">
              <div class="card mx-auto" style="width: 11rem;">
                <img src="img/garantia.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Garantias</h5>                  
                  <div class="card-body text-center">
                    <a href="produtos.html" class="btn btn-primary">Entrar</a>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="col-md-2 margincard">
              <div class="card mx-auto" style="width: 11rem;">
                <img src="img/NFE.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nota Fiscal</h5>                  
                  <div class="card-body text-center">
                    <a href="produtos.html" class="btn btn-primary">Entrar</a>
                  </div>                  
                </div>
              </div>
            </div>
          </div>          
        </div>       
      </section>
    </main>
    <footer class="mt-5 navbarone">
        <div class="container d-flex justify-content-around">
            <p id="priv">Criado por Alisson Lavoratti da Conceição, 2023.</p>
            <a href="">Privacidade</a><a href="Termos"></a>
            <a href="">Termos de uso</a><a href="Termos"></a>
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
        </div>
    </footer>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>