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
$result1= mysqli_query($cnt,"INSERT INTO categories (cat_name) VALUES ('$name')");
$result= mysqli_query($cnt,"SELECT * FROM categories WHERE cat_name='$name'");
$row=mysqli_fetch_array($result);
$result2= mysqli_query($cnt,"UPDATE categories SET cat_prio='$row[cat_id]' WHERE cat_id='$row[cat_id]'");
echo '<div class="good_suc">Категория успешно добавлена в смету. <br><a href="add_to_smeta.html">Вернуться к странице добавления позиций</a> </div>';