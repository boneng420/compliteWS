<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/Activities.css') }}">
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

    <main class="main-content">
        <header class="page-header">
            <div class="header-content">
                <div>
                    <h1>Activities</h1>
                    <p>Engage in interactive learning experiences</p>
                </div>
                <button class="help-button">Ask Help?</button>
            </div>
        </header>

        <div class="activity-grid">
            <a href="/activity/coding-challenge" class="activity-card">
                <div class="activity-image">
                    <img src="/api/placeholder/400/200" alt="Coding Challenge">
                </div>
                <div class="activity-content">
                    <h3>Coding Challenge</h3>
                    <p>Test your programming skills with real-world coding problems</p>
                </div>
            </a>
            <a href="/activity/quiz-arena" class="activity-card">
                <div class="activity-image">
                    <img src="/api/placeholder/400/200" alt="Quiz Arena">
                </div>
                <div class="activity-content">
                    <h3>Quiz Arena</h3>
                    <p>Challenge yourself with interactive quizzes across various topics</p>
                </div>
            </a>
            <a href="/activity/project-builder" class="activity-card">
                <div class="activity-image">
                    <img src="/api/placeholder/400/200" alt="Project Builder">
                </div>
                <div class="activity-content">
                    <h3>Project Builder</h3>
                    <p>Create and showcase your own programming projects</p>
                </div>
            </a>
        </div>
    </main>

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
    <script src="/JS/Activities.js"></script>
</body>
</html>