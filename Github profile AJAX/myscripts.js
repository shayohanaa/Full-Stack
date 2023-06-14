function getProfile(e)
{
    e.preventDefault();
    var username = document.getElementById('username').value;
    var msg = document.getElementById('msg');
    if(!username || username == '')
    {
        msg.className = 'alert alert-danger';
        msg.innerHTML = '404: Profile not found!';
    } else {
        msg.className = 'alert alert-success';
        msg.innerHTML = 'Username found successfully!';
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4 && xhttp.status == 200){
            var user = JSON.parse(xhttp.responseText);
            document.getElementById('profile').innerHTML = `<div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="panel-title">${user.name}</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <img width="200px" height="200px" src="${user.avatar_url}">
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <ul class="list-group">
                                                                                <li>User id: ${user.id}</li>
                                                                                <li>Website: ${user.blog}</li>
                                                                                <li>Created at: ${user.created_at}</li>
                                                                                <li>Updated at: ${user.updated_at}</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>`;
        }
    }
    xhttp.open('GET', 'https://api.github.com/users/'+username, true);
    xhttp.send();
}

document.getElementById('userForm').addEventListener('submit', getProfile, false);
