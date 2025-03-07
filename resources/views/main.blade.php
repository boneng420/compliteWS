<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPLITE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;700;800&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/main.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-bottom">
            <div class="container">
                <a href="#" class="logo-container">
                    <img src="/Resources/Logo.png" alt="COMPLITE Robot Mascot" class="logo-image">
                    <span class="logo-text">COMPLITE</span>
                </a>
                <nav class="navbar">
                    <a href="/HTML/main.html" class="nav-link">Home</a>
                    <a href="/HTML/Lessons.html" class="nav-link">Lessons</a>
                    <a href="/HTML/Activity.html" class="nav-link">Activities</a>
                    <a href="/HTML/About.html" class="nav-link">About</a>
                    <a href="/HTML/profile.html" class="nav-link">Profile</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-mascot">
                        <img src="/Resources/Robot.png" alt="COMPLITE Robot Mascot" class="robot-mascot">
                    </div>
                    <div class="hero-text-content">
                        <h2 class="welcome-text">WELCOME TO</h2>
                        <h1 class="brand-name">COMPLITE</h1>
                        <p class="hero-description">Educational platform dedicated to interactive learning</p>
                        <a href="/HTML/profile.html" class="cta-button">GET STARTED<span class="arrow">→</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section lessons">
            <div class="container">
                <h2 class="h2 section-title">Latest <span class="span">Lessons</span></h2>
                <div class="card-grid">
                    <a href="/HTML/inLessons.html" class="lesson-card">
                        <div class="lesson-image"></div>
                        <h3 class="h3">Lesson 1</h3>
                        <p>Introduction to Programming</p>
                        <div class="progress">Progress: 0%</div>
                    </a>

                    <a href="/HTML/lesson2.html" class="lesson-card">
                        <div class="lesson-image"></div>
                        <h3 class="h3">Lesson 2</h3>
                        <p>Basic Algorithms</p>
                        <div class="progress">Progress: 0%</div>
                    </a>

                    <a href="/HTML/lesson3.html" class="lesson-card">
                        <div class="lesson-image"></div>
                        <h3 class="h3">Lesson 3</h3>
                        <p>Data Structures</p>
                        <div class="progress">Progress: 0%</div>
                    </a>

                    <a href="/HTML/lesson4.html" class="lesson-card">
                        <div class="lesson-image"></div>
                        <h3 class="h3">Lesson 4</h3>
                        <p>Advanced Concepts</p>
                        <div class="progress">Progress: 0%</div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section activities">
            <div class="container">
                <h2 class="h2 section-title">Latest <span class="span">Activities</span></h2>
                <div class="card-grid">
                    <a href="/HTML/activity1.html" class="activity-card">
                        <div class="activity-image"></div>
                        <h3 class="h3">Activity 1</h3>
                        <p>Coding Challenge</p>
                    </a>

                    <a href="/HTML/activity2.html" class="activity-card">
                        <div class="activity-image"></div>
                        <h3 class="h3">Activity 2</h3>
                        <p>Problem Solving</p>
                    </a>

                    <a href="/HTML/activity3.html" class="activity-card">
                        <div class="activity-image"></div>
                        <h3 class="h3">Activity 3</h3>
                        <p>Quiz Time</p>
                    </a>

                    <a href="/HTML/activity4.html" class="activity-card">
                        <div class="activity-image"></div>
                        <h3 class="h3">Activity 4</h3>
                        <p>Group Project</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="h3">About COMPLITE</h3>
                    <p>Educational platform dedicated to interactive learning</p>
                </div>
                
                <div class="footer-section">
                    <h3 class="h3">Navigation</h3>
                    <nav class="footer-nav">
                        <a href="#" class="footer-link">Home</a>
                        <a href="/HTML/Lessons.html" class="footer-link">Lessons</a>
                        <a href="/HTML/Activity.html" class="footer-link">Activities</a>
                        <a href="#" class="footer-link">About</a>
                        <a href="#" class="footer-link">Profile</a>
                    </nav>
                </div>
                
                <div class="footer-section">
                    <h3 class="h3">Contact</h3>
                    <p>Email: contact@complite.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 COMPLITE. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons/ionicons.js" nomodule></script>
    <script src="/JS/main.js"></script>
</body>
</html>