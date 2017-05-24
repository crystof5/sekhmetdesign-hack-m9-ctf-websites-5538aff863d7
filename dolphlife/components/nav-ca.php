<header id="home" class="">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- START LOGO DESIGN AREA -->
                    <div class="logo">
                        <a href="/">
                            <p>Dolph Life</p>
                        </a>
                    </div>
                    <!-- END LOGO DESIGN AREA -->
                </div>
                <div class="col-md-9">
                    <!-- START MENU DESIGN AREA -->
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                  <?php if($user->is_loggedin()): ?>
                                    <li><a class="navbar-brand" href="/ca/flag.php"><small>FLAG</small></a></li>
                            	      <li><a href="/ca/logout.php"><span class="glyphicon glyphicon-log-out"></span> Se d&eacute;connecter</a></li>
                                  <?php else: ?>
                                    <li><a class="smoth-scroll" href="/ca/">CA</a>
                                    </li>
                                    <li><a class="smoth-scroll" href="#contact">Contact</a>
                                    </li>
                                    <li><a href="/ca/register.php"><span class="glyphicon glyphicon-plus"></span> S'inscrire</a></li>
                            	      <li><a href="/ca/login.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                                  <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END MENU DESIGN AREA -->
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-image-area" data-stellar-background-ratio="0.6">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-text text-center">
                                <h2>CA</h2>
                                <?php if($user->is_loggedin()): ?>
                                  <h3 style="color: #fff;">Bienvenue!</h3>
                                <?php else: ?>
                                  <h3 style="color: #fff;">Section réservée</h3>
                                  <p style="color: #fff;">aux membres du conseil d'administration seulement</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
