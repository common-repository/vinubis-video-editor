<?php 
if(!defined('ABSPATH')) exit;
include 'vinubis-header.php'; 
?>

<?php

$VINUBIS_APPS_HOST = 'https://editor.vinubis.com';

$INTEGRATION_BASE_URL = get_admin_url().'admin.php?page=vinubis_editor#/register';

?>

<meta name="control/config/environment" content="%7B%22modulePrefix%22%3A%22control%22%2C%22environment%22%3A%22wordpress%22%2C%22baseURL%22%3A%22<?php echo urlencode($INTEGRATION_BASE_URL); ?>%22%2C%22locationType%22%3A%22hash%22%2C%22showMenubar%22%3Afalse%2C%22EmberENV%22%3A%7B%22FEATURES%22%3A%7B%7D%7D%2C%22APP%22%3A%7B%22name%22%3A%22control%22%2C%22version%22%3A%220.0.0+7e29a198%22%7D%2C%22publicRoutes%22%3A%5B%22register%22%5D%2C%22adapter%22%3A%22rest%22%2C%22restNamespace%22%3A%22api/rest/gate/api%22%2C%22ajaxNamespace%22%3A%22api/rest/gate%22%2C%22oauthYoutubeEndpoint%22%3A%22service/youtube.php%22%2C%22postmessageEndpoint%22%3A%22service/postmessage.php%22%2C%22contentSecurityPolicy%22%3A%7B%22default-src%22%3A%22%27none%27%22%2C%22script-src%22%3A%22*%22%2C%22font-src%22%3A%22%27self%27%22%2C%22connect-src%22%3A%22*%22%2C%22img-src%22%3A%22%27self%27%20*%20data%3A%22%2C%22report-uri%22%3A%22%27localhost%27%22%2C%22style-src%22%3A%22%27self%27%20%27unsafe-inline%27%22%2C%22frame-src%22%3A%22%27none%27%22%2C%22media-src%22%3A%22*%22%7D%2C%22ember-basic-dropdown%22%3A%7B%22destination%22%3A%22ember-basic-dropdown-wormhole-video-editor%22%7D%2C%22apiHost%22%3A%22https%3A//editor.vinubis.com%22%2C%22startRoute%22%3A%22projects.index%22%2C%22ember-simple-auth%22%3A%7B%22baseURL%22%3A%22%22%2C%22authenticationRoute%22%3A%22register%22%2C%22routeAfterAuthentication%22%3A%22projects.index%22%2C%22routeIfAlreadyAuthenticated%22%3A%22projects.index%22%7D%2C%22something%22%3A%22test%22%2C%22flashMessageDefaults%22%3A%7B%22timeout%22%3A3000%2C%22extendedTimeout%22%3A0%2C%22priority%22%3A100%2C%22sticky%22%3Afalse%2C%22showProgress%22%3Afalse%2C%22type%22%3A%22info%22%2C%22types%22%3A%5B%22success%22%2C%22info%22%2C%22warning%22%2C%22danger%22%2C%22alert%22%2C%22secondary%22%5D%2C%22injectionFactories%22%3A%5B%22route%22%2C%22controller%22%2C%22view%22%2C%22component%22%5D%2C%22preventDuplicates%22%3Afalse%7D%2C%22exportApplicationGlobal%22%3Atrue%2C%22browserify%22%3A%7B%22tests%22%3Atrue%7D%7D" />

<link rel="stylesheet" href="<?php echo $VINUBIS_APPS_HOST; ?>/assets/vinubis-editor.css">


<div class="vinubis-main">

<div class="vinubis-videoeditor" id="vinubis-videoeditor-root"></div>

</div>

<script src="<?php echo $VINUBIS_APPS_HOST; ?>/assets/vendor.js"></script>

<script src="<?php echo $VINUBIS_APPS_HOST; ?>/assets/vinubis-editor.js"></script>
