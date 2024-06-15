document.addEventListener("DOMContentLoaded", function() {
    const heroDiscount = document.getElementById('heroDiscount');
    const heroDetailsspan = document.querySelector('.heroDetails span');

    heroDiscount.addEventListener('mouseover', function(){
        this.style.cursor = 'pointer';
        this.style.transition = '0.3s';
        heroDiscount.style.padding = '15px';
        heroDetailsspan.style.color = '#00B6FF'
    });

    heroDiscount.addEventListener('mouseout', function(){
        this.style.cursor = 'none';
        this.style.transition = '0.3s';
        heroDiscount.style.padding = '8px';
        heroDetailsspan.style.color = '#000';
    });
});