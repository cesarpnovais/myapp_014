<!DOCTYPE HTML>

<?php 
	session_start();
	if (session_status() == PHP_SESSION_ACTIVE) {}      //        echo "A sessão está ativa.";
	else {session_start();}                             //        echo "A sessão não está ativa.";

	if (!empty($_GET)) {
		$sqlWhereInstruction = trim($_GET['i']);
		$recordCode = trim($_GET['c']);
        $_SESSION['sfunctionType'] = "'detail'";
    	$_SESSION['sinstructionSqlWhere'] = $sqlWhereInstruction;
    	$_SESSION['srecordCode'] = $recordCode;
		$_SESSION['sinstructionSql'] = "";
	};
	include("../conexao.php"); 
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload-0 is-preload-1 is-preload-2">
		<!-- Main -->
			<div id="main">
				<?php
					$cpf = 0; $nomeRealCompleto = ""; $email = ""; $anoNascimento = "";
					$cache = "";
					$nomeApresentacao = ""; $telefone = ""; $instagram = "";
					$endereco = ""; $estado = ""; $cidade = ""; $bairro = "";
					$altura = ""; $pe = ""; $peso = "";
					$etnia = "";
					$caractPiercingSeios = ""; $caractPiercingUmbigo = ""; $caractPiercingVagina = "";
					$cabelo = ""; $cabeloTamanho = ""; $cabeloEstilo = "";
					$biotipo = ""; $olhosCor = "";
					$seios = ""; $seiosMamilo = ""; $seiosTipo = "";
					$vaginaPubis = ""; $vaginaGreluda = ""; $vaginaApertadinha = ""; $vaginaGordinha = ""; $vaginaLabiosGrandes = ""; $vaginaRosadinha = "";
					$detalExotica = ""; $detalBocao = ""; $detalTatuada = ""; $detalDeficiente = ""; $detalGravida = ""; $detalLactante = ""; $detalCovinhasCostas = ""; $detalMarquinha = "";
					$servOral = ""; $servGargantaProfunda = ""; $serv69 = ""; $servDeixaChupar = ""; $servOralSemCapa = "";
					$servApanhar = "";	$servAmigas = ""; $servBeijoBoca = ""; $servBeijoGrego = ""; $servAnal = ""; $servSquirting = "";
					$servCasais = ""; $servMulher = ""; $servSwing = "";
					$servMassagem = ""; $servTailandesa = ""; $servEspanhola = "";
					$servViagem = ""; $servPernoite = ""; $servNamoradinha = ""; $servBdsm = ""; $servSubmissa = "";
					$servLocal = ""; $servHotel = ""; $servMotel = ""; $servDomicilio = "";
					$servFinalizaCorpo = ""; $servFinalizaBoca = ""; $servFinalizaRosto = "";
					$servSemLimiteFinalizacao = "";
					$servCartaoCredito = ""; $servCartaoDebito = ""; $servDinheiro = ""; $servPix = "";
					$anuncioDescricao = ""; $servAnuncioOrigem = "";
					$imagemQuantidade = ""; $imagemId = "";
					$validacaoData = ""; $validacaoStatus = ""; $validacaoStatusMotivo = "";
					$classificacaoEstrelasAparencia = "";
					$classificacaoEstrelasCheiro = ""; $classificacaoEstrelasAtendimento = ""; $classificacaoEstrelasSexo = "";
					$cadastroData = ""; $cadastroStatus  = "";
					while($row = mysqli_fetch_array($result)) 
						{ 
							$cod =  $row['cod'];
							$userName =  $row['nomeApresentacao'];
							$anuncioDescricao = $row['anuncioDescricao']; 
							$telefone = $row['telefone'];
							$cache = $row['cache'];
							$instagram = $row['instagram'];
							$idade = $row['idade'];
							$altura = $row['altura'];
							$imagemId = $row['imagemId'] ;
							$imagemQuantidade = $row['imagemQuantidade'];
						}
            	?>

				<!-- Header -->
					<header id="header">
						<?php $instructionSqlWhere = " where cod = ".$cod?>
						<?php echo '<h1>'."<a href='../cadastro.php?f=cadastrado&c=".$cod."&i=".$instructionSqlWhere."'>".$userName.'</a></h1>';?> 
						<?php echo $anuncioDescricao;?>
						<?php echo '<div class="fa fa-phone fa-1sx"><span class="label">&nbsp; '.$telefone.'</span></div>';?>
						<?php if ( $cache != 0 ) {echo '</br>cachê: R$ <span class="label">&nbsp; '.$cache.'</span>';}?>
						<?php if ( $instagram != null ) {echo '</br><div class="fa fa-instagram fa-1sx"><span class="label">&nbsp; '.$instagram.'</span></div>';}?>
						<?php echo '</br>'; ?>
				<!-- Thumbnail -->
					<section id="thumbnails">
						<?php
							$counter = 1;
							while($counter <= $imagemQuantidade) {
								//echo '<article><a class="thumbnail" href="image/'.$imagemId.'_'.$counter.'.jpg" data-position="left center"><img  src="image/'.$imagemId.'_'.$counter.'.jpg" alt="" /></a></article>';
								echo '<article style="visibility: hidden;"><a class="thumbnail" href="image/'.$imagemId.'_'.$counter.'.jpg" data-position="left center"></a></article>';
								$counter++;
								}
						?>
					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>