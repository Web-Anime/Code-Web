<?php
			include "config.php";
			
			if(isset($_POST["process"]))
			{
				$id = mysqli_escape_string($con,$_POST["id"]);
				$danhmuc = mysqli_escape_string($con,$_POST["danhmuc"]);
				$tenanime = mysqli_escape_string($con,$_POST["tenanime"]);
				$mota = mysqli_escape_string($con,$_POST["mota"]);
                                $luotxem = mysqli_escape_string($con,$_POST["luotxem"]);
				$anh = $_FILES['c_img']['name'];

				if($anh != null)
				{


				$path = "upload/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "insert into topanime(id,danhmuc,anh,tenanime,mota,luotxem) values('$id','$danhmuc','$anh','$tenanime','$mota','$luotxem')";
					mysqli_query($con,$sql);
					header('location:index.php?quanly=category');
				}
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Mã Anime</td>
				<td><input type="text" name="id" ></td>
			</tr>
                        <tr>
				<td>Danh mục anime</td>
				<td><input type="text" name="danhmuc" ></td>
			</tr>
			<tr>
				<td>Ảnh anime</td>
				<td><input type="file" name="c_img" ></td>
			</tr>
			<tr>
				<td>Tên anime</td>
				<td><input type="text" name="tenanime" ></td>
			</tr>
			<tr>
				<td>Mo tả</td>
				<td><input type="text" name="mota" ></td>
			</tr>
			<tr>
				<td>Lượt xem</td>
				<td><input type="text" name="luotxem" ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>