import 'dart:io';

void main() {
  print('กรุณาพิมพ์ชื่อของคุณ:');
  String? name = stdin.readLineSync();

  print('กรุณาพิมพ์อายุ:');
  int age = int.parse(stdin.readLineSync()!);

  print('สวัสดีคุณ $name อายุ $age ปี');
}