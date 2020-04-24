// validate signup form on keyup and submit
$("#validateForm").validate({
    rules: {
        name: "required",
        userName: {
            required: true,
            minlength: 5
        },
        password: {
            required: true,
            minlength: 5
        },
        passwordConfirm: {
            required: true,
            minlength: 5,
            equalTo: "#password"
        },
        email: {
            required: true,
            email: true
        },
        agree: "required"
    },
    messages: {
        name: "Please enter your firstname",
        userName: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
        },
        password: {
            required: "Please enter a password",
            minlength: "Password must be at least 5 characters long"
        },
        passwordConfirm: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        },
        email: "Please enter a valid email address",
        agree: "Please accept our Terms"
    }
});



