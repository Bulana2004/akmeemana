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

					<li class="sidebar-item">
						<a class="sidebar-link" href="./dashboard.php">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="./news_dasboard.php">
							<i class="align-middle" data-feather="file-text"></i> <span
								class="align-middle">News</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./tenders.php">
							<i class="align-middle" data-feather="layers"></i> <span
								class="align-middle">Tender</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./publication.php">
							<i class="align-middle" data-feather="smile"></i> <span
								class="align-middle">Publication</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="https://www.akmeemanaps.lk/index.php">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
						</a>
					</li>

				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<p class="text-centr">Welcome</p>
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
                <p class="fs-4">News Site Control Panel</p>
                <hr>
				<form id="formsubmit" enctype="multipart/form-data">
					<input type="text" id="id" hidden>
					<div class="mb-3" id="hidden_upload_image">
						<label for="formFile" class="form-label text-dark">Uploade the image</label>
						<input class="form-control" name="uploadedFiles[]" type="file" id="formFile" multiple>
						<div class="alert alert-info mt-3" role="alert">
							You can chooese multiple images..!
						</div>
					</div>
					<div id="preview"></div>
					<hr class="mt-5">
					<div class="row">
						<div class="col-lg-4">
							<p class="text-dark">News Title and Descriptions</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="title" placeholder="name@example.com">
								<label for="title">Title</label>
							</div>
							<div class="form-floating mb-3">
								<textarea class="form-control" placeholder="Leave a comment here" id="description"
									maxlength="1500" style="height: 100px"></textarea>
								<label for="description">Description</label>
							</div>
						</div>
						<div class="col-lg-4">
							<p class="text-dark">පුවත් මාතෘකාව සහ විස්තර</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="sin-title" placeholder="name@example.com">
								<label for="sin-title">මාතෘකාව</label>
							</div>
							<div class="form-floating mb-3">
								<textarea class="form-control" placeholder="Leave a comment here" id="sin-description"
									maxlength="1500" style="height: 100px"></textarea>
								<label for="sin-description">විස්තරය</label>
							</div>
						</div>
						<div class="col-lg-4">
							<p class="text-dark">செய்தி தலைப்பு மற்றும் விளக்கங்கள்</p>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="tam-title" placeholder="name@example.com">
								<label for="tam-title">தலைப்பு</label>
							</div>
							<div class="form-floating mb-3">
								<textarea class="form-control" placeholder="Leave a comment here" id="tam-description"
									maxlength="1500" style="height: 100px"></textarea>
								<label for="tam-description">விளக்கம்</label>
							</div>
						</div>
					</div>
					<hr class="">
					<div class="form-floating mb-3">
						<input type="date" class="form-control" id="date" placeholder="name@example.com">
						<label for="title">Date</label>
					</div>
					<button id="submitBtn" type="submit" class="btn btn-success mt-4 mb-5 d-block mx-auto">Submit</button>
				</form>

				<!-- Progress bar -->
				<div id="progressContainer" class="mb-4" style="display: none;">
					<div class="progress" role="progressbar" aria-label="Upload progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
						<div id="progressBar" class="progress-bar bg-success" style="width: 0%">0%</div>
					</div>
				</div>

				<div id="output"></div>
				<div id="outputError" class="alert alert-danger" role="alert" hidden>

				</div>



				<!-- Out put from the databas -->
						<div class="row">
							<?php 
								$sql = $bdd -> prepare('SELECT * FROM news ORDER BY id DESC');
								$sql -> execute();

								while($data = $sql -> fetch()){
									$carouselid = 'carousel' . $data[0];
									$img = explode(",", $data[1]);
								?>
								<div class="col-lg-4">
									<div class="card d-block w-100">
										<div id="<?= $carouselid ?>" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="./assets/img/news/<?= $img[0] ?>" class="d-block w-100" alt="<?= $img[0] ?>">
											</div>
											<?php
												for($i = 1; $i < count($img); $i++){
											?>
											<div class="carousel-item">
												<img src="./assets/img/news/<?= $img[$i] ?>" class="d-block w-100" alt="<?= $img[$i] ?>">
											</div>
											<?php } ?>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#<?= $carouselid ?>" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#<?= $carouselid ?>" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
										<div class="card-body">
											<span style="font-size: 10px;"><?= $data[4] ?></span>
											<?php 
												$sin_sql = $bdd -> prepare('SELECT * FROM sin_news WHERE id = :id');
												$sin_sql -> execute([
													':id' => $data[0] 
												]);
												$sin = $sin_sql -> fetch();

												$tam_sql = $bdd -> prepare('SELECT * FROM tam_news WHERE id = :id');
												$tam_sql -> execute([
													':id' => $data[0] 
												]);
												$tam = $tam_sql -> fetch();
											?>
											<p class="card-text">> <?= $data[2] ?></p>
											<p class="card-text">> <?= $sin[2] ?></p>
											<p class="card-text">> <?= $tam[2] ?></p>
											<hr>
											<span style="font-size: 12px;"><?= $data[3] ?></span> <br>
											<span style="font-size: 12px;"><?= $sin[3] ?></span> <br>
											<span style="font-size: 12px;"><?= $tam[3] ?></span>
											<hr>
											<div class="btn-group">
												<button id="<?= $data[0] ?>" class="btn btn-danger" onclick="deleteNews(this.id)">Delete News</button>
												<button id="<?= $data[0] ?>" class="btn btn-primary" onclick="editNews(this.id)">Edit News Title</button>
											</div>
										</div>
									</div>
								</div>
							<?php
								}
							?>
						</div>
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

		// Get today's date
		const today = new Date();
		const year = today.getFullYear();
		const month = String(today.getMonth() + 1).padStart(2, '0');
		const day = String(today.getDate()).padStart(2, '0');

		const formattedDate = `${year}-${month}-${day}`;

		$('#date').val(formattedDate);

		
    	// Display preview for multiple images
		$('#formFile').on('change', function (event) {
			$('#preview').empty(); // Clear previous previews

			const files = event.target.files;
			Array.from(files).forEach(file => {
				if (file && file.type.startsWith('image/')) {
					const reader = new FileReader();
					reader.onload = function (e) {
						const img = $('<img>').attr('src', e.target.result).css({
							width: '100px',
							margin: '10px',
							border: '1px solid #ddd',
							padding: '5px',
							borderRadius: '4px'
						});
						$('#preview').append(img);
					};
					reader.readAsDataURL(file);
				}
			});
		});

		// Handle form submission with multiple files
		$('#formsubmit').submit(function(e) {
			e.preventDefault();

			var id = $("#id").val();
			var title = $("#title").val();
			var description = $("#description").val();
			var date = $("#date").val();
			var sin_title = $("#sin-title").val();
			var sin_des = $("#sin-description").val();
			var tam_title = $("#tam-title").val();
			var tam_des = $("#tam-description").val();
			var vals = [title, description, id, date, sin_title, sin_des, tam_title, tam_des];

			// Create a new FormData object
			const formData = new FormData();
			formData.append('vals', JSON.stringify(vals)); // Add the vals array

			// Add each selected file to the FormData individually
			let files = $('#formFile')[0].files;
			for (let i = 0; i < files.length; i++) {
				formData.append('uploadedFiles[]', files[i]);
			}

			// Show and reset progress bar
			$('#progressContainer').show();
			$('#progressBar').css('width', '0%').text('0%').attr('aria-valuenow', '0');

			// AJAX request
			$.ajax({
				url: './pages/news_upload.php',
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				xhr: function() {
					var xhr = new XMLHttpRequest();
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

	function deleteNews(id){
		$.ajax({
			type:'post',
			data:{id , id},
			url:'./pages/news_delete.php',
			success:function(responce){
				location.reload();
			}
		})
	}

	function editNews(id) {
		$("#hidden_upload_image").attr('hidden', true);
		$.ajax({
			type:'post',
			data:{id, id},
			url:'./pages/news_update.php',
			success:function(response){
				$("#output").html(response);
				window.scrollTo({
					top: 0 ,
					behavior: 'smooth'
				});
				$("#submitBtn").text('Update');
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