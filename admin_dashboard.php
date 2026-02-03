<?php
session_start();
require_once 'Database.php';
require_once 'Movie.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: loginform.php");
    exit;
}
$db = new Database();
$movieManager = new Movie($db);
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_movie'])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $admin = $_SESSION['user_name'];

    $target_dir = "uploads/";
    if (!is_dir($target_dir)) { mkdir($target_dir, 0777, true); }
    
    $file_name = basename($_FILES["movie_image"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name;

    if (move_uploaded_file($_FILES["movie_image"]["tmp_name"], $target_file)) {
        $success = $movieManager->addMovie($title, $genre, $target_file, $admin);
        $message = $success ? "Film added successfully!" : "Database error.";
    } else {
        $message = "Failed to upload image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - CineLuxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net">
    <style>
        :root { --main-color: #e50914; --text-color: #fff; --bg-color: #0b0b0b; }
        body { font-family: 'Poppins', sans-serif; background: var(--bg-color); color: var(--text-color); margin: 0; display: flex; }
        
        .sidebar { width: 250px; height: 100vh; background: #151515; position: fixed; padding: 20px; border-right: 1px solid #222; }
        .sidebar h2 { color: var(--main-color); margin-bottom: 30px; font-size: 1.5rem; text-align: center; }
        .sidebar a { display: flex; align-items: center; padding: 12px; color: #ccc; text-decoration: none; margin-bottom: 10px; border-radius: 8px; transition: 0.3s; }
        .sidebar a i { margin-right: 10px; font-size: 1.3rem; }
        .sidebar a:hover, .sidebar a.active { background: var(--main-color); color: white; }

        .main-content { margin-left: 280px; padding: 40px; width: 100%; }
        .header-stats { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
        
        .form-container { background: #151515; padding: 30px; border-radius: 15px; max-width: 600px; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
        .form-container h3 { margin-bottom: 20px; border-bottom: 2px solid var(--main-color); display: inline-block; padding-bottom: 5px; }
        .input-group { margin-bottom: 20px; }
        .input-group label { display: block; margin-bottom: 8px; color: #aaa; }
        .input-group input { width: 100%; padding: 12px; background: #252525; border: 1px solid #333; color: white; border-radius: 8px; outline: none; }
        .input-group input:focus { border-color: var(--main-color); }
        
        .submit-btn { background: var(--main-color); color: white; padding: 12px 25px; border: none; border-radius: 8px; cursor: pointer; width: 100%; font-weight: 600; font-size: 1rem; }
        .submit-btn:hover { background: #b20710; }
        .alert { padding: 15px; border-radius: 8px; margin-bottom: 20px; background: #2ecc71; color: white; text-align: center; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>CineLuxe Admin</h2>
        <a href="admin_dashboard.php" class="active"><i class='bx bxs-dashboard'></i> Dashboard</a>
        <a href="movies.php"><i class='bx bxs-movie-play'></i> View Website</a>
        <a href="contact_messages.php"><i class='bx bxs-message-square-detail'></i> Messages</a>
        <div style="margin-top: 50px;">
            <a href="logout.php" style="color: #ff4d4d;"><i class='bx bx-log-out'></i> Logout</a>
        </div>
    </div>

    <div class="main-content">
        <div class="header-stats">
            <div>
                <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
                <p style="color: #888;">Control Panel & Content Management</p>
            </div>
            <div style="background: #151515; padding: 15px 25px; border-radius: 10px; border: 1px solid var(--main-color);">
                <span style="color: var(--main-color); font-weight: bold;">Status:</span> Administrator
            </div>
        </div>

        <?php if ($message): ?>
            <div class="alert"><?php echo $message; ?></div>
        <?php endif; ?>

        <div class="form-container">
            <h3><i class='bx bx-plus-circle'></i> Add New Movie</h3>
            <form method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label>Movie Title</label>
                    <input type="text" name="title" placeholder="Enter movie title..." required>
                </div>
                
                <div class="input-group">
                    <label>Genre</label>
                    <input type="text" name="genre" placeholder="e.g. Action, Animation, Drama..." required>
                </div>

                <div class="input-group">
                    <label>Movie Poster (Image Upload)</label>
                    <input type="file" name="movie_image" accept="image/*" required style="border: 1px dashed #444;">
                </div>

                <button type="submit" name="add_movie" class="submit-btn">Publish Movie</button>
            </form>
        </div>
    </div>

</body>
</html>
