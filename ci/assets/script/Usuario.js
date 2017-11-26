//DADOS INICIAIS
function Usuario(){
    visualizarDados();
    
    $("#btn-dadosGerais").click(atualizarCadastros);
}

function visualizarDados(){
    var cont = 0;
    var dadosGerais = [];
    
    
    $.ajax({
        url: base_url+"index.php/Usuario/visualizarDados",
        success: function(result){
            var dados = JSON.parse(result);
            
            Array.prototype.slice.call(document.querySelectorAll('#form-dadosGerais input')).forEach(function(input){
                input.value = dados[cont];
                cont++;
            });
        }
    });
}

function atualizarCadastros(dadosP){
    var dados = [];
    var input = Array.prototype.slice.call(document.querySelectorAll('#form-dadosGerais input'));
    
    input.forEach(function(input){
        dados.push(input.value);
    });
    
    if(dados[0] == "" || dados[1] == "" || dados[2] == ""){
        msgBox(2);
        
        for(var i = 0; i < Array.prototype.slice.call(document.querySelectorAll('#form-dadosGerais input')).length; i++){
            input[i].value = dadosP[i];
        }
    }else{
        msgBox(5);
    
        $('.btn-option').click(function(){
            if($(this).attr('option') == '1'){
                setTimeout(function(){
                    $.ajax({
                        method: "POST",
                        url: base_url+"index.php/Usuario/atualizarDados",
                        data: {'nome': dados[0], 'nick': dados[1], 'email': dados[2]},
                        beforeSend: function(){
                            
                        },
                        success: function(result){
                            if(result == '1'){
                                msgBox(6);
                            }else{
                                msgBox(2);
                                
                                for(var i = 0; i < Array.prototype.slice.call(document.querySelectorAll('#form-dadosGerais input')).length; i++){
                                    input[i].value = dadosP[i];
                                }
                            }
                        }
                    });
                }, 200);
            }else{
                for(var i = 0; i < Array.prototype.slice.call(document.querySelectorAll('#form-dadosGerais input')).length; i++){
                    input[i].value = dadosP[i];
                }
            }
        });
    }
}

$(Usuario);