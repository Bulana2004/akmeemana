<?php 
include '../config/config.php';
$ck = $_COOKIE['login'];

if($ck){
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
  	<link href="./assets/images/favico.ico" rel="icon">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Control Panel Dashboard</title>

	<link href="./assets/css/sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<?php include '../config/config.php'; ?>
<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html" style="text-decoration: none;">
					<span class="">Control Panel</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./dashboard.php">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./news_dasboard.php">
							<i class="align-middle" data-feather="file-text"></i> <span
								class="align-middle">News</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="layers"></i> <span
								class="align-middle">Tenders</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./publication.php">
							<i class="align-middle" data-feather="smile"></i> <span
								class="align-middle">Publication</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="../index.php">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
						</a>
					</li>

				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">

					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">


					</ul>
				</div>
			</nav>

            <main class="content">
                <p class="fs-4">Tenders Controll Panel</p>
				<hr>
                <form id="formsubmit" enctype="multipart/form-data">
					<input type="text" id="id" hidden>
					<div class="mb-3" id="hidden_file_upload">
						<label for="formFile" class="form-label text-dark">Uploade the image</label>
						<input class="form-control" name="uploadedFiles[]" type="file" id="formFile">
					</div>
					<div id="preview"></div>
					<div class="row mt-3">
						<div class="col-lg-4">
							<p class="text-dark">Tender Description</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="title" placeholder="name@example.com">
								<label for="title">Title</label>
							</div>
						</div>
						<div class="col-lg-4">
							<p class="text-dark">ටෙන්ඩර් විස්තරය</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="sin_title" placeholder="name@example.com">
								<label for="sin_title">මාතෘකාව</label>
							</div>
						</div>
						<div class="col-lg-4">
							<p class="text-dark">டெண்டர் விளக்கம்</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="tam_title" placeholder="name@example.com">
								<label for="tam_title">தலைப்பு</label>
							</div>
						</div>
					</div>
					<div class="form-floating mb-3 mt-3">
						<input type="date" class="form-control" id="date" placeholder="name@example.com">
						<label for="title">Date</label>
					</div>
					<button id="submitBtn" type="submit" class="btn btn-success mt-3 mb-5">Submit</button>
				</form>

				<!-- Progress bar -->
				<div id="progressContainer" class="mb-4" style="display: none;">
					<div class="progress" role="progressbar" aria-label="Upload progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
						<div id="progressBar" class="progress-bar bg-success" style="width: 0%">0%</div>
					</div>
				</div>

				<!-- Outputs -->
				<div id="output"></div>
				<div id="outputError" class="alert alert-danger" role="alert" hidden>
					
				</div>

				<div class="row">
					<?php 
						$sql = $bdd -> prepare("SELECT * FROM tenders ORDER BY id DESC");
						$sql -> execute();

						while($data = $sql -> fetch()) {
					?>
					<div class="col-lg-6">
						<div class="border shadow p-4">
							<p><?= $data[2] ?></p>
							<?php
								$sin_sql = $bdd -> prepare("SELECT * FROM sin_tenders WHERE id = :id");
								$sin_sql -> execute([
									':id' => $data[0]
								]);
								$sin_title = $sin_sql -> fetch();

								$tam_sql = $bdd -> prepare("SELECT * FROM tam_tenders WHERE id = :id");
								$tam_sql -> execute([
									':id' => $data[0]
								]);
								$tam_title = $tam_sql -> fetch();
							?>
							<p><?= $sin_title[2] ?></p>
							<p><?= $tam_title[2] ?></p>
							<span class="mb-2 text-secondary" style="font-size: 15px;"><?= $data[3] ?></span>
							<object class="d-block w-100" height="500px" data="./assets/files/tenders/<?= $data[1] ?>" type="application/pdf">
							</object>
							<div class="btn-group mt-3" role="group">
								<button id="<?= $data[0] ?>" class="btn btn-danger" onclick="deletepdf(this.id)">Delete</button>
								<button id="<?= $data[0] ?>" class="btn btn-primary" onclick="editpdf(this.id)">Edit</button>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

            </main>

            <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
							<div class="text-end">
								<p class="mb-0"> Design by : 
									<a class="text-muted" href="https://adminkit.io/"
										target="_blank"><strong>N Code UX Private Limited</strong></a> 
										<img class="ms-2" src="../images/company logo.png" width="33px" alt="">
								</p>
							</div>
						<!-- <div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="./assets/js/sidebar.js"></script>
	<script src="../assets/js/jquery.min.js"></script>

</body>

<script>
	$(document).ready(function () {

		// Get today's date
		const today = new Date();
		const year = today.getFullYear();
		const month = String(today.getMonth() + 1).padStart(2, '0');
		const day = String(today.getDate()).padStart(2, '0');

		const formattedDate = `${year}-${month}-${day}`;

		$('#date').val(formattedDate);

		$('#formsubmit').submit(function(e) {
			e.preventDefault();
			var id = $("#id").val()
			var title = $("#title").val();
			var date = $("#date").val();
			var sin_title = $("#sin_title").val();
			var tam_title = $("#tam_title").val();
			var vals = [title, id, date, sin_title, tam_title];
			const formData = new FormData($('#formsubmit')[0]);

			// Add the vals array to formData
			formData.append('vals', JSON.stringify(vals)); // Convert the array to a JSON string

			// Show and reset progress bar
			$('#progressContainer').show();
			$('#progressBar').css('width', '0%').text('0%').attr('aria-valuenow', '0');

			$.ajax({
				url: '../pages/tenders_upload',
				type: 'POST',
				data: formData,
				processData: false, // Do not process the data
				contentType: false, // Do not set content type
				xhr: function() {
					var xhr = new XMLHttpRequest();
					// Monitor progress
					xhr.upload.addEventListener('progress', function(e) {
						if (e.lengthComputable) {
							var percentComplete = Math.round((e.loaded / e.total) * 100);
							$('#progressBar')
								.css('width', percentComplete + '%')
								.text(percentComplete + '%')
								.attr('aria-valuenow', percentComplete);
						}
					});
					return xhr;
				},
				success: function(response) {
					$('#output').html(response);
				},
				error: function(xhr, status, error) {
					$("#outputError").removeAttr('hidden');
					$('#outputError').html(error);
				}
			});

		});
	})

	function deletepdf(id){
		$.ajax({
			type:'post',
			data:{id , id},
			url:'../pages/tenders_delete',
			success:function(responce){
				location.reload();
			}
		})
	}

	function editpdf(id){
		$("#id").val(id);
		$("#hidden_file_upload").attr('hidden', true);
		$.ajax({
			type:'post',
			data:{id : id},
			url:'../pages/tenders_update',
			success:function(responce){
				window.scrollTo({
					top:0,
					behavior:'smooth'
				})
				$('#submitBtn').text('Update');
				$("#output").html(responce);
			}
		})
	}
</script>

</html>

<?php
}else{
	echo "<script>window.location.href='../login.php'</script>";
}

?>