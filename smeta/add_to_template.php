<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.2016
 * Time: 0:57
 */
$cnt=mysqli_connect("localhost","tukerty_smeta","ssByte64","tukerty_smeta");
if(!$cnt){
    die("errore");
}
$name=$_POST['name'];
$s=serialize($_POST['s']);
$vision=$_POST['vision'];
$result1= mysqli_query($cnt,"INSERT INTO template (name, positions, vision) VALUES ('$name','$s','$vision')");
