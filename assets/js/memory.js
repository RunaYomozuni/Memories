let theme = 'vanilla';
let tab = [];
let chrono;
let difficulter = null
let firstCard = null;
let secondCard = null;
let hasFlippedCard = false;
let lockBoard = false;
let gameStarted = false;
let moves = 0;
let pairsFound = 0;

const changeMode = document.getElementById('gameChange')
const theme1 = document.querySelector('.theme-1')
const theme2 = document.querySelector('.theme-2')
const theme3 = document.querySelector('.theme-3')
const gameBox = document.getElementById('gameBox');
const playButton = document.getElementById('play');
const timerDisplay = document.getElementById('timer');
const timer = document.getElementById('timer').innerHTML;
const blur = document.querySelector(".blur")
const Facile = document.querySelector(".level-1")
const Normal = document.querySelector(".level-2")
const Difficile = document.querySelector(".level-3")


theme1.addEventListener('click', function () {
	theme = 'theme1'
})
theme2.addEventListener('click', function () {
	theme = 'theme2'
})
theme3.addEventListener('click', function () {
	theme = 'theme3'
})
Facile.addEventListener('click', function () {
	difficulter = facile
	tab = [10, 10, 11, 11];
	playButton.style.display = "inline"
	changeMode.style.display = "none"

})
Normal.addEventListener('click', function () {
	difficulter = normal
	tab = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 12, 12, 13, 13, 14, 14, 15, 15, 16, 16];

	playButton.style.display = "inline"
	changeMode.style.display = "none"

})
Difficile.addEventListener('click', function () {
	difficulter = difficile
	tab = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 12, 12, 13, 13, 14, 14, 15, 15, 16, 16, 17, 17, 18, 18];

	playButton.style.display = "inline"
	changeMode.style.display = "none"

})

let facile = 2

let normal = 4

let difficile = 6



function flipCard() {
	if (lockBoard || this === firstCard) return;
	if (!hasFlippedCard) {
		hasFlippedCard = true;
		firstCard = this;
		firstCard.classList.remove('bgiOrigin');

	} else {
		hasFlippedCard = false;
		secondCard = this;
		secondCard.classList.remove('bgiOrigin');

		checkForMatch(difficulter * difficulter);
	}

}

function checkForMatch() {
	if (firstCard.dataset.card === secondCard.dataset.card) {

		firstCard.removeEventListener('click', flipCard);
		secondCard.removeEventListener('click', flipCard);
		pairsFound++
		if (pairsFound == 1) {
			clearInterval(chrono);
			gameBox.innerHTML = `<div id="popup-close" class="popup"> <div class="popup-cross-controls"> <button onclick="display("#popup-close")" class="popup-cross"><div><i class="fa-solid fa-xmark"></i></div></button></div> <p class="popup-text"></p> <p class="popup-text">votre score est de ${timer} </p><div class="restart-popup-loc"><button class="restart-popup" href = "localhost/Memories/games/memory/index.php">Rejouer</button></div> </div>`
			statut = false
		}
		resetBoard();
	} else {
		moves++;
		lockBoard = true;
		setTimeout(() => {
			firstCard.classList.add('bgiOrigin')
			secondCard.classList.add('bgiOrigin')
			resetBoard();

		}, 1000);
	}
}

function resetBoard() {
	[hasFlippedCard, lockBoard] = [false, false];
	[firstCard, secondCard] = [null, null];
}

function startGame() {
	if (gameStarted) {
		return;
	}

	gameStarted = true;
	statut = true

	shuffleCards(tab);
	createCards(difficulter * difficulter);

	blur.classList.add("cancelBlur");
	playButton.style.display = "none"
	changeMode.style.display = "none"

	chrono = setInterval(timer, 1000);
	let secondes = 0;
	function timer() {
		secondes++;
		timerDisplay.innerHTML = secondes;
		return secondes
	}

}

function shuffleCards(array) {
	for (let i = array.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1));
		[array[i], array[j]] = [array[j], array[i]];
	}
}

function createCards(difficulter) {
	gameBox.innerHTML = '';
	if (difficulter == difficulter * difficulter) {
		gameBox.style.width = '32%'
	} else if (difficulter == difficulter * difficulter) {
		gameBox.style.width = '40%'
	} else if (difficulter == difficulter * difficulter) {
		gameBox.style.width = '48%'
	}

	for (let i = 0; i < difficulter; i++) {
		const cardElement = document.createElement('div');
		cardElement.classList.add('card');
		cardElement.classList.add('bgiOrigin');
		cardElement.addEventListener('click', () => cardElement.style.backgroundImage = `url(../../assets/images/memory/${theme}/${tab[i]}.png)`);
		cardElement.dataset.card = tab[i];

		cardElement.addEventListener('click', flipCard);
		gameBox.appendChild(cardElement);

	};


}


playButton.addEventListener('click', startGame);
