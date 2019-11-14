<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "sudo", "boby06");
        return $db;
    }
}