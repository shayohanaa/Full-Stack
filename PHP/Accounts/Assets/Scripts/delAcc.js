document.addEventListener("DOMContentLoaded", function() {
    const delAccount = document.getElementById('delAccount');
    const delAcc = document.getElementById('delAcc');
    const delAccountwarning = document.getElementById('delAccountwarning');
    const dontDel = document.getElementById('dontDel');

    delAccount.addEventListener('click', function(){
        delAccountwarning.classList.remove('none');
    });

    dontDel.addEventListener('click', function(){
        delAccountwarning.classList.add('none');
    });
});