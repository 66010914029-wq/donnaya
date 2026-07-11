void main() {
  Object value = 'สวัสดี';

  print(value is String); // true -> เป็น String หรือไม่
  print(value is! int);   // true -> "ไม่ได้" เป็น int ใช่ไหม

  // as ใช้แปลงชนิด (type cast)
  String text = value as String;

  print(text.length);
}