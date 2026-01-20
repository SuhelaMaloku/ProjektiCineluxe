<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['user_email'])) {
    header("Location: loginform.php");
    exit();
}
$email = $_SESSION['user_email'];
$res = $conn->query("SELECT * FROM users WHERE email = '$email'");
$user_data = $res->fetch_assoc();

$foto_aktuale = "profil.jpg"; 
if (!empty($user_data['image'])) {
    $foto_aktuale = "uploads/" . $user_data['image'];
}
?>
<?php if(isset($_GET['status'])): ?>
    <div id="status-alert" style="padding: 15px; margin-bottom: 20px; border-radius: 8px; text-align: center; font-weight: 500; 
        <?php 
            if($_GET['status'] == 'success' || $_GET['status'] == 'pw_success') {
                echo 'background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb;'; 
            } else {
                echo 'background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;'; 
            }
        ?>">
        
        <?php 
            if($_GET['status'] == 'success') echo "Profile updated successfully!";
            if($_GET['status'] == 'pw_success') echo "Password changed successfully!";
            if($_GET['status'] == 'error') echo "An error occurred. Please try again.";
        ?>
    </div>

    <script>
        setTimeout(function() {
            var alert = document.getElementById('status-alert');
            if(alert) alert.style.display = 'none';
        }, 3000);
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Settings - CineLuxe</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div class="settings-container">
    <div class="profile-left">
        <ul>
            <li><a href="#" class="menu-link active" data-section="profile">Profile</a></li>
            <li><a href="#" class="menu-link" data-section="password">Password</a></li>
            <li><a href="#" class="menu-link" data-section="watchlist">Watchlist</a></li>
            <li><a href="#" class="menu-link" data-section="history">History</a></li>
        </ul>
        <a href="logout.php" class="logout-btn">Log Out</a>
    </div>

    <div class="profile-right">
<section id="profile" class="content-section active">
    <h2 style="color: #481379d5; margin-bottom: 20px;">Profile</h2>
    
    <form action="update_profile.php" method="POST" enctype="multipart/form-data">
        <div style="display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 30px;">
            <div style="width: 120px !important; height: 120px !important; border-radius: 50% !important; overflow: hidden !important; border: 4px solid #481379d5 !important; background: #eee; display: flex; align-items: center; justify-content: center;">
                <img src="<?php echo $foto_aktuale; ?>" id="userProfilePic" alt="Profile Picture" 
                     style="width: 100% !important; height: 100% !important; object-fit: cover !important;">
            </div>
            <button type="button" onclick="triggerClick()" 
                    style="margin-top: 15px; background: #481379d5; color: white; border: none; padding: 8px 20px; border-radius: 8px; cursor: pointer; font-family: 'Poppins', sans-serif;">
                Change Picture
            </button>

            <input type="file" id="profileInput" name="profileImage" style="display: none;" accept="image/*" onchange="displayImage(this)">
        </div>
        <div class="info-card">
            <h3>Personal Info</h3>
            <div class="info-field" style="margin-bottom: 15px;">
                <label style="display: block; font-weight: 600; color: #481379d5; margin-bottom: 5px;">Name</label>
                <input type="text" name="newName" value="<?php echo htmlspecialchars($user_data['name'] ?? 'Guest'); ?>" style="width: 100%; max-width: 400px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
            </div>
            <div class="info-field">
                <label style="display: block; font-weight: 600; color: #481379d5; margin-bottom: 5px;">Email</label>
                <input type="email" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" readonly style="width: 100%; max-width: 400px; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background: rgba(0,0,0,0.05); color: #666;">
            </div>
        </div>
        <div class="info-card">
            <h3>Bio</h3>
            <textarea placeholder="Tell us something about yourself..." style="width: 100%; max-width: 400px; height: 100px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">Movie lover, fan of adventure films.</textarea>
        </div>
        <div class="info-card">
            <h3>Social Links</h3>
            <div class="info-field" style="margin-bottom: 10px;">
                <label style="display: block; font-weight: 600; color: #481379d5; margin-bottom: 5px;">Instagram</label>
                <input type="text" placeholder="@username" style="width: 100%; max-width: 400px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
            </div>
            <div class="info-field">
                <label style="display: block; font-weight: 600; color: #481379d5; margin-bottom: 5px;">Facebook</label>
                <input type="text" placeholder="fb.com" style="width: 100%; max-width: 400px; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
            </div>
        </div>
        <button type="submit" name="save_profile" class="btn save-btn" style="margin-top: 10px;">Save Changes</button>
    </form>
</section>
<section id="password" class="content-section">
    <h2>Change Password</h2>
    
    <form action="change_password.php" method="POST" class="password-form">
        <div class="form-group">
            <label for="current-password">Current Password</label>
            <input type="password" name="current_password" id="current-password" placeholder="Enter current password" required>
        </div>
        <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" name="new_password" id="new-password" placeholder="Enter new password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" name="confirm_password" id="confirm-password" placeholder="Confirm new password" required>
        </div>
        <button type="submit" name="btn_change_pw" class="save-btn">Save Password</button>
    </form>
</section>

<section id="watchlist" class="content-section">
    <h2>Your Watchlist</h2>
    <div class="movies-grid">
        <?php
        include 'db_connection.php';
        $user_email = $_SESSION['user_email'];
        $query = "SELECT * FROM watchlist WHERE user_email = '$user_email' ORDER BY added_at DESC";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="movie-box">
                        <img src="'.$row['movie_image'].'" alt="'.$row['movie_title'].'">
                        <p>'.$row['movie_title'].'</p>
                      </div>';
            }
        } else {
            echo "<p>Your Watchlist is empty.</p>";
        }
        ?>
    </div>
</section>


<section id="history" class="content-section">
    <h2>Your Watched Movies</h2>
    <div class="movies-grid">
        <?php
        include 'db_connection.php'; 
        
        if (isset($_SESSION['user_email'])) {
            $user_email = $_SESSION['user_email'];
            
            $query_h = "SELECT * FROM history WHERE user_email = '$user_email' ORDER BY watched_at DESC";
            $result_h = $conn->query($query_h);

            if ($result_h->num_rows > 0) {
                while($row_h = $result_h->fetch_assoc()) {
                    ?>
                    <div class="movie-box">
                        <img src="<?php echo $row_h['movie_image']; ?>" alt="<?php echo $row_h['movie_title']; ?>">
                        <p><?php echo $row_h['movie_title']; ?></p>
                        <span class="watched-date">Watched: <?php echo date('d M Y', strtotime($row_h['watched_at'])); ?></span>
                    </div>
                    <?php
                }
            } else {
                echo "<p>You haven't seen any movie</p>";
            }
        } else {
            echo "<p>Please! Sign in</p>";
        }
        ?>
    </div>
</section>



    </div>
</div>

<script>
const menuLinks = document.querySelectorAll('.menu-link');
const sections = document.querySelectorAll('.content-section');

menuLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        menuLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');
        
        const target = link.dataset.section;
        sections.forEach(sec => {
            if(sec.id === target){
                sec.classList.add('active');
            } else {
                sec.classList.remove('active');
            }
        });
    });
});
</script>
