<!DOCTYPE html>

<?php 
    if (!empty($_GET)) {
        $filtrarPor=trim($_GET['f']);
        $_SESSION['filtrarPor'] = trim($_GET['f']);
    }
    $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio ";
    if (!empty($filtrarPor)) { 
//        $sqlWhere = " where  userName like ('%" . $filtrarPor . "%')  or nomeCompleto like ('%" . $filtrarPor . "%')  or dataNascimento like ('%" . $filtrarPor . "%')  or numeroTelefoneCelular like ('%" . $filtrarPor . "%')  or email like ('%" . $filtrarPor . "%')  or sexo like ('%" . $filtrarPor . "%') ";
        $sql = $sql . $sqlWhere;
    };
    $_SESSION['sqlInstruction'] = $sql;  
    include("conexao.php"); 
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <div>
        <body>
            <div style="align-items:left; margin-top: 5px;"><IFRAME name=gridData src="gridIframeTitulo.php" frameBorder=0 style="overflow: scroll; height: 27vh; width: 98.5vw; margin-left: 2px;" scrolling="false"  ></IFRAME></div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Modal Header</h2>
                    </div>
                    <div class="modal-body">
                        <img class="card-img-modal" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <img class="card-img-modal" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <img class="card-img-modal" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    </div>
                    <div class="modal-footer">
                        <h3>Modal Footer</h3>
                    </div>
                </div>
            </div>
        <!-- Section-->
        <section>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <table border="0" class="table">
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($result)) 
                            { 
                                $userName =  $row['userName'];
                                $cod =  $row['cod'];
                                $idade = $row['idade'];
                                $telefone = $row['numeroTelefoneCelular'];
                                $bairro = $row['bairro'];
                                $cache = $row['cache'];
                                $altura = $row['altura'];
                                $imagemPerfil = $row['imagemPerfil'];
                                $imagem001 = $row['imagem001'];
                                $imagem002 = $row['imagem002'];
                                $imagem003 = $row['imagem003'];
                                $imagem004 = $row['imagem004'];
                                $imagem005 = $row['imagem005'];
                                $imagem006 = $row['imagem006'];
                                $imagem007 = $row['imagem007'];
                                $anuncioDescricao = $row['anuncioDescricao']; 
                                echo '<div class="col mb-5">';
                                echo '  <div class="card h-100" >';
                                echo '      <img style="width: 236px;  height: 170px;" class="card-img-top" src=imagem/'. $imagemPerfil .' alt="..." />';
                                echo '      <div>';
                                echo '          <div class="text-center">';
                                echo '              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
                                echo '                  <div class="text-center">';
                                echo '                      <button id="myBtn'. $cod .'" onclick="ativafuncao(this)"><h5 class="fw-bolder">'. $userName .'</h5></button>';
                                echo '              </div>';
                                echo '              Cachê $ '. $cache;
                                echo '              </br>Altura ' . $altura;
                                echo '              </br>Idade ' . $idade;
                                echo '              </br>' . $anuncioDescricao;
                                echo '              </br>' . $telefone;
                                echo '          </div>';
                                echo '      </div>';
                                echo '  </div>';
                                echo '</div>';
                                echo '</div>';
                            }
                    ?>
                    </div>
                    </div>
                </section>
                </tbody>
            </table>
            <script>
                var modal = document.getElementById("myModal");
                var btn = document.getElementById("myBtn");
                var span = document.getElementsByClassName("close")[0];
                btn.onclick = function() {
                    modal.style.display = "block";
                }
                span.onclick = function() {
                    modal.style.display = "none";
                }
                window.onclick = function(event) {
                    if (event.target == modal || event.target == modalSearch) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </body>
    </div>
</html>