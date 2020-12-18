    'use strict';
    document.addEventListener("DOMContentLoaded", init);

    function init() {
        document.getElementById('heart').addEventListener('click', likePlus);
    }

    function likePlus() {
        let heart = document.getElementById("heart");
        let split = heart.src.split('/')
        let id = window.location.search.split("=")[1]
        let xmlhttp;

        if (split[split.length - 1] === "heart.png") {
            xmlhttp = new XMLHttpRequest();

            xmlhttp.addEventListener("load", function (){
                if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                    console.log(this.responseText)
                    if(this.responseText==='true') {
                        let heart = document.getElementById('heart');
                        heart.src = '../assets/images/heart_full.png';

                        let likes = document.getElementById('likes');
                        likes.innerText = parseInt(likes.innerText) + 1 + "";
                    }
                }
            });



            xmlhttp.open("get", `../php/endpoints/comment.php?action=like&picture=${id}`, true);
            xmlhttp.send();
        }
    }