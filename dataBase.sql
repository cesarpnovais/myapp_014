SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 1;
START TRANSACTION;
SET time_zone = "+00:00";

-- -------------------------------------------------------------------------------------------------------
-- Estrutura da tabela `anuncio`
DROP TABLE IF EXISTS `anuncio`;
CREATE TABLE `anuncio` (
	`cod` int(11) NOT NULL AUTO_INCREMENT,
    
	`cpf` varchar(20) NULL,
	`nomeRealCompleto` varchar(25) NULL,
	`email` varchar(50) NULL,
	`anoNascimento` varchar(4) NULL,							-- 		`idade` N-ninfeta < 22 , M-novinha < 30, C-coroa < 46, I-idosa > 45*/
  
  	`cache` varchar(8) NULL,

	`nomeApresentacao` varchar(25) NOT NULL,
	`telefone` varchar(25) NULL,
	`instagram` varchar(50) NULL,		

	`estado` varchar(2) NULL,
	`cidade` varchar(99) NULL,
	`bairro` varchar(99) NULL,
	`endereco` varchar(99) NULL,
  
	`altura` varchar(3) NULL,	-- 		`altura` Anazinha < 151, Mignon < 161, Normal < 171, Alta >170 */
	`pe` varchar(3) NULL,

	`peso` varchar(3) NULL,

	/*CARACTERISTICAS FISICAS*/
		`etnia` varchar(20) NULL, /* B-branca, M-morena, N-negra, O-oriental, I-india, X-outras */
		/*CORPO*/
			`biotipo` varchar(20) NULL, /* M-magra, N-normal, F-fitness, G-gordinha, B-bbw */
		/*SEIOS*/
			`seios` varchar(20) NULL, /* N-natural, S-silicone, G-peituda, P-peitinho */
			`seiosTamanhanho` varchar(20) NULL, /* P-peitinho, M-medio, G-grande, GG-peituda */
			`seiosMamilo` varchar(20) NULL, /* G-grande, N-normal, P-pequeno, I-invertido */
		/*BUMBUM*/
			`bumbumGrande` varchar(1) NULL,
			`bumbumRedondo` varchar(1) NULL,
			`bumbumDuro` varchar(1) NULL,
		/*COCHAS*/
			`coxas` varchar(20) NULL, /* F-fina, N-normal, G-grossa, M-malhada, U-Musculosa */
		/*PIERCING*/
			`caractPiercingSeios` varchar(1) NULL, /* S-sim, N-nao */
			`caractPiercingUmbigo` varchar(1) NULL, /* S-sim, N-nao */      
			`caractPiercingVagina` varchar(1) NULL, /* S-sim, N-nao */
		/*OLHOS*/
	        `olhosCor` varchar(20) NULL, /* C-castanho, P-preto, V-verde, A-azul */
		/*CABELO*/
			`cabelo` varchar(20) NULL, /* P-preto, L-loira, R-ruiva, C-castanho, X-outros */
			`cabeloTamanho` varchar(20) NULL, /* 0-careca, C-curto, M-medio, L-longo */
			`cabeloEstilo` varchar(20) NULL, /* L-liso, C-cacheado */
		/*VAGINA*/
			`vaginaPubis` varchar(20) NULL, /* P-peluda, M-pelinho, D-depilada */
			`vaginaGreluda` varchar(1) NULL, /* S-sim, N-nao */
			`vaginaApertadinha` varchar(1) NULL, /* S-sim, N-nao */
			`vaginaGordinha` varchar(1) NULL, /* S-sim, N-nao */
			`vaginaLabiosGrandes` varchar(1) NULL, /* S-sim, N-nao */
			`vaginaRosadinha` varchar(1) NULL, /* S-sim, N-nao */
 	/*OUTRAS CARACTERISTICAS*/
        `detalExotica` varchar(1) NULL, /* S-sim, N-nao */
        `detalBocao` varchar(1) NULL, /* S-sim, N-nao */
        `detalTatuada` varchar(1) NULL, /* S-sim, N-nao */
        `detalDeficiente` varchar(1) NULL, /* S-sim, N-nao */
        `detalGravida` varchar(1) NULL, /* S-sim, N-nao */
		`detalLactante` varchar(1) NULL, /* S-sim, N-nao */
		`detalCovinhasCostas` varchar(1) NULL, /* S-sim, N-nao */
		`detalMarquinha` varchar(1) NULL, /* S-sim, N-nao */

	/*SERVIÇOS*/
        `servBeijoBoca` varchar(1) NULL, /* S-sim, N-nao */
        `servBeijoGrego` varchar(1) NULL, /* S-sim, N-nao */

		`servAnal` varchar(1) NULL, /* S-sim, N-nao */
		
		`servOral` varchar(1) NULL, /* S-sim, N-nao */
		`servDeixaChupar` varchar(1) NULL, /* S-sim, N-nao */
        `servOralSemCapa` varchar(1) NULL, /* S-sim, N-nao */
   		`serv69` varchar(1) NULL, /* S-sim, N-nao */
		`servGargantaProfunda` varchar(1) NULL, /* S-sim, N-nao */

        `servNamoradinha` varchar(1) NULL, /* S-sim, N-nao */
		`servBdsm` varchar(1) NULL, /* S-sim, N-nao */
        `servSubmissa` varchar(1) NULL, /* S-sim, N-nao */
        `servApanhar` varchar(1) NULL, /* S-sim, N-nao */
        `servAmigas` varchar(1) NULL, /* S-sim, N-nao */
        `servSquirting` varchar(1) NULL, /* S-sim, N-nao */

        `servCasais` varchar(1) NULL, /* S-sim, N-nao */
        `servMulher` varchar(1) NULL, /* S-sim, N-nao */

        `servSwing` varchar(1) NULL, /* S-sim, N-nao */
        `servViagem` varchar(1) NULL, /* S-sim, N-nao */
        `servPernoite` varchar(1) NULL, /* S-sim, N-nao */

        `servMassagem` varchar(1) NULL, /* S-sim, N-nao */ 
        `servTailandesa` varchar(1) NULL, /* S-sim, N-nao */ 
        `servEspanhola` varchar(1) NULL, /* S-sim, N-nao */ 

        `servLocal` varchar(1) NULL, /* S-sim, N-nao */ 
        `servDomicilio` varchar(1) NULL, /* S-sim, N-nao */ 
		`servHotel` varchar(1) NULL, /* S-sim, N-nao */ 
		`servMotel` varchar(1) NULL, /* S-sim, N-nao */ 

        `servEjaculacaoCorpo` varchar(1) NULL, /* S-sim, N-nao */
        `servEjaculacaoRosto` varchar(1) NULL, /* S-sim, N-nao */
        `servEjaculacaoBoca` varchar(1) NULL, /* S-sim, N-nao */
        `servSemLimiteFinalizacao` varchar(1) NULL, /* S-sim, N-nao */

        `servCartaoCredito` varchar(1) NULL, /* S-sim, N-nao */
		`servDebito` varchar(1) NULL, /* S-sim, N-nao */ 
		`servDinheiro` varchar(1) NULL, /* S-sim, N-nao */ 
		`servPix` varchar(1) NULL, /* S-sim, N-nao */ 

	 /*ANUNCIO*/
		`anuncioDescricao` varchar(1000) NULL,
	/*ORIGEM*/
		`anuncioOrigem` varchar(500) NULL,

	/*IMAGENS*/
		`imagemQuantidade` varchar(2) NULL,
		`imagemId` varchar(100) NULL,
	/*VALIDAÇÃO*/
		`validacaoData` varchar(8) NULL,
		`validacaoStatus` varchar(1) NULL,	/*A-aprovada - R-aprovada com ressalvas, N-nao aprovada*/
        `validacaoStatusMotivo` varchar(200) NULL,	/*Motivo do Status*/
	/*CLASSIFICAÇÃO*/
		`classificacaoEstrelasAparencia` varchar(1) NULL, /*1 a 3*/
		`classificacaoEstrelasCheiro` varchar(1) NULL, /*1 a 3*/
		`classificacaoEstrelasAtendimento` varchar(1) NULL, /*1 a 3*/
		`classificacaoEstrelasSexo` varchar(1) NULL, /*1 a 3*/
	/*CADASTRO*/
		`cadastroData` varchar(8) NULL,
		`cadastroStatus` varchar(1) NULL,	/*A-ativo - I-inativo*/
	PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO anuncio
(cpf,nomeRealCompleto,email,anoNascimento,nomeApresentacao,telefone,cache,instagram,endereco,estado,cidade,bairro,altura,pe,etnia,caractPiercingSeios,caractPiercingUmbigo,caractPiercingVagina ,cabelo,cabeloTamanho,cabeloEstilo,biotipo,olhosCor,seios,seiosMamilo,vaginaPubis,vaginaGreluda,vaginaApertadinha,vaginaGordinha,vaginaLabiosGrandes,vaginaRosadinha,detalExotica,detalBocao,detalTatuada,detalDeficiente,detalGravida,detalLactante,detalCovinhasCostas,servDeixaChupar,servOralSemCapa,servApanhar,servAmigas,servBeijoBoca,servBeijoGrego,servAnal,servSquirting,servCasais,servMulher,servSwing,servViagem,servPernoite,servNamoradinha,servBdsm,servSubmissa,servLocal,servEjaculacaoCorpo ,servSemLimiteFinalizacao,servCartaoCredito ,anuncioDescricao,imagemId,imagemQuantidade,validacaoData,validacaoStatus,validacaoStatusMotivo,classificacaoEstrelasAparencia,classificacaoEstrelasCheiro,classificacaoEstrelasAtendimento,classificacaoEstrelasSexo,cadastroData,cadastroStatus ) VALUES 
('11930204536',null,null,'1992','amorzinho','(11) 93020-4536','100.00',null,null,'sp','sao paulo','santo amaro','157',null,'branca','s',null,'s',null,null,null,null,null,null,null,null,'n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','Estilo namoradinha e carinhosa. Uma companhia para todas as ocasiões.','11930204536','1','n','n','n','n','n','n','n','202408','a')
;
