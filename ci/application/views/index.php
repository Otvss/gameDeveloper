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
            <div class="banner" style="height: 400px">
                <video src="<?=base_url('assets/imagens/fundo/banner.webm')?>" autoplay loop>Este vídeo não é suportado no seu navegador :(</video>
            </div>
            
            <div class="container-fixed">
                <div class="row">
                    <div class="col-ds-12">
                        <h1 class="titulo-janela">destaque<span style="color: #FFF">Semanal</span></h1>
                    </div>
                    
                    <div id="not-dest" class="col-ds-6">
                        <div class="slide" Tduracao="3000" Ttrans="10000" style="background: #f08600">
                            <img class="slide-moldura" src="<?=base_url('assets/imagens/slide/slideMoldura.png')?>" alt="">
                            <div class="slide-item active">
                                <div class="slide-legend">
                                    <h1>Game Developer</h1>
                                    <h2>Estude, Desenvolva e Compartilhe!</h2>
                                    <p>Conheça o projeto e torne-se um colaborador para a comunidade.</p>
                                    <a class="btn btn-default btn-medium" href="#">Saiba Mais +</a>
                                    <a class="btn btn-default btn-medium" href="#">Cadastre-se</a>
                                </div>
                                <img src="<?=base_url('assets/imagens/slide/slideItem1.png')?>" alt="">
                            </div>
                            <div class="slide-item">
                                <div class="slide-legend">
                                    <h1>Game Points</h1>
                                    <h2>Conheça a moeda do site</h2>
                                    <p>Como adquirir, trocar e para que serve!</p>
                                    <a class="btn btn-default" href="#">Saiba Mais +</a>
                                    <a class="btn btn-default" href="#">Comprar</a>
                                </div>
                                <img src="<?=base_url('assets/imagens/slide/slideItem2.jpg')?>" alt="">
                            </div>
                            <div class="slide-item">
                                <div class="slide-legend">
                                    <h1>Seja um Colaborador!</h1>
                                    <h2>O que é um Colaborador ?</h2>
                                    <p>Colaboradores ajudam a aumentar o conhecimento da comunidade!</p>
                                    <a class="btn btn-default" href="#teste">Saiba Mais +</a>
                                    <a class="btn btn-default" href="#">Cadastrar</a>
                                </div>
                                <img src="<?=base_url('assets/imagens/slide/slideItem3.jpg')?>" alt="">
                            </div>
                            
                            <span class="next"><img src="<?=base_url('assets/imagens/slide/next.png')?>" alt=""></span>
                            <span class="prev"><img src="<?=base_url('assets/imagens/slide/prev.png')?>" alt=""></span>
                        </div>
                    </div>
                    
                    <div id="not-sec" class="col-ds-6">
                        <div class="col-ds-12 bloco">
                            <a href="#">
                                <div class="col-ds-3">
                                    <img class="img-resp" src="<?=base_url('assets/imagens/noticias/not1.png')?>" alt="" title="Titulo da Noticia">
                                </div>
                                <div class="col-ds-9">
                                    <h1>Título da Noticia em Destaque</h1>
                                    <p>Descrição da noticia</p>
                                    <small>Leia Mais +</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-ds-12 bloco">
                            <a href="#">
                                <div class="col-ds-3">
                                    <img class="img-resp" src="<?=base_url('assets/imagens/noticias/not1.png')?>" alt="" title="Titulo da Noticia">
                                </div>
                                <div class="col-ds-9">
                                    <h1>Título da Noticia em Destaque</h1>
                                    <p>Descrição da noticia</p>
                                    <small>Leia Mais +</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-ds-12 bloco">
                            <a href="#">
                                <div class="col-ds-3">
                                    <img class="img-resp" src="<?=base_url('assets/imagens/noticias/not1.png')?>" alt="" title="Titulo da Noticia">
                                </div>
                                <div class="col-ds-9">
                                    <h1>Título da Noticia em Destaque</h1>
                                    <p>Descrição da noticia</p>
                                    <small>Leia Mais +</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fixed">
                <div class="col-ds-12 bloco">
                    <div class="col-ds-12">
                        <h1 class="titulo-janela">mais<span style="color: #FFF">Visualizadas</span></h1>
                    </div>
                    
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="index.php/Aula/visAula">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    <div class="col-ds-2-4 btnAula item-preview">
                        <a href="#">
                            <div>
                                <p class="btn-click">
                                    clique para<br>
                                    <span>Visualizar</span>
                                </p>
                                <img class="img-resp" src="<?=base_url('assets/imagens/usuario/aula/padraoAula.png')?>" alt="">
                            </div>
                            <h2>Nome da Aula</h2>
                        </a>
                        <p class="item-preview-desc">Breve descrição...</p>
                        <a class="item-preview-user" href="#">Nome Usuário</a>
                        <div class="col-ds-7">
                            <small>0 visualizações</small>
                        </div>
                        <div class="col-ds-5">
                            <small>1 dia atrás</small>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-ds-12" style="text-align: center">
                            <button class="btn btn-default btn-medium" style="float: none">Carregar +</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fixed">
                <div class="row bloco">
                    <div class="col-ds-12">
                        <h1>Torne-se um Colaborador!</h1>
                        <p>Cadastre-se para poder postar suas aulas e visualizar aulas de nivel avançado.</p>
                        <p>Contribua para o crescimento da comunidade e cresça junto!</p>
                        <a class="btn btn-default" href="#">Cadastre-se</a>
                        <a class="btn btn-default" href="">Saiba Mais +</a>
                    </div>
                </div>
            </div>
            
            <!-- RODAPÉ -->
            <?php include('includes/footer.php'); ?>
        </main>
    </body>
</html>