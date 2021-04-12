

let btnGeneratePass = document.querySelector('#btnGenerarPass');
let result = document.querySelector('#password');



btnGeneratePass.addEventListener('click', () => {
	result.value = generatePassword(10, false, /\d/,'emg-');
	result.innerHTML = result.value;
	
});
