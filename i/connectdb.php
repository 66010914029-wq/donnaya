<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดนยา อุดมคำ(ปูเป้)</title>
</head>
<body>
    <h1>ดนยา อุดมคำ(ปูเป้)</h1>
    ชื่อภาค<input type= "text" name="rname" autofocus required>
    <button type="submt" name="Submt">บันทึก</button>
    </form> <br> <br>


<?php
if(isst($_POST['Submit'])){
    include_once("file:///E|/งานการเขียนโปรแกรม/e/connectdb.php");
    $rname = $_POST['rname'];
    $sql2 = "INSERT INTO 'regions'('r_id','r_name')VALUES(NULL,'{$rname}')";
    mysqli_qery($conn,$sql2) or die ("เพิ่มข้อมูลไม่ได้");

}
?>

<table border="1">
    <tr>
        <th>รหัสภาค</th>
        <th>ชื่อภาค</th>
        <th>ลบ</th>

    </tr>
<?php
include_once("file:///E|/งานการเขียนโปรแกรม/e/connectdb.php");
$sql = "SELECT * FROM regions ";
$rs = mysqli_query($conn,$sql);

while($data = mysqli_fetch_array($rs)){
?>
    <tr>
        <td><?php echo $data['r_id'];?></td>
        <td><?php echo $data['r_name'];?></td>
        <td width="80" align="ceter"> <img src="images/delete.jpg" width="20"></td>

    </tr>
<?php } ?>
</table> 

</body>
</html>
