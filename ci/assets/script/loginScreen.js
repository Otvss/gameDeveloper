var base_url = "https://gamedeveloper-otvss.c9users.io/ci/";

function loginScreen(){
    //MODAL DA TELA DE CADASTRO E LOGIN
    var modal = $('<div>',{
        id: "modal",
        class: "cadLogScreen",
        style: "z-index: 9996; display: flex; position: fixed; width: 100%; height: 0%; top: 0px; left: 0px; align-items: center",
    }).appendTo('body').html('<button class="btn-close"><img src="'+base_url+'/assets/imagens/icons/close.png"></button>');
    
    //CONTAINER QUE POSICIONA OS ITENS DE CADASTRO E LOGIN
    $('<div>', {
        id: 'logScreenObj',
        class: "container-fixed",
        style: "float: none; margin: 0 auto;",
    }).appendTo(".cadLogScreen");
    
    //TÍTULO DE BOAS VINDAS
    $('<p>', {
        class: 'titulo-janela',
        style: 'color: #FFF; text-shadow: 1px 1px 0px #000'
    }).appendTo("#logScreenObj").html("Seja Bem-Vindo Usuário");
    
    //CRIAÇÃO DOS COMPONENTES DA TELA DE CADASTRO E LOGIN
    //TELA DE LOGIN
    var login = $('<div>',{
        id: "login",
        class: "col-ds-4 accessUser",
        style: "padding: 0px; opacity: 1; transition: 0.3s ease-in-out",
    }).appendTo("#logScreenObj");
    
        var titulo = $('<div>',{
            class: 'titulo-box',
        }).appendTo('#login');
    
            var titIcon = $('<img>',{
                src: base_url+'assets/imagens/icons/login.png',
            }).appendTo('#login .titulo-box');
        
            var h1L = $('<h1>',{
                class: "accessTitulo",
            }).appendTo('#login .titulo-box').html("Login<br><small>Preencha os campos corretamente</small>");
            
            $('<div>', {
                class: "form-control",
                style: "float: none; margin: 0 auto",
            }).appendTo('#login');
            
                //FORM
                $('<form>',{
                    class: 'form-login',
                    name: 'form-login',
                }).appendTo('#login .form-control');
                
                    //CONTROL INPUT E LABEL
                    var labelL = [];
                    for(var i = 0; i < 2; i++){
                        $('<div>',{
                            class: 'control-input cilg'+i,
                        }).appendTo('.form-login');
                        
                        labelL.push($('<label>').appendTo('.cilg'+i));
                    }
                    
                    //ROTULAMENTO DOS INPUTS
                    labelL[0].html("Login<br>");
                    labelL[1].html("Senha<br>");
                
                        //LOGIN
                        $('<input>',{
                            type: "text",
                            name: "login-cpt",
                            placeholder: "Nick ou Email",
                        }).appendTo('.cilg0 label');
                        
                        //SENHA
                        $('<input>',{
                            type: "password",
                            name: "senha-psw",
                            placeholder: "Digite entre 8 à 12 caracteres",
                        }).appendTo('.cilg1 label');
                        
                        //LEMBRETE DE SENHA
                        var aL = $('<a>',{
                            href: "#",
                            style: "color: #cfcfcf",
                        }).appendTo('.cilg1').html("Esqueceu sua senha / login ?");
                        
                        //BOTAO DE ENVIO
                        $('<button>',{
                            class: 'btn btn-default btn-medium',
                            name: 'login-btn',
                            value: 'Acessar'
                        }).appendTo('#login .form-control').html("Acessar");
                        
                        //LOGIN COM FACEBOOK
                        var fb = $('<div>',{
                                class: 'fb-login-button',
                                'data-max-rows': '1',
                                'data-size': 'large',
                                'data-button-type': 'login_with',
                                'data-show-faces': 'false',
                                'data-auto-logout-link': 'true', 
                                'data-use-continue-as': 'true'
                            }).appendTo('#login .form-control')
    
    //TELA DE CADASTRO
    $('<div>',{
        id: "cadastro",
        class: "col-ds-7 accessUser",
        style: "float: right; padding: 0px; opacity: 1; transition: 0.3s ease-in-out",
    }).appendTo("#logScreenObj");
    
        var titulo = $('<div>',{
            class: 'titulo-box',
        }).appendTo('#cadastro');
    
            var titIcon = $('<img>',{
                src: base_url+'assets/imagens/icons/newUserIcon.png',
            }).appendTo('#cadastro .titulo-box');
        
            var h1L = $('<h1>',{
                class: "accessTitulo",
            }).appendTo('#cadastro .titulo-box').html("Cadastro<br><small>Dados mínimos para realizar o cadastro</small>");
            
            $('<div>', {
                class: "form-control",
                style: "float: none; margin: 0 auto",
            }).appendTo('#cadastro');
            
                //FORM
                $('<form>',{
                    class: 'form-cadastro',
                    name: 'form-cadastro',
                }).appendTo('#cadastro .form-control');
                
                    //CONTROL INPUT E LABEL
                    var labelC = [];
                    var inputC = [];
                    
                    for(var i = 0; i < 6; i++){
                        inputC.push($('<div>',{
                            class: 'control-input cicd'+i
                        }).appendTo('.form-cadastro'));
                        
                        labelC.push($('<label>').appendTo('.cicd'+i));
                    }
                    
                    //ROTULAMENTO DOS INPUTS
                    labelC[0].html("Nome<br>");
                    inputC[0].addClass('col-ds-8');
                    labelC[1].html("Nick<br>");
                    inputC[1].addClass('col-ds-4');
                    labelC[2].html("E-mail<br>");
                    inputC[2].addClass('col-ds-6');
                    labelC[3].html("Confirmar E-mail<br>");
                    inputC[3].addClass('col-ds-6');
                    labelC[4].html("Senha<br>");
                    inputC[4].addClass('col-ds-6');
                    labelC[5].html("Confirmar Senha<br>");
                    inputC[5].addClass('col-ds-6');
                    
                    //NOME
                    $('<input>',{
                        type: "text",
                        name: "nome-cpt",
                        placeholder: "Clovison Almeida Junior",
                    }).appendTo('.cicd0 label');
                    
                    //NICK
                    $('<input>',{
                        type: "text",
                        name: "nick-cpt",
                        placeholder: "Clovis",
                    }).appendTo('.cicd1 label');
                    
                    //EMAIL
                    $('<input>',{
                        type: "email",
                        name: "email-cpt",
                        placeholder: "Clovisjr@gamedeveloper.com",
                    }).appendTo('.cicd2 label');
                    
                    //CONFIRMAR EMAIL
                    $('<input>',{
                        type: "email",
                        name: "emailC-cpt",
                        placeholder: "Clovisjr@gamedeveloper.com",
                    }).appendTo('.cicd3 label');
                    
                    //SENHA
                    $('<input>',{
                        type: "password",
                        name: "senha-cpt",
                        placeholder: "8 à 12 digitos",
                    }).appendTo('.cicd4 label');
                    
                    //CONFIRMAR SENHA
                    $('<input>',{
                        type: "password",
                        name: "senhaC-cpt",
                        placeholder: "Redigite a senha...",
                    }).appendTo('.cicd5 label');
                    
                    //CHECKBOX DE ACEITAÇÃO DOS DIREITOS AUTORAIS
                    $('<input>',{
                        type: 'checkbox',
                        value: 'sim',
                    });
                    
                    //BOTAO DE ENVIO
                    $('<button>',{
                        class: 'btn btn-default btn-medium',
                        name: 'cadastro-btn',
                        value: 'Cadastrar'
                    }).appendTo('#cadastro .form-control').html("Cadastrar");
                    
    //ANIMAÇÕES INICIAIS
    modal.animate({height: '100%'}, 250);
    modal.animate({height: '95%'}, 200);
    modal.animate({height: '100%'}, 150);
    
    //AÇÃO DOS BOTÕES
    $('button[name="login-btn"]').click(function(){
        logarUsuario();
    });
    
    document.querySelector("button[name='cadastro-btn']").addEventListener("click", function(){
        cadastrarUsuario();
    });
    
    //AÇÕES DOS BOTÕES DA TELA DE CADASTRO E LOGIN
    document.querySelector(".btn-close").addEventListener("click", function(){
        modal.animate({height: '0%'}, 200);
        
        //REMOVE OS OBJETOS DA TELA DE CADASTRO E LOGIN
        setTimeout(function(){
            document.querySelector("#modal").remove();
        }, 180);
    });
}

