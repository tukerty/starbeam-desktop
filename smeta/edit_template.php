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
$id=$_POST['id'];
$s=serialize($_POST['s']);
$result= mysqli_query($cnt,"UPDATE template SET positions='$s' WHERE id='$id'");