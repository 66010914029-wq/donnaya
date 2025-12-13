<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ใบสมัครงาน - Innovatech Solutions Co., Ltd. ✨</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ใช้ Font ที่ดูเป็นทางการและทันสมัย */
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f0f4f8; /* Soft light blue/gray background */
            padding-top: 20px;
            padding-bottom: 20px;
        }
        /* ปรับปรุง Card หลักให้ดู Premium */
        .form-card {
            border: none;
            border-radius: 15px; /* มุมโค้งมนที่ดูดี */
            border-top: 8px solid #007bff; /* Primary color thicker bar */
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2); /* Stronger shadow */
            transition: all 0.3s ease-in-out;
        }
        .form-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); /* Shadow on hover */
        }
        .section-heading {
            border-bottom: 3px solid #007bff; /* สีน้ำเงินเข้ม */
            padding-bottom: 8px;
            margin-top: 25px;
            color: #343a40; /* Dark text */
            font-weight: 700; /* Bolder font */
            font-size: 1.5rem;
        }
        /* สไตล์ปุ่มยืนยันที่ดูพรีเมียม */
        .btn-submit {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn-submit:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px); /* เอฟเฟกต์ยกขึ้นเล็กน้อย */
        }
    </style>
</head>

<body>
    <div class="container my-5">
        
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bolder text-dark">🚀 Innovatech Solutions Co., Ltd.</h1>
            <p class="lead text-secondary">ร่วมสร้างอนาคตกับเรา! (Job Application Form)</p>
        </header>

        <div class="card form-card p-4 p-md-5 bg-white">
            <form method="post" action="f.php">
                
                <h4 class="section-heading mb-4">💼 ตำแหน่งงานที่ต้องการสมัคร</h4>
                <div class="mb-4">
                    <label for="position" class="form-label fw-semibold">เลือกตำแหน่งงาน <span class="text-danger">*</span></label>
                    <select class="form-select form-select-lg" id="position" name="position" required>
                        <option value="" disabled selected>-- กรุณาเลือกตำแหน่งงานที่สนใจ --</option>
                        <option value="Software Developer">Software Developer (Junior/Senior)</option>
                        <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                        <option value="UI/UX Designer">UI/UX Designer</option>
                        <option value="Sales Manager">Sales Manager</option>
                        <option value="HR Recruiter">HR Recruiter</option>
                    </select>
                </div>

                <h4 class="section-heading mb-4">🧑 ข้อมูลส่วนบุคคล</h4>

                <div class="row mb-3 g-3">
                    <div class="col-md-3">
                        <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select class="form-select" id="prefix" name="prefix" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว" selected>นางสาว</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required placeholder="ชื่อและนามสกุล">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                </div>
                
                <h4 class="section-heading mb-4">🎓 ข้อมูลการศึกษาและความสามารถ</h4>

                <div class="mb-3">
                    <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" disabled selected>-- เลือกการศึกษาสูงสุดที่สำเร็จ --</option>
                        <option value="มัธยมปลาย/ปวช.">มัธยมปลาย/ปวช.</option>
                        <option value="ปวส./อนุปริญญา">ปวส./อนุปริญญา</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                    </select>
                </div>

                <div class="mb-4 p-3 border rounded bg-light">
                    <label class="form-label fw-semibold text-primary">💡 ความสามารถพิเศษ</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ภาษาต่างประเทศ" id="skill_lang" name="skills[]">
                        <label class="form-check-label" for="skill_lang">ภาษาต่างประเทศ (เช่น อังกฤษ/จีน)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Coding/Programming" id="skill_code" name="skills[]">
                        <label class="form-check-label" for="skill_code">Coding/Programming (เช่น Python, JavaScript)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Graphic Design" id="skill_design" name="skills[]">
                        <label class="form-check-label" for="skill_design">Graphic Design / Video Editing</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ขับรถยนต์/มีใบขับขี่" id="skill_drive" name="skills[]">
                        <label class="form-check-label" for="skill_drive">ขับรถยนต์/มีใบขับขี่</label>
                    </div>
                    <small class="form-text text-muted">เลือกได้มากกว่า 1 ข้อ</small>
                </div>

                <h4 class="section-heading mb-4">⏳ ประสบการณ์ทำงาน</h4>

                <div class="mb-4">
                    <label for="experience" class="form-label">สรุปประสบการณ์ทำงานที่เกี่ยวข้อง</label>
                    <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="ระบุชื่อบริษัท ตำแหน่ง ระยะเวลา และสรุปหน้าที่รับผิดชอบสั้น ๆ (อย่างน้อย 1-2 บรรทัด) หากไม่มีประสบการณ์ให้ระบุ 'นักศึกษาจบใหม่'"></textarea>
                </div>

                <hr class="my-4">
                <div class="d-grid gap-3">
                    <button type="submit" name="Submit" class="btn btn-lg btn-submit">✅ ยืนยันการสมัคร</button>
                    <button type="reset" class="btn btn-lg btn-outline-dark">🗑️ ล้างข้อมูลในฟอร์ม</button>
                </div>

            </form>
        </div>
        
        <?php
        if(isset($_POST['Submit'])){
            // ดึงข้อมูลพื้นฐาน
            $position = $_POST['position'];
            $prefix = $_POST['prefix'];
            $fullname = $_POST['fullname'];
            $birthday = $_POST['birthday'];
            $education = $_POST['education'];
            $experience = $_POST['experience'];
            
            // ดึงข้อมูลความสามารถพิเศษ (เป็น Array)
            $skills = isset($_POST['skills']) ? $_POST['skills'] : ['- ไม่ได้ระบุ -'];
            $skills_str = implode(', ', $skills);
            
            echo '<div class="alert alert-primary mt-5 fade show shadow" role="alert">';
            echo '<h4 class="alert-heading fw-bold">🎉 การสมัครเสร็จสมบูรณ์!</h4>';
            echo '<p>คุณได้สมัครในตำแหน่ง <span class="text-danger">' . htmlspecialchars($position) . '</span> เรียบร้อยแล้ว</p>';
            echo '<hr>';
            
            echo '<h5 class="text-secondary">สรุปข้อมูลการสมัคร:</h5>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"><strong>🧑 ชื่อ-สกุล:</strong> ' . htmlspecialchars($prefix) . ' ' . htmlspecialchars($fullname) . '</li>';
            echo '<li class="list-group-item"><strong>🎂 วันเกิด:</strong> ' . htmlspecialchars($birthday) . '</li>';
            echo '<li class="list-group-item"><strong>🎓 ระดับการศึกษา:</strong> ' . htmlspecialchars($education) . '</li>';
            echo '<li class="list-group-item"><strong>💡 ความสามารถพิเศษ:</strong> <span class="badge bg-info text-dark">' . htmlspecialchars($skills_str) . '</span></li>';
            echo '<li class="list-group-item"><strong>⏳ ประสบการณ์:</strong> <pre class="bg-white p-2 border rounded mt-2">' . nl2br(htmlspecialchars($experience)) . '</pre></li>';
            echo '</ul>';
            
            echo '</div>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>