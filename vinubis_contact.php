<?php 
if(!defined('ABSPATH')) exit;
include 'vinubis-header.php'; ?>

<style>
	#vinubis-contact-submit:after {
		content: url('<?php echo plugins_url('img/icon-check.png', __FILE__ );?>');
		position: relative;
		top: 3px;
		left: 10px;
		margin-right: 10px;
	}

	.vinubis-editor_page_vinubis-contact h3:before {
		content: url('<?php echo plugins_url('img/blue-arrow.png', __FILE__ );?>');
		position: relative;
		top: 3px;
		margin-right: 10px;
	}

	#vinubis-form-messages:before {
		content: none;
	}
</style>

<div class="vinubis-main">
	<h2>What's Up?</h2>
	<h3 class="vinubis-not-sm">How can we help you? Want to give us Feedback? Great!</h3>

	<form id="vinubis-feedback">
		<input type="text" placeholder="Your email" id="feedback-email">
		<textarea placeholder="Let us know what we can do for you..." id="feedback-message"></textarea><br>
		<a id="vinubis-contact-submit">Send</a>
	</form>
</div>





