<?php

echo 'Processing...';

//check for a POST variable
if(isset($_POST['name'])){
    echo 'Post: Your Name Is '. $_POST['name'];
    
}

//check for a GET variable
if(isset($_GET['name'])){
    echo 'GET: Your Name Is '. $_GET['name'];
    
}