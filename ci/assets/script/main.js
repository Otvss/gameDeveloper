function main(){
    var control = 0;
    var menuLateral = document.querySelector("#menuLateral");
    var main = document.querySelector("main");
    var widthWindow = window.innerWidth;
    var widthMenuLat = document.querySelector("#menuLateral").offsetWidth;
    
    main.style.marginLeft = widthMenuLat+"px";
    
    slide(); //CHAMA AS ANIMAÇÕES DO SLIDE
    
    document.querySelector("#navUser").addEventListener("click", loginScreen); //CHAMAS AS AÇÕES DO DA TELA DE LOGIN
    
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