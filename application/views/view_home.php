<!DOCTYPE html>
<html>
  <head>
    <title>JVC - Jogjakarta Vixion Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url().'assets/css/bsdocs.css' ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url().'assets/css/custom.css' ?>" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/flexslider.css' ?>" type="text/css" media="screen" />
  </head>
  <body>

    <div class="container">
        <header>
        
            <div class="row">
              <div class="col-md-12">
              
              	<h1>Jogjakarta V-ixion Community</h1>
                <h5><em class="text-muted">We are Family We are not Brotherhood</em></h5>
              
              	<div class="nav-container">
                    <ul class="nav nav-justified">
                      <li class="active"><a href="<?php echo base_url() ?>">Beranda</a></li>
                      <li><a href="#">Profil</a></li>
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">Tentang Kami</a></li>
                      <li><a href="#">Kontak Kami</a></li>
                      <li><a href="#">Masuk/Daftar</a></li>
                    </ul>
                </div>
              
              </div>
            </div>
        
            <div class="row">
              <div class="col-xs-12 col-md-8">
                <section class="slider">
                    <div class="flexslider">
                      <ul class="slides">
                        <li data-thumb="<?php echo base_url().'assets/images/1.jpg' ?>">
                           <img src="<?php echo base_url().'assets/images/1.jpg' ?>" />
                        </li>
                        <li data-thumb="<?php echo base_url().'assets/images/2.jpg' ?>">
                           <img src="<?php echo base_url().'assets/images/2.jpg' ?>" />
                        </li>
                        <li data-thumb="<?php echo base_url().'assets/images/3.jpg' ?>">
                           <img src="<?php echo base_url().'assets/images/3.jpg' ?>" />
                        </li>
                      </ul>
                    </div>
                </section>
              </div>
              
              <div class="col-md-4 text-right hidden-xs hidden-sm">
               	<img src="<?php echo base_url().'assets/images/300x250.png' ?>" />
              </div>
            </div>
            
        </header>
        
        <aside>
        	<hr>
            <div class="row">
              <div class="col-xs-6 col-md-4">
              	<h4>Content Left</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              </div>
              <div class="col-xs-6 col-md-4">
              	<h4>Content Left</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              </div>
              <div class="col-md-4">
              	<h4>Content Left</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              </div>
            </div>
        </aside>
        
        <footer>
            &copy; JVC 2015
        </footer>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
    
    <!-- PLUGINS -->
	<script defer src="<?php echo base_url().'assets/plugins/jquery.flexslider-min.js' ?>"></script>
    
    <script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation	: "slide",
			controlNav	: false,
			start		: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
    </script>
    <script src="<?php echo base_url().'assets/plugins/jquery.easing.js' ?>"></script>
	<script src="<?php echo base_url().'assets/plugins/jquery.mousewheel.js' ?>"></script>
  </body>
</html>