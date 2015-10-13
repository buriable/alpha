<?php
error_reporting(0);
include_once 'common.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Alphabet &mdash; <?php echo $lang['TITLE']; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,200' rel='stylesheet' type='text/css'>
        
        
        <link rel="apple-touch-icon" sizes="57x57" href="http://static.alphabetic.al/apple-touch-icon-57x57.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="60x60" href="http://static.alphabetic.al/apple-touch-icon-60x60.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="72x72" href="http://static.alphabetic.al/apple-touch-icon-72x72.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="76x76" href="http://static.alphabetic.al/apple-touch-icon-76x76.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="114x114" href="http://static.alphabetic.al/apple-touch-icon-114x114.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="120x120" href="http://static.alphabetic.al/apple-touch-icon-120x120.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="144x144" href="http://static.alphabetic.al/apple-touch-icon-144x144.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="152x152" href="http://static.alphabetic.al/apple-touch-icon-152x152.png?v=BGGmpRJnKQ">
        <link rel="apple-touch-icon" sizes="180x180" href="http://static.alphabetic.al/apple-touch-icon-180x180.png?v=BGGmpRJnKQ">
        <link rel="icon" type="image/png" href="http://static.alphabetic.al/favicon-32x32.png?v=BGGmpRJnKQ" sizes="32x32">
        <link rel="icon" type="image/png" href="http://static.alphabetic.al/favicon-194x194.png?v=BGGmpRJnKQ" sizes="194x194">
        <link rel="icon" type="image/png" href="http://static.alphabetic.al/favicon-96x96.png?v=BGGmpRJnKQ" sizes="96x96">
        <link rel="icon" type="image/png" href="http://static.alphabetic.al/android-chrome-192x192.png?v=BGGmpRJnKQ" sizes="192x192">
        <link rel="icon" type="image/png" href="http://static.alphabetic.al/favicon-16x16.png?v=BGGmpRJnKQ" sizes="16x16">
        <link rel="manifest" href="http://static.alphabetic.al/manifest.json?v=BGGmpRJnKQ">
        <link rel="shortcut icon" href="http://static.alphabetic.al/favicon.ico?v=BGGmpRJnKQ">
        <meta name="apple-mobile-web-app-title" content="Alphabet">
        <meta name="application-name" content="Alphabet">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-TileImage" content="http://static.alphabetic.al/mstile-144x144.png?v=BGGmpRJnKQ">
        <meta name="theme-color" content="#ffffff">        
        
        

        <link rel="stylesheet" href="http://static.alphabetic.al/css/normalize.css">
        <link rel="stylesheet" href="http://static.alphabetic.al/css/main.css">
        <script src="http://static.alphabetic.al/js/vendor/modernizr-2.8.3.min.js"></script>
        
        <style>
		
::selection {
  background: #47c9af; /* WebKit/Blink Browsers */
}
::-moz-selection {
  background: #47c9af; /* Gecko Browsers */
}

html {
	background: url(http://static.alphabetic.al/img/bg.png) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#logo{
	padding-top: 5%;
	padding-left: 5%;
	font-size: 28px;
}
#logo a{text-decoration: none;}

h1, p, a, #logo{
	color: #e0edff; /* #ddffff */
	font-family: 'Titillium Web', sans-serif;
}
h1{
	padding-top: 5%;
	padding-left: 10%;
	padding-right: 10%;
}
p{
	padding-left: 10%;
	padding-right: 10%;
	font-size: 20px;
}
nav{
	text-align: center;
	padding-top: 5%;
	padding-bottom: 10%;
	padding-left: 10%;
	padding-right: 10%;
}
nav a{
	font-size:26px;
	text-decoration: none;
	transition: all 0.5s ease;
}
nav a:hover{
	font-size: 36px;
}
nav .active{
	font-size: 36px;
	color: <?php echo $lang['COLOR']; ?>;
}

        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="logo"><a href="/">alphabetic<span style="color: <?php echo $lang['COLOR']; ?>;">al</span></a></div>

        <h1>
         <span style="text-transform: uppercase; color: <?php echo $lang['COLOR']; ?>; font-size: 50px;"><?php echo $lang['LETTER']; ?></span> is for <span style="text-transform: uppercase;"><?php echo $lang['MEANING']; ?></span>
        </h1>

        <p><?php echo $lang['DESCRIPTION']; ?></p>
        <p><?php echo $lang['EXTENDED']; ?></p>

        <nav>
         <a href="a" class="<?php echo ($lang['LETTER'] == "a" ? "active" : "")?>">a</a>
         <a href="b" class="<?php echo ($lang['LETTER'] == "b" ? "active" : "")?>">b</a>
         <a href="c" class="<?php echo ($lang['LETTER'] == "c" ? "active" : "")?>">c</a>
         <a href="d" class="<?php echo ($lang['LETTER'] == "d" ? "active" : "")?>">d</a>
         <a href="e" class="<?php echo ($lang['LETTER'] == "e" ? "active" : "")?>">e</a>
         <a href="f" class="<?php echo ($lang['LETTER'] == "f" ? "active" : "")?>">f</a>
         <a href="g" class="<?php echo ($lang['LETTER'] == "g" ? "active" : "")?>">g</a>
         <a href="h" class="<?php echo ($lang['LETTER'] == "h" ? "active" : "")?>">h</a>
         <a href="i" class="<?php echo ($lang['LETTER'] == "i" ? "active" : "")?>">i</a>
         <a href="j" class="<?php echo ($lang['LETTER'] == "j" ? "active" : "")?>">j</a>
         <a href="k" class="<?php echo ($lang['LETTER'] == "k" ? "active" : "")?>">k</a>
         <a href="l" class="<?php echo ($lang['LETTER'] == "l" ? "active" : "")?>">l</a>
         <a href="m" class="<?php echo ($lang['LETTER'] == "m" ? "active" : "")?>">m</a>
         <a href="n" class="<?php echo ($lang['LETTER'] == "n" ? "active" : "")?>">n</a>
         <a href="o" class="<?php echo ($lang['LETTER'] == "o" ? "active" : "")?>">o</a>
         <a href="p" class="<?php echo ($lang['LETTER'] == "p" ? "active" : "")?>">p</a>
         <a href="q" class="<?php echo ($lang['LETTER'] == "q" ? "active" : "")?>">q</a>
         <a href="r" class="<?php echo ($lang['LETTER'] == "r" ? "active" : "")?>">r</a>
         <a href="s" class="<?php echo ($lang['LETTER'] == "s" ? "active" : "")?>">s</a>
         <a href="t" class="<?php echo ($lang['LETTER'] == "t" ? "active" : "")?>">t</a>
         <a href="u" class="<?php echo ($lang['LETTER'] == "u" ? "active" : "")?>">u</a>
         <a href="v" class="<?php echo ($lang['LETTER'] == "v" ? "active" : "")?>">v</a>
         <a href="w" class="<?php echo ($lang['LETTER'] == "w" ? "active" : "")?>">w</a>
         <a href="x" class="<?php echo ($lang['LETTER'] == "x" ? "active" : "")?>">x</a>
         <a href="y" class="<?php echo ($lang['LETTER'] == "y" ? "active" : "")?>">y</a>
         <a href="z" class="<?php echo ($lang['LETTER'] == "z" ? "active" : "")?>">z</a>
        </nav> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="http://static.alphabetic.al/js/plugins.js"></script>
        <script src="http://static.alphabetic.al/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>