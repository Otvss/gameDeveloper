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
        
        <!-- CSS-->
        <link href="https://fonts.googleapis.com/css?family=Abel|Pacifico" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/style.css')?>" type="text/css" rel="stylesheet"/>
        <link href="<?=base_url('assets/css/geral.css')?>" type="text/css" rel="stylesheet"/> 
        
        <title>Game Developer</title>
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
                    <h1>Programas e Recursos</h1>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusest laborum."</p>
                </div>
            </div>
            
            <!-- RODAPÉ -->
            <?php include('includes/footer.php'); ?>
        </main>
    </body>
</html>