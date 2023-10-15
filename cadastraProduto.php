<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Main tec</title>
    <style>
      main{
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      }
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
      position: sticky;/*mantem a posicao do nav fixo na pagina*/
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
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
    .divform{
      margin-top: 30px;
      margin-left: 70px;
      
    }
    .smallinput {
      width: 340px;      
    }
    .imp{
      margin-left: 5px;
    }
    .cli{
      margin-bottom: 50px;
    }
    .btn{
      margin-left: 10px;
    }
    section{
      height: 100%;
      margin-bottom: 416px;
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
      <nav class="navbartwo navbar-expand-lg bg-body-tertiary shadow row">
        <div class="container-fluid text-center">
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center" style="margin:auto;"> <!-- Adicionado estilo inline -->
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
        <div  class="row divform">
          <h4 class="cli"><span>Cadastro de produtos</span></h4>
          <form action="insertProdutoRealizado.php" method="POST">
              <label for="nome">Nome do produto:</label>
              <input class="smallinput" type="text" id="nomeProduto" name="nomeProduto" minlength="3" maxlength="30"><br><br>
          
              <label for="preco">Preço do produto:</label>
              <input class="smallinput imp" type="text" id="preco" name="preco" minlength="10" maxlength="15" onkeyup="formatarPrecoInput(this)"><br><br>
          
              <label for="mensagem">Descrição do produto:</label><br>
              <textarea id="descricao" name="descricao" rows="4" cols="63" minlength="10"></textarea><br><br>
          
              <input type="submit" class="btn btn-primary" value="Salvar">
              <button type="button" class="btn btn-danger" onclick="voltarPagina()">Voltar</button>
          </form>          
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
    <script>
function formatarPrecoInput(input) {
    var valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    var numero = parseInt(valor, 10); // Converte para número

    if (!isNaN(numero)) {
        var precoFormatado = (numero / 100).toLocaleString('pt-BR', {
            style: 'currency',
            currency: 'BRL'
        });

        input.value = precoFormatado;
    } else {
        input.value = ''; // Valor inválido, limpa o campo
    }
}
      function voltarPagina() {
        window.history.back(); // Esta função volta para a página anterior
      }
    </script>       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
  </body>
</html>