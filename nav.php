<section id="nav">
        <nav class="navbar is-link" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="<?php echo $app_root ?>">
                    <img src="<?php echo $app_root ?>/includes/images/logo.png" width="100" height="30">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Início
                    </a>


                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Calculos
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                Quadrado
                            </a>
                            <a class="navbar-item">
                                Circulo
                            </a>
                            <a class="navbar-item">
                                Triângulo
                            </a>
                        </div>
                    </div>
                </div>
        </nav>

    </section>

    <section id="main" class="section">
