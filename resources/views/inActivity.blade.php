<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complite - Activity</title>
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/inActivity.css') }}">
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

    <main>
        <section class="activity">
            <div class="progress-container">
                <div id="progressBar" class="progress-bar"></div>
            </div>
            <h1>Activity</h1>
            <div class="question-area">
                <p id="question"></p>
            </div>
            <div class="activity-content">
                <div class="activity-image">
                    <img id="activityImage" src="/path/to/activity-image.jpg" alt="Activity Image">
                </div>
                <div class="activity-controls">
                    <button id="btn1">Button 1</button>
                    <button id="btn2">Button 2</button>
                    <button id="btn3">Button 3</button>
                    <button id="btn4">Button 4</button>
                </div>
            </div>
            <div id="feedbackArea" class="feedback-area"></div>
            <div class="activity-navigation">
                <button id="previousBtn" class="previous">Previous</button>
                <button id="nextBtn" class="next">Next</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 COMPLITE. All rights reserved.</p>
    </footer>

    <script src="/JS/inActivity.js"></script>
</body>
</html>