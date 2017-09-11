function loginScreen(){
        $('<div>', {
           id: "modal", 
           style: "z-index: 9998; display: flex; position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; align-items: center; background: rgba(0, 0, 0, 0) 0 0; transition: 0.3s ease-in-out",
        }).appendTo("body");
        
        document.querySelector("#modal").innerHTML = '<button class="btn-close"><img src="imagens/icons/close.png"></button>';
        
        $('<div>', {
            class: "container-fixed",
            style: "float: none; margin: 0 auto;",
        }).appendTo("#modal");
                    
        var divLogin = '<div class="col-ds-4 accessUser" style="padding: 0px; opacity: 0; transition: 0.3s ease-in-out">'
                            +'<h1 class="accessTitulo">Login <br>'
                            +'<small>Preencha todos os campos corretamente!</small></h1>'
                            +'<div class="col-ds-10" style="float: none; margin: 0 auto">'
                                +'<form name="login">'
                                    +'<div class="control-input">'
                                        +'<label>Login <br>'
                                            +'<input type="text" name="login-cpt" placeholder="Nick ou Email...">'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="control-input">'
                                        +'<label>Senha <br>'
                                            +'<input type="password" name="senha-cpt" placeholder="Digite sua senha...">'
                                        +'</label>'
                                        +'<a href="#" style="color: #cfcfcf">Esqueceu o seu login/senha ?</a><br>'
                                    +'</div>'
                                +'</form>'
                                +'<div class="control-input">'
                                    +'<button name="login-btn" class="btn btn-default btn-medium">Acessar</button>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        +'<div class="col-ds-7 accessUser" style="float: right; padding: 0px; opacity: 0; transition: 0.3s ease-in-out">'
                            +'<h1 class="accessTitulo">Cadastro <br>'
                            +'<small>Dados mínimos para realizar o cadastro</small></h1>'
                            +'<div class="col-ds-11" style="float: none; margin: 0 auto">'
                                +'<form name="cadastroUser">'
                                    +'<div class="control-input" style="width: 70%">'
                                        +'<label>Nome <br>'
                                            +'<input type="text" name="nome-cptC" placeholder="Digite seu nome completo...">'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="control-input" style="width: 25%; margin-left: 5%">'
                                        +'<label>Nick <br>'
                                            +'<input type="text" name="nick-cptC" placeholder="Ex. Relogio">'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="control-input" style="width: 45%">'
                                        +'<label>Email <br>'
                                            +'<input type="email" name="email-cptC" placeholder="exemplo@exemplo.com">'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="control-input" style="width: 45%; margin-left: 5%">'
                                        +'<label>Confirmar Email <br>'
                                            +'<input type="email" name="email-cptCs" placeholder="exemplo@exemplo.com">'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="control-input" style="width: 45%">'
                                        +'<label>Senha <br>'
                                            +'<input type="password" name="senha-cpt" placeholder="Digite sua senha...">'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="control-input" style="width: 45%; margin-left: 5%">'
                                        +'<label>Confirmar Senha <br>'
                                            +'<input type="password" name="senha-cpts" placeholder="Redigite sua senha...">'
                                        +'</label>'
                                    +'</div>'
                                +'</form>'
                                +'<div class="control-input">'
                                    +'<button name="cadUser-btn" class="btn btn-default btn-medium">Cadastrar</button>'
                                +'</div>'
                            +'</div>'
                        +'</div>';
                        
        //REALIZA O EFEITO DE FADE E DESLOCAMENTO
        setTimeout(function(){
            Array.prototype.slice.call(document.querySelectorAll(".accessUser")).forEach(function(div){
                div.style.opacity = "1";
                div.style.marginTop = "0px";
                div.parentElement.parentElement.style.background = "rgba(0, 0, 0, 0.8)";
            });
        }, 100);
                        
        document.querySelector("#modal div").innerHTML = divLogin;
        
        document.querySelector(".btn-close").addEventListener("click", function(){
            Array.prototype.slice.call(document.querySelectorAll(".accessUser")).forEach(function(div){
                div.parentElement.parentElement.style.background = "rgba(0, 0, 0, 0)";
                div.style.opacity = "0";
                div.style.marginTop = "35px";
            });
            
            setTimeout(function(){
                document.querySelector("#modal").remove();
            }, 300);
            
        });
        
        document.querySelector("button[name='login-btn']").addEventListener("click", function(){
            login();
        });
        
        document.querySelector("button[name='cadUser-btn']").addEventListener("click", function(){
            cadastroUser();
        });
}

function login(){
    var cptLogin = document.querySelector('input[name="login-cpt"]').value;
    var cptSenha = document.querySelector('input[name="senha-cpt"]').value;
    
    if((cptLogin == "") || (cptSenha == "")){
       msgBox(1);
    }else{
        
    }
}

function cadastroUser(){
    var dados = ""; //VARIAVEL CONTENDO TODOS OS DADOS DE CADASTRO BÁSICO
    
    //ARMAZENANDO OS DADOS DO USUÁRIO
    Array.prototype.slice.call(document.querySelectorAll('form[name="cadastroUser"] input')).forEach(function(input){
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
    
    //EMITINDO MENSAGEM INFORMATIVO DO ESTADO DO CADASTRO
    if(dadosPreenchidos == true){
        var dadosJ = {'nome':dados[0], 'nick':dados[1], 'email':dados[2], 'emailConfirm':dados[3], 'senha':dados[4], 'senhaConfirm':dados[5], 'button':'btnCadUser'};
        
        $.ajax({
            url: "script/user.php",
            method: "POST",
            data: dadosJ,
            success: function(){
                msgBox(3);
            },
            error: function(){
                msgBox(1);
            },
            beforeSend: function(){//criar uma msgbox só para o loading
                msgBox(4);
            },
        });
        
        Array.prototype.slice.call(document.querySelectorAll('form[name="cadastroUser"] input')).forEach(function(input){
            input.value = "";
        });
    }else{
        msgBox(1);
    }
}