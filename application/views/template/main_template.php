<?php defined('SYSPATH') or die('No direct script access.');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <script>var NREUMQ=[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);(function(){var d=document;var e=d.createElement("script");e.type="text/javascript";e.async=true;e.src=(("http:"===d.location.protocol)?"http:":"https:")+"//d1ros97qkrwjf5.cloudfront.net/13/eum/rum.js";var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(e,s);})()</script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="keywords" content="<?php echo (isset($keywords)) ?  $keywords : ''?>" />
  <meta name="description" content="<?php echo (isset($description)) ?  $description : '' ?>" />
  <title><?php echo (isset($title)) ?  $title : ''?></title>
  <script type="text/javascript">
//<![CDATA[
function async(f) { async.f.push(f) }; async.f = []
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
var RAILS_ENV = "production"
//]]>

</script>  
<!-- Scripts and stales -->
<?php foreach ($styles as $style) : ?>
<link rel="stylesheet" href="<?php echo URL::base(); ?>media/css/<?php echo $style; ?>.css" type="text/css" media="screen" />
<?php endforeach; ?>
<?php foreach ($scripts as $script) : ?>
   <script src="<?php echo URL::base(); ?>media/js/<?php echo $script; ?>.js" /></script>
<?php endforeach; ?>
<?php foreach ($text_scripts as $text_script) : ?>
<script type="text/javascript">
    <?php echo $text_script ;?>
</script>
<?php endforeach; ?>
<!-- //Scripts and stales -->  
  
<noscript><style type="text/css">#app_header, div.wrapper { display: none }</style></noscript>
</head>

<body class="clearfix overview welcome full_width  gecko  windows"  onloadnot="setupZoom()">

    <div id="quick_show_window" style="display: none">
    <div class="quick_show_window_position">
      <div class="quick_show_window_wrapper">
        <div class="quick_show_window_content">
        </div>
      </div>
    </div>
  </div>

    <div id="task_flash" style="display: none">

    <div class="inner_task_flash">
    </div>
  </div>

  <noscript>
  <div class="javascript_disabled_notification">
    <div class="inner">
      <h1>You need to change a setting in your web browser</h1>
      <p>Highrise requires a browser feature called <strong>JavaScript</strong>. All modern browsers support JavaScript. You probably just need to change a setting in order to turn it on.</p>

      <p>Please see: <a href="http://www.google.com/support/bin/answer.py?answer=23852">How to enable JavaScript in your browser</a>.</p>

      <p>If you use ad-blocking software, it may require you to allow JavaScript from highrisehq.com.</p>

      <p>Once you've enabled JavaScript you can <a href="">try loading this page again</a>.</p>

      <p>Thank you.</p>
    </div>
  </div>
</noscript>

<!--Header-->
<?php if (isset($header)) : ?>
	<div id="app_header">
            <?php echo $header?>
        </div>
<?php endif; ?>
<!--//Header-->


  <div id="wrapper">
    <div id="inner_wrapper">
      <div id="main_body" class="column">
        <div id="blank_slate" class="clearfix"></div>
<?php if (isset($content)) : ?>
  <!-- page -->
    <?php echo $content?>
 <!--// page -->
 <?php endif; ?>


        <div style="margin-top: 30px"> </div>
      </div>

<?php if (isset($sidebar)) : ?>
<div id="global_sidebar" class="column">
    <?php echo $sidebar; ?>
</div>
<?php endif; ?>
</div>
</div>
<hr style="display: none;" />

	<div id="preloaded_images" style="position:absolute; height:0px; overflow:hidden;">
		<img alt="Dots-white" src="<?php echo URL::site() ?>media/images/dots-white.gif" />
		<img alt="<?php echo URL::site() ?>media/images/dots-black.gif" />
	</div>





  <script src="https://d1a993iq9azmzq.cloudfront.net/rev_87f251d/sprockets.js" type="text/javascript"></script>

  <script type="text/javascript" charset="utf-8">NREUMQ.push(["nrf2","beacon-1.newrelic.com","10f60f8605",1746,"IV1cEkFdWghSFxkTVg5RXQtWQRkXXwpB",0,73])</script>

</body>
</html>

