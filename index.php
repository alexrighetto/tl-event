<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
     <meta itemprop="startDate" content="2014-05-11T07:30">
	
    <title> Evento Cavatori</title>
    

	<?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
 
</head>
<body>
<!-- Preloader -->
<div class="mask">
  <div id="loader"></div>
</div>
<!--/Preloader -->

<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
        
<div class="navbar-wrapper">
	
    <div class="container">

    	<nav class="navbar navbar-static-top" role="navigation">
   
			<div class="container-fluid">
        		<!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                </div>
    
        		<!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
               	<ul class="nav navbar-nav navbar-right">
                  <li class="hidden-lg"><a href="#info">Registrazione</a></li>
                  <li><a href="#info">Informazioni</a></li>
                  <li><a href="#prizes">Programma</a></li>
                  <li><a href="#partners">Partners</a></li>
      			</ul>
      		</div>
      </nav>
	</div>
</div>


	<div class="wrapper"> 
    	
        <header id="registrazione">
        	 <div class="container">
             	
                <div class="row">
                	<div class="col-md-6 col-xs-6"><h2 id="samoter" class="text-hide"><a>Samoter</a></h2></div>
                	<div class="col-md-6 col-xs-6"><h2 id="vermeer" class="text-hide pull-right"><a>Vermeer</a></h2></div>
                </div>
                
             	<div class="row">
                    
                    <div class="col-md-8">
                    	<div class="jumbotron">
                    	<h4>TECNOLOGIE PER IL MERCATO IN FIERA:</h4>
                        <h1>Convegno su cave e<br/> opere di sbancamento</h1>
                        <h3>Giovedì <strong>8 Maggio 2014</strong> Samoter Fiera Verona Sala Vivaldi, Centro Congressi Fiera Verona.</h3>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    	<div id="modulo">
                        
                        <?php if ( is_active_sidebar( 'form' ) ) : ?>
                        <ul id="form-sidebar" class="form-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar( 'form' ); ?>
                        </ul><!-- #primary-sidebar -->
                        <?php else: ?>
                            <form role="form">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                              </div>
                              <button id="invio_modulo" type="submit" class="btn btn-default">Si partecipo</button>
                            </form>
                          <?php endif; ?>
                        </div>  <p class="pull-right contrasto">Iscriviti qui e conferma la tua presenza</p>
                    </div>
                
        		</div>
			</div>
        </header>
        
        <section id="descrizione">
        	<div class="container">
             	<div class="row">
                	<div class="col-md-6">
                    <h4>Un evento da non perdere:</h4>
                    <p>Un settore che vive un momento come questo deve reagire. La presenza in fiera di un appuntamento che promuove tecnologie nuove e soluzioni è un segnale positivo da accogliere e sostenere.</p>
                    <p>Giovedì 8 Maggio 2014 Samoter Fiera Verona Sala Vivaldi, Centro Congressi Fiera Verona.</p>
                    <p class="evidenziatore">PARTECIPAZIONE GRATUITA !</p>
                    </div>
                    <div class="col-md-6">
                    <h4>Temi trattati:</h4>
                        <ul>
                        
                        <li>mercati e opportunità all'orizzonte</li>
                        <li>cambiamenti necessari  per le attività estrattive</li>
                        <li>nuova metodologia di coltivazione nelle cave di roccia e negli sbancamenti
                           con nuova tecnologia Vermeer TL DD ( Direct Drive)</li>
                        <li>Storie di cantiere e applicazioni negli sbancamenti.</li>
                        <li>Lo stato dell'arte nell'automazione nell'industria estrattiva di domani.</li>
                         </ul>
                        <h4>Relatori:</h4>
                        <p>Dott. S. Polselli Segretario ANIM , Dott. P. Lelli AD Vermeer Italia, G. Manara AD Ma-estro, Ospiti nazionali e internazionali.</p>
                       
                    </div>
            	</div>
             </div>
            
        </section>
        
        <section id="programma">
        	
            <div class="container">
                <div class="row">
                	<div class="col-md-12"><h2>Programma</h2></div>
                    
                    <div class="col-md-6">
                    	
                        
                        <table border="0" summary="Programma" class="table table-bordered tabella-programma">
                          
                          <tr>
                            <th scope="row">Ore 10.00</th>
                            <td>Caffè di benvenuto</td>
                          </tr>
                          <tr>
                            <th scope="row">Ore 10.15</th>
                            <td>Inizio relazione e presentazione</td>
                          </tr>
                          <tr>
                            <th scope="row">Ore 12.00</th>
                            <td>Dibattito</td>
                          </tr>
                          
                          <tr>
                            <th scope="row">Ore 12.30</th>
                            <td>Buffet di pranzo</td>
                          </tr>
                          
                          <tr>
                            <th scope="row">Ore 13.30</th>
                            <td>Trasferimento in cava per dimostrazione nuove tecnologie TL</td>
                          </tr>
                          
                          <tr>
                            <th scope="row">Ore 16.45</th>
                            <td>Rientro in fiera</td>
                          </tr>
                          
                        </table>
                        <p class="evidenziatore">
È GRADITA LA CONFERMA DI PARTECIPAZIONE.</p>


                    </div>
                    <div class="col-md-4 col-md-offset-2">
                    	
                       
                              <img src="<?php echo get_template_directory_uri(); ?>/images/tl.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
                             
                    
                </div>
            </div>
        
        </section>
        
        <section id="sponsor">
        	<div class="container">
        		<h4>Evento promosso da:</h4>
                <div class="row">
                	<div class="col-xs-4 col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/images/vermeer-logo.png" class="Vermeer" ></div>
                    <div class="col-xs-4 col-md-4"><img src="<?php echo get_template_directory_uri(); ?>/images/maestro-logo.png" class="Ma-estro"></div>
                    <div class="col-xs-4 col-md-4"><img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/images/veronafiere.png" class="Verona fiere"></div>
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
    jQuery('#registrazione').parallax("10%", 0.5);
	 jQuery('#programma').parallax("10%", 0.5);
	
  }
})

});
</script>
</body>
</html>