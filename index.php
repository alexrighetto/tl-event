<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    
	
    <title> Evento Cavatori</title>
    

	<?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
 
</head>
<body>


        
<div class="navbar-wrapper">
	
    <div class="container">

    	<nav class="navbar navbar-static-top" role="navigation">
   
			<div class="container-fluid">
        		<!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"><?php _e('Toggle navigation', 'landing_page'); ?> </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                </div>
    
        		<!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                    <ul class="nav navbar-nav navbar-right">
                      <li class="hidden-lg"><a href="#registrazione"><span class="glyphicon glyphicon-flag"></span> <?php _e('Registration', 'landing_page'); ?> </a></li>
                      <li><a href="#registrazione"><?php _e('Informations', 'landing_page'); ?></a></li>
                      <li><a href="#programma"><span class="glyphicon glyphicon-list-alt"></span> <?php _e('Program', 'landing_page'); ?> </a></li>
                      <li><a href="#sponsor"><span class="glyphicon glyphicon-bullhorn"></span> <?php _e('Partners', 'landing_page'); ?> </a></li>
                       <li><a target="_blank" href="http://ate.so/?Ygpifp5"><span class="glyphicon glyphicon-calendar"></span> <?php _e('Save the date', 'landing_page'); ?> </a></li>
                    </ul>
      			</div>
             </div>   
      </nav>
	</div>
</div>


	<div class="wrapper"> 
    	
        <header id="registrazione">
        	 <div class="container">
             	
                <div class="row">
                	<div class="col-md-6 col-xs-6"><h2 id="samoter" class="text-hide"><a href="http://www.samoter.com/" target="_blank">Samoter</a></h2></div>
                	<div class="col-md-6 col-xs-6"><h2 id="vermeer" class="text-hide pull-right"><a href="http://vermeeritalia.com/" target="_blank">Vermeer</a></h2></div>
                </div>
                
             	<div class="row">
                    
                    <div class="col-md-8">
                    	<div class="jumbotron">
                        <?php if ( is_active_sidebar( 'headerbox' ) ) : ?>
                        
                            <?php dynamic_sidebar( 'headerbox' ); ?>
                        
                         
                        <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    	<div id="modulo">
                        <?php 
							if(!defined('ICL_LANGUAGE_CODE')){
								
								if ( is_active_sidebar( 'form' ) ) : ?>
                                
                                    <ul id="form-sidebar" class="form-sidebar widget-area">
                                        <?php dynamic_sidebar( 'form' ); ?>
                                    </ul><!-- #primary-sidebar -->
                          
                              	<?php
                              	endif;
							
							}else{
								
								switch (ICL_LANGUAGE_CODE) {
									case 'it':
										echo do_shortcode( '[contact-form-7 id="48" title="adesione it"]' );
										break;
									case 'en':
										echo do_shortcode( '[contact-form-7 id="6" title="adesione en"]' );
										break;
									case 'fr':
										echo do_shortcode( '[contact-form-7 id="60" title="adesione fr"]' );
										break;
								}
							}
							  ?>
                    	</div> 
                        <p class="pull-right contrasto"><?php _e('Sign up here and secure your attendance', 'landing_page'); ?></p>
                    </div>
                
        		</div>
			</div>
        </header>
        
        <section id="descrizione">
        	<div class="container">
             	<div class="row">
                 <?php if ( is_active_sidebar( 'side' ) ) : ?>
                        
                            <?php dynamic_sidebar( 'side' ); ?>
                        
                        
                    <?php endif; ?>
            	</div>
             </div>
            
        </section>
        
        <section id="programma">
        	
            <div class="container">
                <div class="row">
                	<div class="col-md-12"><h2><?php _e('Program', 'landing_page'); ?></h2></div>
                    
                    <div class="col-md-6">
                    	
                        <?php if ( is_active_sidebar( 'program' ) ) : ?>
                        
                            <?php dynamic_sidebar( 'program' ); ?>
                        
                         
						<?php endif; ?>

                    </div>
                    <div class="col-md-4 col-md-offset-2">
                    	
                       
                              <img src="<?php echo get_template_directory_uri(); ?>/images/tl.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
                             
                    
               		</div>
            	</div>
            </div>
        
        </section>
        
        <section id="sponsor">
        	<div class="container">
        		<h4><?php _e('Event sponsored by:', 'landing_page'); ?></h4>
                <div class="row">
                	<div class="col-xs-12 col-md-3"><a href="http://vermeeritalia.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/vermeer-logo.png" class="Vermeer" alt="Vermeer Italia" ></a></div>
                    <div class="col-xs-12 col-md-3"><a href="http://www.ma-estro.com/new/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/maestro-logo.png" class="Ma-estro" alt="Ma-estro"></a></div>
                    <div class="col-xs-12 col-md-3"><a href="http://www.edizionipei.it/uscite_riviste-quarry_and_construction.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/quarry.jpg" class="Quarry" alt="Quarry"></a></div>
                    <div class="col-xs-12 col-md-1"><a href="http://www.anim-minerari.it/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/anim.jpg" class="anim" alt="anim"></a></div>
                    <div class="col-xs-12 col-md-2"><img src="<?php echo get_template_directory_uri(); ?>/images/veronafiere.png" alt="Verona Fiere"></div>
                </div> 
            </div>
        </section>
        
        

	</div>
<?php wp_footer(); ?>


<script>

jQuery(document).ready(function($){ 

$.ajax({
  url: '<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js',
  dataType: 'script',
  cache: true, // otherwise will get fresh copy every page load
  success: function() {
    jQuery('#registrazione').parallax("50%", 0.5);
	 jQuery('#programma').parallax("50%", 0.5);
	
  }
})

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49560232-1', 'vermeeritalia.com');
  ga('send', 'pageview');

</script>
</body>
</html>