<?php
		include "config.php";
	 	$sql = "select * from topanime ";
	 	$result = mysqli_query($con,$sql);

?>

                <div class="infor">

		<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th>ID</th>
                                                <th>Danh Muc</th>
                                                <th>Ảnh</th>
                                                <th>Tên Anime</th>
                                                <th>Mô Tả</th>
                                                <th>Lượt Xem</th>
						<th width="100px;"><a href="index.php?quanly=add">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
				<tr>
					<td><?php echo $row['id']; ?> </td>
					<td><?php echo $row['danhmuc']; ?></td>
					<td><img src="upload/<?php echo $row['anh']; ?>" style="max-width: 100px;"</td>
					<td><?php echo $row['tenanime']; ?></td>
					<td><?php echo $row['mota']; ?></td>
					<td><?php echo $row['luotxem']; ?></td>
					<td><a href="index.php?quanly=edit&id=<?php echo $row['id']; ?>">Sửa</a>
                                            <a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=delete&id=<?php echo $row['id']; ?>">Xóa</a>
					</td>
				</tr>
			 <?php } ?>
					
				</table>
		  </div>