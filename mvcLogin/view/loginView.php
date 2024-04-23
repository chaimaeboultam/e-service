<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
            body {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(155, 155, 255);
    min-height: 100vh;
}

.container {
    width: 900px;
    height: 450px;
    background-color: white;
     color: rgb(46, 44, 44);
    border-radius: 10px;
}

.img-fluid {
    width: 100%;
    height: 450px;
    object-fit: cover;
}
@media (max-width: 768px) {
            .container {
                border-radius: 10px;
                width:420px;
            }
            
            .form-container {
                padding: 20px;
                
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-none  d-md-block">
                <img src="images/login.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 form-container d-flex align-items-center justify-content-center">
                <form action="login.php" method="post" class="p-4" >
                    <h1 class="text-center text-secondary h2 mb-4">Platforme E-service</h1>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter ton email académique" required>
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter ton mot de passe" required>
                        <button type="button" id="toggleButton" class="btn btn-outline-secondary"><i class="bi bi-eye"></i></button>
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label for="rememberMe" class="form-check-label me-3">Se reppeler de moi</label>
                        <a href="view/motDePassOublie.php" class="text-decoration-none">Mot de passe oublié?</a>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block ms-4"style="width: 270px;">Se connecter</button>
                    <hr>
                    <p class="text-center text-muted mt-3">© 2024 boultam - Tous droits réservés</p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.getElementById("toggleButton").addEventListener("click", function() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                document.getElementById("toggleButton").innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                passwordField.type = "password";
                document.getElementById("toggleButton").innerHTML = '<i class="bi bi-eye"></i>';
            }
        });
    </script>
</body>
</html>
