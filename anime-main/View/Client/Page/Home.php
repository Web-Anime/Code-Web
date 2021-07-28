<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Anime | Trang Chủ</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>
<style>
.columncard { 
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}
.cardcard {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.containercard {
  padding: 0 16px;
}
.containercard::after, .rowcard::after {
  content: "";
  clear: both;
  display: table;
}
.titlecard {
  color: grey;
}
.buttoncard {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.buttoncard:hover {
  background-color: #555;
}
.container {
  position: relative;
  font-family: Arial;
}
.containerso {
  position: relative;
  font-family: Arial;
}
.text-block {
  position: absolute;
  top: 5px;
  left: 5px;
  background-color: red;
  padding-left: 5px;
  padding-right: 5px;
}
.columncardblog {
  float: left;
  width: 33.33%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.cardcardblog {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
#slideshow {
  overflow: hidden;
  height: 700px;
  width: 1200px;
  margin: 0 auto;
}
.slide-wrapper {
  width: 4800px;
  -webkit-animation: slide 25s ease infinite;
}
.slide {
  float: left;
  height: 400px;
  width: 1200px;
}
@-webkit-keyframes slide {
  10% {margin-left: 0px;}
  20% {margin-left: -1200px;}
  30% {margin-left: -1200px;}
  40% {margin-left: -2400px;}
  50% {margin-left: -2400px;}
}
.tittle h2 {
    color: white;
    font-size: 42px;
    font-family: "Oswald", sans-serif;
    font-weight: 1700px;
    line-height: 52px;
    margin-top: 35px;
    margin-bottom: 8px;
    position: relative;
    top: -160px;  
}
.tittle p{
    color: #ffffff;
    font-size: 16px;
    margin-bottom: 40px;
    position: relative;
    top: -150px;
}
.col-lg-3 h2 {
    color: #ffffff;
}
.col-lg-6 h2 {
    color: #ffffff;
    text-align: center;
}
.footer-col{
    float: left;
    margin-left: 20px;
    padding-left: 135px;
    height: 123px;
}
.widget-title .title {
    float: left;
    margin-left: 80px;
    color:white;
    font-size: 13px;
    font-weight: bold;
    position: relative;
    margin-top: 100px;
    padding: 10px 20px;
    text-transform: uppercase;
    border: 1px solid #1B1B1B;
    border-radius: 7px;
}
.btn {
            background-color: #000080;
            color: white;
            padding: 5px;
            border: none;
            width: 100%;
            cursor: pointer;
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .btn:hover {
            background-color: yellow;
            color:black;
        }
/*------------------------------------------*/
.dropbtn {
  background-color: #000080;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
}
.dropdownbtn {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-bottom-left-radius:10px;
  border-bottom-right-radius:10px;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color:#000080;color:yellow;border-bottom-left-radius:10px;border-bottom-right-radius:10px;}
.dropdownbtn:hover .dropdown-content {display: block;}
/* ---------------------------------SEARCH----------------------- */
</style>

<body>

    <?php include 'View/Client/Layout/Header.php'; ?>
    <?php include 'View/Client/Layout/Content.php'; ?>
    <?php include 'View/Client/Layout/Footer.php'; ?>
    
    <?php include 'View/Client/Layout/Script.php'; ?>


</body>

</html>