<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Canvas: php image manipulation, resize and conversion</title>
  <meta name="description" content="Canvas is a PHP class to manipulate, resize, crop and apply filter to images and photos. Canvas can also generate, using PHP, dynamic thubmnails for your photo galleries.">
  <meta name="author" content="Davi Ferreira">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=2">
  <link href="http://cdn.wijmo.com/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" />
  <link href="http://cdn.wijmo.com/jquery.wijmo-open.1.1.6.css" rel="stylesheet" type="text/css" />
  <link href="http://cdn.wijmo.com/jquery.wijmo-complete.1.1.6.css" rel="stylesheet" type="text/css" />
  <script src="js/libs/modernizr-1.7.min.js"></script>
</head>

<body>

  <div id="container">
    <header>
      <h1>canvas</h1>
      <h2>&lt;?php image manipulation made easier</h2>
    </header>
    <div id="main" role="main">

      <p id="intro"><span class="download"><button value="https://github.com/daviferreira/canvas2/zipball/master">&raquo; Download now <span class="info">.zip</span></button></span><img src="image.php?<?=date("U")?>" width="938" height="240" alt="Banksky!" /></p>
      <p>Canvas is a PHP class to manipulate images, including <strong>resize functions</strong>, <strong>filters</strong>, <strong>crop</strong>, <strong>conversion</strong> and <strong>method chaining</strong>.</p>


      <h3>How to use</h3>

      <p>The code below will load an image file called "image.jpg", resize it to 30% of its width and convert it to grayscale. Once it's all done, the image gets displayed on the screen.</p>

<pre>&lt;?php
require_once "canvas.php";
$img = new canvas;
$img->load("image.jpg")->resize("30%")->filter("grayscale")->show();
</pre>

      <p>Next one will load the file called "banksky3.jpg" located at the "img" directory  (this time using the class constructor), resize with crop (setting manually the crop coordinates), add some credits text to the image and finally save it as a new image, with a different format ("new_image.png" at "/tmp" dir).</p>

<pre>&lt;?php
require_once "canvas.php";
$img = new canvas("img/banksky3.jpg");
$img->set_crop_coordinates(-400, -410)
    ->resize("938", "240", "crop")
    ->filter("grayscale")
    ->text("banksky.co.uk", array(
           "color" => "#000",
           "background_color" => "#ffff00",
           "size" => 4,
           "x" => "right",
           "y" => "top"))
    ->save("/tmp/new_image.png");
</pre>

      <p>For a full list of features, check the <button id="api" value="api/">api documentation</button></p>

      <?php include 'api.php'; ?>

      <h3>Requirements</h3>

      <ul>
        <li>PHP version 5+</li>
        <li>GD library installed and configured on the webserver</li>
        <li>PHP 5.2+ if you are planning to use filters</li>
        <li>PHP compiled with truetype support if you want to use special fonts on your image texts</li>
      </ul>

      <h3>Examples</h3>

      <ul id="examples" class="clearfix">
        <li><button value="">Simple resizes</button></li>
        <li><button value="">Dynamic placeholder image</button></li>
        <li class="end"><button value="">Truetype text</button></li>
        <li><button value="">Dynamic thumbnails</button></li>
        <li><button value="">Canvas and jCrop</button></li>
        <li class="end"><button href="">Canvas and .htaccess</button></li>
        <li><button value="">Canvas image editor</button></li>
        <li><button value="">Dynamic image gallery</button></li>
      </ul>

      <h3>Troubleshooting</h3>

      <p>If you are having trouble getting Canvas to work, please check the following list before asking for help:</p>

      <ol>
        <li>Are you using the correct PHP version (5+)?</li>
        <li>Is the GD library enabled and configured on your web server?</li>
        <li>Do you have write permissions? (in case you are trying to save some image)</li>
        <li>Is your script returning anything before the image you are trying to show?</li>
      </ol>

      <p>Also, for debugging purposes, enable PHP error reporting on your script:</p>

<pre>
error_reporting(E_ALL ^ E_NOTICE ^ E_USER_NOTICE);
ini_set( 'display_errors',1 );
ini_set( 'display_startup_errors', true );
</pre>

      <p>If you are still experiencing trouble, please drop a new issue at <a href="https://github.com/daviferreira/canvas2/issues">GitHub</a> and I'll take a look at it! You can also <a href="http://www.twitter.com/davitferreira">follow me on twitter</a> for updates and help.</p>


      <h3>Who is using it</h3>

      <ul class="clearfix" id="using-it">
        <li><a href="http://www.oraculumframework.org"><img src="img/logo-oraculum.png" width="200" height="48" alt="Oraculum Framework" /></a></li>
      </ul>

      <h3>Credits</h3>

      <p>Canvas PHP image manipulation class written by <a href="http://www.daviferreira.com" target="_blank">Davi Ferreira</a>.</p>

      <p>I would like to thank the following people for helping me out with this class along the way:</p>

      <ul>
        <li><a href="http://www.php.net/manual/en/function.imagecreate.php#53879">DHKold</a> - imagecreatefrombmp</li>
        <li><a href="http://twitter.com/EstefanioNunes">Estefanio Nunes</a> - <a href="http://utilitybelt.com.br/">Utility belt</a></li>
        <li><a href="http://goo.gl/iDtmP">Fernando VR</a> - proportional resize fixes</li>
        <li><a href="http://www.gsguma.com.br">Gilton Guma</a> - resize fixes</li>
        <li><a href="http://www.daviferreira.com/posts/manipulando-e-redimensionando-imagens-com-php#comment-5569">Giolvani</a> - image merge positions</li>
        <li><a href="http://www.findmotive.com/">Noah Winecoff</a> - crop and flip</li>
        <li><a href="http://twitter.com/patrixsbs">Patrick Kaminski</a> - <a href="http://oraculumframework.org/">oraculum framework</a></li>
        <li>... and everybody else that mailed me suggestions and commented on both posts about Canvas! :)</li>
      </ul>

      <p>Aller font by <a href="http://www.daltonmaag.com/" target="_blank">Dalton Maag</a>, interface elements by <a href="http://wijmo.com/">Wijmo</a>.</p>
    </div>
    <footer>
      <a href="http://twitter.com/share" class="twitter-share-button" data-text="Canvas: php image manipulation made easier" data-count="horizontal" data-via="davitferreira">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </footer>
  </div> <!-- eo #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>

  <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.11/jquery-ui.min.js" type="text/javascript"></script>
  <script src="http://cdn.wijmo.com/external/jquery.bgiframe-2.1.3-pre.js" type="text/javascript"></script>
  <script src="http://cdn.wijmo.com/external/jquery.glob.min.js" type="text/javascript"></script>
  <script src="http://cdn.wijmo.com/external/jquery.mousewheel.min.js" type="text/javascript"></script>
  <script src="http://cdn.wijmo.com/external/raphael-min.js" type="text/javascript"></script>
  <script src="http://cdn.wijmo.com/jquery.wijmo-open.1.1.6.min.js" type="text/javascript"></script>

  <script src="js/libs/jquery.snippet.min.js"></script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->

  <script>
    var _gaq=[["_setAccount","UA-24891590-1"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>
