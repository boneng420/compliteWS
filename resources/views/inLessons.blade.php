<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons - COMPLITE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/inLessons.css') }}">
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

    <body>
        <section class="lesson">
            <h1>Lesson 1: The Parts of a Computer</h1>
            <div class="content">
                <p class="p1">
                    <strong>Objective:</strong><br>
                    By the end of this lesson, students will be able to identify the basic parts of a computer, understand their functions, and differentiate between hardware and software.
                </p>
    
                <h3>What Makes Up a Computer?</h3>
                <p>
                    A computer consists of two main components: hardware and software. Hardware refers to the physical parts of a computer that you can see and touch, while software includes the programs and applications that make the hardware useful. In this lesson, we will focus on the hardware components of a computer.
                </p>
    
                <div class="content1">
                    <h3>Key Hardware Components and Their Functions</h3>
    
                    <!-- Input Devices Section -->
                    <div class="row">
                        <div class="lesson-text">
                            <h4><strong>Input Devices:</strong></h4>
                            <p>
                                Input devices enable you to interact with the computer by sending information or commands to it. These devices allow you to provide instructions, type data, or make selections, helping the computer understand what you want it to do.
                            </p>
                            <ul>
                                <li>Keyboard: Used to type letters, numbers, and commands.</li>
                                <li>Mouse: Used to move the cursor and click on items on the screen.</li>
                                <li>Touchpad (on laptops): A flat surface that acts as a mouse replacement.</li>
                            </ul>
                        </div>
                        <div class="lesson-image">
                            <img src="/Resources/InputDevices.png" alt="Input Devices">
                        </div>
                    </div>
    
                    <!-- Output Devices Section -->
                    <div class="row reverse">
                        <div class="lesson-text">
                            <h4><strong>Output Devices:</strong></h4>
                            <p>
                                Output devices are parts of the computer that allow you to see or hear the results of the computer's work. When you give a computer instructions (input), it processes them and uses output devices to show you the result. These devices turn digital information into something you can perceive—whether it's text, images, sound, or physical copies.
                            </p>
                            <ul>
                                <li>Monitor: The screen where you see the computer's output, like text and images.</li>
                                <li>Printer: Produces physical copies of documents or images.</li>
                                <li>Speakers: Output sound from the computer.</li>
                            </ul>
                        </div>
                        <div class="lesson-image">
                            <img src="/Resources/OutputDevices.png" alt="Output Devices">
                        </div>
                    </div>
    
                    <!-- Central Processing Unit Section -->
                    <div class="row">
                        <div class="lesson-text">
                            <h4><strong>The System Unit:</strong></h4>
                            <p>
                                The system unit is the central part of a computer that houses its main components, including the motherboard, processor (CPU), memory (RAM), storage devices, and power supply. It's the main enclosure that contains all the hardware necessary for the computer to function. While external components such as the monitor, keyboard, and mouse are critical for interaction, the system unit is where most of the computing processes happen.
                            </p>
                           
                        </div>
                        <div class="lesson-image">
                            <img src="/Resources/SystemUnit.png" alt="System Unit">
                        </div>
                    </div>
    
                    <!-- Storage Devices Section -->
                    <div class="row">
                        <div class="lesson-image">
                            <img src="/Resources/StorageDevices.png" alt="Storage Devices">
                        </div>
                        <div class="lesson-text">
                            <h4><strong>Storage Devices:</strong></h4>
                            <p>
                                Storage devices are essential components of a computer that are used to store data, files, and programs. They ensure that information is kept secure and readily accessible for future use, whether it's saved on the computer's internal hard drive, an external device, or in the cloud.
                            </p>
                            <ul>
                                <li>Hard Drive (HDD) or Solid-State Drive (SSD): Store your files, software, and operating system.</li>
                                <li>USB Flash Drive: A portable storage device for transferring data.</li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Peripheral Devices Section -->
                    <div class="row">
                        <div class="lesson-text">
                            <h4><strong>Peripheral Devices:</strong></h4>
                            <p>
                                These are additional devices that can be connected to a computer to enhance its functionality or provide extra features. While not required for the computer to operate, they allow users to perform specialized tasks, such as capturing video, expanding storage, or enjoying personal audio experiences.
                            </p>
                            <ul>
                                <li>Webcam: A webcam captures video input, allowing you to record or stream video for purposes like video calls or content creation.</li>
                                <li>External Hard Drive: An external hard drive provides additional storage space for your computer, allowing you to back up and transfer large amounts of data.</li>
                                <li>Headphones: Headphones are used for personal audio output, letting you listen to sound privately without disturbing others.</li>
                            </ul>
                        </div>
                        <div class="lesson-image">
                            <img src="/Resources/PeripheralDevices.png" alt="Peripheral Devices">
                        </div>
                    </div>
                </div>
    
                <p class="p4">
                    <br>By understanding the parts of a computer and their functions, you can better appreciate how these components work together to help you perform tasks efficiently. Computers are not just tools—they are systems of interconnected parts that rely on both hardware and software to operate.
                </p>
    
                <div class="btn-wrapper">
                    <button onclick="window.location.href='/HTML/Lessons.html'">Done</button>
                </div>
            </div>
        </section>
    </body>
    
    <footer>
        <p>&copy; 2024 COMPLITE. All rights reserved.</p>
    </footer>
    
    <script src="lessons.js"></script>

</html>
