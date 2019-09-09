$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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
  	var account = button.data('account')
	var modal = $(this)
	// modal.find('.modal-title').text(member)
	$('#modal-accountname').text(account)
	$('#modal-trace').val(member)

})

$('#request_modal').on('show.bs.modal', function (event) {
	
})
$('#member-search').keyup(function(e) {
	var search = $(this).val().trim();
	var gid = $('#griddata').val();
	var mlist = $('#group-fetch-list');
	var htmlist = '';
	if(search.length > 3) {
		$('.loading-overlay').show();
		$.post('/member/search/'+gid+'/'+search, function(data) {
			console.log(data);
			if(data.length > 0) {
				for(key in data) {
					htmlist+= `
						<div class="list-group-item">
			        		<div class="two-flexed-left-shrink">
							  <div class="">
							    <div class="">
							      <img class="img-circle img-size-2" src="/images/profile.jpg" alt="...">
							    </div>
							  </div>
							  <div class="pd-3">
							  	<div class="two-flexed-spacebtw">
							  		<p class=""><strong>${data[key]['firstname']} ${data[key]['lastname']}</strong></p>
							  		<button id="send-invite" data-mid="${data[key]['id']}" class="btn btn-default btn-sm">Send Invitation</button>
							  	</div>
							  </div>
							</div>
			        	</div>
					`;
					mlist.html(htmlist);
					$('.loading-overlay').hide();
				}
			} else {
				mlist.html('<div class="list-group-item text-muted"><em>No such member</em></div>');
				$('.loading-overlay').hide();
			}
			
		}).fail(function(data) {
			console.log(data);
			mlist.html('<div class="list-group-item text-muted"><em>No entries</em></div>');
			$('.loading-overlay').hide();
		})
	}
});

$('#send-invite').on('click', function(e) {
	console($(this).data['mid']);
	let middata = $(this).data['mid'];
	let griddata = $('#griddata').val();

	$.post('/member/invite',{grid:griddata,mid:middata}, function(data) {
		console.log(data);
	});

});


