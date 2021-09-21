function onSignIn(googleUser) {
    // Recuperando o profile do usuário
    var profile = googleUser.getBasicProfile();
    $(".g-signin2").css("display", "none");

    var usuario = {
        'nome': profile.getName(),
        'email': profile.getEmail(),
        'icon': profile.getImageUrl()
    };

    var dados = JSON.stringify(usuario);

    $.ajax({
        url: "http://localhost:80/ProjetoES/src/backend/sessions.php",
        type: "POST",
        data: {'data': dados}
    
    }).done(function(resposta) {
        console.log(resposta);
    
    }).fail(function(jqXHR, textStatus ) {
        console.log("Request failed: " + textStatus);
    
    }).always(function() {
        console.log("completou");
    });

    // Recuperando o token do usuario. Essa informação você necessita passar para seu backend
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
}