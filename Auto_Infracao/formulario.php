<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.styl {
            margin: 30px 50px 30px 50px;
        }

        div.styl h2 {
            margin-bottom: 20px;
        }

        div.tab h6 {
            font-weight: bold;
        }

        label {
            font-weight: bold;
        }
    </style>
    <!-- CSS only -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="styl">
        <h2>AUTO DE INFRAÇÃO</h2>
    <form action="InserirInfracao.php" method="POST">

      <div class="form-group col-md-5">
        <label>TIPO:</label>
        <select name="autoInfracao" class="form-control">
        <option value="">Escolha uma Opção</option>
        <option value="ADVERTÊNCIA">ADVERTÊNCIA</option>
        <option value="MULTA SIMPLES">MULTA SIMPLES</option>
        <option value="MULTA DIÁRIA">MULTA DIÁRIA</option>
        <option value="APREENÇÃO">APREENÇÃO</option>
        <option value="DESTRUIÇÃO / INUTILIZAÇÃO">DESTRUIÇÃO / INUTILIZAÇÃO</option>
        <option value="SUSPENSÃO DE VENDAS / FABRICAÇÃO / ATIVIDADES">SUSPENSÃO DE VENDAS / FABRICAÇÃO / ATIVIDADES</option>
        </select>
      </div>

        <div class="form-group col-md-5">
          <label for="numero">NÚMERO:</label>
          <input type="text" class="form-control" id="inputproc" name="numero" placeholder="Preencha aqui">
        </div>

        <div class="form-group col-md-5">
          <label for="data">DATA:</label>
          <input type="text" class="form-control" id="inputproc" name="data" placeholder="Preencha aqui">
        </div>
        
        <div class="form-group col-md-5">
            <label for="nome_razaoSocial">NOME/RAZÃO SOCIAL:</label>
            <input type="text" class="form-control" id="inputproc" name="nome_razaoSocial" placeholder="Preencha aqui">
        </div>
        
        <div class="form-group col-md-2">
            <label for="cpf_cnpj">CPF/CNPJ:</label>
            <input type="text" class="form-control" id="inputpar" name="cpf_cnpj" placeholder="Preencha aqui">
        </div>
        
        
        
        <div class="form-group col-md-6">
          <label for="enderecoEmpreendimento">ENDEREÇO DO EMPREENDIMENTO:</label>
          <input type="text" class="form-control" id="inputvaltax" name="enderecoEmpreendimento" placeholder="Preencha aqui">
        </div>

        <div class="form-group col-md-2">
            <label for="municipio1">MUNICÍPIO:</label>
            <input type="text" class="form-control" id="inputAddress" name="municipio1" placeholder="Preencha aqui">
        </div>

        <div class="form-group col-md-1">
            <label for="uf1">UF:</label>
            <input type="text" class="form-control" id="inputCity" name="uf1" placeholder="Preencha aqui">
        </div>
        

        
        <div class="form-group col-md-7">
            <label for="areaEmpreendimento">ÁREA DO EMPREENDIMENTO:</label>
            <input type="text" class="form-control" id="inputAddress" name="areaEmpreendimento" placeholder="Preencha aqui">
        </div>

        <div class="form-group col-md-2">
            <label for="horario">HORÁRIO:</label>
            <input type="text" class="form-control" id="inputCity" name="horario" placeholder="Preencha aqui">
        </div>
        

        
        <div class="form-group col-md-5">
            <label for="coordenadasGeograficas">COORDENADAS GEOGRÁFICAS:</label>
            <input type="text" class="form-control" id="inputAddress" name="coordenadasGeograficas" value="DATUM SIRGAS 2000" disabled>
        </div>

        <div class="form-group col-md-2">
            <label for="latitude">LATITUDE:</label>
            <input type="text" class="form-control" id="inputCity" name="latitude" placeholder="Preencha aqui">
        </div>

        <div class="form-group col-md-2">
            <label for="longitude">LONGITUDE:</label>
            <input type="text" class="form-control" id="inputCity" name="longitude" placeholder="Preencha aqui">
        </div>
        

        <h5>PESSOA FÍSICA</h5>

        
          <div class="form-group col-md-3">
              <label for="municipio2">MUNICÍPIO:</label>
              <input type="text" class="form-control" id="inputproc" name="municipio2" placeholder="Preencha aqui">
          </div>
          
          <div class="form-group col-md-3">
              <label for="cep">CEP:</label>
              <input type="text" class="form-control" id="inputpar" name="cep" placeholder="Preencha aqui">
          </div>
  
          <div class="form-group col-md-2">
              <label for="uf2">UF:</label>
              <input type="text" class="form-control" id="inputvaltax" name="uf2" placeholder="Preencha aqui">
          </div>

          <div class="form-group col-md-2">
            <label for="telefone">TELEFONE:</label>
            <input type="text" class="form-control" id="inputAddress" name="telefone" placeholder="Preencha aqui">
          </div>
          
          
          
          <div class="form-group col-md-7">
            <label for="descricaoOcorrencia">DESCRIÇÃO DA OCORRÊNCIA:</label>
            <input type="text" class="form-control" id="inputCity" name="descricaoOcorrencia" placeholder="Preencha aqui">
          </div>
          
  
          
          <div class="form-group col-md-7">
              <label for="disposLegaisInfrigidos">DISPOSITIVOS LEGAIS INFRIGIDOS:</label>
              <input type="text" class="form-control" id="inputAddress" name="disposLegaisInfrigidos" placeholder="Preencha aqui">
          </div>
          

          
            <div class="form-group col-md-7">
              <label for="descrValorMulta">DESCRIÇÃO DO VALOR DA MULTA:</label>
              <input type="text" class="form-control" id="inputCity" name="descrValorMulta" placeholder="Preencha aqui">
            </div>
          
  
          
          <div class="form-group col-md-5">
            <label for="nome_autuadoRepresentante">NOME DO AUTUADO OU REPRESENTANTE:</label>
            <input type="text" class="form-control" id="inputCity" name="nome_autuadoRepresentante" placeholder="Preencha aqui">
          </div>

          <div class="form-group col-md-3">
              <label for="cpf_autuadoRepresentante">CPF DO AUTUADO OU REPRESENTANTE:</label>
              <input type="text" class="form-control" id="inputAddress" name="cpf_autuadoRepresentante" placeholder="Preencha aqui">
          </div>

          <div class="form-group col-md-2">
            <label for="dataAssinatura">DATA DA ASSINATURA:</label>
            <input type="text" class="form-control" id="inputCity" name="dataAssinatura" placeholder="Preencha aqui">
          </div>
          

        
        <div class="form-group col-md-5">
            <label for="nome_testemunha1">NOME DA TESTEMUNHA 1:</label>
            <input type="text" class="form-control" id="inputAddress" name="nome_testemunha1" placeholder="Preencha aqui">
        </div>

        <div class="form-group col-md-3">
            <label for="cpf_testemunha1">CPF TESTEMUNHA 1:</label>
            <input type="text" class="form-control" id="inputCity" name="cpf_testemunha1" placeholder="Preencha aqui">
        </div>
        

        
          <div class="form-group col-md-5">
              <label for="nome_testemunha2">NOME DA TESTEMUNHA 2:</label>
              <input type="text" class="form-control" id="inputAddress" name="nome_testemunha2" placeholder="Preencha aqui">
          </div>
  
          <div class="form-group col-md-3">
              <label for="cpf_testemunha2">CPF TESTEMUNHA 2:</label>
              <input type="text" class="form-control" id="inputCity" name="cpf_testemunha2" placeholder="Preencha aqui">
          </div>
          

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>