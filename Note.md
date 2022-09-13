khai báo hằng : 
define("Name:hang, value, true/flase")
string : search how to method string 
- hàm sort sắp xếp theo thứ tự chữ cái, số thứ tự tăng dần
- ngược lại hàm rsort sắp xếp theo thứ tự giảm dần
- header('location: file_chuyen.php') chuyển trang php
- Biến toàn cầu: Globals: là biến để truy cập tất cả các biến toàn cầu
- Có 3 biến toàn cầu GLOBAL ,_$POST , _GET 
- _$POST , _GET dùng để lấy dữ liệu của form 
- php -S localhost:8000
- tìm hiểu const với define khác nhau cái gì 
- php làm được những gì , tại sao lại là php , 
ex sắp xếp mảng
- Gộp file : sử dụng require để gộp file require gọi từ cha require "name.php"
- require_once : Gộp file chỉ chạy một lần nếu sẽ không lặp lại như require
-  include_one , include : Giống như require nhưng khác nhau ở chỗ ví dụ 
    gộp file con mà file đó bị lỗi thì hàm # require sẽ dừng mà k hiển thị file còn include sẽ chạy mà thong báo lỗi

< -------------         LAY DU LIEU FORM   ------------------ >
- btvn : Viết Phương trinh bac 2 va in ra các ngiêm cua nó
- preg_match: dùng để kiểm tra so sánh kết quả của 1 chuỗi có nằm trong giá trị của biêủ thức chính quy hay kg
- isset : kiểm tra giá trị của biến đó có tồn tại hay không 

< ----------------------- File PHP -------------------------- >
- $fget("name file") doc 1 dong
- Hàm feof() kiểm tra xem con trỏ tập tin đã ở vị trí cuối cùng của file chưa.


- < ----------------------- File Image Upload PHP -------------------------- >


- form action="form.php" method="post" enctype="multipart/form-data"
- file_exists() hàm kiểm tra file đã tồn tại chưa 

< ----------------------- Cookie PHP -------------------------- >

- Cookie là dữ liệu được lưu trữ phía Client
- kn : đc sử dụng luu trữ tùy chọn của trang web cho từng user  
- $name: là tên của Cookie
-  $value: giá trị của Cookie
 - $expire: thời gian sống của Cookie
-  $path : đường dẫn lưu trữ Cookie
-  $domain: tên của domain

< ----------------------- Session PHP -------------------------- >
- Lưu trữ thông tin người dùng phía server
- khi làm việc với session thì phải gọi hàm session_start() đầu tiên 
- xóa Session : dùng hàm unset($_SESSION[name])
- xóa tất cả Session : session_destroy();

< ----------------------- Lọc Chuỗi, số nguyên PHP -------------------------- >
- Kiểm tra chuỗi đó có hợp lêj hay không : Dùng hàm filter
- 
< ----------------------- MySQL PHP -------------------------- >
