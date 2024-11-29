<!DOCTYPE html>
<?php 
    session_start();
    include("conexao.php");
    if (session_status() == PHP_SESSION_ACTIVE) {}      //        echo "A sessão está ativa.";
    else {session_start();}                             //        echo "A sessão não está ativa.";
   // $sqlWhereInstruction = ' where 1=1 ';
/*
    if (!empty($_GET)) {
        $filtrarPor=trim($_GET['s']);
        //idade
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,1,1) == '1'){$x = $x1 . " 'ninfeta' "; $separador =",";};$x1 = $x; 
        if (substr($filtrarPor,2,1) == '1'){$x = $x1 . $separador . " 'novinha' "; $separador =",";};;$x1 = $x; 
        if (substr($filtrarPor,3,1) == '1'){$x = $x1 . $separador . " 'coroa' "; $separador =",";};;$x1 = $x; 
        if (substr($filtrarPor,4,1) == '1'){$x = $x1 . $separador . " 'idosa' "; $separador =",";};$x1 = $x; 
        $where = " idade in (" . $x . ")";
        if ($where != " idade in ()"){ 
            $x = $sqlWhereInstruction;
            $sqlWhereInstruction =  $x ." and " . $where;
        };
        //etnia
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,5,1) == '1'){$x = $x1 . " 'branca' "; $separador =",";};$x1 = $x; 
        if (substr($filtrarPor,6,1) == '1'){$x = $x1 . " 'mulata' "; $separador =",";};$x1 = $x; 
        if (substr($filtrarPor,7,1) == '1'){$x = $x1 . " 'negra' "; $separador =",";};$x1 = $x; 
        if (substr($filtrarPor,8,1) == '1'){$x = $x1 . " 'oriental' "; $separador =",";};$x1 = $x; 
        $where = " etnia in (" . $x . ")";
        if ($where != " etnia in ()"){ 
            $x = $sqlWhereInstruction;
            $sqlWhereInstruction =  $x ." and " . $where;
        };
        //cabelo
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,9,1) == '1'){$x = $x1 . " 'morena' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,10,1) == '1'){$x = $x1 . " 'loira' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,11,1) == '1'){$x = $x1 . " 'ruiva' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,12,1) == '1'){$x = $x1 . " 'outros' "; $separador =",";};$x1 = $x;
        $where = " cabelo in (" . $x . ")";
        if ($where != " cabelo in ()"){ 
            $x = $sqlWhereInstruction;
            $sqlWhereInstruction =  $x ." and " . $where;
        };
        //altura
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,13,1) == '1'){$x = $x1 . " 'alta' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,14,1) == '1'){$x = $x1 . " 'normal' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,15,1) == '1'){$x = $x1 . " 'mignon' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,16,1) == '1'){$x = $x1 . " 'ananzinha' "; $separador =",";};$x1 = $x;
        $where = " altura in (" . $x . ")";
        if ($where != " altura in ()"){ 
            $x = $sqlWhereInstruction;
            $sqlWhereInstruction =  $x ." and " . $where;
        };
        //biotipo
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,17,1) == '1'){$x = $x1 . " 'magra' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,18,1) == '1'){$x = $x1 . " 'normal' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,19,1) == '1'){$x = $x1 . " 'gordinha' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,20,1) == '1'){$x = $x1 . " 'fitness' "; $separador =",";};$x1 = $x;        
        $where = " biotipo in (" . $x . ")";
        if ($where != " biotipo in ()"){ 
            $x = $sqlWhereInstruction;
            $sqlWhereInstruction =  $x ." and " . $where;
        };
        //seios
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,21,1) == '1'){$x = $x1 . " 'natural' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,22,1) == '1'){$x = $x1 . " 'silicone' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,23,1) == '1'){$x = $x1 . " 'peituda' "; $separador =",";};$x1 = $x;
        if (substr($filtrarPor,24,1) == '1'){$x = $x1 . " 'peitinho' "; $separador =",";};$x1 = $x;
        $where = " peitos in (" . $x . ")";
        if ($where != " peitos in ()"){ 
            $x = $sqlWhereInstruction;
            $sqlWhereInstruction =  $x ." AND " . $where;
        };
        //caracteristicas
        $x = ""; $x1 = ""; $separador =''; $where = ""; 
        if (substr($filtrarPor,25,1) == '1'){$where = " caracteristicasPelo         = 'peluda' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,25,1) == '2'){$where = " caracteristicasPelo         = 'depilada' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,26,1) == '1'){$where = " caracteristicasGreluda      = 's' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,27,1) == '1'){$where = " caracteristicasApertadinha  = 's' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,28,1) == '1'){$where = " caracteristicasPiercing     = 's' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,29,1) == '1'){$where = " caracteristicasTatuada      = 's' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,30,1) == '1'){$where = " caracteristicasGravida      = 's' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        if (substr($filtrarPor,31,1) == '1'){$where = " caracteristicasLactante     = 's' "; $x = $sqlWhereInstruction; $sqlWhereInstruction =  $x ." and " . $where;};
        //echo '</br> ==='.$sqlWhereInstruction;
    }
*/
//    $sql = "SELECT * , year(curdate()) - anoNascimento as idade FROM anuncio ";
//    $_SESSION['sqlInstruction'] = $sql . $sqlWhereInstruction;
    //$sql = "SELECT * FROM anuncio where cod=1";
    $_SESSION['sqlInstruction'] = ' where 1=1 ';
    include("conexao.php"); 
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <!--<style>
            #divFiltro {display: none;}
        </style>-->
    </head>
    <body>
            <footer class="py-2 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
            </footer>
            <div id="divFiltro">
                <!--Navigation-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-8 px-lg-8 mt-8">
                            <div class="row gx-8 gx-lg-8 row-cols-8 row-cols-md-8 row-cols-xl-8 justify-content-center" style="font-size: small;">

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_i_ninfeta" onclick="mudaCor(this)">ninfeta</button>
                                    <button class="search_button" id="btn_i_novinha" onclick="mudaCor(this)">novinha</button>
                                    <button class="search_button" id="btn_i_coroa" onclick="mudaCor(this)">coroa</button>
                                    <button class="search_button" id="btn_i_idosa" onclick="mudaCor(this)">idosa</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_e_branca" onclick="mudaCor(this)">branca</button>  
                                    <button class="search_button" id="btn_e_mulata" onclick="mudaCor(this)">morena</button>
                                    <button class="search_button" id="btn_e_negra" onclick="mudaCor(this)">negra</button>  
                                    <button class="search_button" id="btn_e_oriental" onclick="mudaCor(this)">oriental</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_c_morena" onclick="mudaCor(this)">morena</button>
                                    <button class="search_button" id="btn_c_loira" onclick="mudaCor(this)">loira</button>
                                    <button class="search_button" id="btn_c_ruiva" onclick="mudaCor(this)">ruiva</button>
                                    <button class="search_button" id="btn_c_outros" onclick="mudaCor(this)">outras</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_a_alta" onclick="mudaCor(this)">alta</button>
                                    <button class="search_button" id="btn_a_normal" onclick="mudaCor(this)">normal</button>
                                    <button class="search_button" id="btn_a_mignon" onclick="mudaCor(this)">mignon</button>
                                    <button class="search_button" id="btn_a_ananzinha" onclick="mudaCor(this)">ananzinha</button>  
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_b_magra" onclick="mudaCor(this)">magra</button>  
                                    <button class="search_button" id="btn_b_normal" onclick="mudaCor(this)">normal</button>  
                                    <button class="search_button" id="btn_b_gordinha" onclick="mudaCor(this)">gordinha</button>
                                    <button class="search_button" id="btn_b_fitness" onclick="mudaCor(this)">fitness</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_p_natural" onclick="mudaCor(this)">natural</button>  
                                    <button class="search_button" id="btn_p_silicone" onclick="mudaCor(this)">siliconada</button>
                                    <button class="search_button" id="btn_p_peituda" onclick="mudaCor(this)">peituda</button>  
                                    <button class="search_button" id="btn_p_peitinho" onclick="mudaCor(this)">peitinho</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_x_peluda" onclick="mudaCor(this)">peluda</button>  
                                    <button class="search_button" id="btn_x_depilada" onclick="mudaCor(this)">depilada</button>
                                    <button class="search_button" id="btn_x_greluda" onclick="mudaCor(this)">greluda</button>  
                                    <button class="search_button" id="btn_x_apertadinha" onclick="mudaCor(this)">apertadinha</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <button class="search_button" id="btn_x_piercing" onclick="mudaCor(this)">piercing</button>  
                                    <button class="search_button" id="btn_x_tatuada" onclick="mudaCor(this)">tatuada</button>
                                    <button class="search_button" id="btn_x_gravida" onclick="mudaCor(this)">gravida</button>  
                                    <button class="search_button" id="btn_x_lactante" onclick="mudaCor(this)">lactante</button>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <input class="search_button button2"  list="locais" id="local" name="local" placeholder="Local">
                                    <datalist id="locais">
                                        <option value="Alphaville">
                                        <option value="Barueri">
                                        <option value="Butanta">
                                        <option value="Capital">
                                        <option value="Carapicuiba">
                                        <option value="Cotia">
                                        <option value="Embu das Artes">
                                        <option value="Guaruja">
                                        <option value="Guarulhos">
                                        <option value="Lapa">
                                        <option value="Liberdade">
                                        <option value="Mogi das Cruzes">
                                        <option value="Morumbi">
                                        <option value="Osasco">
                                        <option value="Santo Andre">
                                        <option value="Santo Amaro">
                                        <option value="Sao Vicente">
                                        <option value="Tatuape">
                                        <option value="Taboao da Eerra">
                                        <option value="Zona Norte">
                                        <option value="Zona Sul">
                                        <option value="Zona Leste">
                                        <option value="Zona Oeste">
                                        <option value="Litoral">
                                        <option value="Outros">
                                    </datalist>  
                                    <select class="search_button button2" style="height: 26px;" name="valor">
                                        <option value="" disabled selected>Valor</option>
                                        <option value="100">Até $ 100.00</option>
                                        <option value="200">Até $ 200.00</option>
                                        <option value="200+">Acima $ 200.00</option>
                                    </select> 
                                    &nbsp;
                                    <button class="search_button button2" id="btn_filtrar" onclick="functionFiltrar()">FILTRAR</button> 
                                </div>
                            </div>
                        </div>
                    </nav>
                
            </div>
        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-2 mt-2">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"> 
                    <table border="0" class="table">
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($result)) 
                                    { 
                                        $cod =  $row['cod'];
                                        $imagemPerfil = $row['imagemId'] . '_1.png';
                                        echo '<div class="col mb-5">';
                                        echo '    <div class="card h-100">';
                                        echo '      <div id=".circulo">';
                                       
                                        echo '       '.$nomeApresentacao;
                                       
                                        //echo '        <img onclick="ativafuncao(this)" style="border-radius: 10px; width: 260x;  height: 170px"  id="'. $cod .'" class="card-img-top" src="detail/images/'. $imagemPerfil .'" alt="..." />';
                                        echo '      </div>';
                                        echo '    </div>';
                                        echo '</div>';
                                        //$userName =  $row['nomeApresentacao'];
                                        //$idade = $row['anoNascimento'];
                                        //$telefone = $row['telefone'];
                                        //$bairro = $row['bairro'];
                                        //$cache = $row['cache'];
                                        //$altura = $row['altura'];
                                        //$imagemQuantidade = $row['imagemQuantidade'];
                                        //$anuncioDescricao = $row['anuncioDescricao'];
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script type="text/javascript">
            function toggleDiv() {
                var div = document.getElementById("divFiltro");
                if (div.style.display === "none") {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }
            }
            function mudaCor(el){
                const currentColor = event.target.style.backgroundColor;
                const nextColor = currentColor === 'rgba(var(--bs-dark-rgb)' ? '#F0F0F0' : 'rgba(var(--bs-dark-rgb)';
                event.target.style.backgroundColor = nextColor;
                el.style.backgroundColor = nextColor;
                if (el.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){el.style.color = "red";}else{el.style.color = "black";};
            }
            window.onclick = function(event) {
            if (event.target == 'HTMLImageElement') {
                modal.style.display = "none";
            }
            }
            function ativafuncao(el){
//                //alert(obj.id);
//                var modal = document.getElementById("myModal");
//                //var btn = document.getElementById(el.id);
//                var btn = el.id;
//                var span = document.getElementsByClassName("close")[0];
//                    modal.style.display = "block";
//                span.onclick = function() {
//                    modal.style.display = "none";
//                }
                window.location.assign("detail/detail.php?s="+el.id);
            }
            function functionFiltrar() {
                var x = ""; var x1 = "";
                //idade
                if (btn_i_ninfeta.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_i_novinha.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_i_coroa.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_i_idosa.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                //etnia
                if (btn_e_branca.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_e_mulata.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_e_negra.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_e_oriental.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                //cabelo
                if (btn_c_morena.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_c_loira.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_c_ruiva.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_c_outros.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                //altura
                if (btn_a_alta.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_a_normal.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_a_mignon.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_a_ananzinha.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                //biotipo
                if (btn_b_magra.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_b_normal.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_b_fitness.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_b_gordinha.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;                
                //peitos
                if (btn_p_natural.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_p_silicone.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_p_peituda.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_p_peitinho.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                //caracteristicas
                c0="0";
                if (btn_x_peluda.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){c0="1"};
                if (btn_x_depilada.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){c0="2"};
                if (btn_x_peluda.style.backgroundColor == 'rgba(var(--bs-dark-rgb)' &&  btn_depilada.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){c0="0"};
                x=x1+c0; x1 = x;
                if (btn_x_greluda.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_x_apertadinha.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_x_piercing.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_x_tatuada.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x; 
                if (btn_x_gravida.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                if (btn_x_lactante.style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){x=x1+"1"}else{x=x1+"0"};x1 = x;
                //alert('x443423423434324');                
                //window.open("index.php?s='" + x + "'",target="_self");
                window.open("index.php",target="_self");
                }
            </script>
    </body>
</html>
