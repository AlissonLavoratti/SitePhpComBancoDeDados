<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Main tec</title>
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
      position: sticky;/*mantem a posicao do nav fixo na pagina*/
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .foother {
      background-color: #2c2c2c;/*cor do fundo*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/      
      padding: 1rem;/*preenchimento do tamanho da font (1rem) */
      position: sticky;/*mantem a posicao do nav fixo na pagina*/
      top: 0;/*altura totalmente em cima da pagina*/
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
      margin-bottom: 100px;    
    }
    .smallinput {
      width: 340px;      
    }
    .imp{
      margin-left: 3px;
    }
    .cli{
      margin-bottom: 50px;
    }
    .btn{
      margin-left: 10px;
    }
    .cpfimp{
      margin-left: 168px;
    }
    .dtnas{
      margin-left: 49px;
    }
    .fone{
      margin-left: 137px;
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
          <h4 class="cli"><span>Cadastro de clientes</span></h4>
          <form action="insertClienteRealizado.php" method="POST">
            <label for="nome">Nome:</label>
            <input class="smallinput" type="text" id="nome" name="nome" minlength="3" maxlength="30"><br><br>
            
            <label for="cpf">CPF:</label>
            <input class="cpfimp" type="cpf" id="cpf" name="cpf" minlength="14" maxlength="14" OnKeyPress="formatarCpfDtnascimento('###.###.###-##', this)"><br><br>
            
            <label for="dtnasc">Data de nascimento:</label>
            <input class="dtnas" type="text" maxlength="10" minlength="8" maxlength="8" id="datan" name="datan" OnKeyPress="formatarCpfDtnascimento('##/##/####', this)"><br><br>
            
            <label for="fone">Telefone:</label>
            <input class=" fone" type="text" maxlength="15" id="fone" name="fone" minlength="10" maxlength="11" OnKeyPress="formatarFone('##-####-####', this)"><br><br>
            
            <label for="email">Email:</label>
            <input class="smallinput imp" type="email" id="email" name="email" onclick="validarEmail"><br><br>          
            
            <input type="submit" class="btn btn-primary" value="Salvar">
            <button type="button" class="btn btn-danger" onclick="voltarPagina()">Voltar</button>
          </form>          
        </div>
      </section>
    </main>
    <footer class="mt-5 foother">
      <div class="container d-flex justify-content-around">
        <p id="priv">Criado por Alisson Lavoratti da Conceição, 2023.</p>
        <a href="">Privacidade</a><a href="Termos"></a>
        <a href="">Termos de uso</a><a href="Termos"></a>
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
      </div>
    </footer>
    <script>
      function formatarCpfDtnascimento(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)
      
      if (texto.substring(0,1) != saida){
        documento.value += texto.substring(0,1);
      }      
    }
    function formatarFone(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i);
    // Remove caracteres não numéricos do valor atual
    var valor = documento.value.replace(/\D/g, '');
      if (texto.substring(0, 1) != saida) {
      // Adiciona os parênteses com o novo número
      if (valor.length >= 2) {
        valor = '(' + valor.substring(0, 2) + ') ' + valor.substring(2);
      }
      // Adiciona traço após os primeiros 9 dígitos
      if (valor.length >= 10) {
        valor = valor.substring(0, 10) + '-' + valor.substring(10);
      }
      documento.value = valor + texto.substring(0, 1);
      }
    }
    function validarEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
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