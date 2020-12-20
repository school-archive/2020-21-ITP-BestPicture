    'use strict';
    document.addEventListener("DOMContentLoaded", init);

    function init() {
        document.getElementById('heart').addEventListener('click', like);
        document.getElementById('submit').addEventListener('click', postComment);
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

        xmlhttp.open("get", (plus) ? `../php/endpoints/like.php?action=like&picture=${id}` : `../php/endpoints/like.php?action=minus&picture=${id}`, true);
        xmlhttp.send();
    }

    function postComment() {
        let comment = document.getElementById('text').value;
        let id = window.location.search.split("=")[1]
        if(comment!=='') {
            let xmlhttp = new XMLHttpRequest();

            xmlhttp.addEventListener("load", function () {
                console.log(this.responseText)
                document.getElementById('text').value = '';
                let name = this.responseText;
                let child = document.createTextNode(`<div><div>${name}</div><div>${comment}</div></div>`);
                document.getElementById('myBox').appendChild(child);
            });

            xmlhttp.open("get", `../php/endpoints/post_comment.php?photoid=${id}&comment=${comment}`, true);
            xmlhttp.send();
        }
    }