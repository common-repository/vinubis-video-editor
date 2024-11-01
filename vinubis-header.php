<?php if(!defined('ABSPATH')) exit; ?>

<style>

	#wpbody-content {
		background: url('<?php echo plugins_url('img/background.jpg', __FILE__ );?>') no-repeat center center fixed;
		background-size: cover;
	}

	.youtube-icon { background-image: url('<?php echo plugins_url('img/youtube.png', __FILE__ );?>'); }
	.youtube-icon:hover { background-image: url('<?php echo plugins_url('img/youtube_hover.png', __FILE__ );?>'); }
	.twitter-icon { background-image: url('<?php echo plugins_url('img/twitter-logo.png', __FILE__ );?>'); }
	.twitter-icon:hover { background-image: url('<?php echo plugins_url('img/twitter-logo_hover.png', __FILE__ );?>'); }
	.facebook-icon { background-image: url('<?php echo plugins_url('img/facebook-logo.png', __FILE__ );?>'); }
	.facebook-icon:hover { background-image: url('<?php echo plugins_url('img/facebook-logo_hover.png', __FILE__ );?>'); }

</style>

<div class="vinubis-header-bar">
	<a href="admin.php?page=vinubis_editor#/projects" id="vinubis-projects">My Videos</a>
	<a href="admin.php?page=vinubis_editor#/library" id="vinubis-library">File Library</a>
	<a href="admin.php?page=vinubis_editor#/account" id="vinubis-account" class="vinubis-not-xs">My Account</a>
	<a href="admin.php?page=vinubis_editor#/logout" id="vinubis-logout" class="vinubis-not-xs">Logout</a>
	<a href="admin.php?page=vinubis-contact" class="vinubis-question">
		<img src="<?php echo plugins_url('img/question-mark.png', __FILE__ );?>">
	</a>

	<a href="https://www.youtube.com/channel/UCB8aX_1OLGxUo8EtRIsuceg" class="vinubis-not-sm vinubis-social youtube-icon" target="_blank" id="vinubis-youtube">
	</a>

	<a href="https://twitter.com/wpvideoeditor" class="vinubis-not-sm vinubis-social twitter-icon" target="_blank">
	</a>

	<a href="https://www.facebook.com/wpvideoeditor" class="vinubis-not-sm vinubis-social facebook-icon" target="_blank">
	</a>
</div>

<div class="clear"></div>