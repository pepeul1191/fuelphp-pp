<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<link rel="icon" type="image/x-icon" href="<?php echo Url::statics(); ?>assets/site/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Inicio Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
<!-- Fin Fonts -->
<!-- Inicio CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo Url::statics(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::statics(); ?>bower_components/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::statics(); ?>assets/site/css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::statics(); ?>assets/site/css/styles.css" />
<!-- Inicio Beyond-->
<link id="beyond-link" href="<?php echo Url::statics(); ?>beyond/assets/css/beyond.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Url::statics(); ?>beyond/assets/css/demo.min.css" rel="stylesheet" />
<link href="<?php echo Url::statics(); ?>beyond/assets/css/typicons.min.css" rel="stylesheet" />
<link href="<?php echo Url::statics(); ?>beyond/assets/css/animate.min.css" rel="stylesheet" />
<!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
<?php if (isset($array_css)){ echo Helper::load_css($array_css); }?>
<!-- Fin CSS-->