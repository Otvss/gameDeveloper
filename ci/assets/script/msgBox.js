/*function msgBox(msg){
    //CRIANDO DIV E TAGS NECESSÁRIAS PARA EMISSÃO DE MENSAGEM
    var modal = $('<div>', {
        id: "modal2",
        style: "z-index: 9999999999; display: flex; position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; align-items: center; background: rgba(0, 0, 0, 0.6) 0 0; transition: 0.2s ease-in-out"
    }).appendTo('main');
    
        var boxContainer = $('<div>', {
            id: "msg-box-container",
            class: "container-fixed",
            style: "z-index: 999999999; float: none; margin: 0 auto; margin-top: -30px; opacity: 0; transition: 0.1s ease-in-out"
        }).appendTo('#modal2');
            
            var msgBox = $('<div>', {
                class: "msg-box",
                style: "position: relative; z-index: 99999999"
            }).appendTo('#msg-box-container');
            
                var boxTitle = $('<h1>', {
                    class: "msg-box-title",
                }).appendTo('.msg-box');
                
                var boxDesc = $('<p>', {
                    class: "msg-box-desc",
                    style: "padding: 15px",
                }).appendTo('.msg-box');
                
                var boxClose = $('<button>', {
                    class: "btn btn-default btn-medium msg-box-close",
                    style: "float: none; margin-left: 15px"
                }).appendTo('.msg-box');
    
    setTimeout(function(){
        modal.style.background = "rgba(0, 0, 0, 0.6)";
        boxContainer.style.marginTop = "0px";
        boxContainer.style.opacity = "1";
    }, 100);
    
    //DETERMINANDO CONTEÚDO DA CAIXA DE MENSAGEM   
    switch (msg) {
        case 1:
            msgBox.style = "background: #FFF; color: #000; border: 1px solid #FF5034"; 
            
            boxTitle.innerHTML = "Opa! Temos um problema...";
            boxTitle.style = "padding: 10px; background: #FF5034; color: #FFF; border-bottom: #FF3010";
           
            boxDesc.innerHTML = "Parece que encontramos um erro na sua ação de acesso :(<br>"
                                                                +"Certifique-se de preencher os campos corretamente e tente novamente!<br>"
                                                                +"Caso o problema persista, entre em contato conosco através do link abaixo:<br>"
                                                                +"<a href='#' style='color: #2375FF'>http://www.gamedeveloper.com.br/contato</a>";
        
           boxClose.innerHTML = "Fechar";
           boxClose.addClass('btn-error');
        break;
        
        case 2:
            msgBox.style = "background: #FFF; color: #000; border: 1px solid #FF5034"; 
            
            boxTitle.innerHTML = "LOGIN ou SENHA Inválidos!";
            boxTitle.style = "background: #FF5034; color: #FFF; border-bottom: #FF3010";
           
            boxDesc.innerHTML = "Parece que encotramos um erro na sua ação de acesso :(<br>"
                                                                +"Certifique-se de preencher os campos corretamente e tente novamente!<br>"
                                                                +"Caso o problema persista, entre em contato conosco através do link abaixo:<br>"
                                                                +"<a href='#' style='color: #2375FF'>http://www.gamedeveloper.com.br/contato</a>";
        
            boxClose.innerHTML = "Fechar";
        break;
        
        case 3:
            msgBox.style = "background: #FFF; color: #000; border: 1px solid #309931"; 
            
            boxTitle.innerHTML = "Conta Criada com Sucesso!";
            boxTitle.style = "padding: 10px; background: #2EB265; color: #FFF; border-bottom: #309931";
           
            boxDesc.innerHTML = "Basta agora acessar seu email e confirmar o cadastro =)<br>"
                                                                +"<strong>Lembre-se: </strong>Na página da sua conta possui outros dados para serem preenchidos<br>"
                                                                +"que darão acesso à compra da moeda do site para visualização de aulas de nível avançado!";
        
            boxClose.innerHTML = "Fechar";
        break;
        
        case 4:
            //msgBox.style = "width: 300px; height: 240px; background: url(imagens/fundo/loading.gif); border: none; background-repeat: no-repeat; background-size: 100% 100%; background-position: center center";
            msgBox.style = "width: 300px; height: 240px;";
            msgBox.innerHTML = '<img src="imagens/fundo/loading.gif">';
        break;
        
        default:
            console.log("Nenhum código de mensagem encontrado!");
    }
    
    //EXCLUINDO MENSAGEM
    document.querySelector('.msg-box-close').addEventListener("click", function(){
        msgBoxClose();
        setTimeout(function(){
            document.querySelector("#modal2").remove();
        }, 1000);
    });
}

function msgBoxClose(){
    document.querySelector('#msg-box-container').style.transition = "0.3s ease-in-out";
    document.querySelector('#modal2').style.transition = "0.3s ease-in-out";
    document.querySelector('#modal2').style.background = "rgba(0, 0, 0, 0.0)";
    document.querySelector('#msg-box-container').style.marginTop = "-30px";
    document.querySelector('#msg-box-container').style.opacity = "0";
}
*/

