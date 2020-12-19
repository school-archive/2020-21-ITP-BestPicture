'use strict';
document.addEventListener("DOMContentLoaded", init);

function init() {
    document.getElementById('submit').addEventListener('click', login);
    document.getElementById('closebtn').addEventListener('click', close);
}

function login() {
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.addEventListener("load", function (){
        console.log(this.responseText)
        if(!this.responseText.includes('success')) {
            let alertBox = document.getElementById('alert');
            alertBox.innerText = '<span id=\"closebtn\">&times;</span>' +this.responseText;
            alertBox.style.display = 'inline';
            document.getElementById('main').style.marginTop = '4em';
        }
        else {
            window.location.href = "../index.php";
        }

    });

    let names = ['email', 'password'];
    let post = '';
    let values = [];
    values['email'] = document.getElementById('email').value;
    values['password'] = document.getElementById('password').value;

    for (let name of names) {
        post+= (values[name]==='') ? '' : '&' +name +'=' +values[name];
    }


    xmlhttp.open("post", "../php/endpoints/login.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
    xmlhttp.send(post.substr(1));
}

function close() {
    document.getElementById('closebtn').parentElement.style.display='none';
    document.getElementById('main').style.marginTop = '7em';
}