<?php
$cnt=mysqli_connect("localhost","tukerty_smeta","ssByte64","tukerty_smeta");
if(!$cnt){
    die("errore");
}
$cat=$_POST['cat'];
$name=$_POST['name'];
$desc=$_POST['desc'];
$cost=$_POST['cost'];
$result1= mysqli_query($cnt,"INSERT INTO smeta (name, descr, cost, category) VALUES ('$name', '$desc', '$cost', '$cat')");
$result= mysqli_query($cnt,"SELECT * FROM smeta WHERE name='$name'");
$row=mysqli_fetch_array($result);
$result2= mysqli_query($cnt,"UPDATE smeta SET prio='$row[id]' WHERE id='$row[id]'");
echo '<div class="good_suc">Позиция успешно добавлена в смету. <br><a href="add_to_smeta.html">Вернуться к странице добавления позиций</a> </div>';