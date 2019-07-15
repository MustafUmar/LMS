$.validator.addMethod( "lettersonly", function( value, element ) {
	return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "Letters only please" );

$.validator.addMethod( "letterspaceonly", function( value, element ) {
	return this.optional( element ) || /^[a-z\s]+$/i.test( value );
}, "Letters only please" );

jQuery.validator.addMethod("dateform", function(value, element) { 
  return this.optional(element) || /^\d\d?-\w\w\w-\d\d\d\d/.test(value); 
}, "Please specify the date in DD-MMM-YYYY format");

let regform = $('#register-form')
regform.steps({
	headerTag: '.form-header',
	bodyTag: '.form-section',
	labels: {
		current: "",
		pagination: "",
		// finish: '<input type="submit" value="Register" />'
	},
	// transitionEffect: "slideLeft",
	onStepChanging: function (event, currentIndex, newIndex){
		if (currentIndex > newIndex)
			return true;
		regform.validate().settings.ignore = ":disabled,:hidden";
        return regform.valid();
	},
	onStepChanged: function (event, currentIndex, priorIndex) {
		if(currentIndex == 1) {
			$('#username').val($('#regemail').val())
		}
		// if (currentIndex == 4) { //if last step
		   
		//    $('.wizard').find('a[href="#finish"]').remove(); 
		   
		//    $('.wizard .actions li:last-child').append('<input type="submit" value="Register" />');
		// }
	},
	onFinishing: function (event, currentIndex)
    {
        regform.validate().settings.ignore = ":disabled";
        return regform.valid();
    },
    onFinished: function (event, currentIndex)
    {
        $(this).submit()
        // $("#register-form").submit();
    }
}).validate({
	normalizer: function( value ) {
	    return $.trim( value );
	  },
	rules: {
		firstname: { required: true, lettersonly: true },
		othername: { lettersonly: true },
		lastname: { required: true, lettersonly: true },
		email: { required: true, email: true },
		phone: { required: true, number: true },
		stateoforigin: { required: true, letterspaceonly: true },
		placeofbirth: { required: true, letterspaceonly: true },
		dateofbirth: { required: true, dateform: true },
		gender: { required: true },
		maritalstatus: { required: true },
		phaddress: { required: true },
		nokfullname: { required: true, letterspaceonly: true },
		nokphonenum: { required: true, number: true },
		nokaddress: { required: true },
		occupation: { required: true },
		// bizaddress: { required: true },
		bankname: { required: true },
		accountname: { required: true },
		accountnumber: { required: true, number: true, minlength: 10 },
		username: { required: true },
		password: { required: true, minlength: 3 },
		password_confirmation: { required: true, equalTo: '#password' }
	},
	errorPlacement: function(error, element) {
		if (element.attr('name') === 'maritalstatus') {
			error.insertAfter(".radio-field");
		} else {
		      error.insertAfter(element);
		}
	},
	// submitHandler: function(form) {
	//     regform.submit();
	// }
})

$('#birthdatepicker').datepicker({
	dateFormat: 'dd-M-yy',
	changeMonth: true,
    changeYear: true,
    yearRange: "1975:-nn"
});

$('#contribute-modal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) 
	var member = button.data('member')
  
	var modal = $(this)
	modal.find('.modal-title').text(member)
	// modal.find('.modal-body input').val(recipient)
})



