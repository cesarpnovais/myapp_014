<!DOCTYPE html>

<?php
    if (session_status() == PHP_SESSION_ACTIVE) {}      //        echo "A sessão está ativa.";
    else {session_start();}                             //        echo "A sessão não está ativa.";

    if (!empty($_GET)) {
        $instructionSql=trim($_GET['i']);
        $functionType=trim($_GET['f']);
        $recordCode=trim($_GET['c']);
        $instructionSqlWhere=trim($_GET['i']);

        $_SESSION['sfunctionType'] = "'".$functionType."'";
        $_SESSION['sinstructionSql'] = "'".$instructionSql."'";
        $_SESSION['srecordCode'] = "'".$recordCode."'";
        $_SESSION['sinstructionSqlWhere'] = $instructionSql;

        if ($functionType == "'cadastrar'"){ 
             $_SESSION['sfunctionType'] = $functionType;
             $_SESSION['sinstructionSql'] = $instructionSql;
             $_SESSION['srecordCode'] = "'".$recordCode."'";
             $_SESSION['sinstructionSqlWhere'] = "";
             include("conexao.php");
        }
        else if ($functionType == "'alterar'"){ 
            $_SESSION['sfunctionType'] = $functionType;
            $_SESSION['sinstructionSql'] = $instructionSql;
            $_SESSION['srecordCode'] = $recordCode;
            $_SESSION['sinstructionSqlWhere'] = "";
            include("conexao.php");
       }
       else if ($recordCode != "'0'"){ 
        include("conexao.php");
       }
    } 
    else 
    if ($_SESSION['sinstructionSql'] = ""){
        $_SESSION['sfunctionType'] = "'cadastrado'";
        $_SESSION['sinstructionSql'] = " where cod = 0 ";
        $_SESSION['srecordCode'] = "0";
        $_SESSION['sinstructionSqlWhere'] = " where cod = 0 ";
        include("conexao.php");
    }

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
                <?php
                $result ="";
                $cpf = 0; $nomeRealCompleto = ""; $email = "";$anoNascimento = "";
                $cache = "";
                $nomeApresentacao = ""; $telefone = ""; $instagram = "";
                $estado = ""; $cidade = ""; $bairro = ""; $endereco = ""; 
                $altura = ""; $pe = ""; $peso = "";
                $etnia = "";
                $biotipo = ""; 
                $seios = ""; $seiosTamanho = ""; $seiosMamilo = "";  
                $bumbumGrande = "";  $bumbumRedondo = ""; $bumbumDuro = ""; 
                $coxa = ""; 
                $caractPiercingSeios = ""; $caractPiercingUmbigo = ""; $caractPiercingVagina = "";
                $olhosCor = "";
                $cabelo = ""; $cabeloTamanho = ""; $cabeloEstilo = "";
                $vaginaPubis = ""; $vaginaGreluda = ""; $vaginaApertadinha = ""; $vaginaGordinha = ""; $vaginaLabiosGrandes = ""; $vaginaRosadinha = "";
                $detalExotica = ""; $detalBocao = ""; $detalTatuada = ""; $detalDeficiente = ""; $detalGravida = ""; $detalLactante = ""; $detalCovinhasCostas = ""; $detalMarquinha = ""; 

                $servBeijoBoca = ""; $servBeijoGrego = ""; 
                $servAnal = ""; 
                $servOral = ""; $servDeixaChupar = ""; $servOralSemCapa = ""; $serv69 = ""; $servGargantaProfunda = "";   
                $servNamoradinha = ""; $servBdsm = ""; $servSubmissa = ""; $servApanhar = ""; $servAmigas = ""; $servSquirting = "";
                $servCasais = ""; $servMulher = ""; 
                $servSwing = ""; $servViagem = ""; $servPernoite = ""; 
                $servMassagem = ""; $servTailandesa = ""; $servEspanhola = "";
                $servLocal = ""; $servDomicio = ""; $servHotel = ""; $servMotel = ""; 
                $servFinalizarCorpo = ""; $servFinalizaBoca = ""; $servFinalizaRosto = ""; $servSemLimiteFinalizacao = "";
                $servCartaoCredito = ""; $servCartaoDebito = ""; $servDinheiro = ""; $servPix = "";

                $anuncioDescricao = ""; $anuncioOrigem = "";
                $imagemQuantidade = ""; $imagemId = ""; 
                $validacaoData = ""; $validacaoStatus = ""; $validacaoStatusMotivo = "";
                $classificacaoEstrelasAparencia = ""; $classificacaoEstrelasCheiro = ""; $classificacaoEstrelasAtendimento = ""; $classificacaoEstrelasSexo = "";
                $cadastroData = ""; $cadastroStatus  = "";
                if ($result != ''){
                    while($row = mysqli_fetch_array($result)) 
                        { 
                            $cod =  $row['cod'];
                            $cpf =  $row['cpf'];
                            $nomeRealCompleto =  $row['nomeRealCompleto'];
                            $email =  $row['email'];
                            $anoNascimento =  $row['anoNascimento']; $idade = $row['idade'];
                            $cache = $row['cache'];
                            $nomeApresentacao =  $row['nomeApresentacao'];
                            $telefone =  $row['telefone'];
                            $instagram =  $row['instagram'];
                            $estado =  $row['estado'];
                            $cidade =  $row['cidade'];
                            $bairro =  $row['bairro'];
                            $endereco =  $row['endereco'];
                            $altura =  $row['altura'];
                            $pe =  $row['pe'];
                            $peso = $row['peso'];
                            $etnia =  $row['etnia'];
                            $biotipo =  $row['biotipo'];
                            $seios =  $row['seios'];
                            $seiosTamanho =  $row['seiosTamanho'];
                            $seiosMamilo =  $row['seiosMamilo'];
                            $bumbumGrande  =  $row['bumbumGrande'];
                            $bumbumRedondo  =  $row['bumbumRedondo'];
                            $bumbumDuro  =  $row['bumbumDuro'];
                            $coxas  =  $row['coxas'];
                            $caractPiercingSeios =  $row['caractPiercingSeios'];
                            $caractPiercingUmbigo =  $row['caractPiercingUmbigo'];
                            $caractPiercingVagina =  $row['caractPiercingVagina'];
                            $olhosCor =  $row['olhosCor'];
                            $cabelo =  $row['cabelo'];
                            $cabeloTamanho =  $row['cabeloTamanho'];
                            $cabeloEstilo =  $row['cabeloEstilo'];
                            $vaginaPubis =  $row['vaginaPubis'];
                            $vaginaGreluda =  $row['vaginaGreluda'];
                            $vaginaApertadinha =  $row['vaginaApertadinha'];
                            $vaginaGordinha =  $row['vaginaGordinha'];
                            $vaginaLabiosGrandes =  $row['vaginaLabiosGrandes'];
                            $vaginaRosadinha =  $row['vaginaRosadinha'];
                            $detalExotica =  $row['detalExotica'];
                            $detalBocao =  $row['detalBocao'];
                            $detalTatuada =  $row['detalTatuada'];
                            $detalDeficiente =  $row['detalDeficiente'];
                            $detalGravida =  $row['detalGravida'];
                            $detalLactante =  $row['detalLactante'];
                            $detalCovinhasCostas =  $row['detalCovinhasCostas'];
                            $detalMarquinha =  $row['detalMarquinha'];
                            $servBeijoBoca =  $row['servBeijoBoca'];
                            $servBeijoGrego =  $row['servBeijoGrego'];
                            $servAnal =  $row['servAnal'];
                            $servOral =  $row['servOral'];
                            $servDeixaChupar =  $row['servDeixaChupar'];
                            $servOralSemCapa =  $row['servOralSemCapa'];
                            $serv69 =  $row['serv69'];
                            $servGargantaProfunda =  $row['servGargantaProfunda'];
                            $servNamoradinha =  $row['servNamoradinha'];
                            $servBdsm =  $row['servBdsm'];
                            $servSubmissa =  $row['servSubmissa'];
                            $servApanhar =  $row['servApanhar'];
                            $servAmigas =  $row['servAmigas'];
                            $servSquirting =  $row['servSquirting'];
                            $servCasais =  $row['servCasais'];
                            $servMulher =  $row['servMulher'];
                            $servSwing =  $row['servSwing'];
                            $servViagem =  $row['servViagem'];
                            $servPernoite =  $row['servPernoite'];
                            $servMassagem =  $row['servMassagem'];
                            $servTailandesa =  $row['servTailandesa'];
                            $servEspanhola =  $row['servEspanhola'];
                            $servLocal =  $row['servLocal'];
                            $servDomicio  =  $row['servDomicilio'];
                            $servHotel  =  $row['servHotel'];
                            $servMotel  =  $row['servMotel'];
                            $servFinalizaCorpo =  $row['servFinalizaCorpo'];
                            $servFinalizaBoca =  $row['servFinalizaBoca'];
                            $servFinalizaRosto =  $row['servFinalizaRosto'];
                            $servSemLimiteFinalizacao =  $row['servSemLimiteFinalizacao'];
                            $servCartaoCredito =  $row['servPagtoCartaoCredito'];
                            $servCartaoDebito =  $row['servPagtoCartaoDebito'];
                            $servDinheiro =  $row['servPagtoDinheiro'];
                            $servPix =  $row['servPagtoPix'];
                            $anuncioDescricao =  $row['anuncioDescricao'];
                            $anuncioOrigem =  $row['anuncioOrigem'];
                            $imagemQuantidade =  $row['imagemQuantidade'];
                            $imagemId =  $row['imagemId'];
                            $validacaoData =  $row['validacaoData'];
                            $validacaoStatus =  $row['validacaoStatus'];
                            $validacaoStatusMotivo =  $row['validacaoStatusMotivo'];
                            $classificacaoEstrelasAparencia =  $row['classificacaoEstrelasAparencia'];
                            $classificacaoEstrelasCheiro =  $row['classificacaoEstrelasCheiro'];
                            $classificacaoEstrelasAtendimento =  $row['classificacaoEstrelasAtendimento'];
                            $classificacaoEstrelasSexo =  $row['classificacaoEstrelasSexo'];
                            $cadastroData =  $row['cadastroData'];
                            $cadastroStatus  =  $row['cadastroStatus'];
//                        }
                    }
                }?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-1 px-lg-1 mt-1">
                            <div class="row gx-1 gx-lg-1 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center" style="font-size: small;">
                                <div class="col mb-1" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>DADOS PESSOAIS </strong></h6></div>
                                    <?php echo '<input class="search_button button2"  id="cod" name="cod" placeholder="ID"  disabled value="'.$cod.'">'; ?>
                                    <?php echo '<input class="search_button button2"  id="imagemQuantidade" name="imagemQuantidade" placeholder="0" value="'.$imagemQuantidade.'">'; ?>
                                    <?php echo '<input class="search_button button2"  style="width:150px" id="cpf" name="cpf" placeholder="CPF" value="'.$cpf.'">'; ?>
                                    <?php echo '<input class="search_button button2"  style="width:400px" id="nomerealcompleto" name="nomerealcompleto" placeholder="NOME REAL COMPLETO" value="'.$nomeRealCompleto.'">'; ?>
                                    <?php echo '<input class="search_button button2"  style="width:300px" id="email" name="email" placeholder="E-MAIL" value="'.$email.'">'; ?>
                                    <?php echo '<input class="search_button button2"  id="anoNascimento" name="anoNascimento" placeholder="ANO NASCIMENTO" value="'.$anoNascimento.'">'; ?>
                                    <br>
                                    <?php echo '<input class="search_button button2"  id="cache" name="cache" placeholder="CACHÊ" value="'.$cache.'">'; ?>
                                    <br>
                                    <?php echo '<input class="search_button button2"  style="width:200px" id="nomeapresentacao" name="nomeapresentacao" placeholder="NOME APRESENTAÇÃO" value="'.$nomeApresentacao.'">'; ?>
                                    <?php echo '<input class="search_button button2"  style="width:150px" id="telefone" name="telefone" placeholder="TELEFONE" value="'.$telefone.'">'; ?>
                                    <?php echo '<input class="search_button button2"  id="instagram" name="instagram" placeholder="INSTAGRAM" value="'.$instagram.'">'; ?>
                                    <br>
                                    <?php echo '<input class="search_button button2"  id="estado" name="estado" placeholder="ESTADO" value="'.$estado.'">'; ?>
                                    <?php echo '<input class="search_button button2"  id="cidade" name="cidade" placeholder="CIDADE" value="'.$cidade.'">'; ?>
                                    <?php echo '<input class="search_button button2"  style="width:150px" id="bairro" name="bairro" placeholder="BAIRRO" value="'.$bairro.'">'; ?>
                                    <?php echo '<input class="search_button button2"  style="width:300px" id="endereco" name="endereco" placeholder="ENDEREÇO" value="'.$endereco.'">'; ?>
                                    <br>
                                    <?php echo '<input class="search_button button2"  id="altura" name="altura" placeholder="ALTURA" value="'.$altura.'">'; ?>
                                    <?php echo '<input class="search_button button2"  id="pes" name="pes" placeholder="PÉS" value="'.$pe.'">'; ?>
                                    <?php echo '<input class="search_button button2"  id="peso" name="peso" placeholder="PESO" value="'.$peso.'">'; ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-6 px-lg-6 mt-6">
                            <div class="row gx-6 gx-lg-6 row-cols-6 row-cols-md-6 row-cols-xl-6 justify-content-center" style="font-size: small;">
                                <div class="container" style="width: 100%;">
                                    <?php
                                        $counter = 1;
                                        while($counter <= $imagemQuantidade) {
                                            echo '<img style="width: 150px; height: 150px;" src="detail/image/'.$imagemId.'_'.$counter.'.jpg" alt="" id="'.$imagemId.'_'.$counter.'"  />';
                                            $counter++;
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-6 px-lg-6 mt-6">
                            <div class="row gx-6 gx-lg-6 row-cols-6 row-cols-md-6 row-cols-xl-6 justify-content-center" style="font-size: small;">

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>ETNIA</strong></h6></div>
                                    <button class="search_button" id="btn_e_branca" onclick="mudaCorEtnia(this)">branca</button>
                                    <button class="search_button" id="btn_e_mulata" onclick="mudaCorEtnia(this)">morena</button>
                                    <button class="search_button" id="btn_e_negra" onclick="mudaCorEtnia(this)">negra</button>
                                    <button class="search_button" id="btn_e_oriental" onclick="mudaCorEtnia(this)">oriental</button>
                                    <button class="search_button" id="btn_e_india" onclick="mudaCorEtnia(this)">india</button>
                                    <button class="search_button" id="btn_e_outras" onclick="mudaCorEtnia(this)">outra</button>
                                    <?php                                    
                                    if ($etnia == 'branca'){echo "<script type='text/javascript'>btn_e_branca.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_e_branca.style.color = 'white';</script>";}
                                    if ($etnia == 'mulata'){echo "<script type='text/javascript'>btn_e_mulata.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_e_mulata.style.color = 'white';</script>";}
                                    if ($etnia == 'negra'){echo "<script type='text/javascript'>btn_e_negra.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_e_negra.style.color = 'white';</script>";}
                                    if ($etnia == 'oriental'){echo "<script type='text/javascript'>btn_e_oriental.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_e_oriental.style.color = 'white';</script>";}
                                    if ($etnia == 'india'){echo "<script type='text/javascript'>btn_e_india.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_e_india.style.color = 'white';</script>";}
                                    if ($etnia == 'outras'){echo "<script type='text/javascript'>btn_e_outras.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_e_outras.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>

                                    <div style="color:aliceblue" ><h6><strong>CORPO</strong></h6></div>
                                    <button class="search_button" id="btn_b_magra" onclick="mudaCorBiotipo(this)">magra</button>
                                    <button class="search_button" id="btn_b_normal" onclick="mudaCorBiotipo(this)">normal</button>
                                    <button class="search_button" id="btn_b_fitness" onclick="mudaCorBiotipo(this)">fitness</button>
                                    <button class="search_button" id="btn_b_gordinha" onclick="mudaCorBiotipo(this)">gordinha</button>
                                    <button class="search_button" id="btn_b_bbw" onclick="mudaCorBiotipo(this)">bbw</button>
                                    <?php                                    
                                    if ($biotipo == 'magra'){echo "<script type='text/javascript'>btn_b_magra.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_b_magra.style.color = 'white';</script>";}
                                    if ($biotipo == 'normal'){echo "<script type='text/javascript'>btn_b_normal.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_b_normal.style.color = 'white';</script>";}
                                    if ($biotipo == 'fitness'){echo "<script type='text/javascript'>btn_b_fitness.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_b_fitness.style.color = 'white';</script>";}
                                    if ($biotipo == 'gordinha'){echo "<script type='text/javascript'>btn_b_gordinha.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_b_gordinha.style.color = 'white';</script>";}
                                    if ($biotipo == 'bbw'){echo "<script type='text/javascript'>btn_b_bbw.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_b_bbw.style.color = 'white';</script>";}
                                    ?>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>SEIOS</strong></h6></div>
                                    <button class="search_button" id="btn_p_natural" onclick="mudaCorSeios(this)">natural</button>
                                    <button class="search_button" id="btn_p_siliconada" onclick="mudaCorSeios(this)">siliconada</button>
                                    <?php
                                    if ($seiosTamanho == 'natural'){echo "<script type='text/javascript'>btn_p_natural.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_p_natural.style.color = 'white';</script>";}
                                    if ($seiosTamanho == 'siliconada'){echo "<script type='text/javascript'>btn_p_siliconada.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_p_siliconada.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <div style="color:aliceblue" ><h6><strong>TAMANHO</strong></h6></div>                                    
                                    <button class="search_button" id="btn_p_peitinho" onclick="mudaCorSeiosTamanho(this)">peitinho</button>
                                    <button class="search_button" id="btn_p_medio" onclick="mudaCorSeiosTamanho(this)">medio</button>
                                    <button class="search_button" id="btn_p_grande" onclick="mudaCorSeiosTamanho(this)">grande</button>
                                    <button class="search_button" id="btn_p_peituda" onclick="mudaCorSeiosTamanho(this)">peituda</button>
                                    <?php
                                    if ($seios == 'peitinho'){echo "<script type='text/javascript'>btn_p_peitinho.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_p_peitinho.style.color = 'white';</script>";}
                                    if ($seios == 'medio'){echo "<script type='text/javascript'>btn_p_medio.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_p_medio.style.color = 'white';</script>";}
                                    if ($seios == 'grande'){echo "<script type='text/javascript'>btn_p_grande.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_p_grande.style.color = 'white';</script>";}
                                    if ($seios == 'peituda'){echo "<script type='text/javascript'>btn_p_peituda.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_p_peituda.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <div style="color:aliceblue" ><h6><strong>MAMILOS</strong></h6></div>
                                    <button class="search_button" id="btn_pm_pequeno" onclick="mudaCorMamilos(this)">pequeno</button>
                                    <button class="search_button" id="btn_pm_normal" onclick="mudaCorMamilos(this)">normal</button>
                                    <button class="search_button" id="btn_pm_grande" onclick="mudaCorMamilos(this)">grande</button>
                                    <button class="search_button" id="btn_pm_invertido" onclick="mudaCorMamilos(this)">invertido</button>
                                    <?php                                    
                                    if ($seiosMamilo == 'pequeno'){echo "<script type='text/javascript'>btn_pm_pequeno.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_pm_pequeno.style.color = 'white';</script>";}
                                    if ($seiosMamilo == 'normal'){echo "<script type='text/javascript'>btn_pm_normal.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_pm_normal.style.color = 'white';</script>";}
                                    if ($seiosMamilo == 'grande'){echo "<script type='text/javascript'>btn_pm_grande.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_pm_grande.style.color = 'white';</script>";}
                                    if ($seiosMamilo == 'invertido'){echo "<script type='text/javascript'>btn_pm_invertido.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_pm_invertido.style.color = 'white';</script>";}
                                    ?>
                                </div>
                                
                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>BUMBUM</strong></h6></div>
                                    <button class="search_button" id="btn_bb_grande" onclick="mudaCor(this)">grande</button>
                                    <button class="search_button" id="btn_bb_redondo" onclick="mudaCor(this)">redondo</button>
                                    <button class="search_button" id="btn_bb_duro" onclick="mudaCor(this)">duro</button>
                                    <?php                                    
                                    if ($bumbumTamanho == 's'){echo "<script type='text/javascript'>btn_bb_grande.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_bb_grande.style.color = 'white';</script>";}
                                    if ($bumbumRedondo == 's'){echo "<script type='text/javascript'>btn_bb_redondo.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_bb_redondo.style.color = 'white';</script>";}
                                    if ($bumbumDuro == 's'){echo "<script type='text/javascript'>btn_bb_duro.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_bb_duro.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <div style="color:aliceblue" ><h6><strong>COXAS</strong></h6></div>
                                    <button class="search_button" id="btn_cx_fina" onclick="mudaCorCoxa(this)">fina</button>
                                    <button class="search_button" id="btn_cx_normal" onclick="mudaCorCoxa(this)">normal</button>
                                    <button class="search_button" id="btn_cx_grossa" onclick="mudaCorCoxa(this)">grossa</button>
                                    <button class="search_button" id="btn_cx_malhada" onclick="mudaCorCoxa(this)">malhada</button>
                                    <button class="search_button" id="btn_cx_musculosa" onclick="mudaCorCoxa(this)">musculosa</button>
                                    <?php
                                    if ($coxaTamanho == 'fina'){echo "<script type='text/javascript'>btn_cx_fina.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_cx_fina.style.color = 'white';</script>";}
                                    if ($coxaTamanho == 'normal'){echo "<script type='text/javascript'>btn_cx_normal.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_cx_normal.style.color = 'white';</script>";}
                                    if ($coxaTamanho == 'grossa'){echo "<script type='text/javascript'>btn_cx_grossa.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_cx_grossa.style.color = 'white';</script>";}
                                    if ($coxaTamanho == 'malhada'){echo "<script type='text/javascript'>btn_cx_malhada.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_cx_malhada.style.color = 'white';</script>";}
                                    if ($coxaTamanho == 'musculosa'){echo "<script type='text/javascript'>btn_cx_musculosa.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_cx_musculosa.style.color = 'white';</script>";}
                                    ?>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>PIERCING</strong></h6></div>
                                    <button class="search_button" id="btn_x_piercing_seios" onclick="mudaCor(this)">seios</button>
                                    <button class="search_button" id="btn_x_piercing_umbigo" onclick="mudaCor(this)">umbigo</button>
                                    <button class="search_button" id="btn_x_piercing_vagina" onclick="mudaCor(this)">vagina</button>
                                    <?php                                    
                                    if ($caractPiercingSeios == 's'){echo "<script type='text/javascript'>btn_x_piercing_seios.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_piercing_seios.style.color = 'white';</script>";}
                                    if ($caractPiercingUmbigo == 's'){echo "<script type='text/javascript'>btn_x_piercing_umbigo.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_piercing_umbigo.style.color = 'white';</script>";}
                                    if ($caractPiercingVagina == 's'){echo "<script type='text/javascript'>btn_x_piercing_vagina.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_piercing_vagina.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <div style="color:aliceblue" ><h6><strong>OLHOS</strong></h6></div>
                                    <button class="search_button" id="btn_o_castanho" onclick="mudaCorOlhos(this)">castanho</button>
                                    <button class="search_button" id="btn_o_preto" onclick="mudaCorOlhos(this)">preto</button>
                                    <button class="search_button" id="btn_o_verde" onclick="mudaCorOlhos(this)">verde</button>
                                    <button class="search_button" id="btn_o_azul" onclick="mudaCorOlhos(this)">azul</button>
                                    <?php                                    
                                    if ($olhosCor == 'castanho'){echo "<script type='text/javascript'>btn_o_castanho.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_o_castanho.style.color = 'white';</script>";}
                                    if ($olhosCor == 'preto'){echo "<script type='text/javascript'>btn_o_preto.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_o_preto.style.color = 'white';</script>";}
                                    if ($olhosCor == 'verde'){echo "<script type='text/javascript'>btn_o_verde.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_o_verde.style.color = 'white';</script>";}
                                    if ($olhosCor == 'azul'){echo "<script type='text/javascript'>btn_o_azul.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_o_azul.style.color = 'white';</script>";}
                                    ?>
                                </div>
                                
                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>CABELO</strong></h6></div>
                                    <button class="search_button" id="btn_c_preto" onclick="mudaCorCabelo(this)">preto</button>
                                    <button class="search_button" id="btn_c_loira" onclick="mudaCorCabelo(this)">loira</button>
                                    <button class="search_button" id="btn_c_ruiva" onclick="mudaCorCabelo(this)">ruiva</button>
                                    <button class="search_button" id="btn_c_castanho" onclick="mudaCorCabelo(this)">castanho</button>
                                    <button class="search_button" id="btn_c_outros" onclick="mudaCorCabelo(this)">outras</button>
                                    <?php                                    
                                    if ($cabelo == 'preto'){echo "<script type='text/javascript'>btn_c_preto.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_preto.style.color = 'white';</script>";}
                                    if ($cabelo == 'loira'){echo "<script type='text/javascript'>btn_c_loira.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_loira.style.color = 'white';</script>";}
                                    if ($cabelo == 'ruiva'){echo "<script type='text/javascript'>btn_c_ruiva.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_ruiva.style.color = 'white';</script>";}
                                    if ($cabelo == 'castanho'){echo "<script type='text/javascript'>btn_c_castanho.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_castanho.style.color = 'white';</script>";}
                                    if ($cabelo == 'outras'){echo "<script type='text/javascript'>btn_c_outros.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_outros.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <button class="search_button" id="btn_c_careca" onclick="mudaCorCabeloTamanho(this)">careca</button>
                                    <button class="search_button" id="btn_c_curto" onclick="mudaCorCabeloTamanho(this)">curto</button>
                                    <button class="search_button" id="btn_c_medio" onclick="mudaCorCabeloTamanho(this)">medio</button>
                                    <button class="search_button" id="btn_c_longo" onclick="mudaCorCabeloTamanho(this)">longo</button>
                                    <?php                                    
                                    if ($cabeloTamanho == 'careca'){echo "<script type='text/javascript'>btn_c_careca.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_careca.style.color = 'white';</script>";}
                                    if ($cabeloTamanho == 'curto'){echo "<script type='text/javascript'>btn_c_curto.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_curto.style.color = 'white';</script>";}
                                    if ($cabeloTamanho == 'medio'){echo "<script type='text/javascript'>btn_c_medio.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_medio.style.color = 'white';</script>";}
                                    if ($cabeloTamanho == 'longo'){echo "<script type='text/javascript'>btn_c_longo.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_longo.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <button class="search_button" id="btn_c_liso" onclick="mudaCorCabeloEstilo(this)">liso</button>
                                    <button class="search_button" id="btn_c_cacheado" onclick="mudaCorCabeloEstilo(this)">cacheado</button>
                                    <?php                                    
                                    if ($cabeloEstilo == 'liso'){echo "<script type='text/javascript'>btn_c_liso.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_liso.style.color = 'white';</script>";}
                                    if ($cabeloEstilo == 'cacheado'){echo "<script type='text/javascript'>btn_c_cacheado.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_c_cacheado.style.color = 'white';</script>";}
                                    ?>
                                </div>

                                <div class="col mb-12" style="font-size: small; text-align: center;">
                                    <div style="color:aliceblue" ><h6><strong>VAGINA</strong></h6></div>
                                    <button class="search_button" id="btn_v_depilada" onclick="mudaCorVagina(this)">depilada</button>
                                    <button class="search_button" id="btn_v_pelinho" onclick="mudaCorVagina(this)">pelinho</button>
                                    <button class="search_button" id="btn_v_peluda" onclick="mudaCorVagina(this)">peluda</button>
                                    <?php                                    
                                    if ($vaginaPubis == 'depilada'){echo "<script type='text/javascript'>btn_v_depilada.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_depilada.style.color = 'white';</script>";}
                                    if ($vaginaPubis == 'pelinho'){echo "<script type='text/javascript'>btn_v_pelinho.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_pelinho.style.color = 'white';</script>";}
                                    if ($vaginaPubis == 'peluda'){echo "<script type='text/javascript'>btn_v_peluda.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_peluda.style.color = 'white';</script>";}
                                    ?>
                                    <br><br>
                                    <button class="search_button" id="btn_v_greluda" onclick="mudaCor(this)">greluda</button>
                                    <button class="search_button" id="btn_v_apertadinha" onclick="mudaCor(this)">apertadinha</button>
                                    <button class="search_button" id="btn_v_gordinha" onclick="mudaCor(this)">gordinha</button>
                                    <button class="search_button" id="btn_v_labiosgrandes" onclick="mudaCor(this)">labios grandes</button>
                                    <button class="search_button" id="btn_v_rosadinha" onclick="mudaCor(this)">rosadinha</button>
                                    <?php                                    
                                    if ($vaginaGreluda == 's'){echo "<script type='text/javascript'>btn_v_greluda.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_greluda.style.color = 'white';</script>";}
                                    if ($vaginaApertadinha == 's'){echo "<script type='text/javascript'>btn_v_apertadinha.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_apertadinha.style.color = 'white';</script>";}
                                    if ($vaginaGordinha == 's'){echo "<script type='text/javascript'>btn_v_gordinha.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_gordinha.style.color = 'white';</script>";}
                                    if ($vaginaLabiosGrandes == 's'){echo "<script type='text/javascript'>btn_v_labiosgrandes.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_labiosgrandes.style.color = 'white';</script>";}
                                    if ($vaginaRosadinha == 's'){echo "<script type='text/javascript'>btn_v_rosadinha.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_v_rosadinha.style.color = 'white';</script>";}
                                    ?>
                                </div>
                            </div>
                        </div>
                    </nav>                    
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-1 px-lg-1 mt-1">
                            <div class="row gx-1 gx-lg-1 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center" style="font-size: small;width: 100%;">
                            <div class="col mb-1" style="width: 100%; font-size: small; text-align: center;">
                                <div class="container" style="width: 100%;">
                                    <div style="color:aliceblue" ><h6><strong>DETALHES</strong></h6></div>
                                            <button class="search_button" id="btn_x_exotica" onclick="mudaCor(this)">exotica</button>
                                            <button class="search_button" id="btn_x_bocao" onclick="mudaCor(this)">bocao</button>
                                            <button class="search_button" id="btn_x_tatuada" onclick="mudaCor(this)">tatuada</button>
                                            <button class="search_button" id="btn_x_deficiente" onclick="mudaCor(this)">deficiente</button>
                                            <button class="search_button" id="btn_x_gravida" onclick="mudaCor(this)">gravida</button>
                                            <button class="search_button" id="btn_x_lactante" onclick="mudaCor(this)">lactante</button>
                                            <button class="search_button" id="btn_x_covinhascostas" onclick="mudaCor(this)">covinhas</button>
                                            <button class="search_button" id="btn_x_marquinha" onclick="mudaCor(this)">marquinha</button>
                                            <?php                                    
                                            if ($detalExotica == 's'){echo "<script type='text/javascript'>btn_x_exotica.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_exotica.style.color = 'white';</script>";}
                                            if ($detalBocao == 's'){echo "<script type='text/javascript'>btn_x_bocao.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_bocao.style.color = 'white';</script>";}
                                            if ($detalTatuada == 's'){echo "<script type='text/javascript'>btn_x_tatuada.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_tatuada.style.color = 'white';</script>";}
                                            if ($detalDeficiente == 's'){echo "<script type='text/javascript'>btn_x_deficiente.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_deficiente.style.color = 'white';</script>";}
                                            if ($detalGravida == 's'){echo "<script type='text/javascript'>btn_x_gravida.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_gravida.style.color = 'white';</script>";}
                                            if ($detalLactante == 's'){echo "<script type='text/javascript'>btn_x_lactante.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_lactante.style.color = 'white';</script>";}
                                            if ($detalCovinhasCostas == 's'){echo "<script type='text/javascript'>btn_x_covinhascostas.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_covinhascostas.style.color = 'white';</script>";}
                                            if ($detalMarquinha == 's'){echo "<script type='text/javascript'>btn_x_marquinha.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_marquinha.style.color = 'white';</script>";}
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-1 px-lg-1 mt-1">
                            <div class="row gx-1 gx-lg-1 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center" style="font-size: small;width: 100%;">
                            <div class="col mb-1" style="width: 100%; font-size: small; text-align: center;">
                                <div class="container" style="width: 100%;">
                                <div style="color:aliceblue" ><h6><strong>SERVIÇOS</strong></h6></div>
                                    <button class="search_button" id="btn_x_beijoboca" onclick="mudaCor(this)">beijo boca</button>
                                    <button class="search_button" id="btn_x_beijogrego" onclick="mudaCor(this)">beijo grego</button>
                                    <br>
                                    <button class="search_button" id="btn_x_anal" onclick="mudaCor(this)">anal</button>
                                    <br>
                                    <button class="search_button" id="btn_x_oral" onclick="mudaCor(this)">oral</button>
                                    <button class="search_button" id="btn_x_deixachupar" onclick="mudaCor(this)">deixa chupar</button>
                                    <button class="search_button" style="width:160px"  id="btn_x_oralpelo" onclick="mudaCor(this)">oral sem camisinha</button>
                                    <button class="search_button" id="btn_x_oral69" onclick="mudaCor(this)">69</button>
                                    <button class="search_button" style="width:200px" id="btn_x_gargantaprofunda" onclick="mudaCor(this)">garganta profunda</button>
                                    <br>
                                    <button class="search_button" id="btn_x_namoradinha" onclick="mudaCor(this)">namoradinha</button>                            
                                    <button class="search_button" id="btn_x_bdsm" onclick="mudaCor(this)">bdsm</button>
                                    <button class="search_button" id="btn_x_submissa" onclick="mudaCor(this)">submissa</button>
                                    <button class="search_button" id="btn_x_apanhar" onclick="mudaCor(this)">apanhar</button>
                                    <button class="search_button" id="btn_x_amiga" onclick="mudaCor(this)">amigas</button>
                                    <button class="search_button" id="btn_x_squirting" onclick="mudaCor(this)">squirting</button>
                                    <br>
                                    <button class="search_button" id="btn_x_casais" onclick="mudaCor(this)">casais</button>
                                    <button class="search_button" id="btn_x_mulher" onclick="mudaCor(this)">mulheres</button>
                                    <br>
                                    <button class="search_button" id="btn_x_swing" onclick="mudaCor(this)">swing</button>
                                    <button class="search_button" id="btn_x_viagem" onclick="mudaCor(this)">viagem</button>
                                    <button class="search_button" id="btn_x_pernoite" onclick="mudaCor(this)">pernoite</button>
                                    <br>
                                    <button class="search_button" id="btn_x_massagem" onclick="mudaCor(this)">massagem</button>
                                    <button class="search_button" id="btn_x_tailandesa" onclick="mudaCor(this)">tailandesa</button>
                                    <button class="search_button" id="btn_x_espanhola" onclick="mudaCor(this)">espanhola</button>
                                    <br>    
                                    <button class="search_button" id="btn_x_local" onclick="mudaCor(this)">local</button>
                                    <button class="search_button" id="btn_x_domicilio" onclick="mudaCor(this)">domicilio</button>
                                    <button class="search_button" id="btn_x_hotel" onclick="mudaCor(this)">hotel</button>
                                    <button class="search_button" id="btn_x_motel" onclick="mudaCor(this)">motel</button>
                                    <br>
                                    <button class="search_button" id="btn_x_finalizacorpo" onclick="mudaCor(this)">finalizacao corpo</button>
                                    <button class="search_button" id="btn_x_finalizarosto" onclick="mudaCor(this)">finalizacao rosto</button>
                                    <button class="search_button" id="btn_x_finalizaboca" onclick="mudaCor(this)">finalizacao boca</button>
                                    <button class="search_button" id="btn_x_semlimitefinalizacao" onclick="mudaCor(this)">sem limite finalização</button>
                                    <br>
                                    <button class="search_button" id="btn_x_cartaocredito" onclick="mudaCor(this)">crédito</button>
                                    <button class="search_button" id="btn_x_cartaodebito" onclick="mudaCor(this)">débito</button>
                                    <button class="search_button" id="btn_x_dinheiro" onclick="mudaCor(this)">dinheiro</button>
                                    <button class="search_button" id="btn_x_pix" onclick="mudaCor(this)">pix</button>
                                    
                                    <?php                                    
                                        if ($servDeixaChupar == 's'){echo "<script type='text/javascript'>btn_x_deixachupar.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_deixachupar.style.color = 'white';</script>";}
                                        if ($servOralSemCapa == 's'){echo "<script type='text/javascript'>btn_x_oralpelo.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_oralpelo.style.color = 'white';</script>";}
                                        if ($servApanhar == 's'){echo "<script type='text/javascript'>btn_x_apanhar.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_apanhar.style.color = 'white';</script>";}
                                        if ($servAmigas == 's'){echo "<script type='text/javascript'>btn_x_amiga.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_amiga.style.color = 'white';</script>";}
                                        if ($servBeijoBoca == 's'){echo "<script type='text/javascript'>btn_x_beijoboca.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_beijoboca.style.color = 'white';</script>";}
                                        if ($servBeijoGrego == 's'){echo "<script type='text/javascript'>btn_x_beijogrego.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_beijogrego.style.color = 'white';</script>";}
                                        if ($servAnal == 's'){echo "<script type='text/javascript'>btn_x_anal.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_anal.style.color = 'white';</script>";}
                                        if ($servSquirting == 's'){echo "<script type='text/javascript'>btn_x_squirting.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_squirting.style.color = 'white';</script>";}
                                        if ($servCasais == 's'){echo "<script type='text/javascript'>btn_x_casais.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_casais.style.color = 'white';</script>";}
                                        if ($servMulher == 's'){echo "<script type='text/javascript'>btn_x_mulher.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_mulher.style.color = 'white';</script>";}
                                        if ($servSwing == 's'){echo "<script type='text/javascript'>btn_x_swing.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_swing.style.color = 'white';</script>";}
                                        if ($servViagem == 's'){echo "<script type='text/javascript'>btn_x_viagem.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_viagem.style.color = 'white';</script>";}
                                        if ($servPernoite == 's'){echo "<script type='text/javascript'>btn_x_pernoite.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_pernoite.style.color = 'white';</script>";}
                                        if ($servNamoradinha == 's'){echo "<script type='text/javascript'>btn_x_namoradinha.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_namoradinha.style.color = 'white';</script>";}
                                        if ($servBdsm == 's'){echo "<script type='text/javascript'>btn_x_bdsm.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_bdsm.style.color = 'white';</script>";}
                                        if ($servSubmissa == 's'){echo "<script type='text/javascript'>btn_x_submissa.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_submissa.style.color = 'white';</script>";}
                                        if ($servLocal == 's'){echo "<script type='text/javascript'>btn_x_local.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_local.style.color = 'white';</script>";}
                                    
                                        if ($servFinalizaCorpo == 's'){echo "<script type='text/javascript'>btn_x_finalizacorpo.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_finalizacorpo.style.color = 'white';</script>";}
                                        if ($servFinalizaRosto == 's'){echo "<script type='text/javascript'>btn_x_finalizarosto.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_finalizarosto.style.color = 'white';</script>";}
                                        if ($servFinalizaBoca == 's'){echo "<script type='text/javascript'>btn_x_finalizaboca.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_finalizaboca.style.color = 'white';</script>";}

                                        if ($servSemLimiteFinalizacao == 's'){echo "<script type='text/javascript'>btn_x_semlimitefinalizacao.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_semlimitefinalizacao.style.color = 'white';</script>";}

                                        if ($servCartaoCredito == 's'){echo "<script type='text/javascript'>btn_x_cartaocredito.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_cartaocredito.style.color = 'white';</script>";}
                                        if ($servCartaoDebito == 's'){echo "<script type='text/javascript'>btn_x_cartaodebito.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_cartaodebito.style.color = 'white';</script>";}
                                        if ($servDinheiro == 's'){echo "<script type='text/javascript'>btn_x_dinheiro.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_dinheiro.style.color = 'white';</script>";}
                                        if ($servPix == 's'){echo "<script type='text/javascript'>btn_x_pix.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';btn_x_pix.style.color = 'white';</script>";}
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-1 px-lg-1 mt-1">
                            <div class="container" >
                                <div class="row gx-1 gx-lg-1 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center" style="font-size: small;width: 100%;">
                                    <div class="col mb-1" style="width: 100%; font-size: small; text-align: center;">
                                        <?php  echo '<textarea style="width: 100%; height: 150px" class="form-control" placeholder="Descrição do anúncio" name="anuncioDescricao"  id="anuncioDescricao" row="10" >'.$anuncioDescricao.'</textarea>'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-1 px-lg-1 mt-1">
                            <div class="container">
                                <div class="row gx-1 gx-lg-1 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center" style="font-size: small;width: 100%;">
                                    <div class="col mb-1" style="width: 100%; font-size: small; text-align: center;">
                                        <?php  echo '<textarea style="width: 100%; height: 50px" class="form-control" placeholder="link origem" name="anuncioOrigem"  id="anuncioOrigem" row="10" >'.$anuncioOrigem.'</textarea>'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <br>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <div class="container px-1 px-lg-1 mt-1" style=" text-align: center;">
                            <div class="container">
                                <button type="button" onclick="functionSave()"> SALVAR </button>
                            </div>
                        </div>
                    </nav>
            </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <script type="text/javascript" src="jquery.min.js"></script>
            <script type="text/javascript" src="jquery.form.js"></script>
            <script type="text/javascript">

            const imagem = document.getElementById(el);
            const legenda = document.getElementById(el);

            imagem.addEventListener('mouseover', () => {
                alert("eeee");
                legenda.style.display = 'block'; // Mostra a legenda quando o mouse passa sobre a imagem
            });

            imagem.addEventListener('mouseout', () => {
                legenda.style.display = 'none'; // Esconde a legenda quando o mouse sai da imagem
            });

            function uploadImage(){
                //$(document).ready(function(){
                    /* #imagem é o id do input, ao alterar o conteudo do input execurará a função baixo */
                    $('#imagem').live('change',function(){
                        $('#visualizar').html('<img src="ajax-loader.gif" alt="Enviando..."/> Enviando...');
                        /* Efetua o Upload sem dar refresh na pagina */           
                        $('#formulario').ajaxForm({
                            target:'#visualizar' // o callback será no elemento com o id #visualizar
                        }).submit();
                    });                
                    //})
            }

            if ($_SESSION['sqlInstructionReturnCod'] !== ''){
                $_SESSION['phpFunction'] = "cadastrado";
                unset( $_SESSION['sqlInstructionReturnCod'] );
                window.open("cadastro.php" ,target="_self");
            }
            
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
                if (el.style.backgroundColor == 'rgb(240, 240, 240)'){
                    el.style.color = "black";}else{el.style.color = "white";};
            }

            function mudaCorEtnia(el){
                document.getElementById('btn_e_branca').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_e_branca').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_e_mulata').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_e_mulata').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_e_negra').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_e_negra').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_e_oriental').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_e_oriental').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_e_india').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_e_india').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_e_outras').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_e_outras').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorCabelo(el){
                document.getElementById('btn_c_preto').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_preto').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_loira').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_loira').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_ruiva').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_ruiva').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_castanho').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_castanho').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_outros').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_outros').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorCabeloTamanho(el){
                document.getElementById('btn_c_careca').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_careca').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_curto').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_curto').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_medio').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_medio').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_longo').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_longo').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorCabeloEstilo(el){
                document.getElementById('btn_c_liso').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_liso').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_c_cacheado').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_c_cacheado').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorBiotipo(el){
                document.getElementById('btn_b_magra').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_b_magra').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_b_normal').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_b_normal').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_b_fitness').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_b_fitness').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_b_gordinha').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_b_gordinha').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_b_bbw').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_b_bbw').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorOlhos(el){
                document.getElementById('btn_o_castanho').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_o_castanho').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_o_preto').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_o_preto').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_o_verde').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_o_verde').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_o_azul').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_o_azul').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }
            
            function mudaCorSeiosTamanho(el){
                document.getElementById('btn_p_peitinho').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_p_peitinho').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_p_medio').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_p_medio').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_p_grande').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_p_grande').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_p_peituda').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_p_peituda').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorSeios(el){
                document.getElementById('btn_p_natural').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_p_natural').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_p_siliconada').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_p_siliconada').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }   

            function mudaCorMamilos(el){
                document.getElementById('btn_pm_grande').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_pm_grande').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_pm_normal').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_pm_normal').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_pm_pequeno').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_pm_pequeno').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_pm_invertido').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_pm_invertido').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorCoxa(el){
                document.getElementById('btn_cx_fina').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_cx_fina').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_cx_normal').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_cx_normal').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_cx_grossa').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_cx_grossa').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_cx_malhada').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_cx_malhada').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_cx_musculosa').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_cx_musculosa').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            function mudaCorVagina(el){
                document.getElementById('btn_v_peluda').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_v_peluda').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_v_pelinho').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_v_pelinho').style.backgroundColor = '#F0F0F0';
                document.getElementById('btn_v_depilada').style.color = 'rgba(var(--bs-dark-rgb)'; document.getElementById('btn_v_depilada').style.backgroundColor = '#F0F0F0';
                el.style.backgroundColor = 'rgba(var(--bs-dark-rgb)';
                el.style.color = "white";
            }

            window.onclick = function(event) {
                if (event.target == 'HTMLImageElement') {
                    modal.style.display = "none";
                }
            }

            function functionSave() {

                    $x_value = "'" + document.getElementById('cpf').value + "'" ;                               $u_value = " cpf = '" + document.getElementById('cpf').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('nomerealcompleto').value + "'" ;      $u_value = $u_value + ", nomerealcompleto = '" + document.getElementById('email').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('email').value + "'" ;                 $u_value = $u_value + ", email = '" +document.getElementById('email').value  + "'";
                    $x_value = $x_value + ",'" + document.getElementById('anoNascimento').value + "'" ;         $u_value = $u_value + ", anoNascimento = '" + document.getElementById('anoNascimento').value + "'";

                    $x_value = $x_value + ",'" + document.getElementById('cache').value + "'" ;                 $u_value = $u_value + ", cache = '" + document.getElementById('cache').value + "'";

                    $x_value = $x_value + ",'" + document.getElementById('nomeapresentacao').value + "'" ;      $u_value = $u_value + ", nomeapresentacao = '" + document.getElementById('nomeapresentacao').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('telefone').value + "'" ;              $u_value = $u_value + ", telefone = '" + document.getElementById('telefone').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('instagram').value + "'" ;             $u_value = $u_value + ", instagram = '" + document.getElementById('instagram').value + "'";

                    $x_value = $x_value + ",'" + document.getElementById('endereco').value + "'" ;              $u_value = $u_value + ", endereco = '" + document.getElementById('endereco').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('estado').value + "'" ;                $u_value = $u_value + ", estado = '" + document.getElementById('estado').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('cidade').value + "'" ;                $u_value = $u_value + ", cidade = '" + document.getElementById('cidade').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('bairro').value + "'" ;                $u_value = $u_value + ", bairro = '" + document.getElementById('bairro').value + "'";

                    $x_value = $x_value + ",'" + document.getElementById('altura').value + "'" ;                $u_value = $u_value + ", altura = '" + document.getElementById('altura').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('pes').value + "'" ;                   $u_value = $u_value + ", pe = '" + document.getElementById('pes').value + "'";
                    $x_value = $x_value + ",'" + document.getElementById('peso').value + "'" ;                  $u_value = $u_value + ", peso = '" + document.getElementById('peso').value + "'";

                    //ETNIA
                    $selectOption = 0;
                    if (document.getElementById('btn_e_branca').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'branca'"; $selectOption = 1;$u_value = $u_value + ", etnia = 'branca'";}; 
                    if (document.getElementById('btn_e_mulata').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'mulata'"; $selectOption = 1;$u_value = $u_value + ", etnia = 'mulata'";}; 
                    if (document.getElementById('btn_e_negra').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'negra'"; $selectOption = 1;$u_value = $u_value + ", etnia = 'negra'";}; 
                    if (document.getElementById('btn_e_oriental').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'oriental'"; $selectOption = 1;$u_value = $u_value + ", etnia = 'oriental'";}; 
                    if (document.getElementById('btn_e_india').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'india'"; $selectOption = 1;$u_value = $u_value + ", etnia = 'india'";}; 
                    if (document.getElementById('btn_e_outras').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'outras'"; $selectOption = 1;$u_value = $u_value + ", etnia = 'outras'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", etnia = ''";}
                    
                    //PIERCING
                    if (document.getElementById('btn_x_piercing_seios').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";   $u_value = $u_value + ", caractPiercingSeios = 's'";} else {$x_value = $x_value + ",'n'";   $u_value = $u_value + ", caractPiercingSeios = 'n'";}; 
                    if (document.getElementById('btn_x_piercing_umbigo').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";  $u_value = $u_value + ", caractPiercingUmbigo = 's'";} else {$x_value = $x_value + ",'n'";   $u_value = $u_value + ", caractPiercingUmbigo = 'n'";};  
                    if (document.getElementById('btn_x_piercing_vagina').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";  $u_value = $u_value + ", caractPiercingVagina = 's'";} else {$x_value = $x_value + ",'n'";   $u_value = $u_value + ", caractPiercingVagina = 'n'";};  
                    
                    //CABELO
                    $selectOption = 0;
                    if (document.getElementById('btn_c_preto').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'preto'"; $selectOption = 1;   $u_value = $u_value + ", cabelo = 'preto'";}; 
                    if (document.getElementById('btn_c_loira').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'loira'"; $selectOption = 1;     $u_value = $u_value + ", cabelo = 'loira'";}; 
                    if (document.getElementById('btn_c_ruiva').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'ruiva'"; $selectOption = 1;     $u_value = $u_value + ", cabelo = 'ruiva'";}; 
                    if (document.getElementById('btn_c_castanho').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'castanho'"; $selectOption = 1;     $u_value = $u_value + ", cabelo = 'castanho'";}; 
                    if (document.getElementById('btn_c_outros').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'outros'"; $selectOption = 1;   $u_value = $u_value + ", cabelo = 'outros'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", cabelo = ''";}
                    
                    //CABELO TIPO
                    $selectOption = 0;
                    if (document.getElementById('btn_c_careca').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'careca'"; $selectOption = 1;   $u_value = $u_value + ", cabeloTamanho = 'careca'";}; 
                    if (document.getElementById('btn_c_curto').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'curto'"; $selectOption = 1;     $u_value = $u_value + ", cabeloTamanho = 'curto'";}; 
                    if (document.getElementById('btn_c_medio').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'medio'"; $selectOption = 1;     $u_value = $u_value + ", cabeloTamanho = 'medio'";}; 
                    if (document.getElementById('btn_c_longo').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'longo'"; $selectOption = 1;     $u_value = $u_value + ", cabeloTamanho = 'longo'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", cabeloTamanho = ''";}
                    
                    //CABELO ESTILO
                    $selectOption = 0;
                    if (document.getElementById('btn_c_liso').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'liso'"; $selectOption = 1;               $u_value = $u_value + ", cabeloEstilo = 'liso'";}; 
                    if (document.getElementById('btn_c_cacheado').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'cacheado'"; $selectOption = 1;       $u_value = $u_value + ", cabeloEstilo = 'cacheado'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", cabeloEstilo = ''";}
                    
                    //BIOTIPO
                    $selectOption = 0;
                    if (document.getElementById('btn_b_magra').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'magra'"; $selectOption = 1;         $u_value = $u_value + ", biotipo = 'magra'";}; 
                    if (document.getElementById('btn_b_normal').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'normal'"; $selectOption = 1;       $u_value = $u_value + ", biotipo = 'normal'";}; 
                    if (document.getElementById('btn_b_fitness').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'fitness'"; $selectOption = 1;     $u_value = $u_value + ", biotipo = 'fitness'";}; 
                    if (document.getElementById('btn_b_gordinha').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'gordinha'"; $selectOption = 1;   $u_value = $u_value + ", biotipo = 'gordinha'";}; 
                    if (document.getElementById('btn_b_bbw').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'bbw'"; $selectOption = 1;             $u_value = $u_value + ", biotipo = 'bbw'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", biotipo = ''";}

                    //OLHOS
                    $selectOption = 0;
                    if (document.getElementById('btn_o_castanho').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'castanho'"; $selectOption = 1;   $u_value = $u_value + ", olhosCor = 'castanho'";}; 
                    if (document.getElementById('btn_o_preto').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'preto'"; $selectOption = 1;         $u_value = $u_value + ", olhosCor = 'preto'";}; 
                    if (document.getElementById('btn_o_verde').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'verde'"; $selectOption = 1;         $u_value = $u_value + ", olhosCor = 'verde'";}; 
                    if (document.getElementById('btn_o_azul').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'azul'"; $selectOption = 1;           $u_value = $u_value + ", olhosCor = 'azul'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", olhosCor = ''";}
                    
                    //SEIOS
                    $selectOption = 0;
                    if (document.getElementById('btn_p_peitinho').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'peitinho'"; $selectOption = 1;   $u_value = $u_value + ", seios = 'peitinho'"}; 
                    if (document.getElementById('btn_p_medio').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'natural'"; $selectOption = 1;     $u_value = $u_value + ", seios = 'medio'"}; 
                    if (document.getElementById('btn_p_grande').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'silicone'"; $selectOption = 1;   $u_value = $u_value + ", seios = 'grande'"}; 
                    if (document.getElementById('btn_p_peituda').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'peituda'"; $selectOption = 1;     $u_value = $u_value + ", seios = 'peituda'"}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", seios = ''";}
                    
                    //MAMILOS
                    $selectOption = 0;
                    if (document.getElementById('btn_pm_grande').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'grande'"; $selectOption = 1;          $u_value = $u_value + ", seiosMamilo = 'grande'";}; 
                    if (document.getElementById('btn_pm_normal').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'normal'"; $selectOption = 1;          $u_value = $u_value + ", seiosMamilo = 'normal'";}; 
                    if (document.getElementById('btn_pm_pequeno').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'pequeno'"; $selectOption = 1;        $u_value = $u_value + ", seiosMamilo = 'pequeno'";}; 
                    if (document.getElementById('btn_pm_invertido').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'invertido'"; $selectOption = 1;    $u_value = $u_value + ", seiosMamilo = 'invertido'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", seiosMamilo = ''";}

                    //SEIOS TIPO
                    $selectOption = 0;
                    if (document.getElementById('btn_p_natural').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'natural'"; $selectOption = 1;          $u_value = $u_value + ", seiosTamanho = 'natural'";}; 
                    if (document.getElementById('btn_p_siliconada').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'siliconada'"; $selectOption = 1;    $u_value = $u_value + ", seiosTamanho = 'siliconada'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", seiosMamilo = ''";}

                    //BUMBUM
                    $selectOption = 0;
                    if (document.getElementById('btn_bb_grande').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", bumbumTamanho = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", bumbumTamanho = 'grande'";}; 
                    if (document.getElementById('btn_bb_redondo').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", bumbumRedondo = 's'";} else {$x_value = $x_value + ",'n'";    $u_value = $u_value + ", bumbumRedondo = 'n'";}; 
                    if (document.getElementById('btn_bb_duro').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", bumbumDuro = 's'";} else {$x_value = $x_value + ",'n'";          $u_value = $u_value + ", bumbumDuro = 'n'";}; 
                                        
                    //COXAS
                    $selectOption = 0;
                    if (document.getElementById('btn_cx_fina').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'fina'"; $selectOption = 1;       $u_value = $u_value + ", coxaTamanho = 'fina'";}; 
                    if (document.getElementById('btn_cx_normal').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'normal'"; $selectOption = 1;     $u_value = $u_value + ", coxaTamanho = 'normal'";}; 
                    if (document.getElementById('btn_cx_grossa').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'grossa'"; $selectOption = 1;   $u_value = $u_value + ", coxaTamanho = 'grossa'";}; 
                    if (document.getElementById('btn_cx_malhada').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'malhada'"; $selectOption = 1;       $u_value = $u_value + ", coxaTamanho = 'malhada'";}; 
                    if (document.getElementById('btn_cx_musculosa').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'musculosa'"; $selectOption = 1;     $u_value = $u_value + ", coxaTamanho = 'musculosa'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", vaginaPubis = ''";}

                    //VAGINA
                    $selectOption = 0;
                    if (document.getElementById('btn_v_peluda').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'peluda'"; $selectOption = 1;       $u_value = $u_value + ", vaginaPubis = 'peluda'";}; 
                    if (document.getElementById('btn_v_pelinho').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'pelinho'"; $selectOption = 1;     $u_value = $u_value + ", vaginaPubis = 'pelinho'";}; 
                    if (document.getElementById('btn_v_depilada').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'depilada'"; $selectOption = 1;   $u_value = $u_value + ", vaginaPubis = 'depilada'";}; 
                    if ($selectOption == 0){$x_value = $x_value + ",null";      $u_value = $u_value + ", vaginaPubis = ''";}

                    //OPTIONS
                    if (document.getElementById('btn_v_greluda').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", vaginaGreluda = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", vaginaGreluda = 'n'";}; 
                    if (document.getElementById('btn_v_apertadinha').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";      $u_value = $u_value + ", vaginaApertadinha = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", vaginaApertadinha = 'n'";}; 
                    if (document.getElementById('btn_v_gordinha').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", vaginaGordinha = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", vaginaGordinha = 'n'";}; 
                    if (document.getElementById('btn_v_labiosgrandes').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";    $u_value = $u_value + ", vaginaLabiosGrandes = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", vaginaLabiosGrandes = 'n'";}; 
                    if (document.getElementById('btn_v_rosadinha').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";        $u_value = $u_value + ", vaginaRosadinha = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", vaginaRosadinha = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_exotica').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", detalExotica = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalExotica = 'n'";}; 
                    if (document.getElementById('btn_x_bocao').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";            $u_value = $u_value + ", detalBocao = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalBocao = 'n'";}; 
                    if (document.getElementById('btn_x_tatuada').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", detalTatuada = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalTatuada = 'n'";}; 
                    if (document.getElementById('btn_x_deficiente').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";       $u_value = $u_value + ", detalDeficiente = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalDeficiente = 'n'";}; 
                    if (document.getElementById('btn_x_gravida').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", detalGravida = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalGravida = 'n'";}; 
                    if (document.getElementById('btn_x_lactante').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", detalLactante = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalLactante = 'n'";}; 
                    if (document.getElementById('btn_x_covinhascostas').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";   $u_value = $u_value + ", detalCovinhasCostas = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalCovinhasCostas = 'n'";}; 
                    if (document.getElementById('btn_x_marquinha').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";   $u_value = $u_value + ", detalCovinhasCostas = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", detalMarquinha = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_oral').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";             $u_value = $u_value + ", servOral = 's'";} else {$x_value = $x_value + ",'n'";                  $u_value = $u_value + ", servOral = 'n'";}; 
                    if (document.getElementById('btn_x_gargantaprofunda').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'"; $u_value = $u_value + ", servGargantaProfunda = 's'";} else {$x_value = $x_value + ",'n'";      $u_value = $u_value + ", servGargantaProfunda = 'n'";}; 
                    if (document.getElementById('btn_x_oral69').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";           $u_value = $u_value + ", serv69 = 's'";} else {$x_value = $x_value + ",'n'";                    $u_value = $u_value + ", serv69 = 'n'";}; 
                    if (document.getElementById('btn_x_deixachupar').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";      $u_value = $u_value + ", servDeixaChupar = 's'";} else {$x_value = $x_value + ",'n'";           $u_value = $u_value + ", servDeixaChupar = 'n'";}; 
                    if (document.getElementById('btn_x_oralpelo').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", servOralSemCapa = 's'";} else {$x_value = $x_value + ",'n'";           $u_value = $u_value + ", servOralSemCapa = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_apanhar').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";          $u_value = $u_value + ", servApanhar = 's'";} else {$x_value = $x_value + ",'n'";               $u_value = $u_value + ", servApanhar = 'n'";}; 
                    if (document.getElementById('btn_x_amiga').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";            $u_value = $u_value + ", servAmigas = 's'";} else {$x_value = $x_value + ",'n'";                $u_value = $u_value + ", servAmigas = 'n'";}; 
                    if (document.getElementById('btn_x_beijoboca').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";        $u_value = $u_value + ", servBeijoBoca = 's'";} else {$x_value = $x_value + ",'n'";             $u_value = $u_value + ", servBeijoBoca = 'n'";}; 
                    if (document.getElementById('btn_x_beijogrego').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";       $u_value = $u_value + ", servBeijoGrego = 's'";} else {$x_value = $x_value + ",'n'";            $u_value = $u_value + ", servBeijoGrego = 'n'";};  
                    if (document.getElementById('btn_x_anal').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";             $u_value = $u_value + ", servAnal = 's'";} else {$x_value = $x_value + ",'n'";                  $u_value = $u_value + ", servAnal = 'n'";}; 
                    if (document.getElementById('btn_x_squirting').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";        $u_value = $u_value + ", servSquirting = 's'";} else {$x_value = $x_value + ",'n'";             $u_value = $u_value + ", servSquirting = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_casais').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";           $u_value = $u_value + ", servCasais = 's'";} else {$x_value = $x_value + ",'n'";                $u_value = $u_value + ", servCasais = 'n'";}; 
                    if (document.getElementById('btn_x_mulher').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";           $u_value = $u_value + ", servMulher = 's'";} else {$x_value = $x_value + ",'n'";                $u_value = $u_value + ", servMulher = 'n'";}; 
                    if (document.getElementById('btn_x_swing').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";            $u_value = $u_value + ", servSwing = 's'";} else {$x_value = $x_value + ",'n'";                 $u_value = $u_value + ", servSwing = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_massagem').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", servMassagem = 's'";} else {$x_value = $x_value + ",'n'";             $u_value = $u_value + ", servMassagem = 'n'";}; 
                    if (document.getElementById('btn_x_tailandesa').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";       $u_value = $u_value + ", servTailandesa = 's'";} else {$x_value = $x_value + ",'n'";            $u_value = $u_value + ", servTailandesa = 'n'";}; 
                    if (document.getElementById('btn_x_espanhola').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";        $u_value = $u_value + ", servEspanhola = 's'";} else {$x_value = $x_value + ",'n'";             $u_value = $u_value + ", servEspanhola  = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_viagem').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";           $u_value = $u_value + ", servViagem = 's'";} else {$x_value = $x_value + ",'n'";                $u_value = $u_value + ", servViagem = 'n'";}; 
                    if (document.getElementById('btn_x_pernoite').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", servPernoite = 's'";} else {$x_value = $x_value + ",'n'";              $u_value = $u_value + ", servPernoite = 'n'";}; 
                    if (document.getElementById('btn_x_namoradinha').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";      $u_value = $u_value + ", servNamoradinha = 's'";} else {$x_value = $x_value + ",'n'";           $u_value = $u_value + ", servNamoradinha = 'n'";}; 
                    if (document.getElementById('btn_x_bdsm').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";             $u_value = $u_value + ", servBdsm = 's'";} else {$x_value = $x_value + ",'n'";                  $u_value = $u_value + ", servBdsm = 'n'";}; 
                    if (document.getElementById('btn_x_submissa').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", servSubmissa = 's'";} else {$x_value = $x_value + ",'n'";              $u_value = $u_value + ", servSubmissa = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_local').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";            $u_value = $u_value + ", servLocal = 's'";} else {$x_value = $x_value + ",'n'";                 $u_value = $u_value + ", servLocal = 'n'";}; 
                    if (document.getElementById('btn_x_hotel').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";            $u_value = $u_value + ", servHotel = 's'";} else {$x_value = $x_value + ",'n'";                 $u_value = $u_value + ", servHotel = 'n'";}; 
                    if (document.getElementById('btn_x_motel').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";            $u_value = $u_value + ", servMotel = 's'";} else {$x_value = $x_value + ",'n'";                 $u_value = $u_value + ", servMotel = 'n'";}; 
                    if (document.getElementById('btn_x_domicilio').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";        $u_value = $u_value + ", servDomicilio = 's'";} else {$x_value = $x_value + ",'n'";             $u_value = $u_value + ", servDomicilio = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_finalizacorpo').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";    $u_value = $u_value + ", servFinalizaCorpo = 's'";} else {$x_value = $x_value + ",'n'";         $u_value = $u_value + ", servFinalizaCorpo = 'n'";}; 
                    if (document.getElementById('btn_x_finalizaboca').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";     $u_value = $u_value + ", servFinalizaBoca = 's'";} else {$x_value = $x_value + ",'n'";          $u_value = $u_value + ", servFinalizaBoca = 'n'";}; 
                    if (document.getElementById('btn_x_finalizarosto').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";    $u_value = $u_value + ", servFinalizaRosto = 's'";} else {$x_value = $x_value + ",'n'";         $u_value = $u_value + ", servFinalizaRosto = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_semlimitefinalizacao').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";     $u_value = $u_value + ", servSemLimiteFinalizacao = 's'";} else {$x_value = $x_value + ",'n'";     $u_value = $u_value + ", servSemLimiteFinalizacao = 'n'";}; 
                    //
                    if (document.getElementById('btn_x_cartaocredito').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";    $u_value = $u_value + ", servPagtoCartaoCredito = 's'";} else {$x_value = $x_value + ",'n'";         $u_value = $u_value + ", servPagtoCartaoCredito = 'n'";}; 
                    if (document.getElementById('btn_x_cartaodebito').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";     $u_value = $u_value + ", servPagtoCartaoDebito = 's'";} else {$x_value = $x_value + ",'n'";          $u_value = $u_value + ", servPagtoCartaoDebito = 'n'";}; 
                    if (document.getElementById('btn_x_dinheiro').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";         $u_value = $u_value + ", servPagtoDinheiro = 's'";} else {$x_value = $x_value + ",'n'";              $u_value = $u_value + ", servPagtoDinheiro = 'n'";}; 
                    if (document.getElementById('btn_x_pix').style.backgroundColor == 'rgba(var(--bs-dark-rgb)'){$x_value = $x_value + ",'s'";              $u_value = $u_value + ", servPagtoPix = 's'";} else {$x_value = $x_value + ",'n'";                   $u_value = $u_value + ", servPagtoPix = 'n'";}; 

                    // imagemQuantidade, imagemId
                    $x_value = $x_value + ",'" + document.getElementById('imagemQuantidade').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('imagemId').value + "'" ; 
                    $x_value = $x_value + ",'" + document.getElementById('cpf').value + "'";
                    
                    //$u_value = $u_value + ", imagemQuantidade = '21' ";
                    $u_value = $u_value + ", imagemId = '" + document.getElementById('cpf').value + "'";
                    
                    // anuncioDescricao
                    $x_value = $x_value + ",'" + document.getElementById('anuncioDescricao').value + "'" ;   
                    $u_value = $u_value + ", anuncioDescricao = '" + document.getElementById('anuncioDescricao').value + "'";
                    // anuncioOrigem
                    // $x_value = $x_value + ",'" + document.getElementById('anuncioOrigem').value + "'" ;   
                    $u_value = $u_value + ", anuncioOrigem = '" + document.getElementById('anuncioOrigem').value + "'";

                    // validacaoData, validacaoStatus, validacaoStatusMotivo
                    // $x_value = $x_value + ",'" + document.getElementById('validacaoData').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('validacaoStatus').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('validacaoStatusMotivo').value + "'" ; 
                    $x_value = $x_value + ",'0','0','0'";
                    $u_value = $u_value + ", validacaoData = '0' ,validacaoStatus = '0' ,validacaoStatusMotivo = '0'";

                    // classificacaoEstrelasAparencia, classificacaoEstrelasCheiro, classificacaoEstrelasAtendimento, classificacaoEstrelasSexo
                    // $x_value = $x_value + ",'" + document.getElementById('classificacaoEstrelasAparencia').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('classificacaoEstrelasCheiro').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('classificacaoEstrelasAtendimento').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('classificacaoEstrelasSexo').value + "'" ; 
                    $x_value = $x_value + ",'0','0','0','0'";
                    $u_value = $u_value + ", classificacaoEstrelasAparencia = '0' ,classificacaoEstrelasCheiro = '0' ,classificacaoEstrelasAtendimento = '0' ,classificacaoEstrelasSexo='0'";

                    // cadastroData, cadastroStatus
                    // $x_value = $x_value + ",'" + document.getElementById('cadastroData').value + "'" ; 
                    // $x_value = $x_value + ",'" + document.getElementById('cadastroStatus').value + "'" ; 
                    $x_value = $x_value + ",'0','0'";
                    $u_value = $u_value + ", cadastroData = '0' ,cadastroStatus = '0' ";
 
                    alert(x_value);

                    if ( document.getElementById('cpf').value == 0 || document.getElementById('cpf').value == "" ){
                        window.open("cadastro.php?f='cadastrar'&c='0'&i="+ x_value ,target="_self");
                    }else{
                        window.open("cadastro.php?f='alterar'&c='" + document.getElementById('cod').value + "'&i="+ $u_value ,target="_self");
                    }
            }
            </script>
    </body>
</html>