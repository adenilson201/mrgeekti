<?php require_once('../conexao/conexao.php') ?>

<?php 
    $consulta_trabalho = "SELECT * ";
    $consulta_trabalho .= "FROM produtos ";

    $consulta = mysqli_query($conexao,$consulta_trabalho);

    if ( !$consulta ) {
        die("PROBLEMA NA CONSULTA");
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127852931-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-127852931-1');
        </script>

        <title>Projetos - Adenilson Santos</title>

<!--        CARACTERES-->
        <meta charset="utf-8">
        
<!--        COMPATIBILIDADE-->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        
<!--        RESPONVISO-->
        <meta name="viewport" content="width=device-width, user-scalable = no">
        
<!--        METATAGS-->
        <meta name="author" content="Adenilson Santos">
        <meta name="application-name" content="Projetos Adenilson Santos">
        <meta name="description" content="Desenvolvimento de sites, Fortaleza-CE, coloque sua ideia na web! Páginas interativas, landing pages, blogs e mais. Veja meu portfólio!">
        <meta name="keywords" content="Portfólio Adenilson Araújo, Adenilson, Adenilson Santos, web design, web design adenilson, web, design, desenvolvimento web, desenvolvimento landing page,desenvolvedor fortaleza, Fortaleza ceará,desenvolvimento de sites, sites, criação de sites em fortaleza, criação de sites, sites responsivos, criação de sites responsivos, Adenilson desenvolvedor, sites do adenilson, trabalhos do adenilson, adenilson projetos, projetos front-end, front-end, desenvolvimento de sites front-end, desenvolvedor front-end fortaleza, desenvolvedor web fortaleza, adenilson araújo, adenilson araújo desenvolvedor, adenilson araújo design, adenilson araújo web,araújo,santos,araujo,adenilson, projetos adenilson, projetos, trabalhos">
        <meta rel="canonical" href="https://mrgeekti.tech/trabalhos-adenilson-santos"/>
        
<!--        ICONE-->
        <link href="../_images/_icons/code.png" sizes="32x32" rel="shortcut icon">
        
<!--        FONTES-->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
        
<!--        CSS-->
        <link href="_css/works-layout.css" type="text/css" rel="stylesheet">
        
<!--        BIBLIOTECAS CSS-->
        <link href="../bootstrap-4.1.3-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="../_css/animate.css" type="text/css" rel="stylesheet">
        
    </head>
    
    <body>
        
        <nav>
            
            <input id="menu-hamburguer" type="checkbox">

            <label for="menu-hamburguer">
                <div class="menu">
                    <span class="hamburguer"></span>
                </div>
            </label>
            
            <ul id="menu-desktop">
                <a href="../"><li>HOME</li></a>
                <a href=""><li style="color: limegreen">TRABALHOS</li></a>
                <a href="/curriculo-adenilson-santos/"><li>CURRÍCULO</li></a>
                <a href="../#perfil-adenilson"><li>SOBRE MIM</li></a>
                <a href="#contato-adenilson"><li>CONTATO</li></a>
            </ul>
            
            
            <div id="menu-mobile">
                <h2>MENU</h2>
                <ul>
                    <a href="../"><li>HOME</li></a>
                    <a href=""><li style="border-bottom-color: limegreen">TRABALHOS</li></a>
                    <a href="/curriculo-adenilson-santos/"><li>CURRÍCULO</li></a>
                    <a href="../#perfil-adenilson"><li>SOBRE MIM</li></a>
                    <a href="#contato-adenilson"><li>CONTATO</li></a>
                </ul>
            </div>    
            
        </nav>
        
        <img style="cursor: pointer;" id="arrow-up" src="../_images/_icons/up-arrow.png">    
        
        <div class="main-content"> 
        
            <section>
                    <h1>MEUS PROJETOS</h1> <br>
                <div class="works">
                    
                    <?php
                    while ( $linha = mysqli_fetch_assoc($consulta) ) {
                    ?>    
                    <div class="work">
                        <div style=" background-image: url('../<?php echo $linha['fotoproduto'] ?>');
                        background-repeat: no-repeat;
                        background-position: center center;
                        background-size: cover;" class="workimg">
                        </div>
                        <div class="infos">
                            <h5><?php echo $linha['nomeproduto'] ?></h5>
                            <p><span style="color:dodgerblue">ID:</span> <?php echo $linha['produtoID'] ?></p>
                            <p><span style="color:dodgerblue">Tipo:</span> <?php echo $linha['tipodoproduto'] ?></p>
                            <p><span style="color:dodgerblue">Descrição: </span> <?php echo $linha['descricaoproduto'] ?></p>
                            <p><span style="color:dodgerblue">Tecnologias: </span><?php echo $linha['tecnologiasproduto'] ?></p>
                            <p><span style="color:dodgerblue">Responsivo?</span> <?php echo $linha['responsivoproduto'] ?></p>
                        </div>
                        <button>Visualizar</button>
                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
            </section>
            
            <div class="dialogbox">
                <div class="dialog wow bounceInLeft" data-wow-duration="1.2s">
                    <img src="/_images/_icons/ideas%20.svg">
                    <h2>Ninguém pode nos tirar o privilégio de usar nossa imaginação para criar, visualizar e buscar os meios de nos tornarmos quem queremos ser.</h2><p>Do livro, as 16 leis do sucesso.</p>
                </div>
            </div>
            
            
                
            <section class="contato formulario" id="contato-adenilson">
                    
                    <div class="social-final">
                        <p><img src="../_images/_icons/email.png"> adenilsonblog@gmail.com</p>
                        <h3>Quer me conhecer?</h3>
                        <a href="https://instagram.com/adenilson_aj" title="Instagram @adenilson_aj" target="_blank"><img alt="Instagram @adenilson_aj" src="../_images/_icons/instagram-logo.png"></a>
                        <a href="https://facebook.com/adenilson201" title="Facebook @adenilson201" target="_blank"><img alt="Facebook @adenilson201" src="../_images/_icons/facebook-logo-button.png"></a>
            <!--            <a href="https://twitter.com/adenilson_aj" target="_blank"><img alt="Twitter @adenilson_aj" src="_images/_icons/../twitter-logo-button.png"></a>-->
                        <h3>Também é desenvolvedor ou empresário?</h3>
                        <a href="https://github.com/adenilson201" title="GitHub @adenilson201" target="_blank"><img alt="GitHub @adenilson201" src="../_images/_icons/github-logo.png"></a>
                        <a href="https://linkedin.com/in/adenilson201/" title="LinkedIn @adenilson201" target="_blank"><img alt="LinkedIn @adenilson201" src="../_images/_icons/linkedin-button.png"></a>
                        <a href="https://api.whatsapp.com/send?phone=5585999379207" title="Whatsapp"><img src="../_images/_icons/whatsapp.png" alt="Whatsapp: Adenilson Santos"></a>
                    </div>
                
                    <div class="menu-final">
                        <ul>
                            <li><a class="btn btn-info" href="../">HOME</a></li>
                            <li><a class="btn btn-info" href="../curriculo-adenilson-santos/">CURRÍCULO</a></li>
                        </ul>
                    </div>
            </section>
            
        </div>
        
<!--        DIREITOS-->
        <details>
            
            <summary>Copyright &copy; 2018</summary>
            <br>
            <p>Developed by Adenilson Santos with  <img src="../_images/_icons/love.png"></p>
            <p>All images/icons used on this site, came from <a target="_blank" href="https://www.flaticon.com">Flaticon</a>, except the images in the backgrounds which are on <a href="https://pixnio.com/pt/" target="_blank">Pixnio.</a></p>

        </details>
        
<!--        JAVA SCRIPT-->
        
<!--        LINKEDIN-->
<!--        <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>-->

        <!--        BIBLIOTECAS-->
<!--        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>-->
        <script src="../_js/jquery-3.3.1.min.js"></script>
        <script src="../_js/wow.js"></script>
        <script>
            new WOW().init();
        </script>
<!--        JAVASCRIPT DO SITE-->
        <script src="../_js/main-script.js"></script>
        
    </body>

</html>