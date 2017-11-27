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
        
        <title><?=$this->session->flashdata('nome')?></title>
    </head>
    
    <body>
        <!-- TOPO DO SITE -->
        <?php include('includes/header.php') ?>
        
        <!-- MENU LATERAL -->
        <?php include('includes/menuLateral.php') ?>
        
        <main>
            <!-- APRESENTAÇÃO DA AULA -->
            <div class="banner" style="400px">
                <div class="banner-desc" style="background: url(<?=base_url($this->session->flashdata('img'))?>);">
                    <h2><?=$this->session->flashdata('nmUsuario')?></h2>
                    <h1><?=$this->session->flashdata('nome')?></h1>
                    <div class="share"></div>
                </div>
            </div>
            
            <!-- AULA EM VIDEO -->
            <div class="container-fixed" style="margin-top: -50px">
                <div class="row" style="background: #1b1b1b; border: 1px solid #000">
                    <div class="col-ds-6">
                        <iframe style="width: 100%; height: 300px" src="<?=$this->session->flashdata('video')?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    
                    <div class="col-ds-6">
                        <h1><?=$this->session->flashdata('nome')?></h1>
                        <p style="color: #cfcfcf;"><?=$this->session->flashdata('desc')?>.</p>
                        
                        <div class="col-ds-6">
                            <img src="" alt="">
                            <h2 class="nmUser"><?=$this->session->flashdata('nmUsuario')?></h2>
                        </div>
                        
                        <div class="col-ds-12">
                            <div class="share"></div>
                            
                            <p style="color: #FFF"><?=$this->session->flashdata('pk')?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- AULA DE TEXTO -->
            <div class="container-fixed">
                <div class="row">
                    <div class="col-ds-9 aulaText" style="background: #1b1b1b; border: 1px solid #000">
                        <?=$this->session->flashdata('text')?>
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