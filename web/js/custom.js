jQuery(document).ready(function(){
	
	if(jQuery("#contact-form").length > 0){
        // Validate the contact form
        jQuery('#contact-form').validate({
	
            // Add requirements to each of the fields
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
		
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: jQuery.format("At least {0} characters required.")
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                message: {
                    required: "Please enter a message.",
                    minlength: jQuery.format("At least {0} characters required.")
                }
            },
		
            submitHandler: function(form) {
                jQuery("#submit-contact").attr("value", "Sending...");
                jQuery(form).ajaxSubmit({
                    success: function(responseText, statusText, xhr, $form) {
                        jQuery("#response").html(responseText).hide().slideDown("fast");
                        jQuery("#submit-contact").attr("value", "Send it");
                        jQuery(form).find("input[type=text]").val('');
                        jQuery(form).find("input[type=email]").val('');
                        jQuery(form).find("input[type=url]").val('');
                        jQuery(form).find("textarea").val('');
                    }
                });
                return false;
            }
        });
    }
});
function val() {
    if(state.selectedIndex==0) {
        alert('Please Select A State');
        state.focus();
        return false;
    }
    return true;
}
function getData($job_speciality, $job_location, $job_keyword, $nextpage_index) {
   post('/GlamantechWeb/web/search-job.php', {job_speciality: $job_speciality , location: $job_location, keyword: $job_keyword, pageIndex: $nextpage_index});
}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}