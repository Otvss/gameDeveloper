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
    
    if($('.aulaList')){
        $.ajax({
            url: base_url+"index.php/Aula/listarAulas",
            method: 'POST',
            data: {'qtd': qtd, 'page':page},
            success: function(result){
                result = JSON.parse(result);
                
                for(var i = 0; i < result.length; i++){
                    //RECEPTACULO QUE ARMAZENARA AS INF DA AULA
                    var recep = $('<div>',{
                        id: 'aula'+result[i].cd_aula,
                        class: 'col-ds-2-4 btnAula item-preview aula'+result[i].cd_aula,
                        onmouseenter: 'mostrarDetalhesAula(this)',
                        onmouseleave: 'ocultarDetalhe()',
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

function mostrarDetalhesAula(aula){
    //PEGA O ID DA AULA E RECORTA PARA PEGAR O CÓDIGO DELA NO BANCO
    var id = aula.id.substr(4, (aula.id.length -1));
    var posY = aula.offsetTop;
    
    if(aula.offsetLeft + 200 >= 612){
        var posX = aula.offsetLeft - 460;
    }else{
        var posX = aula.offsetLeft + 210;
    }
    
    
    console.log(posX);
    
    $.ajax({
        url: base_url+'index.php/Aula/mostrarDetalhes',
        method: 'POST',
        data: {'id': id},
        success: function(result){
            var result = JSON.parse(result);
            
            var titulo = result[0].nm_aula;
            var desc = result[0].ds_descAula;
            var colab = result[0].nm_nickUsuario;
            
            $('<div>',{
                class: 'aula-preview',
                style: 'z-index: 9999; position: absolute; width: 450px; height: 125px; background: rgba(0, 0, 0, 0.8); left:'+posX+'px; top:'+posY+'px',
            }).appendTo('.aulaList');
            
                $('<div>',{
                    class: 'col-ds-12',
                }).appendTo('.aula-preview');
            
                    $('<h2>',{
                        style: 'color: #f08600',
                    }).appendTo('.aula-preview div').html(titulo);
                    
                    $('<p>',{
                        style: 'color: aqua',
                    }).appendTo('.aula-preview div').html(colab);
                
                    $('<p>',{
                        style: 'color: #FFF',
                    }).appendTo('.aula-preview div').html(desc);
        }
    });
}

function ocultarDetalhe(){
    $('.aula-preview').remove();
}

window.onload = main;