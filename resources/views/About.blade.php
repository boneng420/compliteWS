<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/about.css') }}">
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

    <section class="hero about-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text-content">
                    <h2 class="welcome-text">About COMPLITE</h2>
                    <p class="hero-description">
                        COMPLITE is an innovative educational platform designed to transform learning through interactive and engaging experiences. Our mission is to make education accessible, enjoyable, and personalized for every student.
                    </p>
                </div>
                <div class="hero-mascot">
                    <img src="/images/about-hero-image.png" alt="COMPLITE Learning" class="robot-mascot">
                </div>
            </div>
        </div>
    </section>

    <section class="proponents container">
        <h2 class="section-title">Our Team</h2>
        <div class="card-grid team-grid">
            <div class="proponent-card">
                <img src="/images/team/member1.jpg" alt="Team Member 1" class="proponent-image">
                <h3 class="proponent-name">Justin Anthony Aleta</h3>
                <p class="proponent-details">Founder & CEO | ID: COMP-001</p>
            </div>
            <div class="proponent-card">
                <img src="/images/team/member2.jpg" alt="Team Member 2" class="proponent-image">
                <h3 class="proponent-name">Anthon Jay Delgado</h3>
                <p class="proponent-details">Chief Technology Officer | ID: COMP-002</p>
            </div>
            <div class="proponent-card">
                <img src="/images/team/member3.jpg" alt="Team Member 3" class="proponent-image">
                <h3 class="proponent-name">John Marvin Oliva</h3>
                <p class="proponent-details">Head of Curriculum | ID: COMP-003</p>
            </div>
            <div class="proponent-card">
                <img src="/images/team/member4.jpg" alt="Team Member 4" class="proponent-image">
                <h3 class="proponent-name">Brent Ponce</h3>
                <p class="proponent-details">User Experience Designer | ID: COMP-004</p>
            </div>
            <div class="proponent-card">
                <img src="/images/team/member5.jpg" alt="Team Member 5" class="proponent-image">
                <h3 class="proponent-name">Mark Rayniel Ocampo</h3>
                <p class="proponent-details">Marketing Director | ID: COMP-005</p>
            </div>
            <div class="proponent-card">
                <img src="/images/team/member6.jpg" alt="Team Member 6" class="proponent-image">
                <h3 class="proponent-name">Gian Kolai Menia</h3>
                <p class="proponent-details">Lead Software Engineer | ID: COMP-006</p>
            </div>
        </div>
    </section>

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
    <script src="/JS/About.js"></script>
</body>
</html>