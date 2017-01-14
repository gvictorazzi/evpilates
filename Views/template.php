<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo BASE_URL.'/assets/css/bootstrap.min.css';?>" rel="stylesheet">
        <link href="<?php echo BASE_URL.'/assets/css/template.css';?>" rel="stylesheet">
        <link href="<?php echo BASE_URL.'/assets/css/navbarpadrao.css';?>" rel="stylesheet">        
        <script type="text/javascript" src="<?php echo BASE_URL.'/assets/js/jquery-3.1.1.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo BASE_URL.'/assets/js/bootstrap.min.js';?>"></script>
        <script type="text/javascript" src="<?php echo BASE_URL.'/assets/js/evpilates.js';?>"></script>
        <title>Studio Pilates - Elizabeth Victorazzi</title>
    </head>
    <body>
        <div class="row">
            <div class="row topo_principal">
                <div class="col-sm-4 logo">
                    <img src="<?php echo BASE_URL.'/assets/images/logo.jpg' ;?>" width="310px" height="170px" />
                </div>
                <div class='col-sm-8 direitatopo'>
                    
                </div>
            </div>
        </div>
        <div class="row topo">
            <div class="col-sm-8">
                <div class="slideshow" id="slideshow">
                    <div class="indexador" >
                            <div class="imarcador" onclick=mudarSlide(0)></div>
                            <div class="imarcador" onclick=mudarSlide(1)></div>
                            <div class="imarcador" onclick=mudarSlide(2)></div>
                            <div class="imarcador" onclick=mudarSlide(3)></div>
                    </div>
                    <div class="slideshowarea" >
                            <a href="http://www.google.com.br">
                                <div class="slide" style="background-image:url('<?php echo "http://localhost/evpilates/assets/images/principal.jpg"; ?>')">
                                        <div class="slideinfo">
                                                <div class="slidetitulo">Titulo da Imagem 1</div>
                                                <div class="slidesubtitulo">Logo 1 da Google disponível gratuitamente.</div>
                                        </div>
                                </div>
                            </a>
                            <div class="slide" style="background-image:url('<?php echo "http://localhost/evpilates/assets/images/principal2.jpg"; ?>')">
                                    <div class="slideinfo">
                                            <div class="slidetitulo">Titulo da Imagem 2</div>
                                            <div class="slidesubtitulo">Logo 2 da Google disponível gratuitamente.</div>
                                    </div>
                            </div>
                            <div class="slide" style="background-image:url('<?php echo "http://localhost/evpilates/assets/images/principal3.jpg"; ?>')">
                                    <div class="slideinfo">
                                            <div class="slidetitulo">Titulo da Imagem 3</div>
                                            <div class="slidesubtitulo">Logo 3 da Google disponívelgratuitamente.</div>
                                    </div>
                            </div>
                            <div class="slide" style="background-image:url('<?php echo "http://localhost/evpilates/assets/images/principal4.jpg"; ?>')">
                                    <div class="slideinfo">
                                            <div class="slidetitulo">Titulo da Imagem 4</div>
                                            <div class="slidesubtitulo">Logo 4 da Google disponível gratuitamente.</div>
                                    </div>
                            </div>
                    </div>

                </div>
                
            </div>
            <div class='col-sm-4 todasdicas'>
                <div class='dicas'>
                    <div class="titulo_dica">
                        <?php echo "Matéria sobre Educação Alimentar..." ;?>
                    </div>
                    <div class="foto_dica" >
                        <img src="../" width="50px" height="50px" />
                    </div>
                </div>
                <div class='dicas'>
                    <div class="titulo_dica">
                        <?php echo "Matéria sobre Educação Alimentar..." ;?>
                    </div>
                    <div class="foto_dica" >
                        <img src="../" width="50px" height="50px" />
                    </div>
                </div>
                <div class='dicas'>
                    <div class="titulo_dica">
                        <?php echo "Matéria sobre Educação Alimentar..." ;?>
                    </div>
                    <div class="foto_dica" >
                        <img src="../" width="50px" height="50px" />
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="row menu">
            <nav class='navbar navbar-default'>
                <ul class='nav navbar-nav'>
                    <li><a href=''>Studio Pilates</a></li>
                    <li><a href=''>WorkShop</a></li>
                    <li><a href=''>Agenda</a></li>
                    <li><a href=''>Professores</a></li>
                    <li><a href=''>Contato</a></li>
                </ul>
                <ul class='nav navbar-nav navbar-right' style='margin-left: 5px;'>
                    <li><a href=''>Olá, visitante</a></li>
                    <li class='dropdown'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>

                            <?php echo 'Login';?>
                           <span class='caret'></span>
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a href='<?php echo BASE_URL."/perfil" ;?>'>Editar Perfil</a></li>
                            <li><a href='<?php echo BASE_URL."/login/logout" ;?>'>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            
        </div>
        <div class ="container">
           <?php $this->loadViewInTemplate($viewName,$viewData ); ?>        
        </div>
        <div class="rodape">
        </div>
    </body>
</html>