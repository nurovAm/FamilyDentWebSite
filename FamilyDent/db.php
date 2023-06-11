<?php

$dbhost = "localhost";
$dbname = "familydent";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

if($db == false){
    echo "Ошибка";
}

function get_services_all(){
    global $db;
    $services = $db->query("SELECT * FROM services");
    return $services;
}

function get_personal_all(){
    global $db;
    $personal = $db->query("SELECT * FROM personal");
    return $personal;
}  

function get_news_all(){
    global $db;
    $news = $db->query("SELECT * FROM news");
    return $news;
}  

function get_specialization_by_id($id){
    global $db;
    $specialization = $db->query("SELECT * FROM specialization WHERE id=$id");
    foreach($specialization as $spec){
        return $spec;
    }      
}

function get_author_by_id($id){
    global $db;
    $authors = $db->query("SELECT * FROM personal WHERE id=$id");
    foreach($authors as $author){
        return $author;
    }
}

function send_to_db($name, $email, $telephone, $text){
    global $db;
    $sql = "INSERT INTO comments(name, email, telephone, text) values('$name', '$email', '$telephone', '$text')";
    $submit =  $db->exec($sql);
}

function get_comments_all(){
    global $db;
    $comments = $db->query("SELECT * FROM comments");
    return $comments;
}  

// ("INSERT INTO comments (name, email, telephone, text) values($name, $email, $telephone, $text))