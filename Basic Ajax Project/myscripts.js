function changeText(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4 && xhttp.status == 200){
            document.getElementById('mainText').innerHTML = xhttp.responseText;
        }
    }
    xhttp.open('GET', 'file.txt', true);
    xhttp.send();
}