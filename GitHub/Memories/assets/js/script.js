let start = document.getElementById("play")
let blur = document.querySelector(".blur")

start.addEventListener("click", function(){
	blur.classList.add("cancelBlur");
	start.style.display = "none"
})