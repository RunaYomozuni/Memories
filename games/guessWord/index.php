<?php require_once '../../utils/common.php';
$pageName = "game";
?>
<!DOCTYPE html>
<html lang="fr">
<?php
require_once SITE_ROOT . 'partials/head.php';
?>

<body id="jeu">
	<?php
	require_once SITE_ROOT . 'partials/header.php';
	?>

	<main>
		<div class="">
			<div id="gameBox">
				<input type="text" id="userGuess" placeholder="Entrez votre réponse">
				<button id="guessButton">Devinez</button>
				<p id="result"></p>
				<p id="score">Score : <span id="scoreValue">0</span></p>
				<p id="timer">Temps restant : <span id="timeValue">60</span> secondes</p>
				<button id="play">Jouer</button>
			</div>
		</div>
	</main>

	<?php
	require_once SITE_ROOT . 'partials/footer.php';
	?>
</body>
<script src="../../assets/js/guessWord.js"></script>

</html>