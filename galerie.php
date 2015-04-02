<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le Cyclo Plombier est spécialisé dans les dépannages de plomberie domestique et les installations sanitaires.">
    <meta name="author" content="Elian">
    <title>Le Cyclo Plombier - Accueil</title>

    <meta property="og:title" content="Site Officiel du Cyclo Plombier - Paris"/>
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:url" content="http://www.lecycloplombier.fr/"/>
    <meta property="og:image" content="http://www.lecycloplombier.fr/images/ico/1.png"/>
    <meta property="og:description" content="Le Cyclo Plombier est spécialisé dans les dépannages de plomberie domestique et les installations sanitaires."/>
    <meta property="og:site_name" content="Le Cyclo Plombier"/>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header id="header">
        <img src="/images/ico/1.png"  id="img_fb">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p style="color:#fff;"><i class="fa fa-phone-square" ></i> <a class="tel" href="tel:+32625714688">06 25 71 46 88</a></p></div>
                        
                        <!-- <div id="projet_ulule"><p>Soutenez le projet ULULE du Cyclo Plombier <a href="#">ICI</a></p></div> -->
                    </div>
                    <div class="col-sm-6 col-xs-8">

                       <div class="social">

                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/lecycloplombier" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/110100394692016002602/posts" target="_blank" ><i class="fa fa-google-plus"></i></a></li>
                                <!-- <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li> -->
                                <li><a href="https://twitter.com/Lecycloplombier" target="_blank"><i class="fa fa-twitter"></i></a><br></li>
                                <li class="share_like_fb"><div class="fb-like" data-href="http://www.lecycloplombier.fr/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></li>
                                <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                            </ul>
                            <!-- <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div> -->
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.lecycloplombier.fr/"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://www.lecycloplombier.fr/">Accueil</a></li>
                        <li><a href="la-prestation.php">La Prestation</a></li>
                        <li><a href="le-plombier.php">Le Plombier</a></li>
                        <li><a href="le-cyclo.php">Le Cyclo</a></li>
                        <li><a href="tarifs.php">Tarifs</a></li> 
                        <!-- <li><a href="atelier.html">Atelier</a></li> --> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact/Infos</a>
                            <ul class="dropdown-menu">
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="contact.php#middle">Zone d'intervention</a></li>
                            </ul>
                        </li>
                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    
    <section id="feature" class="middle_plumber">
        <div class="container">
            <h1 id="wall">Galerie du Cyclo Plombier</h1>
            <?php  
                //1 - Settings (please update to math your own)
                $username='le_cyclo_plombier'; //Provide your instagram username
                $access_token='https://instagram.com/oauth/authorize/?client_id=7368116c59ec47ad9dd3238de2db6e3b&redirect_uri=http://www.lecycloplombier.fr/&response_type=token'; //Provide your instagram access token
                $count='10'; //How many shots do you want?
                //2 - Include the php class
                include('instagram.php');
                //3 - Instanciate
                if(!empty($username) && !empty($access_token)){
                $isg = new instagramPhp($username,$access_token); //instanciates the class with the parameters
                $shots = $isg->getUserMedia(array('count'=>$count)); //Get the shots from instagram
                } else {
                echo'Please update your settings to provide a valid username and access token';
                }
                //4 - Display
                if(!empty($shots)){ echo $isg->simpleDisplay($shots); }




            ?>
        </div>

    </section>

    <?php include 'footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57049471-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>