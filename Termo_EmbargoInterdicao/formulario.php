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
        <h2>TERMO EMBARGO/INTERDIÇÃO</h2>
        
    <form action="InserirTermo.php" method="POST">

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
            <input type="text" class="form-control" id="inputAddress" name="coordenadasGeograficas" placeholder="Preencha aqui" value="DATUM SIRGAS 2000" disabled>
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
            <label for="fatosConstados">FATOS CONSTADOS:</label>
            <input type="text" class="form-control" id="inputCity" name="fatosConstados" placeholder="Preencha aqui">
          </div>
          
  
          
          <div class="form-group col-md-7">
              <label for="atividadeEmbargada_interditada">ATIVIDADE EMBARGADA/INTERDITADA:</label>
              <input type="text" class="form-control" id="inputAddress" name="atividadeEmbargada_interditada" placeholder="Preencha aqui">
          </div>
          

          
            <div class="form-group col-md-7">
              <label for="localEmbargado_interditadoTodasCoordenadas">LOCAL EMBARGADO/INTERDITADO COM TODAS AS COORDENADAS:</label>
              <input type="text" class="form-control" id="inputCity" name="localEmbargado_interditadoTodasCoordenadas" placeholder="Preencha aqui">
            </div>

            <div class="form-group col-md-7">
              <label for="dispositivosLegaisInfrigidos">DISPOSITIVOS LEGAIS INFRIGIDOS:</label>
              <input type="text" class="form-control" id="inputCity" name="dispositivosLegaisInfrigidos" placeholder="Preencha aqui">
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
            <label for="data_Assinatura">DATA DA ASSINATURA:</label>
            <input type="text" class="form-control" id="inputCity" name="data_Assinatura" placeholder="Preencha aqui">
          </div>
          
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div> 



<script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>