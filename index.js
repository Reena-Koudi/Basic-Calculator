//get the buttons from the DOM
const buttons = document.querySelectorAll('.btn-number, .btn-operator');
const clearButton = document.querySelector('.btn-clear');
const saveButton = document.querySelector('.btn-save');
const display = document.querySelector('.display');
const history = document.querySelector('.history');
const input = document.querySelector('.input');

//add an eventListener to each of the buttons
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    const buttonValue = button.getAttribute('data-num');
    console.log('button pressed', buttonValue);
    history.textContent += buttonValue;
    console.log(history.textContent);
  });
});

function allClear() {
  input.textContent = '';
  history.textContent = '';
}

function equal() {
  input.textContent = eval(history.textContent);
  console.log(history.textContent);
  console.log(input.textContent);
}
