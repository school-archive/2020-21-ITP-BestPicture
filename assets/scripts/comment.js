    'use strict';
    document.addEventListener("DOMContentLoaded", init);

    function init() {
        document.getElementById('heart').addEventListener('click', likePlus);
    }

    function likePlus() {
        let heart = document.getElementById("heart");
        let split = heart.src.split('/')
        let xmlhttp;

        if (split[split.length - 1] === "heart.png") {
            //if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            //} else {
               // xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            //}

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState === 4) {
                    //if(xmlhttp.status === 200) {
                        //heart.src = "../assets/images/heart_full.png";
                        alert("ziel erreicht");
                        let likes = document.getElementById('likes');
                        likes.innerText = parseInt(likes.innerText) + 1 + "";
                    //}
                }
            }

            xmlhttp.open("get", "../../php/endpoints/comment.php?action=like", true);
            xmlhttp.send();
        }
    }