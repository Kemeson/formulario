<?php
session_start();
require_once('db.php');
 
//
//
//
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
    $fatosConstados = $_POST["fatosConstados"];
    $atividadeEmbargada_interditada = $_POST["atividadeEmbargada_interditada"];
    $localEmbargado_interditadoTodasCoordenadas = $_POST["localEmbargado_interditadoTodasCoordenadas"];
    $dispositivosLegaisInfrigidos = $_POST["dispositivosLegaisInfrigidos"];
    $nome_autuadoRepresentante = $_POST["nome_autuadoRepresentante"];
    $cpf_autuadoRepresentante = $_POST["cpf_autuadoRepresentante"];
    $data_Assinatura = $_POST["data_Assinatura"];


    $sql = "insert into termoembargointerdicao (numero, data, nome_razaoSocial, cpf_cnpj, enderecoEmpreendimento, municipio1, uf1, areaEmpreendimento, horario, coordenadasGeograficas, latitude, longitude, municipio2, cep, uf2, telefone, fatosConstados, atividadeEmbargada_interditada, localEmbargado_interditadoTodasCoordenadas, dispositivosLegaisInfrigidos, nome_autuadoRepresentante, cpf_autuadoRepresentante, data_Assinatura) values ('" . $numero . "', '" . $data . "', '" . $nome . "', '" . $CpfCnpj . "', '" . $endereco . "', '" . $municipio1 . "', '" . $uf1 . "', '" . $areaEmpreendimento . "', '" . $horario . "', '" . $coordenadasGeograficas . "', '" . $latitude . "', '" . $longitude . "', '" . $municipio2 . "', '" . $cep . "', '" . $uf2 . "', '" . $telefone . "', '" . $fatosConstados . "', '" . $atividadeEmbargada_interditada . "', '" . $localEmbargado_interditadoTodasCoordenadas . "', '" . $dispositivosLegaisInfrigidos . "', '" . $nome_autuadoRepresentante . "', '" . $cpf_autuadoRepresentante . "', '" . $data_Assinatura . "')";
    $result = mysqli_query($conn, $sql);
    if($result){
    $successMsg = 'Perfil Alterado';
    header('Location: formulario.php');
    }
