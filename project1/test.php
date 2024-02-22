
<select name="" id="">
    <?php
    for($i=0;$i<100;$i++){
    ?>
    <option value=""><?=$i;?></option>
    <?php
    }
    ?>
</select>


<!--<select name="" id="">-->
<!--    --><?php
//    for($i=0;$i<100;$i++){
//        echo"<option value=''>$i</option>";
//    }
//    ?>
<!--</select>-->

<?php
$products = [
    ['name' => 'Sản phẩm 1', 'price' => 1000],
    ['name' => 'Sản phẩm 2', 'price' => 2000],
    ['name' => 'Sản phẩm 3', 'price' => 3000]
];
$productss = [
    ['name' => 'Sản phẩm 1', 'price' => 1000],
    ['name' => 'Sản phẩm 2', 'price' => 2000],
    ['name' => 'Sản phẩm 3', 'price' => 3000]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sản Phẩm</title>
</head>
<body>
<h1>Danh Sách Sản Phẩm</h1>
<table border="1">
    <tr>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= ($product['name']) ?></td>
            <td><?= ($product['price']) ?></td>
        </tr>
    <?php endforeach; ?>


    <?php foreach ($productss as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product['name']) ?></td>
            <td><?= htmlspecialchars($product['price']) ?> VND</td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

<?php
$age=40;
$name="400";

echo "Toi ten la " . $name;
echo "$age";
echo strlen("Trần Minh An");
echo strrev("Trần Minh An");
var_dump($age);//kiểm tra kiểu dữ liệu
// === kiểm tra bằng nhau và cùng dữ liệu ko
// == kiểu tra giá trị
if($age===$name){
    echo "Đúng";
}
else{
    echo"Sai";
}
?>
<?php
