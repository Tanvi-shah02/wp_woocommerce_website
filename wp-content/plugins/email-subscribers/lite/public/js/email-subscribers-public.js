(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	function prepareFormData(form, formData) {
		var list_ids = [];
		var is_multiple_lists = false;
		jQuery.each((form.serializeArray() || {}), function (i, field) {
			// Collect all list ids
			if(field.name === 'lists[]') {
				list_ids.push(field.value);
				is_multiple_lists = true;
			} else {
				formData['esfpx_' + field.name] = field.value;
			}
		});

		if(is_multiple_lists) {
			formData['esfpx_lists[]'] = list_ids;
		}


		return formData;
	}

	function handleResponse(response, form) {

		var status = response.status;

		var message_class = 'success';
		if(status === 'ERROR') {
			message_class = 'error';
		}

		var responseText = response['message_text'];
		var messageContainer = $(form).next('.es_subscription_message');
		messageContainer.attr('class', 'es_subscription_message ' + message_class);
		messageContainer.html(responseText);
		var esSuccessEvent = { 
								detail: { 
											es_response : message_class, 
											msg: responseText
										}, 
								bubbles: true, 
								cancelable: true 
							} ;

		jQuery(form).trigger('es_response', [ esSuccessEvent ]);
	}

	function handleBindFunction(form, is_ig){
		var is_ig = is_ig || false;
		var formData = {};
		formData = prepareFormData(form, formData);
		formData['es'] = 'subscribe';
		formData['action'] = 'es_add_subscriber';
		var actionUrl = es_data.es_ajax_url;
		jQuery(form).find('#spinner-image').show();
		$.ajax({
			type: 'POST',
			url: actionUrl,
			data: formData,
			dataType: 'json',
			success: function (response) {
				if(!is_ig){
					if( response && typeof response.status !== 'undefined' && response.status === "SUCCESS" ) {
						jQuery(form).slideUp('slow');
						jQuery(form).hide();
					} else {
						jQuery(form).find('#spinner-image').hide();
					}
				}
				jQuery(window).trigger('es.send_response', [jQuery(form) , response]);
				handleResponse(response, form);
			},
			error: function (err) {
				jQuery(form).find('#spinner-image').hide();
				console.log(err, 'error');
			},
		});


		return false;
	}

	$(document).ready(function () {
		// var submitButton = $('.es_subscription_form_submit');

		$(document).on('submit', '.es_subscription_form', function (e) {
			e.preventDefault();
			var form = $(this);
			handleBindFunction(form);
		});

		let subscription_forms = $('.es_subscription_form');
		// Check if page contains ES subscription form.
		if ( subscription_forms.length > 0 ) {
			// Send an ajax request to get updated nonce value.
			jQuery.ajax({
				type: 'POST',
				url: es_data.es_ajax_url,
				data: {
					action: 'ig_es_get_updated_subscription_nonce',
				},
				dataType: 'json',
				success: function(response) {
					if( true === response.success ) {
						let data          = response.data;
						let updated_nonce = data.updated_nonce;
						// Update nonce field in each subscription form.
						jQuery(subscription_forms).find('input[name="es-subscribe"]').each(function(){
							$(this).val(updated_nonce);
						});
					}
				}
			});
		}
	});
	// Compatibility of ES with IG
	jQuery( window ).on( "init.icegram", function(e, ig) {
		if(typeof ig !== 'undefined' && typeof ig.messages !== 'undefined' ) {
			jQuery('.icegram .es_shortcode_form, .icegram form[data-source="ig-es"]').each(function(i, v){
				jQuery(v).bind('submit', function (e) {
					e.preventDefault();
					var form = $(this);
					handleBindFunction(form, true);
				});
			});
		}
	});
	
})(jQuery);


