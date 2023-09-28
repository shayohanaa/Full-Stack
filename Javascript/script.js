document.addEventListener('DOMContentLoaded', function()
{
    const firstNum = document.getElementById('firstNum');
    const mathSymbol = document.getElementById('mathSymbol');
    const secondNum = document.getElementById('secondNum');
    const submit = document.getElementById('submit');
    const answer = document.getElementById('answer');

    function add(num1, num2)
    {
        return num1 + num2;
    }

    function subtract(num1, num2)
    {
        return num1 - num2;
    }

    function multiply(num1, num2)
    {
        return num1 * num2;
    }

    function divide(num1, num2)
    {
        return num1 / num2;
    }

    submit.addEventListener('click', function()
    {
        const firsnumVal = parseFloat(firstNum.value);
        const secondnumVal = parseFloat(secondNum.value);
        const symbol = mathSymbol.value;
        if(symbol == '+')
        {
            answer.classList.remove('failed');
            answer.innerHTML = add(firsnumVal, secondnumVal);
        } else if(symbol == '-')
        {
            answer.classList.remove('failed');
            answer.innerHTML = subtract(firsnumVal, secondnumVal);
        } else if(symbol == '*' || symbol.toLowerCase() == 'x')
        {
            answer.classList.remove('failed');
            answer.innerHTML = multiply(firsnumVal, secondnumVal);
        } else if(symbol == '/')
        {
            if(secondnumVal == '0')
            {
                answer.innerHTML = 'Division by zero is considered mathematically undefined in most number systems, including the real numbers and rational numbers. This is because there is no meaningful way to assign a value to the result of such a division. ';
                answer.className = 'failed';
            } else {
                answer.classList.remove('failed');
                answer.innerHTML = divide(firsnumVal, secondnumVal);
            }
        } else {
            answer.innerHTML = 'Something went wrong...';
            answer.className = 'failed';
        }
    });
});