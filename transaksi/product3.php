<?php
session_start();
include '../koneksi.php';
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $id = $_POST['id'];
	$idserver = $_POST['id_server'];
	$namaitem = $_POST['nama_item'];
	$harga = $_POST['harga'];
	$pembayaran = $_POST['pembayaran'];
	$nomorhp = $_POST['no_hp'];
	$alamatemail = $_POST['alamat_email'];

$query = mysqli_query($conn, "INSERT INTO transaksi (username, id, id_server, nama_item, harga, pembayaran, no_hp, alamat_email) values ('$username', '$id', '$idserver', '$namaitem', '$harga', '$pembayaran', '$nomorhp', '$alamatemail')");

if($query) {
			echo '<script>alert("Pesanan-mu berhasil terkirim, Terimakasih sudah berlangganan di Fresieshop.");
			location.href="../index.php"</script>';
	  	}else {
			echo '<script>alert("Pesanan-mu gagal.")</script>';
	  	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Top Up Mobile Legends | Fresieshop</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: "Open Sans", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px 0;
}
.contact-form h1 {
    text-transform: uppercase;
    margin: 0 0 15px;
}
.contact-form .form-control, .contact-form .btn  {
    min-height: 38px;
    border-radius: 2px;
}
.contact-form .btn-primary {
    min-width: 150px;
    background: #299be4;
    border: none;
}
.contact-form .btn-primary:hover {
    background: #1c8cd7; 
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.hint-text {
    font-size: 15px;
    padding-bottom: 15px;
    opacity: 0.8;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
<div class="container-xl">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Fresieshop</h1>
				<p class="hint-text">Platform Top Up Game Termurah di Indonesia. Penuhi Kebutuhan Gaming Mu Bersama Fresieshop. Store Specialist Game Mobile Legends No.1.</p>
				<form action="" method="post">
                    <div class="form-group">
                        <label for="inputusername">Masukan Data Akun Kamu</label>
						<input type="text" class="form-control" placeholder="Ketikan Username" id="inputusername" name="username" required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Ketikan ID" id="inputFirstName" name="id" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Ketikan Server" id="inputLastName" name="id_server" required>
							</div>
						</div>
					</div>
                    <div class="form-group">
						<label for="inputnamaitem">Item yang Ingin Kamu Beli</label>
						<select class="form-control" id="inputnamaitem" name="nama_item" required onchange="updatePrice()">
							<option value="257 Diamond">257 Diamond</option>
							<option value="86 Diamond">86 Diamond</option>
							<option value="172 Diamond">172 Diamond</option>
                            <option value="344 Diamond">344 Diamond</option>
                            <option value="429 Diamond">429 Diamond</option>
							<option value="514 Diamond">514 Diamond</option>
                            <option value="600 Diamond">600 Diamond</option>
                            <option value="Starlight Member">Starlight Member</option>
                            <option value="Starlight Member Premium">Starlight Member Premium</option>
                            <option value="Weakly Diamond Pass">Weakly Diamond Pass</option>
                        </select>
					</div>
					<div class="form-group">
								<label for="inputharga">Harga</label>
								<input type="text" class="form-control" id="inputhargaitem"  name="harga" value="Rp. 65.000" required >
					</div>            
					<div class="form-group">
						<label for="inputpembayaran">Metode Pembayaran</label>
						<select class="form-control" id="inputpembayaran" name="pembayaran" required>
							<option value=" " disabled selected >- Pilih Metode Pembayaran -</option>
							<option value="Gopay">Gopay</option>
                            <option value="Dana">Dana</option>
                            <option value="Ovo">Ovo</option>
                        </select>
					</div>
                    <div class="form-group">
						<label for="inputnomorhp">Detail Kontak Anda</label>
						<input type="text" class="form-control" placeholder="Ketikan No Hp" id="inputnomorhp" name="no_hp" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Ketikan Alamat Email" id="inputalamatemail" name="alamat_email" required>
					</div>
					<script>
					function updatePrice() {
  						var selectedItem = document.getElementById("inputnamaitem").value;
   						var hargaInput = document.getElementById("inputhargaitem");

   					switch (selectedItem) {
						case "86 Diamond":
   					        hargaInput.value = "Rp. 22.000";
    					    break;
						case "172 Diamond":
   					        hargaInput.value = "Rp. 43.500";
   					        break;
						case "257 Diamond":
   					        hargaInput.value = "Rp. 65.000";
    					    break;
						case "344 Diamond":
   					        hargaInput.value = "Rp. 86.000";
    					    break;
						case "429 Diamond":
   					        hargaInput.value = "Rp. 109.000";
    					    break;
						case "514 Diamond":
   					        hargaInput.value = "Rp. 130.000";
    					    break;
						case "600 Diamond":
   					        hargaInput.value = "Rp. 155.000";
    					    break;
						case "Starlight Member":
   					        hargaInput.value = "Rp. 50.000";
    					    break;
   					    case "Starlight Member Premium":
   					        hargaInput.value = "Rp. 80.000";
   					        break;
						case "Weakly Diamond Pass":
   					        hargaInput.value = "Rp. 27.000";
    					    break;
   						}
					}
					</script>
					<input type="submit" class="btn btn-primary" value="Kirim">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>