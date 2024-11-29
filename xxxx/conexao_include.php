<?php

if (session_status() == PHP_SESSION_ACTIVE) {}  //        echo "A sessão está ativa.";
else {session_start();}                         //        echo "A sessão não está ativa.";
ini_set('display_errors', 1);
error_reporting(E_ALL);
$conn=mysqli_connect("localhost", "root", "root", "myapp_008");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//$sql = "insert into anuncio ( cpf, nomeRealCompleto, email, anoNascimento , nomeApresentacao, telefone, cache, instagram , endereco, estado, cidade, bairro , altura, pe , etnia , caractPiercingSeios, caractPiercingUmbigo, caractPiercingVagina , cabelo, cabeloTamanho, cabeloEstilo , biotipo, olhosCor , seios, seiosMamilo , vaginaPubis, vaginaGreluda, vaginaApertadinha, vaginaGordinha, vaginaLabiosGrandes, vaginaRosadinha , detalExotica, detalBocao, detalTatuada, detalDeficiente, detalGravida, detalLactante, detalCovinhasCostas , servDeixaChupar, servOralSemCapa, servApanhar, servAmigas, servBeijoBoca, servBeijoGrego, servAnal, servSquirting , servCasais, servMulher, servSwing, servViagem, servPernoite, servNamoradinha, servBdsm, servSubmissa , servLocal, servEjaculacaoCorpo , servSemLimiteFinalizacao, servCartaoCredito , anuncioDescricao , imagemQuantidade, imagemId , validacaoData, validacaoStatus, validacaoStatusMotivo , classificacaoEstrelasAparencia, classificacaoEstrelasCheiro, classificacaoEstrelasAtendimento, classificacaoEstrelasSexo , cadastroData, cadastroStatus ) VALUES ( 'cpf','loira 01','email xxxxx','1992','apre','tel','100','INS','end','sp','cid','bai','150','35',null,'n','n','n',null,null,null,null,null,null,null,null,'n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','','0','0','0','0','0','0','0','0','0','0','0' ) ";

// if (!empty($_SESSION['sqlInstructionDel'])){
//   echo $_SESSION['sqlInstructionDel'];
//   $sql = $_SESSION['sqlInstructionDel'];
//   $conexao->query($sql);
// }


//unset($_SESSION['sqlInstruction'] );

//insert
  try {
    if (!empty($_SESSION['sqlInstruction'])){
      $sql = $_SESSION['sqlInstruction'];

      if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        $_SESSION['sqlInstructionReturnCod'] = $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    }
  }catch(Exception $e) {
   echo 'Message: ' .$e->getMessage();
  }

$conn->close();

unset($_SESSION['sqlInstruction'] ); 


?>