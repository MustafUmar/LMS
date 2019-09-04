$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$('#users-table').DataTable({
	processing: true,
    serverSide: true,
    ajax: {
        url: '/users/data',
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    },
    columns: [
        {data: 'firstname', name: 'firstname'},
        {data: 'lastname', name: 'lastname'},
        {data: 'email', name: 'email'},
        {data: 'role', name: 'role', orderable: false, searchable: false},
        {data: 'active', name: 'active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false}
    ]
});

$('#members-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/members',
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            console.log(textStatus);
        }
    },
    columns: [
        {data: 'memberid', name: 'memberid', orderable: false},
        {data: 'firstname', name: 'firstname'},
        {data: 'lastname', name: 'lastname'},
        {data: 'email', name: 'email'},
        // {data: 'active', name: 'active', orderable: false, searchable: false},
        {data: 'action', name: 'action', orderable: false, searchable: false}
    ]
});


$.validator.addMethod( "lettersonly", function( value, element ) {
    return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "Letters only please" );

$('#newuserform').validate({
    normalizer: function( value ) {
        return $.trim( value );
    },
    rules: {
        firstname: {required:true, lettersonly:true},
        lastname: {required:true, lettersonly:true},
        email: { required: true, email: true },
        phone: { required: true, number: true },
        usertype: 'required'
    }
});