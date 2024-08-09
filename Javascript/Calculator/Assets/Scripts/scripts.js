let firstNum = '';
let secondNum = '';
let operationVal = '';
let operisset = false;

function add(num1, num2) {
    return num1 + num2;
}

function subtract(num1, num2) {
    return num1 - num2;
}

function divide(num1, num2) {
    return num1 / num2;
}

function multiply(num1, num2) {
    return num1 * num2;
}

function reset() {
    const ansChar = document.getElementById('ansChar');
    ansChar.innerHTML = '';
    firstNum = '';
    secondNum = '';
    operationVal = '';
    operisset = false;
    console.log('Calculation has been reset.');
}

function charClicked(button) {
    const ansChar = document.getElementById('ansChar');
    const charValue = button.textContent;
    if (!operisset) {
        firstNum += charValue;
        console.log('Num1: ' + firstNum);
    } else {
        secondNum += charValue;
        console.log('Num2: ' + secondNum);
    }
    ansChar.innerHTML += charValue;
}

function operation(button) {
    const ansChar = document.getElementById('ansChar');
    operationVal = button.textContent;
    ansChar.innerHTML = '';
    ansChar.innerHTML = operationVal;
    if(firstNum == '')
    {
        console.log('Num1 is required!');
    } else {
        operisset = true;
        console.log('Operation selected: ' + operationVal);
    }
}

function calculate() {
    const ansChar = document.getElementById('ansChar');
    let result = 0;
    
    const num1 = parseFloat(firstNum);
    const num2 = parseFloat(secondNum);
    
    if (operationVal === '+') {
        result = add(num1, num2);
    } else if (operationVal === '-') {
        result = subtract(num1, num2);
    } else if (operationVal === '*') {
        result = multiply(num1, num2);
    } else if (operationVal === '÷') {
        result = divide(num1, num2);
    }

    ansChar.innerHTML = result;
    console.log('Calculation result: ' + result);
    firstNum = '';
    secondNum = '';
    operationVal = '';
    operisset = false;
}

document.addEventListener("DOMContentLoaded", function() {
    console.log('DOM fully loaded and parsed');
});