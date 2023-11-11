var user_psw = document.getElementById('motdepasse');
var weakPass = /^[a-z]{1,7}$/;
var mediumPass = /^(?=.[A-Z])(?=.\d)[a-zA-Z0-9]{8,}$/;
var strongPass = /^(?=.[A-Z])(?=.\d)(?=.*[\W])[a-zA-Z\d\W_]{8,}$/;


function checkPassword(motdepasse) {
	var strengthBar = document.getElementById('barre');
	var weakPsw = document.getElementById('weak');
	var mediumPsw = document.getElementById('medium');
	var strongPsw = document.getElementById('strong');

	var motdepasse = user_psw.value;

	if (strongPass.test(motdepasse)) {
		strengthBar.style.width = '100%';
		strengthBar.style.backgroundColor = 'green';
		weakPsw.style.color = 'green';
		mediumPsw.style.color = 'green';
		strongPsw.style.color = 'green';
	} else if (mediumPass.test(motdepasse)) {
		strengthBar.style.width = '66%';
		strengthBar.style.backgroundColor = '#ec9123';
		weakPsw.style.color = '#ec9123';
		mediumPsw.style.color = '#ec9123';
		strongPsw.style.color = '#ccc';
	} else if (weakPass.test(motdepasse)) {
		strengthBar.style.width = '33%';
		strengthBar.style.backgroundColor = 'red';
		weakPsw.style.color = 'red';
	} else {
		strengthBar.style.width = '0';
		strengthBar.style.backgroundColor = '#ccc';
		weakPsw.style.color = '#ccc';
		mediumPsw.style.color = '#ccc';
		strongPsw.style.color = '#ccc';
	}
}

user_psw.addEventListener('keyup', checkPassword);