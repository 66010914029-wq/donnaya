void main() {
  var x = 10;

  x += 5;   // x = x + 5 -> 15
  x -= 3;   // x = x - 3 -> 12
  x *= 2;   // x = x * 2 -> 24
  x ~/= 5;  // x = x ~/ 5 -> 4

  int? y;

  y ??= 99; // กำหนดค่าเมื่อ y เป็น null

  print(x); // 4
  print(y); // 99
}