<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ดนยา อุดมคำ</title>
</head>

<body>
    <h1> ระบบจัดการข้อมูลจังหวัด -- ดนยา อุดมคำ (ปูเป้) </h1>

    <form method="post" enctype="multipart/form-data">
        ชื่อจังหวัด: <input type="text" name="pname" autofocus required>
        รูปภาพ: <input type="file" name="pimage" required>
        ภาค: 
        <select name="rid" required>
            <option value="">-- เลือกภาค --</option>
            <?php
            include 'connectdb.php';
            $sql3 = "SELECT * FROM regions";
            $rs3 = mysqli_query($conn, $sql3);
            while ($data3 = mysqli_fetch_array($rs3)) {
                // แก้ไข PHP tag ที่ซ้อนกันในโค้ดเดิมเรียบร้อยครับ
            ?>
                <option value="<?php echo $data3['r_id'] ?>"><?php echo $data3['r_name'] ?></option>
            <?php
            }
            ?>
        </select>
        <button type="submit" name="Submit">บันทึกข้อมูล</button>
    </form> <br><br>

    <?php
    // ส่วนประมวลผลการ INSERT
    if (isset($_POST['Submit'])) {
        $pname = $_POST['pname'];
        $rid = $_POST['rid'];
        
        // จัดการเรื่องไฟล์ภาพ
        $pimage = $_FILES['pimage']['name'];
        $ext = pathinfo($pimage, PATHINFO_EXTENSION);
        
        // INSERT ข้อมูลลง Database
        $sql2 = "INSERT INTO provinces (p_id, p_name, p_ext, r_id) VALUES (NULL, '$pname', '$ext', '$rid')";
        
        if (mysqli_query($conn, $sql2)) {
            $pid = mysqli_insert_id($conn); // ดึง ID ล่าสุดมาตั้งชื่อไฟล์
            move_uploaded_file($_FILES['pimage']['tmp_name'], "img/".$pid.".".$ext);
            echo "<script>alert('เพิ่มข้อมูลสำเร็จ'); window.location='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>

    <table border="1" width="80%">
        <tr bgcolor="#f2f2f2">
            <th>ID</th>
            <th>ชื่อจังหวัด</th>
            <th>ภาค</th>
            <th>รูปภาพ</th>
            <th>เครื่องมือ</th>   
        </tr>

    <?php
    $sql = "SELECT * FROM provinces INNER JOIN regions ON provinces.r_id = regions.r_id ORDER BY provinces.p_id DESC";
    $rs = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($rs)) {
    ?>
        <tr>
            <td align="center"><?php echo $data['p_id'] ?></td>
            <td><?php echo $data['p_name'] ?></td>
            <td><?php echo $data['r_name'] ?></td>
            <td align="center">
                <img src="img/<?php echo $data['p_id'] ?>.<?php echo $data['p_ext'] ?>" width="100">
            </td>
            <td align="center">
                <a href="delete_province.php?id=<?php echo $data['p_id'] ?>&ext=<?php echo $data['p_ext'] ?>" 
                   onclick="return confirm('สรอัฐ ยืนยันที่จะลบข้อมูลนี้ใช่หรือไม่?')">
                   ลบข้อมูล
                </a>
            </td>
        </tr>
    <?php
    }
    mysqli_close($conn);
    ?>
    </table>

</body>
</html>