
document.addEventListener('DOMContentLoaded', function() 
{
    const inputLabel = document.getElementById('inputLabel');
    const toggleBtn = document.querySelector('.toggleBtn');
    const body = document.querySelector('body');
    const sun = document.querySelector('.sun');
    const moon = document.querySelector('.moon');
    const text = document.getElementById('text');
    toggleBtn.addEventListener('click', function(){
        if (inputLabel.classList.contains('active')) {
            inputLabel.classList.remove('active');
            moon.style.visibility = 'hidden';
            sun.style.visibility = 'visible';
            toggleBtn.style.backgroundColor = '#00b7ff';
            text.innerHTML = 'Dark mode is off';
            body.style.backgroundColor = 'white';
        } else {
            inputLabel.classList.add('active');
            moon.style.visibility = 'visible';
            sun.style.visibility = 'hidden';
            toggleBtn.style.backgroundColor = 'black';
            text.innerHTML = 'Dark mode is on';
            body.style.backgroundColor = 'grey';
        }
    });
});