function register(e){
    e.preventDefault();
    
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password1 = document.getElementById('password1').value;
    var msg = document.getElementById('msg');

    if(name == '' || email == '' || password == '' || password1 == ''){
        msg.className = 'alert alert-danger';
        msg.innerHTML = 'Please fill out all fields!';
        } else {
            if(name.length < 3 || name.length > 16){
                msg.className = 'alert alert-danger';
                msg.innerHTML = 'Name has to be 3 - 16 characters!';
            } else {
                var atPos = email.indexOf('@');
                var dotPos = email.lastIndexOf('.');
                if(atPos < 1 || dotPos < atPos+2 || dotPos + 2 >= email.length){
                    msg.className = 'alert alert-danger';
                    msg.innerHTML = 'Please use valid email!';
                } else {
                    if(password.length < 9 || password.length > 16){
                        msg.className = 'alert alert-danger';
                        msg.innerHTML = 'Password has to be 9 - 16 characters!';
                    } else {
                        if(password1 != password){
                            msg.className = 'alert alert-danger';
                            msg.innerHTML = 'The passwords do not match!';
                        } else {
                            msg.className = 'alert alert-success';
                            msg.innerHTML = name+' Register successfully with the email '+email;
                        }
                    }
                }
            }
        }
    }

document.getElementById('regForm').addEventListener('submit', register, false);