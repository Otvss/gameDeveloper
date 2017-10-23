function msgBox(msg){
    //CRIANDO DIV E TAGS NECESSÁRIAS PARA EMISSÃO DE MENSAGEM
    $('<div>', {
       id: "modal2", 
       style: "z-index: 9999999999; display: flex; position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; align-items: center; background: rgba(0, 0, 0, 0.0) 0 0; transition: 0.2s ease-in-out",
    }).appendTo('body');
        
    $('<div>', {
        id: "msg-box-container",
        class: "container-fixed",
        style: "z-index: 999999999; float: none; margin: 0 auto; margin-top: -30px; opacity: 0; transition: 0.1s ease-in-out",
    }).appendTo('#modal2');
        
    $('<div>', {
        class: "msg-box",
        style: "position: relative; z-index: 99999999",
    }).appendTo('#msg-box-container');
    
    $('<h1>', {
        class: "msg-box-title",
    }).appendTo('.msg-box');
    
    $('<p>', {
        class: "msg-box-desc",
        style: "padding: 15px",
    }).appendTo('.msg-box');
    
    $('<button>', {
        class: "btn btn-default btn-medium msg-box-close",
        style: "float: none; margin-left: 15px"
    }).appendTo('.msg-box');
    
    setTimeout(function(){
        document.querySelector('#modal2').style.background = "rgba(0, 0, 0, 0.6)";
        document.querySelector('#msg-box-container').style.marginTop = "0px";
        document.querySelector('#msg-box-container').style.opacity = "1";
    }, 100);
     
    //DETERMINANDO CONTEÚDO DA CAIXA DE MENSAGEM   
    switch (msg) {
        case 1:
           document.querySelector('.msg-box').style = "background: #FFF; color: #000; border: 1px solid #FF5034"; 
            
           document.querySelector('.msg-box-title').innerHTML = "Opa! Temos um problema...";
           document.querySelector('.msg-box-title').style = "padding: 10px; background: #FF5034; color: #FFF; border-bottom: #FF3010";
           
           document.querySelector('.msg-box-desc').innerHTML = "Parece que encontramos um erro na sua ação de acesso :(<br>"
                                                                +"Certifique-se de preencher os campos corretamente e tente novamente!<br>"
                                                                +"Caso o problema persista, entre em contato conosco através do link abaixo:<br>"
                                                                +"<a href='#' style='color: #2375FF'>http://www.gamedeveloper.com.br/contato</a>";
        
           document.querySelector(".msg-box-close").innerHTML = "Fechar";
        break;
        
        case 2:
            document.querySelector('.msg-box').style = "background: #FFF; color: #000; border: 1px solid #FF5034"; 
            
            document.querySelector('.msg-box-title').innerHTML = "LOGIN ou SENHA Inválidos!";
            document.querySelector('.msg-box-title').style = "background: #FF5034; color: #FFF; border-bottom: #FF3010";
           
            document.querySelector('.msg-box-desc').innerHTML = "Parece que encotramos um erro na sua ação de acesso :(<br>"
                                                                +"Certifique-se de preencher os campos corretamente e tente novamente!<br>"
                                                                +"Caso o problema persista, entre em contato conosco através do link abaixo:<br>"
                                                                +"<a href='#' style='color: #2375FF'>http://www.gamedeveloper.com.br/contato</a>";
        
            document.querySelector(".msg-box-close").innerHTML = "Fechar";
        break;
        
        case 3:
            document.querySelector('.msg-box').style = "background: #FFF; color: #000; border: 1px solid #309931"; 
            
            document.querySelector('.msg-box-title').innerHTML = "Conta Criada com Sucesso!";
            document.querySelector('.msg-box-title').style = "padding: 10px; background: #2EB265; color: #FFF; border-bottom: #309931";
           
            document.querySelector('.msg-box-desc').innerHTML = "Basta agora acessar seu email e confirmar o cadastro =)<br>"
                                                                +"<strong>Lembre-se: </strong>Na página da sua conta possui outros dados para serem preenchidos<br>"
                                                                +"que darão acesso à compra da moeda do site para visualização de aulas de nível avançado!";
        
            document.querySelector(".msg-box-close").innerHTML = "Fechar";
        break;
        
        case 4:
            //document.querySelector('.msg-box').style = "width: 300px; height: 240px; background: url(imagens/fundo/loading.gif); border: none; background-repeat: no-repeat; background-size: 100% 100%; background-position: center center";
            document.querySelector('.msg-box').style = "width: 300px; height: 240px;";
            document.querySelector('.msg-box').innerHTML = '<img src="imagens/fundo/loading.gif">';
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