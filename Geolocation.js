var x = document.getElementById('coords');
function getLocation(){
    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = 'Geolocation is not supported!';
    }

    function showPosition(position)
    {
        // console.log(position.coords.latitude);
        x.innerHTML = 'latitude: '+ position.coords.latitude + "<br>longitude: "+ position.coords.longitude;
    }
}
