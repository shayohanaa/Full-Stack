document.addEventListener('DOMContentLoaded', function()
{
    const subLinks = document.getElementById('subLinks');
    const showMore = document.getElementById('showMore');
    const links = document.querySelectorAll('.links li');
    const starred = document.getElementById('starred');

    showMore.addEventListener('click', function()
    {
        if(subLinks.classList.contains('none'))
        {
            subLinks.classList.remove('none');
        } else {
            subLinks.classList.add('none');
        }

        // Check if the link has been clicked before
        if (localStorage.getItem('linkClicked')) 
        {
            starred.classList.add('highlighted');
        }

        // Add click event listener to the link
        starred.addEventListener('click', function(event) 
        {
            event.preventDefault();
            starred.classList.add('selected');
            localStorage.setItem('linkClicked', 'true');
            setTimeout(function() {
                window.location.href = starred.href;
            }, 1000);
        });
    });
});