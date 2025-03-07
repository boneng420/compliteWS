<!--Section-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sections Management - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/Instructor/instructor-section.css') }}">
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

    <div class="container">
        <div class="sections-header">
            <h1>Sections Management</h1>
            <button id="createSectionBtn" class="btn">Create New Section</button>
        </div>

        <table class="sections-table">
            <thead>
                <tr>
                    <th>Section Name</th>
                    <th>Section Code</th>
                    <th>Subject</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="sectionsTableBody">
                <!-- Sections will be dynamically added here -->
            </tbody>
        </table>
    </div>

    <!-- Create Section Modal -->
    <div id="createSectionModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="sectionManager.hideModal('createSectionModal')">×</span>
            <h2>Create New Section</h2>
            <form id="createSectionForm">
                <input type="text" class="form-input" id="sectionName" placeholder="Section Name" required>
                <input type="text" class="form-input" id="sectionSubject" placeholder="Subject" required>
                <button type="submit" class="btn">Create Section</button>
            </form>
        </div>
    </div>

    <!-- Students Modal -->
    <div id="studentsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="sectionManager.hideModal('studentsModal')">×</span>
            <h2 id="sectionStudentsTitle">Students in Section</h2>
            <div class="students-table">
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Grades</th>
                            <th>Points</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sectionStudentsList">
                        <!-- Students will be dynamically added here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 COMPLITE. All rights reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('/public/js/Instructor/Instructor-section.js') }}"></script>
    
</body>
</html>