<?php

include 'conexao.php';

$buscar_cliente = "SELECT id, nome, cpf, datan, fone, email FROM CLIENTE";
$quiery_cliente = mysqli_query($connx, $buscar_cliente);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Main tec</title>
    <style>
    #main{
      background-color: #2c2c2c;
    }
    .navbarone {
      background-color: #2c2c2c;/*cor do fundo*/
      padding: 1rem;/*preenchimento do tamanho da font (1rem) */
      position: sticky;/*mantem a posicao do nav fixo na pagina*/
      top: 0;/*altura totalmente em cima da pagina*/
      box-shadow: 10px 0px 10px #2c2c2c;/*sombra*/
      z-index: 99;/*PARA SOBREPOSICAO | EIXOS X, Y e Z, sendo que Z é profundidade, dando aspecto em 3D*/
    }
    .navbaronefoother{
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
    .divmar{
    margin-top: 40px;
    margin-bottom: 100px;
    margin-left: 50px;      
    }
    .smallinput {
      width: 50px;
      height: 5px;
    }
    .butone{
      margin-left: 90px;
    }
    .inp{
      margin-right: 50px;
      margin-left: 50px;
    }
    .but{
      margin-left: 50px;
    }
    .lab{
      margin-right: 15px;      
    }
    .cpf{
      margin-right: 10000px;
    }
    .divlab{
      margin-bottom: 150px;
      box-sizing: border-box;
    }
    @media (max-width: 768px){
      #divlab{
        margin-bottom: 1  120px;        
      }
      #bcadcli{
        margin-left: 145px;
        margin-top: 15px;       
      }
      #table{
        margin-left: 20px;        
      }
      #pesq{
        margin-right: 15px;
      }
      #excloi{
        margin-right: 15px;
      }      
    }
    section{
      height: 100vh;
    }
    .botoes{
      margin-top: 20px;
      margin-left: 590px;
    }
    #save{
      margin-left: 20px;
    }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbarone navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid row">
          <a href="index.php" class="text-center">
            <img src="img/logo.png" alt="Logo">
          </a>
        </div>
      </nav>    
      <nav class="navbartwo navbar-expand-lg bg-body-tertiary shadow row">
        <div class="container-fluid text-center">
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center" style="margin:auto;">
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
        <div class="row justify-content-center align-items-center divmar">
          <form action="pesquisaCliente.php" method="POST" class="col-md-6">
            <div class="input-group" id="divlab">
              <label for="nome" class="form-label lab">Clientes:</label>
              <input type="text" id="nome" class="form-control inp" name="Pesquisar">
              <button type="submit" id="pesq" class="btn btn-primary but rounded-start" onclick="exibirMensagem()">Pesquisar</button>
            </div>
          </form>
          <div class="col-md-6 " id="bcadcli">
            <a href="cadastraCliente.php" class="btn btn-success">Cadastrar clientes</a>                    
          </div>
        </div>        
        <div class="row justify-content-around">
          <div  class="col-md-9">
              <table id="table" class="table table-striped">
                  <thead>
                    <tr>
                      <th class="col-md-1">Id</th>
                      <th class="col-md-3">Nome</th>
                      <th class="col-md-2">CPF</th>
                      <th class="col-md-2">Data de nascimento</th>
                      <th class="col-md-2">Telefone</th>
                      <th class="col-md-1">Email</th>
                      <th class="col-md-3">Interações</th>                      
                    </tr>
                  </thead>                  
                  <tbody>
                    <?php
                    //WHILE == REPETE - faça enquanto tiver
                    //Busca os dados do SELECT
                    while($receber_cliente = mysqli_fetch_array($quiery_cliente))
                    {
                      $id = $receber_cliente['id'];
                      $nome = $receber_cliente['nome'];
                      $cpf = $receber_cliente['cpf'];
                      $datan = $receber_cliente['datan'];
                      $fone = $receber_cliente['fone'];
                      $email = $receber_cliente['email'];
                    ?>
                    <tr class="table-active col-2">
                      <td colspan="1"><?php echo $id?></td>
                      <td colspan="1"><?php echo $nome; ?></td>
                      <td colspan="1"><?php echo $cpf; ?></td>
                      <td colspan="1"><?php echo $datan; ?></td>
                      <td colspan="1"><?php echo $fone; ?></td>
                      <td colspan="1"><?php echo $email; ?></td>                      
                      <td colspan="1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#n<?php echo $receber_cliente['id']; ?>">
                          Editar
                        </button>
                      </td>
                      <!-- Modal -->
                      <div class="modal fade" id="n<?php echo $receber_cliente['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">                        
                              <h4 class="modal-title">Editando cadastro <?php echo $receber_cliente['id']; ?></h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                        
                            </div>                        
                            <div class="modal-body">
                              <form action="updatecliente.php" method="POST">                            
                                <input type="hidden"    name="id"     value="<?php echo $receber_cliente['id']; ?>">
                                Nome:                 <input type="text"   class="form-control" name="nome"   value="<?php echo $receber_cliente['nome']; ?>" required>
                                CPF:                  <input type="cpf"    class="form-control" name="cpf"    value="<?php echo $receber_cliente['cpf']; ?>" minlength="10" maxlength="14" OnKeyPress="formatarCpfDtnascimento('###.###.###-##', this)">
                                Data de nascimento:   <input type="text"   class="form-control" name="datan"  value="<?php echo $receber_cliente['datan']; ?>" minlength="10" maxlength="10" pattern="\d{2}/\d{2}/\d{4}" OnKeyPress="formatarCpfDtnascimento('##/##/####', this)">
                                Telefone:             <input type="text"   class="form-control" name="fone"   value="<?php echo $receber_cliente['fone']; ?>" minlength="10" maxlength="15" OnKeyPress="formatarFone('##-####-####', this)">
                                Email:                <input type="email"  class="form-control" name="email"  value="<?php echo $receber_cliente['email']; ?>" onclick="validarEmail">
                                <div class="botoes">
                                  <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Fechar</button>    
                                  <input type="submit"  class="btn btn-success" id="save"              value="Salvar" >
                                </div>
                              </form>                      
                            </div>                            
                            <div class="modal-footer">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <td>
                        <form action="deleteCliente.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <input type="submit" id="excloi" value="Excluir" class="btn btn-danger">
                        </form>                      
                      </td>
                    </tr>
                    <?php };?>
                  </tbody>
              </table>
          </div>
        </div>
      </section>
    </main>
    <footer class="mt-5 navbaronefoother">
        <div class="container d-flex justify-content-around">
            <p id="priv">Criado por Alisson Lavoratti da Conceição, 2023.</p>
            <a href="">Privacidade</a><a href="Termos"></a>
            <a href="">Termos de uso</a><a href="Termos"></a>
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
        </div>
    </footer>    
    <script>
        function exibirMensagem() {
          alert("Cliente não localizado");
          history.back();
        }
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
    <script src="https://kit.fontawesome.com/019729c1b5.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
  </body>
</html>