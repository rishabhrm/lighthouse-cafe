function validate() {
    let f = false;

    let name = $(".name-field").val();
    if (name == "" || name == undefined) {
        $(".name-field-msg")
        .html("A name is required")
        .addClass("text-danger");
    } else {
        f = true;
        $(".name-field-msg")
        .html("Valid name")
        .removeClass("text-danger")
        .addClass("text-success");
    }

    let email = $(".email-field").val();
    let exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email == "" || email == undefined) {
        $(".email-field-msg")
        .html("An email address is required")
        .addClass("text-danger");
        f = false;
    } else if (exp.test(email) == false) {
        $(".email-field-msg")
        .html("Invalid email, email must contain $, .!!")
        .addClass("text-danger");
        f = false;
    } else {
        f = true;
        $(".email-field-msg")
        .html("Valid email address")
        .removeClass("text-danger")
        .addClass("text-success");
    }

    let password = $(".password-field").val();
    let exp1 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    if (password == "" || password == undefined) {
        $(".password-field-msg")
        .html("A password is required")
        .addClass("text-danger");
        f = false;
    } else if (exp1.test(password) == false) {
        $(".password-field-msg")
        .html("Invalid email, email must contain $, .!!")
        .addClass("text-danger");
        f = false;
    } else {
        f = true;
        $(".password-field-msg")
        .html("Valid password")
        .removeClass("text-danger")
        .addClass("text-success");
    }

    let c_password = $(".c-password-field").val();
    if (c_password == "" || c_password != password) {
        $(".c-password-field-msg")
        .html("Re-typed password must match with your password")
        .addClass("text-danger");
        f = false;
    } else {
        f = false;
        $(".c-password-field-msg")
        .html("Valid password")
        .removeClass("text-danger")
        .addClass("text-success");
    }

    let phone = $(".phone-field").val();
    if (phone == "" || phone == undefined) {
        $(".phone-field-msg")
        .html("A phone number is required")
        .addClass("text-danger");
        f = false;
    } else if (phone.length == 10) {
        f = true;
        $(".phone-field-msg")
        .html("Valid phone number")
        .removeClass("text-danger")
        .addClass("text-success");
    } else {
        $(".phone-field-msg")
        .html("invalid")
        .addClass("text-danger");
        f = false
    }

    return f;
}

