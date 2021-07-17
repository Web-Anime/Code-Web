
// Thiết lập thời gian đích mà ta sẽ đếm
var countDownDate_1 = new Date("January 30, 2021 15:37:25").getTime();
var countDownDate_2 = new Date("February 14, 2021 15:37:25").getTime();
var countDownDate_3 = new Date("October 25 , 2021 0:0:0").getTime();
// cập nhập thời gian sau mỗi 1 giây
var x = setInterval(function () {

    // Lấy thời gian hiện tại
    var now = new Date().getTime();

    // Lấy số thời gian chênh lệch
    var distance = countDownDate_1 - now;

    // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // HIển thị chuỗi thời gian trong thẻ p
    document.getElementById("Day").innerHTML = days+" Ngày";
    document.getElementById("Hour").innerHTML = hours+" Giờ";
    document.getElementById("Minutes").innerHTML = minutes+" Phút";
    document.getElementById("Seconds").innerHTML = seconds+" Giây";

    // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
  
}, 1000);
var x = setInterval(function () {

    // Lấy thời gian hiện tại
    var now = new Date().getTime();

    // Lấy số thời gian chênh lệch
    var distance = countDownDate_2 - now;

    // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // HIển thị chuỗi thời gian trong thẻ p
    document.getElementById("Day-2").innerHTML = days+" Ngày";
    document.getElementById("Hour-2").innerHTML = hours+" Giờ";
    document.getElementById("Minutes-2").innerHTML = minutes+" Phút";
    document.getElementById("Seconds-2").innerHTML = seconds+" Giây";

    // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
  
}, 1000);
var x = setInterval(function () {

    // Lấy thời gian hiện tại
    var now = new Date().getTime();

    // Lấy số thời gian chênh lệch
    var distance = countDownDate_3 - now;

    // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // HIển thị chuỗi thời gian trong thẻ p
    document.getElementById("Day-3").innerHTML = days+" Ngày";
    document.getElementById("Hour-3").innerHTML = hours+" Giờ";
    document.getElementById("Minutes-3").innerHTML = minutes+" Phút";
    document.getElementById("Seconds-3").innerHTML = seconds+" Giây";

    // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
  
}, 1000);

