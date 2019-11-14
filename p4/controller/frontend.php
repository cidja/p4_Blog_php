<?php
//Class Load
require_once("PostManager.php");

function listPosts()
{
    $postManager = new PostManager(); //Create object
    $posts = $postManager->getPosts(); //call function to PostManager

    require("receptionView.php");
}