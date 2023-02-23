<?php
session_start();
require_once('db.php');
 
//
//
//
    $autoInfracao = $_POST['autoInfracao'];
    $numero = $_POST['numero'];
    $data = $_POST['data'];
    $nome = $_POST['nome_razaoSocial'];
    $CpfCnpj = $_POST['cpf_cnpj'];
    $endereco = $_POST['enderecoEmpreendimento'];
    $municipio1 = $_POST['municipio1'];
    $uf1 = $_POST['uf1'];
    $areaEmpreendimento = $_POST['areaEmpreendimento'];
    $horario = $_POST["horario"];
    $coordenadasGeograficas = "DATUM SIRGAS 2000";
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $municipio2 = $_POST["municipio2"];
    $cep = $_POST["cep"];
    $uf2 = $_POST["uf2"];
    $telefone = $_POST["telefone"];
    $descricaoOcorrencia = $_POST["descricaoOcorrencia"];
    $disposLegaisInfrigidos = $_POST["disposLegaisInfrigidos"];
    $descrValorMulta = $_POST["descrValorMulta"];
    $nome_autuadoRepresentante = $_POST["nome_autuadoRepresentante"];
    $cpf_autuadoRepresentante = $_POST["cpf_autuadoRepresentante"];
    $dataAssinatura = $_POST["dataAssinatura"];
    $nome_testemunha1 = $_POST["nome_testemunha1"];
    $cpf_testemunha1 = $_POST["cpf_testemunha1"];
    $nome_testemunha2 = $_POST["nome_testemunha2"];
    $cpf_testemunha2 = $_POST["cpf_testemunha2"];

    $sql = "insert into autoinfracao (autoInfracao, numero, data, nome_razaoSocial, cpf_cnpj, enderecoEmpreendimento, municipio1, uf1, areaEmpreendimento, horario, coordenadasGeograficas, latitude, longitude, municipio2, cep, uf2, telefone, descricaoOcorrencia, disposLegaisInfrigidos, descrValorMulta, nome_autuadoRepresentante, cpf_autuadoRepresentante, dataAssinatura, nome_testemunha1, cpf_testemunha1, nome_testemunha2, cpf_testemunha2) values ('" . $autoInfracao . "', '" . $numero . "', '" . $data . "', '" . $nome . "', '" . $CpfCnpj . "', '" . $endereco . "', '" . $municipio1 . "', '" . $uf1 . "', '" . $areaEmpreendimento . "', '" . $horario . "', '" . $coordenadasGeograficas . "', '" . $latitude . "', '" . $longitude . "', '" . $municipio2 . "', '" . $cep . "', '" . $uf2 . "', '" . $telefone . "', '" . $descricaoOcorrencia . "', '" . $disposLegaisInfrigidos . "', '" . $descrValorMulta . "', '" . $nome_autuadoRepresentante . "', '" . $cpf_autuadoRepresentante . "', '" . $dataAssinatura . "', '" . $nome_testemunha1 . "', '" . $cpf_testemunha1 . "', '" . $nome_testemunha2 . "', '" . $cpf_testemunha2 . "')";
    $result = mysqli_query($conn, $sql);
    if($result){
    $successMsg = 'Perfil Alterado';
    header('Location: formulario.php');
    }
