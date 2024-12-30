<?php 
include './config/config.php';
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<?php include './config/config.php'; ?>
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

					<li class="sidebar-item active">
						<a class="sidebar-link" href="#">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./news_dasboard.php">
							<i class="align-middle" data-feather="file-text"></i> <span
								class="align-middle">News</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./tenders.php">
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
						<a class="sidebar-link" href="www.akmeemanaps.lk">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
						</a>
					</li>

				</ul>

				<!-- <div class="sidebar-cta">
					<div class="sidebar-cta-content">

					</div>
				</div> -->
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
				<p class="fs-4">Home Page Control Panel</p>
				<hr>
				<form id="formsubmit" enctype="multipart/form-data">
					<div class="row">
						<input type="text" id="id" hidden>
						<div class="mb-3">
							<label for="formFile" class="form-label text-dark">Uploade the image</label>
							<input class="form-control" name="uploadedFiles[]" type="file" id="formFile">
						</div>
						<div id="preview"></div>
						<div class="alert alert-primary" role="alert">
							Must have at least 3 images!
						</div>
					</div>
					<button id="submitBtn" type="submit" class="btn btn-success mt-4 mb-5 d-block mx-auto">Submit</button>
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

				<p class="fs-4">Images</p>
				<hr>
				<!-- Cards -->
				<?php
				$sql = "SELECT * FROM slider order by id desc";
				$stmt = $bdd -> query($sql);
				?>
				<?php while($data = $stmt -> fetch()) {?>
				<div class="card mb-3" style="max-width: 700px;">
					<div class="row g-0">
						<div class="col-md-4">
						<img src="./assets/img/slider/<?= $data[1] ?>" style="height: 100%; width: 100%; object-fit: cover;" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?= $data[2] ?></h5>
							<p class="card-text"><?= $data[3] ?></p>
							<!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
							<div class="btn-group" role="group">
								<button id="<?= $data[0] ?>" class="btn btn-danger" onclick="deleteImage(this.id)">Delete</button>
								<!-- <button class="btn btn-primary" id="<?= $data[0] ?>" onclick="editImage(this.id)">Edit</button> -->
							</div>
						</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
							<div class="text-end">
								<p class="mb-0"> Design by : 
									<a class="text-muted" href="https://adminkit.io/"
										target="_blank"><strong>N Code UX Private Limited</strong></a> 
										<img class="ms-2" src="./assets/images/company logo.png" width="33px" alt="">
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
	<script src="./assets/js/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

<script>
	$(document).ready(function () {
		// Preview images when selected
		$('#formFile').on('change', function (event) {
			$('#preview').empty(); // Clear previous previews
			const files = event.target.files;

			Array.from(files).forEach(file => {
				if (file && file.type.startsWith('image/')) {
					const reader = new FileReader();
					reader.onload = function (e) {
						const img = $('<img>').attr('src', e.target.result).css({
							width: '100px',
							margin: '10px'
						});
						$('#preview').append(img);
					};
					reader.readAsDataURL(file);
				}
			});
		});

		$('#formsubmit').submit(function(e) {
			e.preventDefault();
			var id = $("#id").val()
			var title = $("#title").val();
			var description = $("#description").val();
			var vals = [title, description, id];
			const formData = new FormData($('#formsubmit')[0]);

			// Add the vals array to formData
			formData.append('vals', JSON.stringify(vals)); // Convert the array to a JSON string

			// Show and reset progress bar
			$('#progressContainer').show();
			$('#progressBar').css('width', '0%').text('0%').attr('aria-valuenow', '0');

			$.ajax({
				url: './pages/home_upload.php',
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

	function deleteImage(id){
		$.ajax({
			type:'post',
			data:{id , id},
			url:'./pages/home_delete.php',
			success:function(responce){
				location.reload();
			}
		})
	}
</script>

</html>

<?php
}else{
	echo "<script>window.location.href='./login.php'</script>";
}

?>