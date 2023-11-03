var start = document.getElementById("play")
var blur = document.querySelector(".blur")
var cartes = document.querySelectorAll("td")
var counter = document.getElementById("timer")

statut = false

start.addEventListener("click", function(){
	blur.classList.add("cancelBlur");
	start.style.display = "none"
	statut = true
	
let secondes = 0;

let chrono = window.setInterval(timer, 1000);

function timer() {
  secondes++;
  counter.innerHTML = secondes;
  if (secondes == 60) {
	window.clearTimeout(chrono);
  }
}

})
for(i = 0; i < cartes.length; i++){
cartes[i].addEventListener("click", function(){
	cartes.style.background = "none"
})
}