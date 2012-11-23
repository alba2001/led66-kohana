<?php defined('SYSPATH') or die('No direct script access.');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <script>
      var NREUMQ=[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);
    (function(){var d=document;
        var e=d.createElement("script");
        e.type="text/javascript";
        e.async=true;
        e.src=(("http:"===d.location.protocol)?"http:":"https:")+"//d1ros97qkrwjf5.cloudfront.net/13/eum/rum.js";
        var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(e,s);})()
</script>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="robots" content="noindex,nofollow" />
<title><?php echo (isset($title)) ?  $title : ''?></title>
<link href="<?php echo URL::site() ?>media/css/all.css"
      media="screen"
      rel="stylesheet"
      type="text/css" />

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
<script src="<?php echo URL::site() ?>media/js/sprockets.js" type="text/javascript"></script>
  <!--[if IE]>
    <link href="https://d1a993iq9azmzq.cloudfront.net/rev_6d3a196/stylesheets/ie/base.css" media="screen" rel="stylesheet" type="text/css" />
  <![endif]-->
</head>

<body class="modal login">
  <div class="outer">
      <span class="sprite "
            style="background: url(<?php echo URL::site() ?>media/images/highrise_sprites.png) no-repeat -516px -502px; width: 84px; padding-top: 70px; "
            title=""
            id="">
      </span>
  </div>
<!--/Container-->
<?php if (isset($content)) : ?>
<?php echo $content ?>
<?php endif; ?>
<!--/Container-->
<div class="below">
    <script type="text/javascript">
//<![CDATA[
async("$(\"authentication\").focusFirstElement();")
//]]>
</script>
</div>
</body>
</html>
