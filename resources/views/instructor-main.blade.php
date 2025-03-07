<!-- dashboard -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Dashboard - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/public/css/Instructor/Instructor-main.css') }}">
   

</head>
<body>
  
    <header class="header-bottom">
        <div class="container">
            <a href="#" class="logo">COMPLITE</a>
            <nav class="navbar">
                <a href="{{ route('instructor.main') }}" class="nav-link">Dashboard</a>
                <a href="{{ route('instructor.sections') }}" class="nav-link">Sections</a>
                <a href="{{ route('instructor.profile') }}" class="nav-link">Profile</a>
                <a href="{{ route('instructor.logout') }}" id="logoutBtn" class="nav-link logout-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content container">
        <div class="content-header">
            <h1>Professor Dashboard</h1>
        </div>

        <div class="dashboard-grid">
            <!-- Sections Container -->
            <div class="sections-container">
                <h2>Your Sections</h2>
                <div id="sectionsGrid" class="card-grid">
                    <div class="empty-sections">
                        <p>No sections have been created yet.</p>
                        <p>Go to the Sections page to create your first section.</p>
                    </div>
                </div>
            </div>

            <!-- News and Calendar Container -->
            <div class="news-container">
                <h2>Recent Student News</h2>
                <div id="studentNews">
                    <!-- Only Student-Generated News Will Be Added Here -->
                </div>
            </div>
        </div>

        <!-- Calendar Container -->
        <div class="calendar-container">
            <h2>Activity Calendar</h2>
            <div id="calendar"></div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About COMPLITE</h3>
                <p>Empowering education through interactive learning</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="/HTML/instructor-main.html">Dashboard</a></li>
                    <li><a href="/HTML/instructor-section.html">Sections</a></li>
                    <li><a href="/HTML/instructor-profile.html">Profile</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Support</h3>
                <p>Email: support@complite.com</p>
                <p>Phone: +1 (555) 123-4567</p>
            </div>
            <div class="footer-section">
                <h3>About Us</h3>
                <p>COMPLITE is dedicated to creating innovative educational experiences and interactive learning platforms.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 COMPLITE. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script src="{{ asset('/public/js/Instructor/Instructor-main.js') }}"></script>
</body>
</html>