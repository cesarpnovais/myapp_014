<!DOCTYPE html>
<?php 


echo "sfdsfdsfdsfsd";


    if (!empty($_GET)) {
        $filtrarPor=trim($_GET['s']);
        $_SESSION['filtrarPor'] = trim($_GET['s']);
        
echo "-------<br/><br/>".$_SESSION['filtrarPor']."<br/>----";


    }
    else{

        echo "3333333333333333333-";
    }
    
    //$sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio ";
    if (!empty($filtrarPor)) { 
        $_SESSION['sinstructionSql'] = " where cod = ". $filtrarPor;
        $_SESSION['sfunctionType'] = "'detail'";
        include("conexao.php");
    };

    include("conexao.php"); 

    echo "88888";
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--<title>Shop Homepage - Start Bootstrap Template</title>-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>     
        <!--Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> 
                    <table border="0" class="table">
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($result)) 
                                    { 
                                        $cod =  $row['cod'];
                                        //$imagemPerfil = $row['imagemPerfil'];
                                        $imagemPerfil = $row['telefone'] . '.png';
                                        echo '<div class="col mb-5">';
                                        echo '    <div class="card h-100">';
                                        echo '        <img onclick="ativafuncao(this)" style="border-radius: 10px; width: 260x;  height: 170px"  id="'. $cod .'" class="card-img-top" src=imagem/'. $imagemPerfil .' alt="..." />';
                                        echo '    </div>';
                                        echo '</div>';
                                        $userName =  $row['nomeApresentacao'];
                                        $idade = $row['idade'];
                                        $telefone = $row['telefone'];
                                        $bairro = $row['bairro'];
                                        $cache = $row['cache'];
                                        $altura = $row['altura'];
                                        $imagem001 = $row['telefone'];
                                        $imagem002 = $row['telefone'];
                                        $imagem003 = $row['telefone'];
                                        $imagem004 = $row['telefone'];
                                        $imagem005 = $row['telefone'];
                                        $imagem006 = $row['telefone'];
                                        $imagem007 = $row['telefone'];
                                        $anuncioDescricao = $row['anuncioDescricao'];
                                    }
                            ?>
                            </div>
                            </div>
                        </section>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
