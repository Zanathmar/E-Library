<?php
session_start();
require_once '../helper/auth_helper.php';
requireGuest();

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/AuthController.php';
    $authController = new AuthController();
    $errorMessage = $authController->register($_POST['name'], $_POST['phone'], $_POST['password'], $_POST['address']);
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
                    Register
                </h1>
                
                <form method="POST" class="d-flex flex-column gap-3">
                    <?php if (!empty($errorMessage)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $errorMessage ?>
                        </div>
                    <?php } ?>

                    <div class="form-floating">
                        <input type="text" 
                               class="form-control rounded-4 border-light" 
                               id="name" 
                               name="name" 
                               placeholder="Name"
                               style="background-color: rgba(255, 255, 255, 0.8);
                                      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                        <label for="name" class="text-muted">Name</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" 
                               class="form-control rounded-4 border-light" 
                               id="phone" 
                               name="phone" 
                               placeholder="Phone"
                               style="background-color: rgba(255, 255, 255, 0.8);
                                      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                        <label for="phone" class="text-muted">Phone</label>
                    </div>

                    <div class="form-floating">
                        
                        <input type="password" 
                               class="form-control rounded-4 border-light" 
                               id="password" 
                               name="password" 
                               placeholder="Password"
                               style="background-color: rgba(255, 255, 255, 0.8);
                                      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                        <label for="password" class="text-muted">Password</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" 
                               class="form-control rounded-4 border-light" 
                               id="address" 
                               name="address" 
                               placeholder="Address"
                               style="background-color: rgba(255, 255, 255, 0.8);
                                      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);">
                        <label for="address" class="text-muted">Address</label>
                    </div>

                    <button type="submit" 
                            class="btn-submit btn-primary btn-lg rounded-pill py-3 mt-2"
                            style="background: linear-gradient(135deg, #1089D3 0%, #09C6F9 100%);
                                   border: none;
                                   box-shadow: 0 10px 15px -3px rgba(16, 137, 211, 0.3), 0 4px 6px -2px rgba(16, 137, 211, 0.2);">
                        Register
                    </button>
                </form>

                <div class="text-center mt-4">
                    <span class="text-muted">Already have an account?</span>
                    <a href="login.php" class="text-decoration-none ms-1" style="color: #1089D3;">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</main>

    

<?php include 'partials/footer.php'; ?>