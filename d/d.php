<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914029 ดนยา อุดมคำ(ปูเป้)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 mb-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="m-0">ฟอร์มรับข้อมูล - ดนยา อุดมคำ (ปูเป้) Chatgpt</h3>
        </div>

        <div class="card-body">

        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">ชื่อ-สกุล</label>
                <input type="text" name="fullname" class="form-control" autofocus required>
            </div>

            <div class="mb-3">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" name="Phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ส่วนสูง</label>
                <input type="number" name="height" class="form-control" min="100" max="200" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ที่อยู่</label>
                <textarea name="address" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">วันเดือนปีเกิด</label>
                <input type="date" name="birthday" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">สีที่ชอบ</label>
                <input type="color" name="color" class="form-control form-control-color">
            </div>

            <div class="mb-3">
                <label class="form-label">สาขาวิชา</label>
                <select name="major" class="form-select">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="d-flex gap-2 mt-4">
                <button type="submit" name="Subimt" class="btn btn-success">สมัครสมาชิก</button>
                <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
                <button type="button" class="btn btn-info text-white" onclick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
                <button type="button" class="btn btn-warning" onMouseOver="alert('จ้า!');">Hello</button>
                <button type="button" class="btn btn-dark" onclick="window.print();">พิมพ์</button>
            </div>
        </form>

        </div>
    </div>

    <!-- ส่วนแสดงผล -->
    <div class="card shadow mt-4">
        <div class="card-header bg-success text-white">
            <h4 class="m-0">ผลลัพธ์จากการกรอกข้อมูล</h4>
        </div>
        <div class="card-body">
            <?php
            if(isset($_POST['Subimt'])){
                $fullname = $_POST['fullname'];
                $Phone = $_POST['Phone'];
                $height = $_POST['height'];
                $birthday = $_POST['birthday'];
                $address = $_POST['address'];
                $color = $_POST['color'];
                $major = $_POST['major'];

                echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
                echo "<p><strong>เบอร์โทร:</strong> $Phone</p>";
                echo "<p><strong>ส่วนสูง:</strong> $height ซม.</p>";
                echo "<p><strong>ที่อยู่:</strong> $address</p>";
                echo "<p><strong>วันเดือนปีเกิด:</strong> $birthday</p>";
                echo "<p><strong>สีที่ชอบ:</strong></p>";
                echo "<div style='background-color:$color; width:150px; height:40px;' class='border'></div><br>";
                echo "<p><strong>สาขาวิชา:</strong> $major</p>";
            }
            ?>
        </div>
    </div>

</div>

</body>
</html>
