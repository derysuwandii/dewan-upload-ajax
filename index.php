<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Upload</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-secondary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h3 align="center" class="mb-3 mt-3">Upload File / Image pada PHP</h3>
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<form id="form-data">
					<div class="form-group">
						<label>Nama File</label>
						<input type="text" name="nama_file" id="nama_file" class="form-control" />
					</div>
					<div class="form-group">
						<label>File Upload</label>
						<input type="file" name="fileupload" id="fileupload" class="form-control" />
					</div>
					<div class="form-group">
						<input type="button" name="upload" id="upload" value="Upload" class="btn btn-info mt-3" />
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready( function () {
    		$("#upload").click(function(){
				const fileupload = $('#fileupload').prop('files')[0];
				var nama_file = $('#nama_file').val();

				if (nama_file!="" && fileupload!="") {
			        let formData = new FormData();
			        formData.append('fileupload', fileupload);
			        formData.append('nama_file', nama_file);

			        $.ajax({
			            type: 'POST',
			            url: "upload.php",
			            data: formData,
			            cache: false,
			            processData: false,
			            contentType: false,
			            success: function (msg) {
			                alert(msg);
			                document.getElementById("form-data").reset();
			            },
			            error: function () {
			                alert("Data Gagal Diupload");
			            }
			        });
			    }
	        });
        });
  </script>
</body>
</html>
