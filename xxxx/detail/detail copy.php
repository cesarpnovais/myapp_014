<!DOCTYPE HTML>
<?php 

	//session_start();
	//echo "<script>alert('Mensagem');</script>";

    if (!empty($_GET)) {
        $selected=trim($_GET['s']);
    }
    
    if (!empty($selected)) { 
		$_SESSION['sinstructionSql'] = " where cod = ". $selected;
        $_SESSION['sfunctionType'] = "'detail'";
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
					while($row = mysqli_fetch_array($result)) 
						{ 
							$cod =  $row['cod'];
							$userName =  $row['nomeApresentacao'];
							$telefone = $row['telefone'];
							$instagram = $row['instagram'];
							$bairro = $row['bairro'];
							$imagemId = $row['imagemId'];
							$imagemQuantidade = $row['imagemQuantidade'];
							$anuncioDescricao = $row['anuncioDescricao']; 
							$cache = $row['cache'];
							$instagram = $row['instagram'];
							$idade = $row['idade'];
							$altura = $row['altura'];
							$etnia = $row['etnia'];
							$cabelo = $row['cabelo'];
							//$estatura = $row['estatura'];
							$corpo = $row['biotipo'];
							$seios = $row['seios'];
							$pubis = $row['vaginaPubis'];
							$pes = $row['pe'];
							$caracteristicasGreluda = $row['vaginaGreluda'];
							$caracteristicasApertadinha = $row['vaginaApertadinha'];
							// $caracteristicasPiercing = $row['caracteristicasPiercing'];
							// $caracteristicasTatuada = $row['caracteristicasTatuada'];
							// $caracteristicasGravida = $row['caracteristicasGravida'];
							// $caracteristicasLactante = $row['caracteristicasLactante'];
							// $caracteristicasDeficiente = $row['caracteristicasDeficiente'];
							// $opcaoComLocal = $row['opcaoComLocal'];
							// $opcaoComAnal = $row['opcaoComAnal'];
							// $opcaoAceitaCasais = $row['opcaoAceitaCasais'];
							// $opcaoSwing = $row['opcaoSwing'];
							// $opcaoAceitaViajar = $row['opcaoAceitaViajar'];
							// $opcaoPernoite = $row['opcaoPernoite'];
							$opcaoBdsm = $row['servBdsm'];
							$opcaoSubmissa = $row['servSubmissa'];
						}
            	?>
				<!-- Header -->
					<header id="header">
						<?php echo '<h1>'.$userName.'</h1>';?>
						<?php echo $anuncioDescricao;?>
						<?php echo '<div class="fa fa-phone fa-1sx"><span class="label">&nbsp; '.$telefone.'</span></div>';?>
						<?php if ( $cache != 0 ) {echo '</br>cachê: R$ <span class="label">&nbsp; '.$cache.'</span>';}?>
						<?php if ( $instagram != null ) {echo '</br><div class="fa fa-instagram fa-1sx"><span class="label">&nbsp; '.$instagram.'</span></div>';}?>
						<?php echo '</br>'; ?>

						<section id="details">
							<?php if ( $idade != "" ) {echo '<span class="page-tipo" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$idade.' anos&nbsp;&nbsp;</span>';}?>
							<?php if ( $altura != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$altura.' altura&nbsp;&nbsp;</span>';}?>
							<?php if ( $etnia != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$etnia.'&nbsp;&nbsp;&nbsp;</span>';}?>
							<?php if ( $cabelo != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$cabelo.'&nbsp;&nbsp;</span>';}?>
							<?php if ( $estatura != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$estatura.' &nbsp;</span>';}?>
							<?php if ( $corpo != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$corpo.'&nbsp;&nbsp;</span>';}?>
							<?php if ( $seios != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$seios.'&nbsp;&nbsp;</span>';}?>
							<?php if ( $pubis != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;'.$pubis.'&nbsp;&nbsp;</span>';}?>
							<?php if ( $pes != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;pés '.$pes.'&nbsp;&nbsp;</span>';}?>
							<?php if ( $caracteristicasGreluda != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Greluda &nbsp;&nbsp;</span>';}?>
							<?php if ( $caracteristicasApertadinha != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Apertadinha&nbsp;&nbsp;</span>';}?>
							<?php if ( $caracteristicasPiercing != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Piercing&nbsp;&nbsp;</span>';}?>
							<?php if ( $caracteristicasTatuada != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Tatuada&nbsp;&nbsp;</span>';}?>
							<?php if ( $caracteristicasGravida != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Gravida&nbsp;&nbsp;</span>';}?>
							<?php if ( $caracteristicasLactante != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Lactante&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoComLocal != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Local&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoComAnal != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Anal&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoAceitaCasais != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Casais &nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoSwing != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Swing&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoAceitaViajar != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Viagem&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoPernoite != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Pernoite&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoBdsm != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Bdsm&nbsp;&nbsp;</span>';}?>
							<?php if ( $opcaoSubmissa != "" ) {echo '<span class="label" style="border-style: solid;  border-width: thin; line-height: 18px; border-radius: 23px 6px; width:100px; text-align:center; color:#AABDD6" >&nbsp;&nbsp;Submissa&nbsp;&nbsp;</span>';}?>
						</section>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<?php
						//echo "<script>alert('qtd img:  ".$imagemQuantidade."');</script>";
						//echo "<script>alert('img:  images/".$imagemId ."_".$counter."');</script>";

						//"images/'.$row['imagemId'] + '_' . $counter . '.png" 

						$counter = 1;
						while($counter <= $imagemQuantidade) {
							//echo '<article><a class="thumbnail" href="images/'.$imagemId ."_".$counter.'.png" data-position="left center"><img src="images/'.$imagemId . "_" + $counter . '.png'.'" alt="" /></a></article>';
							echo '<article><a class="thumbnail" href="images/'.$imagemId.'_'.$counter.'.png" data-position="left center"><img  src="images/'.$imagemId.'_'.$counter.'.png" alt="" /></a></article>';
							$counter++;
							}
						//831x600  echo '<article><a class="thumbnail" href="images/fulls/'.$imagem001.'" data-position="left center"><img src="images/thumbs/'.$imagem001.'" alt="" /></a></article>';
/*						if ($imagem01 != null){echo '<article><a class="thumbnail" href="images/'.$imagem01.'" data-position="left center"><img src="images/'.$imagem01.'" alt="" /></a></article>';}
						if ($imagem02 != null){echo '<article><a class="thumbnail" href="images/'.$imagem02.'" data-position="left center"><img src="images/'.$imagem02.'" alt="" /></a></article>';}
						if ($imagem03 != null){echo '<article><a class="thumbnail" href="images/'.$imagem03.'" data-position="left center"><img src="images/'.$imagem03.'" alt="" /></a></article>';}
						if ($imagem04 != null){echo '<article><a class="thumbnail" href="images/'.$imagem04.'" data-position="left center"><img src="images/'.$imagem04.'" alt="" /></a></article>';}
						if ($imagem05 != null){echo '<article><a class="thumbnail" href="images/'.$imagem05.'" data-position="left center"><img src="images/'.$imagem05.'" alt="" /></a></article>';}
						if ($imagem06 != null){echo '<article><a class="thumbnail" href="images/'.$imagem06.'" data-position="left center"><img src="images/'.$imagem06.'" alt="" /></a></article>';}
						if ($imagem07 != null){echo '<article><a class="thumbnail" href="images/'.$imagem07.'" data-position="left center"><img src="images/'.$imagem07.'" alt="" /></a></article>';}
*/
						?>
					</section>

				<!-- Footer 
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a>.</li>
						</ul>
					</footer>-->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>