<?php
    $items = array('SALÃO DO AUTOMÓVEL', 'RENEGADE', 'NOVO SANDERO', 'NOVO FOX', 'NOVO KA', 'HB 20', 'DUSTER', 'GOLF', 'COROLLA', 'CIVIC', '| A-Z |');
?>
<section class="mais-acessados mb-2 d-none d-lg-block">
    <div class="container p-0">
        <div class="row no-gutters">
            <div class="col-auto">
            <p class="mais-acessados__titulo pl-4 mb-0 mr-3">
                    <sub>+</sub>ACESSADOS</p>
            </div>
            <div class="col-md-9 col-lg-auto col-xl-9">
                <nav class="mais-acessados__nav">
                    <ul class="row justify-content-lg-start justify-content-xl-around p-0 m-0">
                        <?php foreach($items as $item): ?>
                        <li>
                            <a href="#" 
                                class="mx-3"><?php echo $item; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>