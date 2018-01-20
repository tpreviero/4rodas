<header class="header p-relative d-none d-lg-block">
    <?php include __DIR__ . '/banner.php'; ?>
    <div class="container">
        <div class="header--container row no-gutters justify-content-md-start justify-content-xl-between align-items-center">
            <div class="col-auto pr-0">
                <img src="dist/media/logo.png"
                    class="header__logo img-fluid d-block" 
                    width="187"
                    height="43"    
                    alt="">
            </div>
            <div class="header__nav--midias-sociais col-auto pr-0 d-none">
                <ul class="row p-0 px-xl-4 m-0">
                    <li>
                        <a href="#">
                            <img src="dist/media/thumb-facebook.png"
                            class="ml-0"
                            alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="dist/media/thumb-instagram.png"
                            class="ml-md-2 ml-xl-4"
                            alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="dist/media/thumb-twitter.png"
                            class="ml-md-2 ml-xl-4"
                            alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="dist/media/thumb-abril.png"
                            class="ml-md-2 ml-xl-4"
                            alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <?php include_once __DIR__ . "/nav.php" ?>
            <div class="header__nav--assine d-none">
                <a href="#">
                    <img src="dist/media/btn-assine.png"
                        class="img-fluid ml-3" 
                        width="74"
                        heigh="35"
                        alt="">
                </a>
            </div>
            <?php include __DIR__ . '/dropdown-carros.php'; ?>
            <?php include __DIR__ . '/dropdown-testes.php'; ?>
        </div>
    </div>
</header>