<?php
    $idficha = $_POST['idficha'];
    $vendedor = $_POST['vendedor'];
    $aprovador = $_POST['aprovador'];
    $cdcliente = $_POST['cdcliente'];
    $rsocial = $_POST['rsocial'];
    $nfantasia = $_POST['nfantasia'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cnpj = $_POST['cnpj'];
    $resp = $_POST['resplab'];
    $emaild = $_POST['emaillab'];
    $inicio = $_POST['iniciolab'];

    //Contatos
    $nomec = $_POST['nomec'];
    $emailc = $_POST['emailc'];
    $celc = $_POST['celc'];
    $func = $_POST['func'];

    //Dados para cobrança
    $endcob = $_POST['endcob'];
    $bairrocob = $_POST['bairrocob'];
    $cepcob = $_POST['cepcob'];
    $telcob = $_POST['telcob'];
    $celcob = $_POST['celcob'];
    $cidadecob = $_POST['cidadecob'];
    $estadocob = $_POST['estadocob'];
    $contatofin = $_POST['contatofin'];

    //Informacoes de TI - radio buttons
    if (isset($_POST['radiozebra'])) {
        var_dump("escolheu " . $_POST['radiozebra']);
    } else {
        var_dump("Não escolheu nenhuma opção.");
    }
    $radiozebra = $_POST['radiozebra'];

    //Forma de envio
    $interf = $_POST['interf'];
    $etiquet = $_POST['etiquet'];
    $manual = $_POST['manual'];
    $slis = $_POST['slis'];

   //Insumos fornecidos 
    $ttransp = $_POST['ttransp'];
    $tsoro = $_POST['tsoro'];
    $tedta = $_POST['tedta'];
    $obst = $_POST['obst'];
    
    //Uso interno - horario de funcionario
    $dhora = $_POST['dhora'];
    $ashora = $_POST['ashora'];
    $mhora = $_POST['mhora'];
    $repre = $_POST['repre'];
    $regiaoh = $_POST['regiaoh'];
    $fatura = $_POST['fatura'];
    $centcusto = $_POST['centcusto'];
    $prazo = $_POST['prazo'];
    $comentario = $_POST['comentario'];

    //Adicionar arquivos
    $serasa = $_POST['serasa'];
    $contrato = $_POST['contrato'];

    include 'conn.php';

    //Dados
    
    $sql = "INSERT INTO cdficha (idficha, vendedor, aprovador, cdcliente, rsocial, nfantasia, endereco, bairro, cep, tel, cel, cidade, estado, 
            cnpj, resplab, emaillab, iniciolab, endcob, bairrocob, cepcob, telcob, celcob, cidadecob, estadocob, contatofin, simz, naoz, interf, etiquet, 
            manualet, slis, ttranp, tsoro, tedta, obst, dhora, ashora, mhora, repre, regiaoh, fatura, centcusto, prazo, comentario, serasa, contrato)
            
            VALUES ('$idficha,'$vendedor', '$aprovador','$cdcliente', $rsocial', '$nfantasia', '$endereco', '$bairro', '$cep', '$tel','$cel', '$cidade', 
            '$estado', '$cnpj', '$resplab', '$emaillab', '$iniciolab', '$endcob', '$bairrocob', '$cepcob', '$telcob', '$celcob', '$cidadecob', 
            '$estadocob', '$contatofin', '$simz', '$naoz', '$interf', '$etiquet', '$manualet', '$slis', '$ttranp', '$tsoro', '$tedta', '$obst', 
            '$dhora', '$ashora', '$mhora', '$repre', '$regiaoh', '$fatura', '$centcusto', '$prazo', '$comentario', $serasa, '$contrato')";

    if($conn->query($sql) == TRUE){
        echo "Dado inserido com sucesso!";
    }
    else{
        echo "Erro: ".$conn->error;
    }

    $conn->close();
?>