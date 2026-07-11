import 'dart:io';

void main() {
  print('กรุณาพิมพ์ชื่อของคุณ :');
  var name = stdin.readLineSync(); // รับข้อมูลค่าเป็น String

  print('กรุณาพิมพ์อายุ :');
  var age = int.parse(stdin.readLineSync()!); // แปลงเป็นจำนวนเต็ม

  print('สวัสดีคุณ $name อายุ $age ปี');
}