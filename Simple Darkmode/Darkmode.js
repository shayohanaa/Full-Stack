
document.addEventListener('DOMContentLoaded', function() 
{
    const inputLabel = document.getElementById('inputLabel');
    const toggleBtn = document.querySelector('.toggleBtn');
    const body = document.querySelector('body');
    const sun = document.querySelector('.sun');
    const moon = document.querySelector('.moon');
    const darkSide = document.querySelector('.darkSide');
    const text = document.getElementById('text');
    toggleBtn.addEventListener('click', function(){
        if (inputLabel.classList.contains('active')) {
            inputLabel.classList.remove('active');
            moon.style.visibility = 'hidden';
            sun.style.visibility = 'visible';
            // toggleBtn.style.backgroundColor = '#00b7ff';
            toggleBtn.style.background = 'linear-gradient(to right, #FFFF00, #00F0FF)';
            text.innerHTML = 'Dark mode is off';
            body.style.backgroundColor = 'white';
        } else {
            inputLabel.classList.add('active');
            moon.style.visibility = 'visible';
            sun.style.visibility = 'hidden';
            darkSide.style.visibility = 'hidden';
            // toggleBtn.style.backgroundColor = '#000000';
            // toggleBtn.style.background = 'linear-gradient(to right, #000000 50%, #FFFFFF 80%, #000000 100%)';
            toggleBtn.style.background = 'linear-gradient(to right, rgba(0, 0, 0, 0.8) 50%, rgba(255, 255, 255, 0.1) 80%, rgba(0, 0, 0, 0.8) 110%)';
            text.innerHTML = 'Dark mode is on';
            body.style.backgroundColor = 'grey';
        }
    });
});
