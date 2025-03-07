<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/Lessons.css') }}">
</head>
<body>
    <header class="header-bottom">
        <div class="container">
            <a href="#" class="logo">COMPLITE</a>
            <nav class="navbar">
                <a href="/HTML/main.html" class="nav-link">Home</a>
                <a href="/HTML/Lessons.html" class="nav-link">Lessons</a>
                <a href="/HTML/Activity.html" class="nav-link">Activities</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Profile</a>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <div class="content-header">
            <h1>Lessons</h1>
            <p>Explore our interactive learning materials</p>
        </div>

        <div class="card-grid">
            <a href="/HTML/inLessons.html" class="lesson-card">
                <img src="/api/placeholder/400/200" alt="Lesson 1">
                <div class="lesson-card-content">
                    <h3>Introduction to Coding</h3>
                    <p>Learn the fundamental concepts of programming</p>
                </div>
            </a>
            <a href="/lesson/2" class="lesson-card">
                <img src="/api/placeholder/400/200" alt="Lesson 2">
                <div class="lesson-card-content">
                    <h3>Web Development Basics</h3>
                    <p>Understand HTML, CSS, and JavaScript</p>
                </div>
            </a>
            <a href="/lesson/3" class="lesson-card">
                <img src="/api/placeholder/400/200" alt="Lesson 3">
                <div class="lesson-card-content">
                    <h3>Data Structures</h3>
                    <p>Explore essential data organization techniques</p>
                </div>
            </a>
            <a href="/lesson/4" class="lesson-card">
                <img src="/api/placeholder/400/200" alt="Lesson 4">
                <div class="lesson-card-content">
                    <h3>Python Programming</h3>
                    <p>Master the Python programming language</p>
                </div>
            </a>
            <a href="/lesson/5" class="lesson-card">
                <img src="/api/placeholder/400/200" alt="Lesson 5">
                <div class="lesson-card-content">
                    <h3>Algorithm Design</h3>
                    <p>Learn problem-solving through algorithms</p>
                </div>
            </a>
            <a href="/lesson/6" class="lesson-card">
                <img src="/api/placeholder/400/200" alt="Lesson 6">
                <div class="lesson-card-content">
                    <h3>Advanced Web Frameworks</h3>
                    <p>Dive into modern web development frameworks</p>
                </div>
            </a>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Lessons</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Profile</a></li>
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
    <script src="/JS/lesson.js"></script>
</body>
</html>