<!-- Inicio JS-->
<script src="<?php echo Url::statics(); ?>bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo Url::statics(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Url::statics(); ?>bower_components/underscore/underscore-min.js" type="text/javascript"></script>
<script src="<?php echo Url::statics(); ?>swp/js/mootools-core.min.js" type="text/javascript"></script>
<script src="<?php echo Url::statics(); ?>swp/js/mootools.min.js" type="text/javascript"></script>
<script src="<?php echo Url::statics(); ?>swp/js/mootools-interfaces.min.js" type="text/javascript"></script>
<script src="<?php echo Url::statics(); ?>assets/site/js/app.js" type="text/javascript"></script>
<!-- Inicio Beyond-->
<script src="<?php echo Url::statics(); ?>beyond/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo Url::statics(); ?>beyond/assets/js/beyond.js"></script>
<!-- Inicio Load_JS-->
<?php if (isset($array_js)){ echo Helper::load_js($array_js); }?>
<!-- Fin JS-->