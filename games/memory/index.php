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
		<div id="gameChange">
			<p class="game-sentence">Choisis un thème :</p>
			<div class="box-theme">
				<button class="theme-1">Marvel</button>
				<button class="theme-2">Voitures</button>
				<button class="theme-3">Acteurs</button>
			</div>

			<p class="game-sentence">Choisis une difficulté :</p>
			<div class="box-level">
				<button class="level-1">Facile</button>
				<button class="level-2">Normal</button>
				<button class="level-3">Difficile</button>
			</div>
		</div>

		<div id="timer"></div>
		<button id="play">Jouer</button>
		<div class="blur">
			<div id="gameBox">

			</div>
	</main>

	<?php
	require_once SITE_ROOT . 'partials/footer.php';
	?>
</body>
<script src="../../assets/js/memory.js"></script>
<script src="https://kit.fontawesome.com/2822932118.js" crossorigin="anonymous"></script>
<script src="../../assets/js/score.js"></script>
<script>
      function display(popup) {
        element = document.querySelector(popup);
        if (element.style.visibility === "hidden") {
          element.style.visibility = "visible";
        } else element.style.visibility = "hidden";
      }
    </script>
	<?php require_once SITE_ROOT . 'chat.php'; ?>
</html>