/* [ ---- Gebo Admin Panel - validation ---- ] */

	$(document).ready(function() {
		//* validation with tooltips
		//gebo_validation.ttip();
		//* regular validation
		gebo_validation.reg();
	});
	
	//* validation
	gebo_validation = {
		ttip: function() {

			var ttip_validator = $('.dsad').validate({

				onkeyup: false,
				errorClass: 'error',
				validClass: 'valid',
				highlight: function(element) {
					$(element).closest('div').addClass("f_error");
				},
				unhighlight: function(element) {
					$(element).closest('div').removeClass("f_error");
				},
                rules: {
                    product_name:{required:true, minlength:2},
					warranty: { required: true, minlength: 2 },
                    status: { required: true}
				},
				invalidHandler: function(form, validator) {
					$.sticky("There are some errors. Please corect them and submit again.", {autoclose : 5000, position: "top-right", type: "st-error" });
				},
				errorPlacement: function(error, element) {
					// Set positioning based on the elements position in the form
					var elem = $(element);
					
					// Check we have a valid error message
					if(!error.is(':empty')) {
						if( (elem.is(':checkbox')) || (elem.is(':radio')) ) {
							// Apply the tooltip only if it isn't valid
							elem.filter(':not(.valid)').parent('label').parent('div').find('.error_placement').qtip({
								overwrite: false,
								content: error,
								position: {
									my: 'left bottom',
									at: 'center right',
									viewport: $(window),
									adjust: {
										x: 6
									}
								},
								show: {
									event: false,
									ready: true
								},
								hide: false,
								style: {
									classes: 'ui-tooltip-red ui-tooltip-rounded' // Make it red... the classic error colour!
								}
							})
							// If we have a tooltip on this element already, just update its content
							.qtip('option', 'content.text', error);
						} else {
							// Apply the tooltip only if it isn't valid
							elem.filter(':not(.valid)').qtip({
								overwrite: false,
								content: error,
								position: {
									my: 'bottom left',
									at: 'top right',
									viewport: $(window),
                                    adjust: { x: -8, y: 6 }
								},
								show: {
									event: false,
									ready: true
								},
								hide: false,
								style: {
									classes: 'ui-tooltip-red ui-tooltip-rounded' // Make it red... the classic error colour!
								}
							})
							// If we have a tooltip on this element already, just update its content
							.qtip('option', 'content.text', error);
						};
                        
					}
					// If the error is empty, remove the qTip
					else {
						if( (elem.is(':checkbox')) || (elem.is(':radio')) ) {
							elem.parent('label').parent('div').find('.error_placement').qtip('destroy');
						} else {
							elem.qtip('destroy');
						}
					}
				},
				success: $.noop // Odd workaround for errorPlacement not firing!
			})
		},
        reg: function() {
            reg_validator = $('.add_product').validate({
				onkeyup: false,
				errorClass: 'error',
				validClass: 'valid',
				highlight: function(element) {
					$(element).closest('div').addClass("f_error");
				},
				unhighlight: function(element) {
					$(element).closest('div').removeClass("f_error");
				},
                errorPlacement: function(error, element) {
                    $(element).closest('div').append(error);
                },
                rules: {
                    product_name:{required:true, minlength:2},
                    warranty: { required: true, minlength: 2 },
                    create_at:{required:true},
                    status: { required: true}
				},
                invalidHandler: function(form, validator) {
					$.sticky("Giá trị nhập vào không hợp lệ.", {autoclose : 5000, position: "top-right", type: "st-error" });
				}
            })
        },
        reg: function() {
            reg_validator = $('.add_article').validate({
                onkeyup: false,
                errorClass: 'error',
                validClass: 'valid',
                highlight: function(element) {
                    $(element).closest('div').addClass("f_error");
                },
                unhighlight: function(element) {
                    $(element).closest('div').removeClass("f_error");
                },
                errorPlacement: function(error, element) {
                    $(element).closest('div').append(error);
                },
                rules: {
                    title:{required:true, minlength:5},
                    warranty: { required: true, minlength: 10 },
                    wysiwg_title:{required:true, minlength:10},
                    wysiwg_content:{required:true, minlength:20},
                    create_at:{required:true},
                    status: { required: true}
                },
                invalidHandler: function(form, validator) {
                    $.sticky("Giá trị nhập vào không hợp lệ.", {autoclose : 5000, position: "top-right", type: "st-error" });
                }
            })
        }

	};