<?php
// ############################################
// ส่วนของโปรแกรม PHP สำหรับแสดงผลข้อมูล
// ############################################

// 1. ตรวจสอบว่ามีการส่งฟอร์มโดยใช้ปุ่ม "Submit" หรือไม่
if(isset($_POST['Submit'])){
    
    // 2. ดึงข้อมูลพื้นฐานจาก $_POST
    $position = $_POST['position'];
    $prefix = $_POST['prefix'];
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $education = $_POST['education'];
    // ข้อมูลประสบการณ์ทำงาน (ใช้ nl2br เพื่อให้รักษารูปแบบการขึ้นบรรทัดใหม่)
    $experience = $_POST['experience']; 
    
    // 3. ดึงข้อมูลความสามารถพิเศษ (เป็น Array และจัดการในกรณีที่ผู้ใช้ไม่ได้เลือก)
    $skills = isset($_POST['skills']) ? $_POST['skills'] : ['- ไม่ได้ระบุ -'];
    // แปลง Array ของ skills ให้เป็น String ที่คั่นด้วยลูกน้ำ
    $skills_str = implode(', ', $skills);
    
    // 4. เริ่มการแสดงผลลัพธ์โดยใช้ Bootstrap Alert
    echo '<div class="alert alert-primary mt-5 fade show shadow" role="alert">';
    echo '<h4 class="alert-heading fw-bold">🎉 การสมัครเสร็จสมบูรณ์!</h4>';
    echo '<p>คุณได้สมัครในตำแหน่ง <span class="text-danger">' . htmlspecialchars($position) . '</span> เรียบร้อยแล้ว</p>';
    echo '<hr>';
    
    echo '<h5 class="text-secondary">สรุปข้อมูลการสมัคร:</h5>';
    echo '<ul class="list-group list-group-flush">';
    
    // แสดงผลแต่ละรายการ (ใช้ htmlspecialchars() เพื่อป้องกันปัญหาด้านความปลอดภัย)
    echo '<li class="list-group-item"><strong>🧑 ชื่อ-สกุล:</strong> ' . htmlspecialchars($prefix) . ' ' . htmlspecialchars($fullname) . '</li>';
    echo '<li class="list-group-item"><strong>🎂 วันเกิด:</strong> ' . htmlspecialchars($birthday) . '</li>';
    echo '<li class="list-group-item"><strong>🎓 ระดับการศึกษา:</strong> ' . htmlspecialchars($education) . '</li>';
    echo '<li class="list-group-item"><strong>💡 ความสามารถพิเศษ:</strong> <span class="badge bg-info text-dark">' . htmlspecialchars($skills_str) . '</span></li>';
    // ประสบการณ์ทำงานแสดงในกล่อง <pre> เพื่อรักษารูปแบบ
    echo '<li class="list-group-item"><strong>⏳ ประสบการณ์:</strong> <pre class="bg-white p-2 border rounded mt-2">' . nl2br(htmlspecialchars($experience)) . '</pre></li>';
    echo '</ul>';
    
    echo '</div>';
}
?>