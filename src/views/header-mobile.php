<?php include __DIR__ . '/banner-mobile.php'; ?>
<header class="header p-relative d-lg-none">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-auto">
                <button class="header__btn-busca btn btn-link p-0">
                    <img src="dist/media/lupa-mobile.png"
                        width="16"
                        height="16"
                        alt="">
                </button>
            </div>
            <div class="col">
                <img src="dist/media/logo-mobile.png"
                        width="150"
                        height="32"
                        class="header__logo img-fluid d-block mx-auto"    
                        alt="">
                </div>
            <div class="col-auto">
                <button class="header__btn-menu btn btn-link rounded-0 p-0"></button>
            </div>
        </div>
    </div>
    <nav class="header__nav container p-0">
        <div class="header__nav--busca row no-gutters d-none">
            <form class="form w-100 px-4">            
                <input type="text" 
                    name="q" 
                    id="busca" 
                    placeholder="PESQUISAR" 
                    class="form-control w-100">
            </form>
        </div>
        <ul class="header__nav--menu p-0 m-0 d-none">
            <li><a href="#" class="d-block">CARROS</a></li>
            <li><a href="#" class="d-block">TESTES</a></li>
            <li><a href="#" class="d-block">NOTÍCIAS</a></li>
            <li><a href="#" class="d-block">AUTO-SERVIÇO</a></li>
            <li><a href="#" class="d-block">GUIA DE COMPRAS</a></li>
            <li><a href="#" class="d-block">TABELA FIPE</a></li>
        </ul>
    </nav>
</header>