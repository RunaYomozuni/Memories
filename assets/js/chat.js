document.getElementById("openChat").addEventListener("click", function() {
    document.getElementById("chatPopup").style.display = "block";
    document.getElementById("openChat").style.position = "fixed";
});

    document.getElementById("closeChat").addEventListener("click", function() {
    document.getElementById("chatPopup").style.display = "none";
});

$(document).ready(function() {

    // Envoyer un message lorsqu'on soumet le formulaire
    $("#sendForm").submit(function(event) {
        event.preventDefault(); // Empêcher le rechargement de la page
        ajaxSaveMessage();
    });
});
function ajaxSaveMessage() {
    var text = document.getElementById("message").value;
    let request = $.ajax({
        type: "POST",
        url: "../../chatAjax.php",
        data: {'textarea': text}
    });
    request.done(function (output) {
        loadMessages(text);
        $("#message").val("");
    });
}

function loadMessages(){
    $.ajax({
        type: "GET",
        url: "../../getMessages.php",
        success: function(data) {
            var messages = JSON.parse(data);
            $("#userMessages").empty();
            //effacer les mess et doublons
            $("#userMessages").css("display", "flex");

            for (var i = 0; i < messages.length; i++) {
                $("#userMessages").append("<p>Vous: " + messages[i].message + "</p>");
            }
        }
    });
}

loadMessages();