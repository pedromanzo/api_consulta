<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="uts-8">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/script.js"></script>
    <title> Consulta de Seguro </title>

  </head>
  <body>

<!-- Cabeçalho -->
    <div class="topo">
      <p> Seguro para Carro </p>
    </div>

<!-- Formulário -->

    <form method="get" action="http://www.speedyofficer.com.br/desenvVeiculos/wsRstSpeedyVeiculos_Case.dll/veiculo/marca">
      <div class="selec_car">
      <h1> Faça a sua cotação</h1>
      Selecione as informações do seu carro
        <p>
          <label>
            Marca
            <br>
            <select name="marca" id="marca" required>
              <option> Selecione a Marca </option>
              <option value="10"> Ford </option>
              <option value="20"> Volkswagen </option>
              <option valuer="30"> Chevrolet </option>
              <option valuer="40"> Fiat </option>
              <option valuer="50"> Hyundai </option>
            </select>
          </label>
        </p>
        <p>
          <div id="veiculo">
            <div id="10">
              <label>
                Veiculo
                <br>
                <select name="ford" id="ford">
                  <option> Selecione o veículo </option>
                  <option value="fusion"> Fusion </option>
                  <option value="ecoSport"> EcoSport </option>
                  <option value="ka"> KA </option>
                </select>
              </label>
            </div>
            <div id="20">
              <label>
                Veiculo
                <br>
                <select name="volkswagen" id="volkswagen">
                  <option> Selecione o veículo </option>
                  <option value="go"> Gol </option>
                  <option value="polo"> Polo </option>
                  <option value="up"> Up </option>
                </select>
              </label>
            </div>
            <div id="30">
              <label>
                Veiculo
                <br>
                <select name="chevrolet" id="chevrolet">
                  <option> Selecione o veículo </option>
                  <option value="onix"> Onix </option>
                  <option value="prisma"> Prisma </option>
                  <option value="cruze"> Cruze </option>
                </select>
              </label>
            </div>
            <div id="40">
              <label>
                Veiculo
                <br>
                <select name="fiat" id="fiat">
                  <option> Selecione o veículo </option>
                  <option value="uno"> Uno </option>
                  <option value="doblo"> Doblò </option>
                  <option value="mobi"> Mobi </option>
                </select>
              </label>
            </div>
            <div id="50">
              <label>
                Veiculo
                <br>
                <select name="hyundai" id="hyundai">
                  <option> Selecione o veículo </option>
                  <option value="tucson"> Tucson </option>
                  <option value="hb20"> HB20 </option>
                  <option value="creta"> Creta </option>
                </select>
              </label>
            </div>
          </div>
        </p>

        <div>
          <input type="submit" class="jabrirModal button" value="Consultar">
        </div>
      </div>
    </form>
    <!-- Modal -->
    <div class="jmodal modal">
      <a class="jfecharModal fecharModal" href="">X</a>
      <p class="textoModal">
        <h1>Solicitação de Seguro</h1>
        <form method="post" action="solicitacao.php">
          <label>
            Nome do Condutor
            <br>
            <input type="text" name="nome_condutor" id="nome_condutor" placeholder="Digite seu nome completo"size="50" maxlength="50" required>
          </label>
          <p>
            <label>
              Sexo
              <br>
          		<input type="radio" name="sexo" value="M"> M

          		<input type="radio" name="sexo" value="F"> F
          	</label>
          </p>
          <p>
            <label>
              Data de nascimento
              <br>
              <input type="date" name="data_nascimento" required>
            </label>
          </p>
          <p>
            <label>
              Metodo de pagamento
              <br>
              <select name="pagSeg" id="pagSeg" required>
                <option>Selecione a melhor opção</option>
                <option value="1x">1x de ...</option>
                <option value="2x">2x de ...</option>
                <option value="3x">3x de ...</option>
                <option value="4x">4x de ...</option>
                <option value="5x">5x de ...</option>
                <option value="6x">6x de ...</option>
                <option value="7x">7x de ...</option>
                <option value="8x">8x de ...</option>
                <option value="9x">9x de ...</option>
                <option value="10x">10x de ...</option>
                <option value="11x">11x de ...</option>
                <option value="12x">12x de ...</option>
              </select>
            </label>
          </p>
          <p>
            <button class="button">
              Solicitar
            </button>
      </p>
    </div>

    <!-- rodapé -->
    <div class="rodape">
      <footer>
        <p>Criado por Pedro Manzo - 2020</p>
      </footer>
    </div>
  </body>
</html>
