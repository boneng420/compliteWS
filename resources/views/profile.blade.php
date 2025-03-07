<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/profile.css') }}">
</head>
<body>
    
    <header class="header-bottom">
        <div class="container">
            <div class="logo">COMPLITE</div>
            <nav class="navbar">
                <a href="/HTML/main.html" class="nav-link">Home</a>
                <a href="/HTML/Lessons.html" class="nav-link">Lessons</a>
                <a href="/HTML/Activity.html" class="nav-link">Activities</a>
                <a href="about.html" class="nav-link">About</a>
                <a href="profile.html" class="nav-link">Profile</a>
            </nav>
        </div>
    </header>

    <div class="profile-container">
        <div class="profile-picture">
            <img src="/path/to/profile-picture.jpg" alt="Profile Picture">
            <label for="upload-picture" class="upload-label">Change Picture</label>
            <input type="file" id="upload-picture" accept="image/*">
        </div>
        <div class="profile-details">
            <h1>User Profile</h1>
            <div class="detail-grid">
                <div class="profile-detail">
                    <span class="detail-label">Username</span>
                    <span class="detail-value" id="username">complite_user</span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Full Name</span>
                    <span class="detail-value" id="full-name">John Doe</span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Email</span>
                    <span class="detail-value" id="email">john.doe@complite.com</span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Sex</span>
                    <span class="detail-value" id="sex">Male</span>
                </div>
                <div class="profile-detail">
                    <span class="detail-label">Birth Date</span>
                    <span class="detail-value" id="birth-date">January 15, 1990</span>
                </div>
            </div>
            <button class="edit-button">Edit Profile</button>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About COMPLITE</h3>
                <p>Educational platform dedicated to interactive learning</p>
            </div>
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul class="footer-links">
                    <li><a href="/HTML/main.html">Home</a></li>
                    <li><a href="/HTML/Lessons.html">Lessons</a></li>
                    <li><a href="/HTML/Activity.html">Activities</a></li>
                    <li><a href="/HTML/Activity.html">About</a></li>
                    <li><a href="/HTML/Activity.html">Profile</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: contact@complite.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 COMPLITE. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.querySelector('.edit-button').addEventListener('click', () => {
            // Future edit functionality
            alert('Edit profile feature coming soon!');
        });
    </script>
</body>
</html>