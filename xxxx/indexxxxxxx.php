<!DOCTYPE HTML>
<?php 
    //session_start();
//    echo "<script>alert('Mensagem');</script>";
    include("../conexao.php");
    if (!empty($_GET)) {
        $filtrarPor=trim($_GET['f']);
        $_SESSION['filtrarPor'] = trim($_GET['f']);
    }
    
    $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio ";
    if (!empty($filtrarPor)) { 
        $sqlWhere = " where  cod = ". $filtrarPor ;
        $sql = $sql . $sqlWhere;
    };
    $_SESSION['sqlInstruction'] = $sql;  


	echo "<script>alert('".$_SESSION['sqlInstruction']."');</script>";

 //   include("conexao.php"); 
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
							$imagemPerfil = $row['imagemPerfil'];
							$userName =  $row['userName'];
							$idade = $row['idade'];
							$telefone = $row['numeroTelefoneCelular'];
							$bairro = $row['bairro'];
							$cache = $row['cache'];
							$altura = $row['altura'];
							$imagem001 = $row['imagem001'];
							$imagem002 = $row['imagem002'];
							$imagem003 = $row['imagem003'];
							$imagem004 = $row['imagem004'];
							$imagem005 = $row['imagem005'];
							$imagem006 = $row['imagem006'];
							$imagem007 = $row['imagem007'];
							$anuncioDescricao = $row['anuncioDescricao'];                                        
						}
            	?>
				<!-- Header -->
					<header id="header">
					<?php echo '<h1>'.$userName.'</h1>';?>
					<?php echo '<p>'.$anuncioDescricao.'</p>';?>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<?php
//						echo $imagem001;
//						if (!empty($imagem001)) {echo '<article><a class="thumbnail" href="images/fulls/'.$imagem001.'" data-position="left center"><img src="images/thumbs/'.$imagem001.'" alt="" /></a></article>';}
//						if (!empty($imagem001)) {echo '<a class="thumbnail" href="images/fulls/02.jpg"><img src="images/thumbs/02.jpg" alt="" /></a>';}
						echo '<article><a class="thumbnail" href="images/fulls/'.$imagem001.'" data-position="left center"><img src="images/thumbs/'.$imagem001.'" alt="" /></a></article>';
//						echo'<h2>Diam tempus accumsan</h2>';
//						echo'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>';
						?>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a>.</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>