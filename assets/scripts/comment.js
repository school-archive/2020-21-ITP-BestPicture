    'use strict';
    document.addEventListener("DOMContentLoaded", init);

    function init() {
        document.getElementById('heart').addEventListener('click', like);
    }

    function like() {
        let heart = document.getElementById("heart");
        let split = heart.src.split('/')
        let id = window.location.search.split("=")[1]
        let plus = (split[split.length - 1] === "heart.png");
        let xmlhttp = new XMLHttpRequest();

        xmlhttp.addEventListener("load", function (){
            console.log(this.responseText)
            if(this.responseText==='true') {
                let likes = document.getElementById('likes');
                if(plus) {
                    heart.src = '../assets/images/heart_full.png';
                    likes.innerText = parseInt(likes.innerText) + 1 + "";
                }
                else {
                    heart.src = '../assets/images/heart.png';
                    likes.innerText = parseInt(likes.innerText) - 1 + "";
                }
            }
        });

        xmlhttp.open("get", (plus) ? `../php/endpoints/comment.php?action=like&picture=${id}` : `../php/endpoints/comment.php?action=minus&picture=${id}`, true);
        xmlhttp.send();
    }