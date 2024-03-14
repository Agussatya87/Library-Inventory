<!-- Tabel Data Buku -->
<div class="tabel-page">
	<div class="tabel-heading">
		Data Buku		
	</div>
	<div class="button-container">
		<button class="button-input" id="myBtn" style="cursor: pointer" onclick="show_modal(0)">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
		</button>
	</div>

	<table id="list-data" class="display">	
		<thead>
			<tr>
				<th><h5>ID Buku</h5></th>
				<th><h5>Judul Buku</h5></th>
				<th><h5>Penulis</h5></th>
				<th><h5>Penerbit</h5></th>		
				<th><h5>Tahun terbit</h5></th>		
				<th><h5>ISBN</h5></th>		
				<th><h5>Cover</h5></th>	
				<th><h5>Update</h5></th>	
				<th><h5>Delete</h5></th>	
			</tr>
		</thead>
		<!-- mengambil data buku -->
		<?php
			include "db_connection.php";

			$sql = "SELECT * FROM buku";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				$i = 1;
		    	while($row = mysqli_fetch_assoc($result)) {		    	
		?>
				<!-- Menampilkan Data Buku -->
		        <tr>
		        	<td><?php echo $row["book_id"];?></td>
		        	<td><?php echo $row["Judul_buku"];?></td>
		        	<td><?php echo $row["Penulis"];?></td>
		        	<td><?php echo $row["penerbit"];?></td>
		        	<td><?php echo $row["Tahun_terbit"];?></td>
		        	<td><?php echo $row["ISBN"];?></td>
		        	<td><?php echo '<img src="data:gambar;base64,'.base64_encode($row["gambar"]).'" alt="gambar" style="width:100px; height:100px;">';?></td>
		        	<td>		        		
		        		<button class="button-edit" id="buttonEdit" onclick="show_modal(<?php echo $i?>)" style="cursor: pointer">
							<i class="fa fa-pencil" aria-hidden="true"></i>
		        			Update
						</button>		        								
		        	</td>
		        	<td>
		        		<a href='javascript:hapusData("<?php echo $row['book_id']?>", 1)'>		        			
		        			<button class="button-delete" style="cursor: pointer">
								<i class="fa fa-trash" aria-hidden="true"></i> Delete
							</button>
		        		</a>
		        	</td>		        	
		        </tr>

		        <!-- Modal Update Data -->
				<div id="myModal<?php echo $i?>" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
					    <div class="modal-header">
					      <span class="close" id="close<?php echo $i?>">&times;</span>
					      <h2>Update Data Buku</h2>
					      <hr>
					    </div>
					    <div class="modal-body">
					    	<form name="input" method="post" action="book/book_update.php">
						      	<input type="hidden" name="old_book_id" value="<?php echo $row['book_id']?>">
								<label for="fid">ID Buku</label>
								<input type="text" id="fid" name="book_id" value="<?php echo $row['book_id']?>" maxlength="5" required>
								<label for="fjudul">Judul Buku</label>
								<input type="text" id="fjudul" name="Judul_buku" value="<?php echo $row['Judul_buku']?>" required>
								<label for="fpenulis">Penulis</label>
								<input type="text" id="fpenulis" name="Penulis" value="<?php echo $row['Penulis']?>" required>
								<label for="fpenerbit">Penerbit</label>
								<input type="text" id="fpenerbit" name="penerbit" value="<?php echo $row['penerbit']?>" required>
								<label for="ftahun">Tahun terbit</label>
								<input type="text" id="ftahun" name="Tahun_terbit" value="<?php echo $row['Tahun_terbit']?>" required>
								<label for="fisbn">ISBN</label>
								<input type="text" id="fisbn" name="ISBN" value="<?php echo $row['ISBN']?>" required>
								<label for="fgambar">Cover</label>
								<input type="file" id="fgambar" name="gambar" value="<?php echo $row['gambar']?>" required>
								<input type="submit" value="Update">
							</form>
					    </div>    
					</div>
				</div>
		<?php			
				$i++;
		    	}
			} 
			else {
		    		echo "0 results";
			}
			mysqli_close($conn);
		?>
	</table>
</div>

<!-- Input Data -->
<div id="myModal0" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close0">&times;</span>
      <h2>Tambah Data Buku</h2>
      <hr>
    </div>
    <div class="modal-body">
      <form name="input" method="post" action="book/book_input.php" enctype="multipart/from-data">
		<label for="fid">ID Buku</label>
		<input type="text" id="fid" name="book_id" placeholder="ID Buku" maxlength="5" required>
		<label for="fjudul">Judul Buku</label>
		<input type="text" id="fjudul" name="Judul_buku" placeholder="Judul Buku" required>
		<label for="fpenulis">Penulis</label>
		<input type="text" id="fpenulis" name="Penulis" placeholder="Penulis" required>
		<label for="fpenerbit">Penerbit</label>
		<input type="text" id="fpenerbit" name="penerbit" placeholder="Penerbit" required>
		<label for="ftahun">Tahun Terbit</label>
		<input type="text" id="ftahun" name="Tahun_terbit" placeholder="ex. 2001" required>
		<label for="fisbn">ISBN</label>
		<input type="text" id="fisbn" name="ISBN" placeholder="ISBN" required>
		<label for="fgambar">Cover</label>
		<input type="file" id="fgambar" name="gambar" required>
		<br>
		<input type="submit">
	</form>
    </div>    
  </div>
</div>