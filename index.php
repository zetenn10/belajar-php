

<script src="js/main.js"></script>



<?php
// Data login
$email = "zardhina2@gmail.com";
$password = "12345678";

// Memeriksa apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah data yang dimasukkan benar
    if ($_POST['email'] == $email && $_POST['password'] == $password) {
        // Jika benar, redirect ke dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika salah, tampilkan pesan error
        $error_message = "email atau password salah. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main=.css">
</head>
<body>
    <div class="login-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="assets/img/rafiki.svg" class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <h1>Welcome to My Anime Website!</h1>
                        <br>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email" >Email address</label>
                            <input type="text" name="email" class="form-control" placeholder="Insert your email address here" required/>
                                            
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password" >Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Insert your password here" required/>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            <a href="#!">Forgot password?</a>
                        </div>                
                            
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block" href="dashboard.php">Login</button>
                            
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">Don't have an account? <a href="register.php">Sign In</a></p>
                        </div>
            
                        <!-- <input type="text" name="email" placeholder="email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit">Login</button> -->
                    </div>
                </div>
            </div>
        </form>
        <?php if(isset($error_message)) { ?>
            <p><?php echo $error_message; ?></p>
        <?php } ?>
    </div>
</body>
</html>

