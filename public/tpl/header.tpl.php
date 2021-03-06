<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IEP San Antonio</title>
  <meta name="description" content="IEP San Antonio">
  <?php echo $keywords; ?>
  <meta name="author" content="JALP Laveriano">
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/styles.min.css">
  <link rel="icon" href="<?php echo APP_DOMAIN; ?>/favicon.ico">
  <style>
	.info a:active, .info a:focus, .info a:hover, .info a:visited, .elemento a{
		color: white;
	}
	.social-media li {
		display: inline-block;
	}
	.galardones h3 a {
		color: white;
	}
	.desc p, .desc ul {
    font-size: 1.2em;
    text-align: justify;
  }
  .txtlogo {
	color: #ff0;
	text-shadow: 0px 2px 2px rgba(0, 0,0, 0.9);
	font-size: 2em;
	}
  </style>
</head>
<body>
  <div class="container contenedor">
    <div class="row">
      <header>
        <div class="navbar-wrapper">
          <nav class="navbar navbar-inverse navbar-static-top">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <span class="logo navbar-brand">
                  <a href="/">
                    <figure>
                      <div class="visible-xs">
                        <img src="<?php echo IMAGE_PATH; ?>/logo-small.png" alt="IEP San Antonio" width="50%" />
                      </div>
                      <div class="visible-sm">
                        <img src="<?php echo IMAGE_PATH; ?>/logo-small.png" alt="IEP San Antonio" />
                      </div>
                      <div class="hidden-xs hidden-sm">
                        <img src="<?php echo IMAGE_PATH; ?>/logo.png" alt="IEP San Antonio" />
                        </div>
                    </figure>
                  </a>
                </span>
              </div>
                  <div class="txtlogo" style="margin-top:12px">I.E.P. SAN ANTONIO </div>
                  <div class="txtlogo">DE CARABAYLLO</div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                <ul class="nav navbar-nav navbar-right jalpNav">
                  <li>
                    <span><a href="<?php echo APP_DOMAIN ?>/la-escuela/">La Escuela</a></span>
                  </li>
                  <li>
                    <span><a href="#/">Talleres</a></span>
                  </li>
                  <li>
                    <span><a href="<?php echo APP_DOMAIN ?>/galeria/">Galería</a></span>
                  </li>
                  <li style="border-right:initial">
                    <span><a href="<?php echo APP_DOMAIN ?>/contacto/">Contacto</a></span>
                  </li>
                  <li style="border-right:initial">
                    <span><a href="http://intranet.iepsanantonio.com/" target="_blank">Intranet</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>