<?php
session_start();
require_once '../helper/auth_helper.php';
requireGuest();

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/AuthController.php';
    $authController = new AuthController();
    $errorMessage = $authController->login( $_POST['phone'], $_POST['password']);
}

include 'partials/header.php';
?>
<main class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="container" style="max-width: 350px;">
        <div class="card border-light shadow-lg rounded-4 p-4" style="background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);">
            <div class="card-body">
                <h1 class="text-center mb-4 fw-bold" 
                    style="background: linear-gradient(135deg, #1089D3 0%, #09C6F9 100%);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;
                           font-size: 30px;">
                    Sign In
                </h1>
                
                <form method="POST" class="d-flex flex-column gap-3">
                    <?php if (!empty($errorMessage)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $errorMessage ?>
                        </div>
                    <?php } ?>

                    <div class="form-floating position-relative">
                        <div style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px; opacity: 0.3; z-index: 3;">
                            <svg viewBox="0 0 24 24" id="phone" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.19,13a10,10,0,0,1-3.43-.91,2,2,0,0,0-2.56.83l-.51.85a12.69,12.69,0,0,1-3.44-3.45l.86-.49a2,2,0,0,0,.83-2.56A10,10,0,0,1,11,3.81,2,2,0,0,0,9,2H5.13A3,3,0,0,0,2.86,3a3.13,3.13,0,0,0-.71,2.43A19,19,0,0,0,18.58,21.85a3,3,0,0,0,.42,0,3,3,0,0,0,2-.73,3,3,0,0,0,1-2.26V15A2,2,0,0,0,20.19,13Z"/>
                            </svg>
                        </div>
                        <input type="text" 
                               class="form-control rounded-4 border-light ps-5" 
                               id="phone" 
                               name="phone" 
                               placeholder="Phone"
                               style="background-color: rgba(255, 255, 255, 0.8);
                                      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                        <label for="phone" class="text-muted ps-5 bg-transparent" style="background: transparent;">Phone</label>
                    </div>

                    <div class="form-floating position-relative">
                        <div style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); width: 20px; height: 20px; opacity: 0.3; z-index: 3;">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17,9V7c0-2.8-2.2-5-5-5S7,4.2,7,7v2c-1.7,0-3,1.3-3,3v7c0,1.7,1.3,3,3,3h10c1.7,0,3-1.3,3-3v-7C20,10.3,18.7,9,17,9z M9,7c0-1.7,1.3-3,3-3s3,1.3,3,3v2H9V7z"/>
                            </svg>
                        </div>
                        <input type="password" 
                               class="form-control rounded-4 border-light ps-5" 
                               id="password" 
                               name="password" 
                               placeholder="Password"
                               style="background-color: rgba(255, 255, 255, 0.8);
                                      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                        <label for="password" class="text-muted ps-5" style="background: transparent;">Password</label>
                    </div>

                    <button type="submit" 
                            class="btn-submit btn-primary btn-lg rounded-pill py-3 mt-2"
                            style="background: linear-gradient(135deg, #1089D3 0%, #09C6F9 100%);
                                   border: none;
                                   box-shadow: 0 10px 15px -3px rgba(16, 137, 211, 0.3), 0 4px 6px -2px rgba(16, 137, 211, 0.2);">
                        Login
                    </button>
                </form>

                <div class="text-center mt-4">
                    <span class="text-muted">Don't have an account?</span>
                    <a href="register.php" class="text-decoration-none ms-1" style="color: #1089D3;">Register</a>
                </div>
            </div>
        </div>
    </div>
</main>

    

<?php include 'partials/footer.php'; ?>