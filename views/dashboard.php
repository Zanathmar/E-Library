<?php
session_start();
require_once '../helper/auth_helper.php';
requireAuth();

$user = $_SESSION['user'];

if(isset($_POST['logout'])) {
    require_once '../controllers/AuthController.php';
    $authController = new AuthController();
    $authController->logout();

}
include 'partials/header.php';
?>


    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3 class="brand mb-4">BooKoo</h3>
            <ul class="nav flex-column">
    <button class="btn btn-light align-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path d="M224,120v96a8,8,0,0,1-8,8H160a8,8,0,0,1-8-8V164a4,4,0,0,0-4-4H108a4,4,0,0,0-4,4v52a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a16,16,0,0,1,4.69-11.31l80-80a16,16,0,0,1,22.62,0l80,80A16,16,0,0,1,224,120Z"></path>
        </svg>
        <span>Home</span>
    </button>
    <button class="btn btn-light align-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path d="M232.49,215.51,185,168a92.12,92.12,0,1,0-17,17l47.53,47.54a12,12,0,0,0,17-17ZM44,112a68,68,0,1,1,68,68A68.07,68.07,0,0,1,44,112Z"></path>
        </svg>
        <span>Discover</span>
    </button>
    <button class="btn btn-light align-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.76,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Z"></path>
        </svg>
        <span>Bookmarks</span>
    </button>
    <button class="btn btn-light align-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,130.16q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.6,107.6,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.29,107.29,0,0,0-26.25-10.86,8,8,0,0,0-7.06,1.48L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.6,107.6,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"></path>
</svg>
        <span>Settings</span>
    </button>
    <button class="btn btn-light align-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path>
        </svg>
        <span>Help</span>
    </button>
</ul>
            <form method="post" class="mt-4">
            <button type="submit" class="Btn" name="logout">
  
  <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
  
  <div class="text">Logout</div>
</button>
            </form>
        </div>

        <!-- Content -->
        <div class="content">
            <h1>Welcome, <?= htmlspecialchars($user['name']); ?>!</h1>
            <div class="d-flex justify-content-between align-items-center mb-1">
            </div>

            <!-- Book Cards -->
            <div class="row">
                <?php
                // Example array of books
                $books = [
                    
                ];

                foreach ($books as $book) {
                    echo '
                    <div class="col-md-3">
                        <div class="card book-card mb-4">
                            <img src="images/' . $book['image'] . '" class="card-img-top" alt="' . htmlspecialchars($book['title']) . '">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($book['title']) . '</h5>
                                <p class="card-text">' . htmlspecialchars($book['author']) . '</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>

<?php include 'partials/footer.php';?>

