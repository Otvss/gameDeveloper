function main(){
    var control = 0;
    var menuLateral = document.querySelector("#menuLateral");
    var main = document.querySelector("main");
    var widthWindow = window.innerWidth;
    var widthMenuLat = document.querySelector("#menuLateral").offsetWidth;
    var base_url = "https://gamedeveloper-otvss.c9users.io/ci/";
    var qtd = 5;
    var page = 1;
    
    main.style.marginLeft = widthMenuLat+"px";
    
    //ALTERAR TELAS DE ACORDO COM O ESTADO DO SITE
    var navLog;
        if(navLog = document.querySelector("#navUser"))
            navLog.addEventListener("click", loginScreen); //CHAMAS AS AÇÕES DO DA TELA DE LOGIN
    
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
    
    carregarAula(qtd, page);
    
    $('.btn-carregarAula').click(function(){
        page = page + 1;
        carregarAula(qtd, page);
    });
}

function carregarAula(qtd, page){
    $('.aulaList').html("");
    
    //LISTA AS AULAS DE ACORDO COM A QUANTIDADE E PAGINA SELECIONADAS
    if(window.location.href == "https://gamedeveloper-otvss.c9users.io/ci/"){
        $.ajax({
            url: base_url+"index.php/Aula/listarAulas",
            method: 'POST',
            data: {'qtd': qtd, 'page':page},
            success: function(result){
                result = JSON.parse(result);
                
                for(var i = 0; i < result.length; i++){
                    //RECEPTACULO QUE ARMAZENARA AS INF DA AULA
                    var recep = $('<div>',{
                        class: 'col-ds-2-4 btnAula item-preview aula'+result[i].cd_aula
                    }).appendTo('.aulaList');
                    
                        var a = $('<a>',{
                            href: base_url+'index.php/Aula/carregarAula/'+result[i].cd_aula
                        }).appendTo('.aula'+result[i].cd_aula);
                            
                            var aDiv = $('<div>',{}).appendTo('.aula'+result[i].cd_aula+' a');
                            
                                var vejaMais = $('<p>',{
                                    class: 'btn-click'
                                }).appendTo('.aula'+result[i].cd_aula+' a div').html("clique para<br><span>Visualizar</span>");
                                
                                var img = $('<img>',{
                                    class: 'img-resp',
                                    src: base_url+result[i].ds_imgAula,
                                    alt: ''
                                }).appendTo('.aula'+result[i].cd_aula+' a div');
                                
                            var tit = $('<h2>',{}).appendTo('.aula'+result[i].cd_aula+' a').html(result[i].nm_aula);
                }
            }
        });
    }
}

window.onload = main;