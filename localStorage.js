// localStorage
if(typeof(Storage) !== 'undefined')
{
    localStorage.setItem('name', 'John Doe');
    console.log(localStorage.name);
    // localStorage.removeItem('name');
    if(localStorage.name)
    {
        document.getElementById('name').innerHTML=localStorage.getItem('name');
    } else {
        document.getElementById('name').innerHTML='Item Not Found';
    }
    } else {
        console.log('LocalStorage Not Available.');
}


// sessionStorage
if(typeof(Storage) !== 'undefined')
{
    sessionStorage.setItem('name', 'Matt Smith');
    console.log(sessionStorage.name);
    // sessionStorage.removeItem('name');
    if(sessionStorage.name)
    {
        document.getElementById('name').innerHTML=sessionStorage.getItem('name');
    } else {
        document.getElementById('name').innerHTML='Item Not Found';
    }
    } else {
        console.log('sessionStorage Not Available.');
}
