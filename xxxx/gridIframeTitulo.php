<!DOCTYPE html>

<?php 
    //session_start();
    include("conexao.php");
    if (!empty($_GET)) {
        $filtrarPor=trim($_GET['f']);
        $_SESSION['filtrarPor'] = trim($_GET['f']);
    }
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>......</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <div class="container">
        <body>
            <div class="posicionarCabecalho">
                logo e descrição da página
                <nav >
                    <div class="container px-8 px-lg-8 mt-8">
                        <div class="row gx-8 gx-lg-8 row-cols-8 row-cols-md-8 row-cols-xl-8 justify-content-center" style="font-size: small;">
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_ninfeta" onclick="mudaCor(this)">ninfeta</button>  
                                <button class="search_button button2" id="btn_coroa" onclick="mudaCor(this)">coroa</button>
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_branca" onclick="mudaCor(this)">branca</button>  
                                <button class="search_button button2" id="btn_mulata" onclick="mudaCor(this)">mulata</button>
                                <button class="search_button button2" id="btn_negra" onclick="mudaCor(this)">negra</button>  
                                <button class="search_button button2" id="btn_oriental" onclick="mudaCor(this)">oriental</button>
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_morena" onclick="mudaCor(this)">morena</button>
                                <button class="search_button button2" id="btn_loira" onclick="mudaCor(this)">&nbsp;loira&nbsp;</button>
                                <button class="search_button button2" id="btn_ruiva" onclick="mudaCor(this)">&nbsp;ruiva&nbsp;</button>
                                <button class="search_button button2" id="btn_outros" onclick="mudaCor(this)">outros</button>
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_alta" onclick="mudaCor(this)">alta</button>  
                                <button class="search_button button2" id="btn_mignon" onclick="mudaCor(this)">mignon</button>
                                <button class="search_button button2" id="btn_ananzinha" onclick="mudaCor(this)">ananzinha</button>  
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_magra" onclick="mudaCor(this)">magra</button>  
                                <button class="search_button button2" id="btn_gordinha" onclick="mudaCor(this)">gordinha</button>
                                <button class="search_button button2" id="btn_bbw" onclick="mudaCor(this)">bbw</button>
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_natural" onclick="mudaCor(this)">natural</button>  
                                <button class="search_button button2" id="btn_silicone" onclick="mudaCor(this)">silicone</button>
                                <button class="search_button button2" id="btn_peituda" onclick="mudaCor(this)">peituda</button>  
                                <button class="search_button button2" id="btn_peitinho" onclick="mudaCor(this)">peitinho</button>
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_greluda" onclick="mudaCor(this)">greluda</button>  
                                <button class="search_button button2" id="btn_apertadinha" onclick="mudaCor(this)">apertadinha</button>
                                <button class="search_button button2" id="btn_peluda" onclick="mudaCor(this)">peluda</button>  
                                <button class="search_button button2" id="btn_depilada" onclick="mudaCor(this)">depilada</button>
                            </div>
                            <div class="col mb-12" style="font-size: small; text-align: center;">
                                <button class="search_button button2" id="btn_gravida" onclick="mudaCor(this)">gravida</button>  
                                <button class="search_button button2" id="btn_lactantes" onclick="mudaCor(this)">lactantes</button>
                                <button class="search_button button2" id="btn_piercing" onclick="mudaCor(this)">piercing</button>  
                                <button class="search_button button2" id="btn_tatuada" onclick="mudaCor(this)">tatuada</button>
                            </div>
                            &nbsp;<button class="button button6" onclick="functionGo()">PESQUISAR</button>
                        </div>
                    </div>
                </nav>
            </div>
            <script>
                function mudaCor(el){
                    const currentColor = event.target.style.backgroundColor;
                    const nextColor = currentColor === 'fuchsia' ? '#F0F0F0' : 'fuchsia';
                    event.target.style.backgroundColor = nextColor;
                    el.style.backgroundColor = nextColor;
                }
            </script>
        </body>
    </div>
</html>