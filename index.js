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

//clears the display
function allClear() {
  input.textContent = '';
  history.textContent = '';
}

// evaluate the input
function equal() {
  let answer = eval(history.textContent);
  input.textContent = formatNumber(answer);
  console.log(history.textContent);
  console.log(input.textContent);
}

//formats the number
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}

saveButton.addEventListener('click', () => {
  $(document).ready(function () {
    $.ajax({
      url: 'Calculations.php',
      type: 'post',
      data: { sum: display.textContent },
      success: function (response) {
        response = 'sum posted successfully';
        console.log(response);
      },
    });
  });
});
