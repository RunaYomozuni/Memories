let targetWord;
let score = 0;
let timerValue = 60; // Temps en secondes
let timerInterval;

const words = ["énigme", "mystère", "labyrinthe", "paradoxe", "cryptique", "phénomène", "extravagant", "illusoire", "alambic", "éphémère",
"intricat", "zéphyr", "vortex", "équinoxe", "galaxie", "abstrait", "éclectique", "opulent", "démagogie", "énergie",
"azur", "bouillonnement", "charabia", "chuchoter", "crépuscule", "éclipse", "élégance", "émeraude", "éphéméride", "fantastique",
"flamboyant", "flegme", "frisson", "gargouille", "harmonie", "hiberner", "incandescent", "insouciance", "iridescence", "jovial",
"labyrinthe", "lévitation", "lumière", "mélancolie", "nacré", "nébuleuse", "onduler", "paradoxal", "plénitude", "prismatique",
"quintessence", "rayonnement", "réminiscence", "résilience", "sérénité", "sidéral", "silhouette", "somnambule", "sublime", "tranquillité",
"ubiquité", "ultraviolet", "vagabond", "ventilateur", "volupté", "xérophyte", "zenith", "zigzaguer", "zymologie", "abandonner",
"abolir", "absoudre", "accueillir", "admirer", "apprivoiser", "assembler", "bousculer", "briller", "captiver", "chérir",
"contempler", "danser", "découvrir", "délivrer", "dévorer", "éclater", "embrasser", "enchanter", "envoûter", "explorer",
"flotter", "fulgurer", "féerique", "gazouiller", "griffonner", "grouiller", "habiter", "héberger", "illumination", "inspirer"];

function startGame() {
    targetWord = generateRandomWord();
    score = 0;
    updateScore();

    startTimer();

    document.getElementById('result').textContent = '';

    document.getElementById('guessButton').disabled = false;

    document.getElementById('instruction').textContent = 'Devinez le mot suivant :';
    displayWord();
}

function generateRandomWord() {
    const randomIndex = Math.floor(Math.random() * words.length);
    return words[randomIndex];
}

function displayWord() {
    const wordElement = document.getElementById('word');
    wordElement.textContent = targetWord.split('').map(letter => '_').join(' ');
}

function guessWord() {
    const userGuess = document.getElementById('userGuess').value.toLowerCase();

    if (userGuess === targetWord) {
        document.getElementById('result').textContent = 'Bravo ! Vous avez deviné le bon mot.';
        score++;
        updateScore();
        targetWord = generateRandomWord();
        displayWord();
    } else {
        document.getElementById('result').textContent = 'Dommage, essayez encore.';
    }

    document.getElementById('userGuess').value = '';
}

function updateScore() {
    document.getElementById('scoreValue').textContent = score;
}

function startTimer() {
    timerInterval = setInterval(function () {
        timerValue--;
        document.getElementById('timeValue').textContent = timerValue;

        if (timerValue === 0) {
            endGame();
        }
    }, 1000);
}

function endGame() {
    clearInterval(timerInterval);
    document.getElementById('result').textContent = `Le temps est écoulé. Votre score final est ${score}.`;
    document.getElementById('guessButton').disabled = true;
}

// Attachez les événements aux éléments HTML
document.getElementById('guessButton').addEventListener('click', guessWord);
document.getElementById('timeValue').textContent = timerValue; // Affichez la valeur initiale du minuteur

// Démarrez le jeu lorsque la page est chargée
startGame();
