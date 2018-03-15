<?php
$cnt=mysqli_connect("localhost","tukerty_smeta","ssByte64","tukerty_smeta");
if(!$cnt){
    die("errore");
}
$name=$_POST['name'];
$id=$_POST['id'];
$prio=$_POST['prio'];
$cost=$_POST['cost'];
$desc=$_POST['desc'];
$result1= mysqli_query($cnt,"UPDATE smeta SET prio='$prio' WHERE id='$id'");
$result2= mysqli_query($cnt,"UPDATE smeta SET cost='$cost' WHERE id='$id'");
$result3= mysqli_query($cnt,"UPDATE smeta SET name='$name' WHERE id='$id'");
$result2= mysqli_query($cnt,"UPDATE smeta SET descr='$desc' WHERE id='$id'");