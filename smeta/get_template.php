<?php
$cnt=mysqli_connect("localhost","tukerty_smeta","ssByte64","tukerty_smeta");
if(!$cnt){
    die("errore");
}
$id=$_POST['id'];
$result= mysqli_query($cnt,"SELECT * FROM template WHERE id='$id'");
$row=mysqli_fetch_array($result);
$s=unserialize($row['positions']);
echo json_encode($s);
