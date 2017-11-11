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
        
        <title>Painel do Usuário</title>
    </head>
    
    <body>
        <!-- TOPO DO SITE -->
        <?php include('includes/header.php'); ?>
        
        <!-- TOPO DO SITE -->
        <?php include('includes/menuLateral.php'); ?>
        
        <main>
            <div class="container-fixed">
                <div class="row">
                    <!-- MENU DO PAINEL -->
                    <div id="menuPainel" class="col-ds-3">
                        <div class="col-ds-12">
                            <div class="accessUser">
                                <div class="titulo-box">
                                    <h1 class="accessTitulo">Menu</h1>
                                </div>
                                
                                <div class="col-ds-12">
                                    <ul>
                                        <li>
                                            <a href="">Painel do Usuário</a>
                                        </li>
                                        
                                        <li>
                                            <a href="">Alterar Senha</a>
                                        </li>
                                        
                                        <li>
                                            <a href="">Enviar Aula</a>
                                        </li>
                                        
                                        <li>
                                            <a href="">Visualizar Blog</a>
                                        </li>
                                        
                                        <li>
                                            <a href="">Realizar Postagem</a>
                                        </li>
                                        
                                        <li>
                                            <a href="">Alterar Dados dos Cartões</a>
                                        </li>
                                        
                                        <li><a href="<?=base_url('index.php/Login/logout')?>">Sair</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- REGISTROS DA CONTA -->
                    <div class="col-ds-9">
                        <!-- DADOS CADASTRAIS: VISUAL -->
                        <div class="col-ds-12">
                            <div class="accessUser">
                                <div class="titulo-box">
                                    <img src="https://gamedeveloper-otvss.c9users.io/ci/assets/imagens/icons/imgIcon.png">
                                    <h1 class="accessTitulo">Dados Visuais<br><small>Estes são dados visuais referente ao seu blog e sua identidade</small></h1>
                                </div>
                                
                                <div class="form-control">
                                    <form>
                                        <div class="control-input col-ds-4">
                                            <label for="user-file">Icone de Usuário</label>
                                            <input type="file" name="user-file">
                                            <p>400x400</p>
                                        </div>
                                        
                                        <div class="control-input col-ds-8">
                                            <label for="canal-file">Imagem de Apresentação do Blog</label>
                                            <input type="file" name="canal-file">
                                            <p>1280x720</p>
                                        </div>
                                        
                                        <div class="control-input col-ds-12">
                                            <label for="desc-cpt">Descreva-se:</label>
                                            <input type="text" name="desc-cpt" placeholder="Sou um desenvolvedor/estudante disposto a ajudar a comunidade gamer crescer!1">
                                            <p><span>120</span> Caracteres restantes</p>
                                        </div>
                                    </form>
                                    
                                    <button id="salvarVisual" class="btn btn-default btn-medium">Salvar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- DADOS CADASTRAIS: GERAIS -->
                        <div class="col-ds-12">
                            <div class="accessUser">
                                <div class="titulo-box">
                                    <img src="https://gamedeveloper-otvss.c9users.io/ci/assets/imagens/icons/login.png">
                                    <h1 class="accessTitulo">Dados Gerais</h1>
                                </div>
                                
                                <div class="form-control">
                                    <form>
                                        <div class="control-input col-ds-8">
                                            <label for="nome-cpt">Nome:</label>
                                            <input type="text" name="nome-cpt" placeholder="Digite seu nome completo...">
                                        </div>
                                        
                                        <div class="control-input col-ds-4">
                                            <label for="nome-cpt">Nick:</label>
                                            <input type="text" name="nick-cpt" placeholder="Ex: Rodisnei">
                                        </div>
                                        
                                        <div class="control-input col-ds-12">
                                            <label for="email-cpt">E-mail:</label>
                                            <input type="email" name="email-cpt" placeholder="Ex: rodisnei@gamedeveloper.com">
                                        </div>
                                        
                                        <div class="control-input col-ds-6">
                                            <label for="rg-cpt">RG:</label>
                                            <input type="number" name="rg-cpt">
                                        </div>
                                        
                                        <div class="control-input col-ds-6">
                                            <label for="cpf-cpt">CPF:</label>
                                            <input type="number" name="cpf-cpt">
                                        </div>
                                        
                                        <div class="control-input col-ds-3">
                                            <label for="nasc-date">Data de Nascimento:</label>
                                            <input type="date" name="nasc-date">
                                        </div>
                                    </form>
                                    
                                    <button id="salvarGerais" class="btn btn-default btn-medium">Salvar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- DADOS CADASTRAIS: CARTÃO -->
                        <div class="col-ds-12">
                            <div class="accessUser">
                                <div class="titulo-box">
                                    <img src="https://gamedeveloper-otvss.c9users.io/ci/assets/imagens/icons/cartaoIcon.png">
                                    <h1 class="accessTitulo">Cadastro de Cartão<br><small>Cadastre dados minimos do cartão para facilitar sua compra das GD's Coins!</small></h1>
                                </div>
                                
                                <div class="form-control">
                                    <form>
                                        <div class="control-input col-ds-6">
                                            <label for="num-nbr">Nº Cartão</label>
                                            <input type="number" name="num-nbr" placeholder="####-####-####-####">
                                            <img class="banco-icon" src="">
                                        </div>
                                        
                                        <div class="control-input col-ds-6">
                                            <label for="nome-cpt">Nome Impresso no Cartão</label>
                                            <input type="text" name="nome-cpt" placeholder="Ex: Adelbardo L Carvalho">
                                        </div>
                                        
                                        <div class="control-input col-ds-3">
                                            <label for="val-date">Data de Vencimento</label>
                                            <input type="date" name="val-date">
                                        </div>
                                    </form>
                                    
                                    <button id="salvarCartao" class="btn btn-default btn-medium">Salvar</button>
                                
                                    <div class="col-ds-12">
                                        <small style="float: left">Para sua segurança não armazenamos o código de segurança do cartão em nenhum momento.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- RODAPÉ -->
            <?php include('includes/footer.php'); ?>
        </main>
    </body>
</html>