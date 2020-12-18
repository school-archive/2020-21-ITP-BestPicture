    'use strict';
    document.addEventListener("DOMContentLoaded", init);

    function init() {
        document.getElementById('heart').addEventListener('click', likePlus);
    }

    function likePlus() {
        let heart = document.getElementById("heart");
        let split = heart.src.split('/')
        let id = window.location.search.split("=")[1]

        if (split[split.length - 1] === "heart.png") {
            let xmlhttp = new XMLHttpRequest();

            xmlhttp.addEventListener("load", function (){
                console.log(this.responseText)
                if(this.responseText==='true') {
                    heart.src = '../assets/images/heart_full.png';

                    let likes = document.getElementById('likes');
                    likes.innerText = parseInt(likes.innerText) + 1 + "";
                }

            });

            xmlhttp.open("get", `../php/endpoints/comment.php?action=like&picture=${id}`, true);
            xmlhttp.send();
        }
    }