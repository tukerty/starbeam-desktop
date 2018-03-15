<?php
$cnt=mysqli_connect("localhost","tukerty_smeta","ssByte64","tukerty_smeta");
if(!$cnt){
    die("errore");
}
$name=$_POST['name'];
$id=$_POST['id'];
$prio=$_POST['prio'];
$result2= mysqli_query($cnt,"UPDATE categories SET cat_prio='$prio' WHERE cat_id='$id'");

$result3= mysqli_query($cnt,"UPDATE categories SET cat_name='$name' WHERE cat_id='$id'");