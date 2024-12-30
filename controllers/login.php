<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .emblem_logo{
            width: 40px;
        }

        .company_details{
            position: fixed;
            bottom: 20px;
            right: 20px;
            text-align: center;
        }

        .company_details a {
            text-decoration: none;
            color: black;
            margin-right: 10px;
        }

        .company_logo{
            width: 40px;
        }
    </style>
</head>
<body style="background-color: #b2b2b2;">
    <div class="container">
        <div class="row loging_box justify-content-center align-items-center min-vh-100">
            <div class="col-md-5 loging_box_content border align-items-center shadow p-5" style="background-color: #ffffff;">
                <img src="./assets/images/Emblem_of_Sri_Lanka.png" alt="" class="emblem_logo mb-3 d-block mx-auto">
                <h5 class="text-center">අක්මීමන ප්‍රාදේශීය සභාව</h5>
                <form id="form" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <input type="checkbox" id="showpassword"> Show Password
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div id="output" class="text-center mt-4"></div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center company_details">
            <a href="#">N Code UX Private Limited</a>
            <a href="#"><img src="./assets/images/company logo.png" alt="Company logo" class="company_logo"></a>
        </div>
    </div>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
    <script>
        $(document).ready(function(){
            $("#form").submit(function(e){
                e.preventDefault();
                var password = $("#password").val();

                $.ajax({
                    type: 'post',
                    data: {vals: password},
                    url: './pages/login_check.php',
                    success: function(response){
                        $("#output").html(response);
                    }
                });
            });

            $("#showpassword").click(function(){
                var passwordinput = $("#password");
                if (passwordinput.attr("type") === "password") {
                    passwordinput.attr("type", "text");
                } else {
                    passwordinput.attr("type", "password");
                }
            });
        });
    </script>
</html>