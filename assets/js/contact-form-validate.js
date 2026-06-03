(function ($) {
	'use strict';

	if (!$ || !$.fn.validate) {
		return;
	}

	if (!$.validator.methods.lettersOnly) {
		$.validator.addMethod('lettersOnly', function (value, element) {
			return this.optional(element) || /^[A-Za-z]+(?:\s+[A-Za-z]+)*$/.test($.trim(value));
		}, 'Name must contain only letters and spaces.');
	}

	if (!$.validator.methods.phoneNumber) {
		$.validator.addMethod('phoneNumber', function (value, element) {
			return this.optional(element) || /^\+?[0-9]+$/.test($.trim(value));
		}, 'Phone number must contain only digits (optional + for country code).');
	}

	function sanitizeName(value) {
		return value.replace(/[^A-Za-z\s]/g, '').replace(/\s+/g, ' ');
	}

	function sanitizePhone(value) {
		var v = value.replace(/[^0-9+]/g, '');
		if (v.indexOf('+') > 0) {
			v = v.replace(/\+/g, '');
		}
		if ((v.match(/\+/g) || []).length > 1) {
			v = (v.charAt(0) === '+' ? '+' : '') + v.replace(/\+/g, '');
		}
		return v;
	}

	function fieldWrapper(element) {
		var $el = $(element);
		if (element.name === 'product') {
			return $el.closest('.select-wrapper');
		}
		return $el.closest('.form-control');
	}

	function bindInputFilters($form) {
		$form.off('.contactValidate');
		$form.on('input.contactValidate', '[name="name"]', function () {
			var cleaned = sanitizeName(this.value);
			if (this.value !== cleaned) {
				this.value = cleaned;
			}
		});
		$form.on('input.contactValidate', '[name="phone"]', function () {
			var cleaned = sanitizePhone(this.value);
			if (this.value !== cleaned) {
				this.value = cleaned;
			}
		});
	}

	function initContactForm() {
		var $form = $('#form');
		if (!$form.length) {
			return;
		}

		bindInputFilters($form);

		if ($form.data('validator')) {
			return;
		}

		$form.validate({
			ignore: [],
			rules: {
				name: {
					required: true,
					lettersOnly: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
					phoneNumber: true
				},
				product: {
					required: true
				}
			},
			messages: {
				name: {
					required: 'Please enter your name.',
					lettersOnly: 'Name must contain only letters and spaces.'
				},
				email: {
					required: 'Please enter your email address.',
					email: 'Please enter a valid email address.'
				},
				phone: {
					required: 'Please enter your phone number.',
					phoneNumber: 'Phone number must contain only digits (optional + for country code).'
				},
				product: {
					required: 'Please select a product.'
				}
			},
			errorElement: 'label',
			errorClass: 'error',
			errorPlacement: function (error, element) {
				error.addClass('contact-form-error');
				var $wrapper = fieldWrapper(element);
				if ($wrapper.length) {
					$wrapper.append(error);
				} else {
					error.insertAfter(element);
				}
			},
			highlight: function (element) {
				fieldWrapper(element).addClass('error');
			},
			unhighlight: function (element) {
				fieldWrapper(element).removeClass('error');
			},
			submitHandler: function (form) {
				var $el = $(form);
				var form_btn = $el.find('button[type="submit"]');

				Swal.fire({
					title: 'Sending...',
					text: 'Please wait while we send your message.',
					allowOutsideClick: false,
					didOpen: function () {
						Swal.showLoading();
					}
				});

				form_btn.prop('disabled', true);

				$el.ajaxSubmit({
					url: 'send_gmail.php',
					dataType: 'json',
					success: function (data) {
						Swal.close();
						form_btn.prop('disabled', false);
						if (data.status === 'success') {
							form.reset();
							$el.trigger('reset');
							$el.find('label.error, label.contact-form-error').remove();
							$el.find('.form-control.error, .select-wrapper.error').removeClass('error');
							Swal.fire({
								icon: 'success',
								title: 'Success!',
								text: data.message
							});
						} else {
							Swal.fire({
								icon: 'error',
								title: 'Oops...',
								text: data.message
							});
						}
					},
					error: function () {
						Swal.close();
						form_btn.prop('disabled', false);
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'Something went wrong. Please try again later.'
						});
					}
				});
			}
		});
	}

	$(function () {
		initContactForm();
	});

})(jQuery);
