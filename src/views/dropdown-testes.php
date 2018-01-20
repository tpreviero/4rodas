<?php
    $items = array(
            array(
                'chapeu' => '',
                'destaque' => 'Ford Focus Fastback Titanium Plus',
                'thumb' => 'dist/media/testes-destaque-1.png'
            ),
            array(
                'chapeu' => '',
                'destaque' => 'Audi A6 2.0 TFSI',
                'thumb' => 'dist/media/testes-destaque-2.png'
            ),
            array(
                'chapeu' => 'Ford EcoSport 1.6 Powershift',
                'destaque' => 'EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...',
                'thumb' => ''
            ),
            array(
                'chapeu' => '',
                'destaque' => 'Audi Q3 1.4',
                'thumb' => 'dist/media/testes-destaque-3.png',
        
            ),
            array(
                'chapeu' => '',
                'destaque' => 'BMW 420i Cabriolet',
                'thumb' => 'dist/media/testes-destaque-4.png'
            )
    );
?>
<section class="header__dropdown testes w-100 d-none">
    <div class="container">
        <div class="row">
            <div class="col-2 p-0">
                <ul class="testes__ul p-0 pt-5 pb-5 mb-0 text-right">
                    <li>
                        <a href="#" class="active">Ver tudo de testes</a>
                    </li>
                    <li>
                        <a href="#">Comparativos</a>
                    </li>
                    <li>
                        <a href="#">Impressões</a>
                    </li>
                    <li>
                        <a href="#">Longa duração</a>
                    </li>
                    <li>
                        <a href="#">Teste de pista</a>
                    </li>
                </ul>
            </div>
            <div class="testes__destaques col-10 pt-5 pb-5">
                <div class="row no-gutters">
                    <?php $index = 0; ?>
                    <?php foreach ($items as $item): ?>
                        <article class="col <?php echo $index == 0 ? 'ml-0' : 'ml-4'; ?>">
                            <?php if ($item['thumb']): ?>
                                <figure>
                                    <img src="<?php echo $item['thumb']; ?>" 
                                        class="img-fluid"
                                        alt="">
                                </figure>
                                <figcaption>
                                    <h4><?php echo $item['destaque']; ?></h4>
                                </figcaption>  
                            <?php else: ?>
                                <h4 class="mb-4"><?php echo $item['chapeu']; ?></h4>
                                <p><?php echo $item['destaque']; ?></p>
                            <?php endif; ?>
                        </article>
                        <?php $index++; ?>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>