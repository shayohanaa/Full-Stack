document.addEventListener("DOMContentLoaded", function() 
{
    const goUp = document.getElementById('goUp');

    goUp.addEventListener('click', function(){
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Optional: for a smooth scrolling effect
        });
    });
});