<header>
    <nav class="nav nav-bar">
        <div style="width: 95%; margin: 0 auto">
            <!-- CAMPO DE PESQUISA -->
            <ul>
                <li>
                    <button class="btn-img1" name="menuLateral"></button>
                    <a class="btn-img1" href="index.html" style="width: auto"><img src="<?=base_url('assets/imagens/botoes/logotipo.png')?>" alt="game developer"></a>
                </li>
                <li>
                    <div class="control-input" style="border: 1px solid #000; background: #FFF;">
                        <input name="search-aula" type="text" placeholder="Pesquisar...">
                        <select class="btn-sbs btn-sf">Filtrar por:
                            <option value="#">Filtro</option>
                            <option value="LP">LP</option>
                            <option value="unreal4">Unreal 4</option>
                            <option value="unity5">Unity 5</option>
                        </select>
                    </div>
                    <button class="btn-search"></button>
                </li>
            </ul>
            
            <!-- MENU DO USUÁRIO -->
            <a href="#" id="navUser">
                <img src="<?=base_url('assets/imagens/usuario/icons/padrao.png')?>" alt="">
                <h3>
                    SEJA BEM-VINDO, <span style="color: #f08600">USUÁRIO</span><br>
                    <small style="color: #cfcfcf">Faça o cadastro / login</small>    
                </h3>
            </a>
        </div>
    </nav>
</header>