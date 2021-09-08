<?php
//inclui arquivo de conf do site
	include('config_inc.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Teste Vox Brasil" />
        <meta name="author" content="Volberto Cavazzotto" />
        <meta name="email" content="volberto@gmail.com" />
        <title><?php echo $siteName; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
		
		
		
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
									<img src="img/svg/logo.svg" class="logo">
								</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">O que fazemos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
				
				
				
				
				
				 
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-20">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="font-weight-bold tit-head ">Plantou,<br>colheu,<br>rendeu!</h1>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="mb-5 txt-head ">As melhores sementes você encontra na Caluba, com alto grau de vigor e germinação. Conheça mais sobre a empresa e o que ela pode fazer para sua safra ser um sucesso!
                        <a class="linkB" href="#" >Conheça os serviços da Caluba</a></p>
                    </div>
                </div>
            </div>
						<div id="about"></div>
        </header>
				
				
				
				
				
        <!-- sobre-->
        <section class="page-section sobre" >
					<div class="row">
						<div class="col-lg-3 text-center">		 
						</div>		 
						<div class="col-lg-4 text-right">		 
							<h2 class="tit-sobre mb-3">Conheça um pouco da Caluba Sementes</h2>
							<p class="txt-sobre">
							A Capital Nacional da Semente de Soja, Abelardo Luz (SC), é berço da Caluba. Aqui, trabalhamos com infraestrutura moderna e profissionais capacitados para oferecer o melhor no beneficiamento, limpeza, secagem, compra e venda de grãos. A satisfação dos clientes está no alto potencial de germinação das sementes. Qualidade que torna a Caluba uma grande parceira de quem busca o melhor rendimento por lavoura. A qualidade das sementes é percebida na colheita, que sempre surpreende pela rentabilidade alcançada. O resultado obtido é graças à tecnologia aplicada na produção e no armazenamento. A Caluba é capaz de armazenar mais de  20.000 toneladas de grãos 
							</p>						
						</div>		 
						<div class="col-lg-4 text-right">		 
							<p class="txt-sobre mtop">
							e beneficiar até 6.500 toneladas de sementes, por isso, uma grande safra se faz com grandes parceiros. Quer saber mais sobre o que a Caluba Sementes pode fazer por seu plantio?
							Clique e descubra os serviços que podem transformar sua safra:
							</p>
							<p class="txt-conhe">
								Conheça os serviços da Caluba 
							</p>
							<hr class="hru">
						</div>	
						<div class="col-lg-1 text-center">		 
						</div>		 
						
					</div>		 
        </section>
				
				
				
				
				
        <!-- o que faz-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 tit-services ">O que a Caluba pode fazer por sua safra </h2>
                  <p class="text-center subtoqfaz">Eleve a produtividade na hora da colheita. Plante bem, colha melhor e tenha o maior rendimento com a Caluba Sementes. Conheça os serviços à sua disposição:</p>
                <div class="row">

                    <div class="col-lg-4 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><img src="img/svg/saca.svg" class="saca"></div>
                            <p class="text-muted mb-0 text-center txtimgB">Beneﬁciamento e venda de sementes</p>
                        </div>
                    </div>
                    <div class="col-lg-4  text-center">
                        <div class="mt-5">
                            <div class="mb-2"><img src="img/svg/soja.svg" class="soja"></div>
                            <p class="text-muted mb-0 text-center txtimgB">Compra de grãos</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><img src="img/svg/silo.svg" class="silo"></div>
                            <p class="text-muted mb-0 text-center txtimgB">Limpeza, secagem e armazenamento de grãos</p>
                        </div>
                    </div>

                </div>
								
            </div>
        </section>
 									<div class="sacaR"><img src="img/svg/saca.svg" class="sacaRimg"></div>
               <div class="row colorC">
									<div class="col-lg-3 text-center">
									
									</div>
									<div class="col-lg-3 text-center">
										<h1 class="titImg">Beneﬁciamento<br>
											e venda de sementes<br>
										</h1>
										
										<p class=" txtimg">
											As sementes da Caluba são produzidas em 
											campos de Abelardo Luz com as condições 
											ideais para o melhor potencial de germinação.<br><br>

											Clima e solo são excelentes, o beneficiamento 
											com alta tecnologia e padrões de produção ISO 
											9001 fazem toda a diferença. Aproveite todo o
											alto grau de vigor e germinação em sua 
											plantação<br><br>
											Clique e entre em contato agora mesmo: 
											</p>
											<p class="txtimgBlink">
												QUERO SEMENTES COM QUALIDADE CALUBA
											</p>
											<hr class="hru">
											<br>
											<br>
											<br>
									</div>
									<div class="col-lg-4 text-center"><br>
										<img src="img/colheita.jpg" class="imgColheita">
									</div>
									<div class="col-lg-2 text-center">
									
									</div>
								

                </div>
				
				
				
				
				
				
				
        <!-- Contato-->
        <section class="page-section bgImg" id="contact">
            <div class="container">

                <div class="row">
										
										
                    <div class="col-lg-2 text-center mt-5">
                    </div>
										
                    <div class="col-lg-4 text-center mt-5">
											<h1 class="titForm">Entre em contato com a Caluba</h1>
											<form name="form" method="post" action="enviarEmail.php">
												<label>Nome</label>
												<input type="text" class="campo" name="nome" required>
											
												<label>Telefone/WhatsApp</label>
												<input type="number" class="campo" name="telefone" required>
											
												<label>Cidade</label>
												<input type="text" class="campo" name="cidade" required>
											
												<label>Mensagem</label>
											
												<textarea id="story" class="campo" name="mensagem"	rows="5" required></textarea>	
												
												<input type="submit" class="btn btn-link btnForm" name="enviarEmail">
												</form>
                    </div>
										
                    <div class="col-lg-4  text-center mt-5">
											<img src="img/svg/logoB.svg" class="imgContato">
											<p class="fone">49 3445-2040</p>
											<p class="contatomail">
												caluba@calubasementes.com.br<br>
												Estrada da Produção s/nº, Abelardo Luz-SC
											</p>
                    </div>
                    <div class="col-lg-2 text-center">
                    </div>

                </div>




            </div>
        </section>









        <!-- Footer-->
        <footer class="bg-light">
            <div class="container">
						<div class="small text-center  rodape">Desenvolvido por <b>Vox Brazil Comunicação</b> © 2020 Todos os direitos reservados.</div>
						</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
