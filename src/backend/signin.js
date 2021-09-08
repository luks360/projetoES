function onSignIn(googleUser) {
    // Recuperando o profile do usuário
    var profile = googleUser.getBasicProfile();
    $(".g-signin2").css("display", "none");
    $(".data").css("display", "block");
    $("#pic").attr('src', profile.getImageUrl());
    // Recuperando o token do usuario. Essa informação você necessita passar para seu backend
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
}