//FUNÇÃO DE LOGIN
function logarUsuario(){
    var cptLogin = $('form[name="form-login"] input[name="login-cpt"]').val();
    var cptSenha = $('form[name="form-login"] input[name="senha-psw"]').val();;
    var btnCad =  $('button[name="login-btn"]'); //VARIAVEL QUE ARMAZENA OS BOTÕES PARA REALIZAR ALTERAÇÕES NOS MESMOS

    $.ajax({
        method: 'POST',
        data: {'nick': cptLogin, 'senha': cptSenha},
        url: base_url+"index.php/Usuario/logarUsuario",
        beforeSend: function(){
            btnCad.html('Verificando...');
        },
        success: function(result){
            if(result == '1'){
                window.location.replace(base_url+'index.php/Usuario/painelUsuario');
            }else{
                msgBox(2);
            }
        },
        error: function(){
            msgBox(2);
        }
    });
}

//FUNÇÃO PARA CADASTRO DE USUÁRIO
function cadastrarUsuario(){
    var dados = ""; //VARIAVEL CONTENDO TODOS OS DADOS DE CADASTRO BÁSICO
    var btnCad =  document.querySelector("button[name='cadastro-btn']"); //VARIAVEL QUE ARMAZENA OS BOTÕES PARA REALIZAR ALTERAÇÕES NOS MESMOS
    
    //ARMAZENANDO OS DADOS DO USUÁRIO
    Array.prototype.slice.call(document.querySelectorAll('form[name="form-cadastro"] input')).forEach(function(input){
        dados = dados+input.value+" , ";
    });
    
    var dados = dados.split(" , "); //SEPARANDO OS DADOS PARA ARMAZENAMENTO
    dados.pop(); //REMOVENDO O ÚLTIMO ELEMENTO DESNECESSÁRIO
    var dadosPreenchidos = true;
    
    //VERIFICANDO SE TODOS OS DADOS ESTÃO PREENCHIDOS
    for(var i in dados){
        if(dados[i] == ""){
            dadosPreenchidos = false;
            break;
        }
    }
    
    if(dados[2] != dados[3]){
        dadosPreenchidos = false;
    }else if(dados[4] != dados[5]){
        dadosPreenchidos = false;
    }
    
    //EMITINDO MENSAGEM INFORMATIVO DO ESTADO DO CADASTRO
    if(dadosPreenchidos == true){
        var dadosJ = {'nome':dados[0], 'nick':dados[1], 'email':dados[2], 'senha':dados[4]};
        
        $.ajax({
            url: base_url+"index.php/Usuario/cadastrarUsuario",
            method: "POST",
            data: dadosJ,
            beforeSend: function(){
                btnCad.innerHTML = "Carregando...";
            },
            success: function(result){
                if(result == "true"){
                    btnCad.classList.remove("btn-error");
                    btnCad.classList.add("btn-success");
                    btnCad.innerHTML = "Cadastro Realizado <img src='"+base_url+"assets/imagens/icons/pos1.png' alt=''> ";
                    msgBox(3);
                
                    //ZERA OS INPUTS DO FORMULÁRIO DE CADASTRO
                    $('form[name="form-cadastro"]').val("");
                }else{
                    btnCad.classList.add("btn-error");
                    btnCad.innerHTML = "Tente Novamente <img class='btn-icon' src='"+base_url+"/assets/imagens/icons/error1.png' alt=''>";
                    msgBox(4);
                }
                
            },
            error: function(){
                btnCad.classList.add("btn-error");
                btnCad.innerHTML = "Tente Novamente <img class='btn-icon' src='"+base_url+"/assets/imagens/icons/error1.png' alt=''>";
                msgBox(2);
            }
        });
    }else{
        btnCad.classList.add("btn-error");
        btnCad.innerHTML = "Tente Novamente <img class='btn-icon' src='"+base_url+"assets/imagens/icons/error1.png' alt=''>";
        msgBox(2);
    }
}