<?php 
if(isset($_POST['create']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "INSERT INTO categories(priority, name) VALUES($priority, '$name')";
    echo $qry;
}