<?php

require("./controller/controller.php");

require("model/model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script> <!--source: https://code.jquery.com/ !-->
    <title>Document</title>
</head>
    <body>
        <h1>Je suis un titre </h1>
        <p id="para_un"> ceci est le premier paragraphe</p>
        <form action="result.php" action="post">
            <div>
                <label for="author">Auteur</label><br/>
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br/>
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div id="divsubmit">
                <input type="submit" id="submitbutton"/>
            </div>
        </div>
    </body>


<script>

let author = document.getElementById("author");
let comment = document.getElementById("comment");
const submitbutton = document.getElementById("submitbutton");


if(author.value === "" || comment.value === ""){
    submitbutton.addEventListener("submit", function(e){
                        e.preventDefault();
                        console.log("on rentre");
                    });
                    newPara = document.createTextNode("Erreur tous les champs ne sont pas remplis !");
document.getElementById("divsubmit").appendChild(newPara);

}
</script>
</html>
