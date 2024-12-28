<?php

    if (session_status() == PHP_SESSION_ACTIVE) {}  //        echo "A sessão está ativa.";
    else {session_start();}                         //        echo "A sessão não está ativa.";
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $conexao = new MySQLi("localhost", "root", "root", "myapp_008");
    if (!$conexao) {die("Connection failed: " . mysqli_connect_error());}
    
    
    
    $functionType = $_SESSION['sfunctionType'];
    $instructionSqlWhere = $_SESSION['sinstructionSqlWhere'];
    $recordCode = $_SESSION['srecordCode'];
    $instructionSql = $_SESSION['sinstructionSql'];

    if ($functionType == "'index'"){ 
        //echo"1";
        $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio  order by cod desc";//where cpf = '11980247952' order by cod desc";
        $result = mysqli_query($conexao, $sql);
        $row_cnt = mysqli_num_rows($result);
    } 
        
    else if ($functionType == "'detail'"){ 
       //echo"2";
        $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio " . $instructionSqlWhere;
        //echo $sql;
        $result = mysqli_query($conexao, $sql);
        $row_cnt = mysqli_num_rows($result);
        echo $sql;
    } 
        
    else if ($functionType == "'cadastrar'"){ 
        //echo "3";
        try {
            $sql = " insert into anuncio ( "
                . "   cpf, nomeRealCompleto, email, anoNascimento "
                . " , cache "
                . " , nomeApresentacao, telefone, instagram "
                . " , endereco, estado, cidade, bairro "
                . " , altura, pe, peso "
                . " , etnia "
                . " , caractPiercingSeios, caractPiercingUmbigo, caractPiercingVagina  "
                . " , cabelo, cabeloTamanho, cabeloEstilo "
                . " , biotipo, olhosCor  "
                . " , seios, seiosMamilo, seiosTipo  "
                . " , vaginaPubis, vaginaGreluda, vaginaApertadinha, vaginaGordinha, vaginaLabiosGrandes, vaginaRosadinha  "
                . " , detalExotica, detalBocao, detalTatuada, detalDeficiente, detalGravida, detalLactante, detalCovinhasCostas, detalMarquinha  "
                . " , servOral, servGargantaProfunda, serv69, servDeixaChupar, servOralSemCapa  "
                . " , servApanhar, servAmigas, servBeijoBoca, servBeijoGrego, servAnal, servSquirting "
                . " , servCasais, servMulher, servSwing  "
                . " , servMassagem, servTailandesa, servEspanhola  "
                . " , servViagem, servPernoite, servNamoradinha, servBdsm, servSubmissa "
                . " , servLocal, servHotel, servMotel, servDomicilio  "
                . " , servFinalizaCorpo, servFinalizaBoca, servFinalizaRosto  "
                . " , servSemLimiteFinalizacao  "
                . " , servPagtoCartaoCredito, servPagtoCartaoDebito, servPagtoDinheiro, servPagtoPix  "
                . " , imagemQuantidade, imagemId "
                . " , anuncioDescricao, anuncioOrigem "
                . " , validacaoData, validacaoStatus, validacaoStatusMotivo "
                . " , classificacaoEstrelasAparencia, classificacaoEstrelasCheiro, classificacaoEstrelasAtendimento, classificacaoEstrelasSexo "
                . " , cadastroData, cadastroStatus "
                . " ) VALUES ( "
                . $instructionSql
                . " ) ;";

                //echo "<br/> conexao - " . $sql;
            if ($conexao->query($sql) === TRUE) {
                $last_id = $conexao->insert_id;
                $_SESSION['srecordCode'] = $last_id;
                $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio where cod = " .$last_id;
                $result = mysqli_query($conexao, $sql);
                $row_cnt = mysqli_num_rows($result);
            } else {
                echo "Error: " . $sql . "<br>" . $conexao->error;
            }
        }catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }    
    } 

    else if ($functionType == "'alterar'"){ 
        //echo "4";
        try {
            $sql = " update anuncio set "
                . $instructionSql
                . " where cod = " . $recordCode . ";";
            //echo $sql;
            if ($conexao->query($sql) === TRUE) {
                $last_id = $conexao->insert_id;
                $_SESSION['srecordCode'] = $last_id;
                $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio where cod = " .$last_id;
                $result = mysqli_query($conexao, $sql);
                $row_cnt = mysqli_num_rows($result);
            } else {
                echo "Error: " . $sql . "<br>" . $conexao->error;
            }
        }catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }    
    } 
        
    else if ($functionType == "'cadastrado'"){
        //echo "5";  
        $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio " .$instructionSqlWhere;
        $result = mysqli_query($conexao, $sql);
        $row_cnt = mysqli_num_rows($result);
    }

    else if ($functionType == "'cadastro'"){
        //echo "6";
        $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio " . $instructionSqlWhere;
        $result = mysqli_query($conexao, $sql);
        $row_cnt = mysqli_num_rows($result);
    }
    else{
    }
?>