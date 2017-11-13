function main(){
    var control = 0;
    var menuLateral = document.querySelector("#menuLateral");
    var main = document.querySelector("main");
    var widthWindow = window.innerWidth;
    var widthMenuLat = document.querySelector("#menuLateral").offsetWidth;
    var base_url = "https://projeto-tcc-gutem77.c9users.io/ci/";
    localStorage.setItem('usuario', false);
    var usuario = localStorage.getItem('usuario');
    
    main.style.marginLeft = widthMenuLat+"px";
    
    //ALTERAR TELAS DE ACORDO COM O ESTADO DO SITE
    alterarTelasB(usuario);
    
    //VERIFICA SE EXISTE ALGUM SLIDE NA TELA E EXECUTA SUA FUNÇÃO
    if(document.querySelector(".slide"))
        slide(); //CHAMA AS ANIMAÇÕES DO SLIDE
    
    //EFEITO DO MENU LATERAL
    document.querySelector("button[name='menuLateral']").addEventListener("click", function(){
        if(control == 0){
            menuLateral.style.display = "none";
            control++;
            main.style.marginLeft = "0px";
        }else{
            menuLateral.style.display = "block"
            control--;
            main.style.marginLeft = widthMenuLat+"px";
        }
    });
    
}

window.onload = main;