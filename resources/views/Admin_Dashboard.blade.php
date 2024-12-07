<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/public/css/Admin/Admin.css') }}">
</head>
<body>

<div class="sidebar">
    <h2>Admin Dashboard</h2>
    <button onclick="showSection('accountForm')">Account</button>
    <button onclick="showSection('reportsSection')">Reports</button>
    <button onclick="showSection('userOverview')">User Overview</button>
    <button onclick="showSection('courseManagement')">Courses</button>
    <button onclick="showSection('activities')">Activities</button>
</div>

<div class="main-content">
    <!-- Account Form -->
    <div id="accountForm" class="dashboard-card">
    <h3>Create Account</h3>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.create-account') }}">
        @csrf
        <label class="label">First Name</label>
        <input type="text" name="firstName" class="input" placeholder="Enter First Name" value="{{ old('firstName') }}" required>
        
        <label class="label">Last Name</label>
        <input type="text" name="lastName" class="input" placeholder="Enter Last Name" value="{{ old('lastName') }}" required>
        
        <label class="label">Middle Name</label>
        <input type="text" name="middleName" class="input" placeholder="Enter Middle Name" value="{{ old('middleName') }}">
        
        <label class="label">Birthdate</label>
        <input type="date" name="birthdate" class="input" value="{{ old('birthdate') }}" required>
        
        <label class="label">Sex</label>
        <select name="sex" class="select" required>
            <option value="">Select Sex</option>
            <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ old('sex') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
        
        <label class="label">Email</label>
        <input type="email" name="email" class="input" placeholder="Enter Email" value="{{ old('email') }}" required>
        
        <label class="label">Username</label>
        <input type="text" name="username" class="input" placeholder="Enter Username" value="{{ old('username') }}" required>
        
        <label class="label">Password</label>
        <input type="password" name="password" class="input" placeholder="Enter Password" required>
        
        <label class="label">Account Type</label>
        <select name="accountType" class="select" required>
            <option value="">Select Account Type</option>
            <option value="Admin" {{ old('accountType') == 'Admin' ? 'selected' : '' }}>Admin</option>
            <option value="Instructor" {{ old('accountType') == 'Instructor' ? 'selected' : '' }}>Instructor</option>
            <option value="Student" {{ old('accountType') == 'Student' ? 'selected' : '' }}>Student</option>
        </select>
        
        <button type="submit" class="button">Create Account</button>
    </form>
</div>

    <!-- Reports Section -->
    <div id="reportsSection" class="dashboard-card" style="display: none;">
        <h3>Reports</h3>
        <table>
            <thead>
                <tr>
                    <th>Report ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Time and Date</th>
                </tr>
            </thead>
            <tbody>
                <tr onclick="showReportResponse(1, 'Issue with Login', 'Users cannot log in.', '2024-12-01 10:30 AM')">
                    <td>1</td>
                    <td>Issue with Login</td>
                    <td>Users cannot log in.</td>
                    <td>2024-12-01 10:30 AM</td>
                </tr>
                <tr onclick="showReportResponse(2, 'Website Slow', 'Website is slow during traffic.', '2024-12-02 03:45 PM')">
                    <td>2</td>
                    <td>Website Slow</td>
                    <td>Website is slow during traffic.</td>
                    <td>2024-12-02 03:45 PM</td>
                </tr>
            </tbody>
        </table>
        <div id="responseArea" style="display: none;">
            <label class="label">Response for Report <span id="reportId"></span>: <span id="reportTitle"></span></label>
            <textarea class="textarea" id="responseText" placeholder="Enter your response here..."></textarea>
            <button class="button" onclick="submitResponse()">Submit Response</button>
        </div>
    </div>

    <!-- User Overview -->
    <div id="userOverview" class="dashboard-card" style="display: none;">
        <h3>User Overview</h3>
        <div class="stat">Total Students: 100</div>
        <div class="stat">Total Instructors: 20</div>
        <div class="stat">Total Admins: 5</div>
    </div>

    <!-- Course Management -->
    <div id="courseManagement" class="dashboard-card" style="display: none;">
        <h3>Courses</h3>
        <div class="stat">Total Courses: 10</div>
    </div>

    <!-- Activities -->
    <div id="activities" class="dashboard-card" style="display: none;">
        <h3>Activities</h3>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quiz 1</td>
                    <td>Introduction to Algebra</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    <script src="/complite/resources/js/Admin/Admin.js"></script>
</body>
</html>

function showSection(sectionId) {
    const sections = document.querySelectorAll('.dashboard-card');
    sections.forEach(section => section.style.display = 'none');
    document.getElementById(sectionId).style.display = 'block';
}

function showReportResponse(reportId, title, description, date) {
    document.getElementById('responseArea').style.display = 'block';
    document.getElementById('reportId').textContent = reportId;
    document.getElementById('reportTitle').textContent = title;
}

function submitResponse() {
    const responseText = document.getElementById('responseText').value;
    alert(Response submitted: ${responseText});
    document.getElementById('responseText').value = "";
    document.getElementById('responseArea').style.display = 'none';
} 