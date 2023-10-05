document.addEventListener('DOMContentLoaded', function()
{
    const age = document.getElementById('age');
    const height = document.getElementById('height');
    const weight = document.getElementById('weight');
    const bmiForm = document.getElementById('bmiForm');
    const bmiResult = document.getElementById('bmiResult');
    const title = document.getElementById('title');
    const letters = document.getElementById('letters');
    const resultClass = document.querySelector('.result');
    bmiForm.addEventListener('submit', function(e){
        const ageVal = age.value;
        const heightVal = height.value;
        const weightVal = weight.value;
        if(ageVal != '' && heightVal != '' && weightVal != '')
        {
            e.preventDefault();
            const heightInt = parseInt(heightVal);
            const formattedHeight = heightInt.toString().slice(0, 1) + "." + heightInt.toString().slice(1);
            const FinalheightResult = formattedHeight * formattedHeight;
            const weightVal = weight.value;
            const result = weightVal / FinalheightResult;
            const intResult = parseInt(result);
            if(result < 18.5)
            {
                resultClass.className = 'underweight';
                bmiResult.innerHTML = 'Your BMI is: <strong>' + intResult + '</strong>';
                title.innerHTML = 'Underweight';
                letters.innerHTML = 'Underweight refers to a condition where a persons body weight is lower than what is considered healthy for their age, height, and body type.It may indicate insufficient nutrition or underlying health issues.';
            } else if(result >= 18.5 && result <= 24.9) {
                resultClass.className = 'healthy';
                bmiResult.innerHTML = 'Your BMI is: <strong>' + intResult + '</strong>';
                title.innerHTML = 'Healthy Weight';
                letters.innerHTML = 'Healthy weight signifies a body weight that falls within a recommended range for a persons age, height, and body composition. It suggests a balanced diet and exercise, contributing to overall well-being.';
            } else if(result >= 25 && result <= 29.9) {
                resultClass.className = 'overweight';
                bmiResult.innerHTML = 'Your BMI is: <strong>' + intResult + '</strong>';
                title.innerHTML = 'Overweight';
                letters.innerHTML = 'Overweight indicates that a persons body weight exceeds the recommended range for their age, height, and body type. It can be associated with health risks such as heart disease and diabetes.';
            } else if(result > 30) {
                resultClass.className = 'obesity';
                bmiResult.innerHTML = 'Your BMI is: <strong>' + intResult + '</strong>';
                title.innerHTML = 'Obesity';
                letters.innerHTML = 'Obesity is a severe condition characterized by excessive body fat accumulation. It usually implies a significantly higher body weight compared to the recommended range and is linked to various health problems, including cardiovascular disease, type 2 diabetes, and joint issues.';
            }
        } else {
            alert('please fill all fields.');
        }
    });
});
