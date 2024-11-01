jQuery(document).ready(function() {

    let setCurrentMenu = function(){

        var ids = [
            "projects",
            "library",
            "account"
        ];

        for (var i=0; (i < ids.length); i++){
            var item = ids[i];
            var isCurrent = (window.location.hash.endsWith(item));
            jQuery("#vinubis-"+item).toggleClass("current", isCurrent);
        }

        var isLoggedOut = window.location.hash.endsWith("register");
        jQuery("#vinubis-logout").toggleClass("vinubis-is-logged-out", isLoggedOut);
    }

    jQuery(window).on("hashchange", setCurrentMenu);
    setCurrentMenu();

    // contact form script
    jQuery('#vinubis-contact-submit').click(function(e){
        e.preventDefault();

        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var formMessages = jQuery('#vinubis-form-messages');
        var email = jQuery('#feedback-email').val();
        var message = jQuery('#feedback-message').val();
            
        if ((!email)||(!testEmail.test(email))) {
            jQuery('.vinubis-error-email').fadeOut();
            jQuery('<p class="vinubis-error-email">Please type a valid email address</p>').insertAfter('#feedback-email');
            jQuery('.vinubis-error-email').delay(3000).fadeOut();
        }

        else {
            if (!message) {
                jQuery('.vinubis-error-message').fadeOut();
                jQuery('<p class="vinubis-error-message">Please type a message</p>').insertAfter('#feedback-message');
                jQuery('.vinubis-error-message').delay(3000).fadeOut();
            }

            else {
                jQuery.ajax({
                url: 'admin.php?page=vinubis-send-email',
                type: 'POST',
                data: {
                    email: email,
                    message: message
                }
            })

            .done(function(response) {
                jQuery('#feedback-email').val('');
                jQuery('#feedback-message').val('');
                jQuery('<h3 id="vinubis-form-messages">Thank You! Your message was successfully sent!</h3>').insertAfter('#feedback-message');
                jQuery('#vinubis-form-messages').delay(5000).fadeOut();
            })
            }
        }           
    });
    // end
});