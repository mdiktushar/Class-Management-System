// Welcome Page Start
$("#forget-form").hide();
$("#p2").hide();

$("#forget-button").click(() => {
    $("#forget-form").show();
    $("#login-form").hide();
    $("#p1").hide();
    $("#p2").show();
});

$("#back-login").click(() => {
    $("#forget-form").hide();
    $("#login-form").show();
    $("#p1").show();
    $("#p2").hide();
});
// Welcome Page End