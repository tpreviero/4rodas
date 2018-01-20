<?php
    $items = array('NOTÍCIAS', 'AUTO-SERVIÇO', 'GUIA DE COMPRAS', 'TABELA FIPE');
?>
<nav class="header__nav col">
    <ul class="header__nav--ul row justify-content-center align-items-center p-xl-0 mb-0">
        <li>
            <a id="carros" class="item-menu arrow d-flex align-items-center pl-3 pr-5" href="#">CARROS</a>
        </li>
        <li>
            <a id="testes" class="item-menu arrow d-flex align-items-center pl-3 pr-5" href="#">TESTES</a>
        </li>
        <?php foreach ($items as $item): ?>
        <li>
            <a class="item-menu arrow d-flex align-items-center pl-3 pr-5" href="#"><?php echo $item; ?></a>
        </li>
        <?php endforeach; ?>
        <li>
            <a class="p-4" href="#">ASSINE</a>
        </li>
        <li>
            <form class="form-inline">
                <input type="text" 
                    name="q" 
                    id="busca" 
                    placeholder="PESQUISAR" 
                    class="form-control p-0 border-0 rounded-0">
                <button type="submit" 
                    class="btn btn-link rounded-0 header__btn--submit">
                    <img src="dist/media/lupa.png"
                        width="16"
                        height="16"
                        alt="">
                </button>
            </form>
        </li>
    </ul>
</nav>