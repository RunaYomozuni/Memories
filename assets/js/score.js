function saveScore(user_id, difficulty, scored) {
    $.ajax({
        type: "POST",
        url: "scoreAjax.php",
        data: {'statut': false,
                'id_joueur': user_id,
                'difficulte': difficulty,
                'score_joueur': scored
        }
    });
    request.done(function (output) {});
}

var user_id = 1; 
var difficulty = "facile"; 
var score = 100;

saveScore(user_id, difficulty, score);