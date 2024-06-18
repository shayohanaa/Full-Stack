document.addEventListener("DOMContentLoaded", function() 
{
  const header = document.getElementById('header');
  const anim = document.querySelectorAll('.anim');
  const iconAcc = document.querySelector('.iconAcc');
  const iconInfo = document.querySelector('.iconInfo');
  const iconHelp = document.querySelector('.iconHelp');
  const iconTextAcc = document.querySelector('.iconTextAcc');
  const iconTextInfo = document.querySelector('.iconTextInfo');
  const iconTextHelp = document.querySelector('.iconTextHelp');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      } else {
        entry.target.classList.remove('show');
      }
    });
    }, {
      threshold: 0.1
    });
  
    anim.forEach(animation => {
      observer.observe(animation);
    });
    
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 0) {
          header.classList.add('sticky');
      } else {
          header.classList.remove('sticky');
      }
  });
  iconAcc.addEventListener('mouseover', function(){
    iconTextAcc.classList.remove('none');
  });
  iconAcc.addEventListener('mouseout', function(){
    iconTextAcc.classList.add('none');
  });
  iconInfo.addEventListener('mouseover', function(){
    iconTextInfo.classList.remove('none');
  });
  iconInfo.addEventListener('mouseout', function(){
    iconTextInfo.classList.add('none');
  });
  iconHelp.addEventListener('mouseover', function(){
    iconTextHelp.classList.remove('none');
  });
  iconHelp.addEventListener('mouseout', function(){
    iconTextHelp.classList.add('none');
  });
});