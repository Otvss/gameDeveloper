<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        
        <!-- SCRIPT -->
        <script src="<?=base_url('assets/script/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/script/main.js') ?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/script/slide.js') ?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/script/loginScreen.js') ?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/script/msgBox.js') ?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/script/jssocials.min.js') ?>" type="text/javascript"></script>
        
        <!-- CSS-->
        <link href="https://fonts.googleapis.com/css?family=Abel|Pacifico" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/style.css')?>" type="text/css" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/geral.css')?>" type="text/css" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/font-awesome.css')?>" type="text/css" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/jssocials.css')?>" type="text/css" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/jssocials-theme-flat.css')?>" type="text/css" rel="stylesheet"/>
        
        <title>Nome Aula</title>
    </head>
    
    <body>
        <!-- TOPO DO SITE -->
        <?php include('includes/header.php') ?>
        
        <!-- MENU LATERAL -->
        <?php include('includes/menuLateral.php') ?>
        
        <main>
            <!-- APRESENTAÇÃO DA AULA -->
            <div class="banner" style="400px">
                <div class="banner-desc" style="background: url(<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>)">
                    <h2>Nome do Colaborador</h2>
                    <h1>Nome da Respectiva Aula Aberta</h1>
                    <div class="share"></div>
                </div>
            </div>
            
            <!-- AULA EM VIDEO -->
            <div class="container-fixed">
                <div class="row" style="background: #1b1b1b; border: 1px solid #000">
                    <div class="col-ds-6">
                        <iframe style="width: 100%; height: 300px" src="https://www.youtube.com/embed/Ds1n6aHchRU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="col-ds-6">
                        <h1>Nome da aula</h1>
                        <p style="color: #cfcfcf;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet commodo risus, nec vulputate augue ultrices vel. Donec malesuada finibus tellus, id consequat risus lobortis a. Quisque et nisi magna. Phasellus auctor diam enim, vel ultricies lacus malesuada nec.</p>
                        
                        <div class="col-ds-6">
                            <img src="" alt="">
                            <h2>Nome do Colaborador</h2>
                            <button>SEGUIR</button>
                        </div>
                        
                        <div class="col-ds-6">
                            <p>Avaliação da Aula:</p>
                            <input class="btn-aval" type="radio" value="1">
                            <input class="btn-aval" type="radio" value="2">
                            <input class="btn-aval" type="radio" value="3">
                            <input class="btn-aval" type="radio" value="4">
                            <input class="btn-aval" type="radio" value="5">
                            </div>
                        </div>
                        
                        <div class="col-ds-12">
                            <div class="share"></div>
                            
                            <p style="color: #FFF">Palavras-Chave:</p>
                            <a class="kw" href="">teste</a>
                            <a class="kw" href="">teste 2</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- AULA DE TEXTO -->
            <div class="container-fixed">
                <div class="row">
                    <div class="col-ds-9" style="background: #1b1b1b; border: 1px solid #000">
                        <h2>Subtitulo 1</h2>
                        <p style="float: left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet commodo risus, nec vulputate augue ultrices vel. Donec malesuada finibus tellus, id consequat risus lobortis a. Quisque et nisi magna. Phasellus auctor diam enim, vel ultricies lacus malesuada nec. Ut faucibus, lacus quis faucibus facilisis, neque dolor convallis odio, sed lacinia est ipsum volutpat est. Duis consequat elit tellus, eget cursus erat hendrerit et. Suspendisse imperdiet quam diam. Proin turpis justo, elementum sed lacus non, venenatis placerat ligula. Sed sit amet nulla egestas enim condimentum luctus. Proin dapibus pharetra tellus, ut iaculis metus tempus id. Nunc sodales ultricies nisi, non eleifend sem luctus eget. Curabitur imperdiet felis ac purus fermentum gravida. Integer quis tellus dolor. Vivamus fringilla dolor in lorem fringilla ultrices. Aenean vestibulum tincidunt tortor ut mattis. Nunc dapibus dictum tellus, non rhoncus nisl convallis a.</p>
                        <img class="img-resp" style="display: block; width: 400px; height: auto" src="<?=base_url('assets/imagens/usuario/aula/subimagens/padraoAula.png')?>" alt="">
                        <p style="float: left">Donec ac placerat dui. Nullam commodo ante consequat tristique lacinia. Nulla vel dolor vitae nibh pharetra lobortis sit amet viverra magna. Sed a lacus nunc. Nunc malesuada lacinia urna, sit amet lobortis nunc viverra at. Proin suscipit eget ipsum id dignissim. Cras molestie enim turpis, eu fermentum diam mollis quis. Suspendisse sit amet quam at metus aliquet volutpat. In congue sit amet quam et rhoncus. Mauris elementum nulla tortor, finibus tincidunt purus luctus quis.</p>
                    
                        <hr style="float: left; width: 100%; height: 1px; margin: 15px auto; border: none; background: #2b2b2b;">
                        
                        <div class="col-ds-12">
                            <h3>Arquivos para Download:</h3>
                            <p>Nenhum arquivo disponivel para download!</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- COMENTÁRIOS -->
            <div class="container-fixed">
                <div class="row" style="background: #1b1b1b; border: 1px solid #000">
                    <div class="col-ds-12">
                        <div id="disqus_thread"></div>
                            <script>
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://gamedevelopers.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
            </div>
            
            <!-- RODAPÉ -->
            <?php include('includes/footer.php'); ?>
        </main>
        
        <script>
            $(".share").jsSocials({
                shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "whatsapp"],
                showLabel: false,
            });
        </script>
        <script id="dsq-count-scr" src="//gamedevelopers.disqus.com/count.js" async></script>
    </body>
</html>