function msgBox(msg){
    var modal = $('<div>',{
        class: 'modal-padrao'
    }).appendTo('body');
    
        var boxContainer = $('<div>',{
            id: 'msg-box-container',
            class: 'container-fixed'
        }).appendTo('.modal-padrao');
        
            var msgBox = $('<div>',{
                class: 'msg-box'
            }).appendTo('#msg-box-container');
            
                var boxTitle = $('<h1>',{
                    class: 'msg-box-title'
                }).appendTo('.msg-box');
                
                var boxDesc = $('<p>',{
                    class: 'msg-box-desc'
                }).appendTo('.msg-box');
                
                var boxClose = $('<button>',{
                    class: 'btn btn-default btn-medium msg-box-close'
                }).appendTo('.msg-box');
    
    //ANIMAÇÃO DE APRESENTAÇÃO DA CAIXA DE MENSAGEM
    setTimeout(function(){
        modal.css('background','rgba(0, 0, 0, 0.6)');
        boxContainer.css('margin-top','0px');
        boxContainer.css('opacity','1');
    }, 100);
                
    //CONTROLE DAS MENSAGENS
    switch(msg){
        
        //MENSAGEM DE ERRO AO LOGAR
        case 1:
            msgBox.addClass('msg-box-error');
            
            boxTitle.html("LOGIN ou SENHA Inválidos!");
            boxTitle.addClass('msg-title-error');
           
            boxDesc.html("Parece que encontramos um erro na sua ação de acesso :(<br>"
                                                                +"Certifique-se de preencher os campos corretamente e tente novamente!<br>"
                                                                +"Caso o problema persista, entre em contato conosco através do link abaixo:<br>"
                                                                +"<a href='#' style='color: #2375FF'>http://www.gamedeveloper.com.br/contato</a>");
        
            boxClose.html("Fechar");
            boxClose.addClass("btn-error");
        break;
        
        //MENSAGEM DE ERRO AO CADASTRAR
        case 2:
            msgBox.addClass('msg-box-error');
            
            boxTitle.html("Opa! Temos um problema...");
            boxTitle.addClass('msg-title-error');
           
            boxDesc.html("Parece que encotramos um erro na sua ação de acesso :(<br>"
                                                                +"Certifique-se de preencher os campos corretamente e tente novamente!<br>"
                                                                +"Caso o problema persista, entre em contato conosco através do link abaixo:<br>"
                                                                +"<a href='#' style='color: #2375FF'>http://www.gamedeveloper.com.br/contato</a>");
        
            boxClose.html("Fechar");
            boxClose.addClass("btn-error");
        break;
        
        //CONFIRMAÇÃO DE CADASTRO
        case 3:
            msgBox.addClass('msg-box-confirmed'); 
            
            boxTitle.html("Conta Criada com Sucesso!");
            boxTitle.addClass('msg-title-confirmed');
           
            boxDesc.html("Basta agora acessar seu email e confirmar o cadastro =)<br>"
                          +"<strong>Lembre-se: </strong>Na página da sua conta possui outros dados para serem preenchidos<br>"
                          +"que darão acesso à compra da moeda do site para visualização de aulas de nível avançado!");
        
            boxClose.html("Fechar");
            boxClose.addClass("btn-success");
        break;
    }
    
    //ADICIONANDO EVENTOS
    boxClose.click(function(){
        msgBoxClose(boxContainer, modal);
    });
}

//ENCERRAR A EXIBIÇÃO DA MENSAGEM
function msgBoxClose(boxContainer, modal){
    boxContainer.css({'transition':'0.1s ease-in-out', 'margin-top':'-30px', 'opacity':'0'});
    modal.css({'transition':'0.3s ease-in-out', 'background':'rgba(0, 0, 0, 0.0)'});
    
    //REMOVENDO O MODAL APÓS ANIMAÇÃO
    setTimeout(function(){
        modal.remove();
    }, 200);
}