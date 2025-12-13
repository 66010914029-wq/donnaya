<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914029 ดนยา อุดมคำ(ปูเป้) - Bootstrap v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .color-display {
            display: inline-block;
            width: 50px; /* ลดขนาดให้ดูดีขึ้น */
            height: 20px;
            border: 1px solid #ccc;
            margin-right: 5px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4 text-primary">ฟอร์มรับข้อมูล-ดนยา อุดมคำ(ปูเป้) Gimini</h1>
        
        <div class="card p-4 shadow-lg">
            <form method="post" action="">
                
                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="Phone" required>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                    <div class="form-text">ต้องอยู่ระหว่าง 100 ถึง 200 ซม.</div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" id="address" name="address" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#000000">
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>
                
                <hr>

                <div class="d-grid gap-2 d-md-block mt-4">
                    <button type="submit" name="Subimt" class="btn btn-success me-2">สมัครสมาชิก</button> 
                    
                    <button type="reset" class="btn btn-secondary me-2">ยกเลิก</button>
                    
                    <button type="button" onClick="window.location='https://www.msu.ac.th/';" class="btn btn-info me-2">Go to MSU</button>
                    
                    <button type="button" onmouseover="alert('จ้า!');" class="btn btn-warning me-2">Hello</button>
                    
                    <button type="button" onClick="window.print();" class="btn btn-dark">พิมพ์</button>
                </div>

            </form>
        </div>
        
        <hr class="my-5">

        <?php
        // ตรวจสอบว่ามีการส่งฟอร์มหรือไม่
        if(isset($_POST['Subimt'])){
            // รับค่าจากฟอร์ม
            $fullname = $_POST['fullname'];
            $Phone = $_POST['Phone'];
            $height = $_POST['height'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $color = $_POST['color'];
            $major = $_POST['major'];
            
            // แสดงผลลัพธ์
            echo '<div class="card p-4 shadow-sm bg-light">';
            echo '<h3 class="mb-3 text-success">✅ ข้อมูลที่ถูกส่ง:</h3>';
            
            echo '<p><strong>ชื่อ-สกุล:</strong> ' . htmlspecialchars($fullname) . '</p>';
            echo '<p><strong>เบอร์โทร:</strong> ' . htmlspecialchars($Phone) . '</p>';
            echo '<p><strong>ส่วนสูง:</strong> ' . htmlspecialchars($height) . ' ซม.</p>';
            echo '<p><strong>ที่อยูู่:</strong> ' . nl2br(htmlspecialchars($address)) . '</p>';
            echo '<p><strong>วันเดือนปีเกิด:</strong> ' . htmlspecialchars($birthday) . '</p>';
            
            // แสดงสีที่ชอบพร้อมกล่องสีและโค้ดสี
            echo '<p><strong>สีที่ชอบ:</strong> 
                    <span class="color-display" style="background-color:' . htmlspecialchars($color) . ';"></span>
                    ' . htmlspecialchars($color) . '</p>';
                    
            echo '<p><strong>สาขาวิชา:</strong> ' . htmlspecialchars($major) . '</p>';
            echo '</div>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>