document.addEventListener('DOMContentLoaded', function()
{
    const box = document.getElementById('box');


    const widthRange = document.getElementById('widthRange');
    const heightRange = document.getElementById('heightRange');
    const borderRadius = document.getElementById('borderRadius');
    const opacityRange = document.getElementById('opacityRange');
    
    const width= document.getElementById('width');
    const height= document.getElementById('height');
    const border = document.getElementById('border');
    const opacity = document.getElementById('opacity');

    width.innerHTML = 'Width = 500px';
    height.innerHTML = 'Height = 500px';
    border.innerHTML = 'Border-radius = 0%';
    opacity.innerHTML = 'Opacity = 1';
    function upDate() {
        const wrangeVal = widthRange.value + 'px';
        const hrangeVal = heightRange.value + 'px';
        const borderVal = borderRadius.value;
        const divbyTwo = borderVal / 2 + '%';
        const opacityVal = opacityRange.value;
        box.style.width = wrangeVal;
        box.style.height = hrangeVal;
        box.style.borderRadius = divbyTwo;
        box.style.opacity = opacityVal;
        width.innerHTML = 'Width = ' + wrangeVal;
        height.innerHTML = 'Height = ' + hrangeVal;
        border.innerHTML = 'Border-radius = ' + borderVal + '%';
        opacity.innerHTML = 'Opacity = ' + opacityVal;
    }

    widthRange.addEventListener('input', upDate);
    heightRange.addEventListener('input', upDate);
    borderRadius.addEventListener('input', upDate);
    opacityRange.addEventListener('input', upDate);

    const opacityAtt = opacityRange.getAttribute('value');
    if(opacityAtt === '10') {
        box.style.opacity = '1';
        opacity.innerHTML = 'Opacity = ' + opacityVal;
    }
});