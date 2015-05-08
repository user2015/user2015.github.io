<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
    Based on http://www.r-project.org/
    -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>useR! 2015 Aalborg</title>
    
    <meta name="description" content="The annual useR! international conference is the main meeting of the R user and developer community. In 2015, the conference will be held at Aalborg Congress & Culture Centre in Aalborg, Denmark." /> 

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/useR.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
      <header class="subhead" style="overflow: hidden">
        <a href="./">
	        <div class="container">
          	<div class="row">
              <div class="col-xs-12 col-sm-offset-1">
                <h1>The useR! Conference 2015</h1>
                <p>June 30 - July 3, 2015<br>Aalborg, Denmark</p>
              </div>
            </div>
	        </div>
	      </a>
      </header>

      
    <div class="container page">
    
        <!--

        <div class="row">
          <div class="col-sm-9 col-sm-offset-1">
          
            <div class="row" style="padding-bottom: 1em; border-bottom: 1px solid #ccc;">
              <div class="col-sm-4">
                <a href="http://www.rstudio.com"
                target="_blank"><img src="img/sponsor/RStudio150.png"
                alt="RStudio" class="img-responsive"></a>
              </div>
              <div class="col-sm-4">
              <a href="http://www.teradata.com"
              target="_blank"><img src="img/sponsor/teradata150.png"
               alt="Teradata" class="img-responsive"></a>
              </div>
              <div class="col-sm-4">
                <a href="http://www.revolutionanalytics.com"
                target="_blank"><img src="img/sponsor/revolution150.png"
                   alt="Revolution Analytics" class="img-responsive"></a>
              </div>
            </div>
            
          </div>
        </div>
        
        -->
				        
      <div class="row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-2 sidebar" role="navigation">


          <div class="row">
            <div class="col-xs-4 col-sm-12">
              <p><a href="./"><img src="gfx/useR-middle.png" alt="useR!" style="width: 100%" /></a></p>
              <p>June 30 - July 3, 2015<br />Aalborg, Denmark</p>
              <p>Questions? Kindly contact <a href="mailto:user2015@math.aau.dk"><code>user2015 [at] math.aau.dk</code></a>.</p>
              <p><small><a href="./">[Home]</a></small></p>
            </div>
           
            <div class="col-xs-4 col-sm-12">
              <h2>Conference</h2>
              <ul>
                <li><a href="./invited_talks">Invited Talks</a></li>
                <li><a href="./tutorials">Tutorials</a></li>
                <!--<li><a href="./tba">Sponsors</a></li>-->
                <li><a href="./abstract_submission">Abstract Submission</a></li>
                <li><a href="./conference_overview">Conference Overview</a></li>
                <li><a href="./programme_committee">Programme Committee</a></li>
                <li><a href="./important_dates">Important Dates</a></li>
                <li><a href="./registration">Registration</a></li>
              </ul>
            </div>
            
            <div class="col-xs-4 col-sm-12">
              <h2>Misc</h2>
              <ul>                
                <li><a href="./maillist">Maillist</a></li>
                <li><a href="./social_programme">Social Programme</a></li>
                <li><a href="./whats_on">What's on</a></li>
                <li><a href="./about_conference">About the Conference</a></li>
                <li><a href="./organising_committee">Organising Committee</a></li>
                <li><a href="./accommodation">Accommodation</a></li>
                <li><a href="./travel_arrangements">Travel Arrangements</a></li>
              </ul>
            </div>


          </div>


        </div>


        <div class="col-xs-12 col-sm-7">
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://user2015.math.aau.dk" data-via="user2015aalborg" data-hashtags="rstats, user2015">Tweet</a>
  	      <a href="https://twitter.com/user2015aalborg" class="twitter-follow-button" data-show-count="true">Follow @user2015aalborg</a>            
        </div>
        

        <div class="col-xs-12 col-sm-7">
                 
          <?php
            /*
            http://code.tutsplus.com/tutorials/using-htaccess-files-for-pretty-urls--net-6049
            */
            
            #remove the directory path we don't want
            //echo '<p>REQUEST_URI = ' . $_SERVER['REQUEST_URI'] . '</p>';
            //$request  = str_replace('/new/', "", $_SERVER['REQUEST_URI']);
            //$request  = $_SERVER['REQUEST_URI'];
            $request  = str_replace('/', "", $_SERVER['REQUEST_URI']);
           
            #split the path by '/'
            $params     = split('/', $request);
            
            //print_r($params);
            
            if (count($params) == 1 && $params[0] == '') {
              include('pages/frontpage.php');
            } else {            
              #keeps users from requesting any file they want             
              function clean_pagename($f) {
                return str_replace('.php', '', $f);
              }
              $safe_pages = array_map("clean_pagename", array_diff(scandir('pages'), array('..', '.', '404.php')));
              //$safe_pages = array('frontpage', 'talks');              
              //print_r($safe_pages);
               
              if (in_array($params[0], $safe_pages)) {
                include('pages/' . $params[0] . '.php');
              } else {
                include('pages/404.php');
              }
            }
          ?>

        </div>
      </div>
      <div class="raw footer">
      
	      <!--<span class="page-header"><h1>Sponsors</h1></span>-->
	      <p>
	      The execution of useR! 2015 would not have been possible
	      without the strong commitment and generous support from
	      our sponsors. 
	      </p>
	      
	      <h2>Platinum</h2>
	      <a href="http://www.rstudio.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/RStudio150.png"
	      alt="RStudio"></a>

	      <a href="http://www.teradata.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/teradata150.png"
				   alt="Teradata"></a>

	      <a href="http://www.revolutionanalytics.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/revolution150.png"
				   alt="Revolution Analytics"></a>

	      <h2>Gold</h2> 
	      <a href="http://www.alteryx.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/alteryx110.png"
	      alt="Alteryx"></a>

	      <a href="http://spotfire.tibco.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/TIBCO110.png"
	      alt="TIBCO Spotfire"></a>
	      
	      <a href="http://www.h20.ai"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/h2o110.png"
	      alt="h20"></a>

	      <a href="http://www.hp.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/hp110.png"
	      alt="HP"></a>
	      
	      <h2>Silver</h2>
	      <a href="http://www.novonordisk.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/novonordisk80.png"
	      alt="Novo Nordisk"></a>

	      <a href="http://www.google.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/Google80.png"
	      alt="Google"></a>

	      <a href="http://www.quantide.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/quantide80.png"
	      alt="Quantide"></a>

	      <a href="http://www.openanalytics.eu"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/openanalytics80.png"
	      alt="Open Analytics"></a>

	      <a href="http://www.mango-solutions.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/mango80.png"
	      alt="Mango Solutions"></a>


	      <h2>Bronze</h2>

	      <a href="http://www.hugin.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/hugin50.png"
	      alt="HUGIN"></a>

	      <a href="http://www.crcpress.com/"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/crc50.png" alt="CRC
	      Press"></a>

	      <a href="http://www.cambridge.org/"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/Cambridge50.png"
	      alt="Cambridge University Press"></a>

	      <a href="http://www.csgb.dk/"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/csgb50.png"
	      alt="CSGB"></a>

	      <a href="http://www.springer.com/"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/Springer50.png"
	      alt="Springer"></a>
	      	      	      
	      <h2>Media</h2>
	      <a href="http://www.kdnuggets.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/kdnuggets.png"
	      alt="KDnuggets"></a>

	      <a href="http://www.r-bloggers.com"
	      target="_blank"><img class="img-sponsor" src="img/sponsor/Rblogger35.png"
	      alt="R-bloggers"></a>
	    
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    
  </body>
</html>
