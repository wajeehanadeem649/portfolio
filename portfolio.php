<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Notebook</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: #333;
        }
        .wrapper {
            position: relative;
            width: 72rem;
            height: 56rem;
            border: 1.5rem solid #00abf0;
            border-radius: 1rem;
            perspective: 2000px;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0, 171, 240, 0.5);
        }
        .book {
            position: relative;
            width: 90%;
            height: 94%;
            display: flex;
        }
        .book-page {
            position: absolute;
            width: 50%;
            height: 100%;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 1rem;
            transition: transform 1s ease-in-out, opacity 0.6s ease-in-out;
            transform-origin: left;
            z-index: 1;
            opacity: 0;
            pointer-events: none;
            border-radius: 0.5rem;
            text-align: center;
        }
        .left-page { left: 0; }
        .right-page { right: 0; transform-origin: right; }
        .active {
            z-index: 2;
            opacity: 1;
            pointer-events: auto;
        }
        .flipping {
            transform: rotateY(-180deg);
        }
        .nextprev-btn {
            position: absolute;
            bottom: 1rem;
            cursor: pointer;
            font-size: 1rem;
            color: #fff;
            background: #374043;
            padding: 0.5rem 1rem;
            border-radius: 50%;
            transition: 0.3s;
            z-index: 10;
            
            box-shadow: 0 3px 10px rgba(0, 171, 240, 0.5);
        }
        .nextprev-btn:hover {
            background: #008ccf;
        }
        .nextprev-btn.back {
            left: 1rem;
        }
        .nextprev-btn.forward {
            right: 1rem;
        }
      /* General Styles */
h1, h2, h3 {
    text-align: center;
    color: #00abf0;
    font-weight: bold;
}

h1 {
    font-size: 2rem;
    border-bottom: 3px solid #00abf0;
    padding-bottom: 0.5rem;
    margin-bottom: 1.5rem;
}

h2 {
    font-size: 1.8rem;
    margin-top: 0.5rem;
}

h3 {
    font-size: 1.2rem;
    color: #374151;
    margin-bottom: 1rem;
}

p {
    font-size: .9rem;
    color: #6e6c6c;
    text-align: justify;
}

        ul {
            list-style: none;
            padding-left: 0;
        }
        ul li {
            font-size: 1.2rem;
            padding: 0.3rem 0;
            color: #333;
        }
        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #00abf0;
            margin-bottom: 1rem;
            margin-top: 6rem;
        }
        .btn-custom {
            display: inline-block;
            padding: 0.5rem 1.2rem;
            margin-top: 2rem;
            font-size: 1rem;
            color: #fff;
            background: #00abf0;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #008ccf;
        }
      /* General Education Section Styles */
     /* Education Section */
.education-section {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
    margin-top: 2rem;
    padding: 0 1.5rem;
}

/* Education Item */
.education-item {
    width: 100%;
    max-width: 320px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.education-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
}

/* Education Card */
.education-card {
    background-color: #ffffff;
    padding: 1rem;
    border-radius: 20px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 210px;
    position: relative;
    overflow: hidden;
}

.education-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(145deg, #4d81e1, #1f2d71);
    opacity: 0.1;
    z-index: -1;
    transition: opacity 0.3s ease-in-out;
}

.education-card:hover::before {
    opacity: 0.25;
}

.education-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    background-color: #f0f8ff;
}

/* Education Header */
.education-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.education-header i {
    font-size: 2.5rem;
    color: #1e3a8a;
    transition: transform 0.3s ease;
}

.education-header:hover i {
    transform: rotate(10deg);
}

.education-header h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Education Footer */
.education-footer {
    margin-top: auto;
}

.education-footer .percentage {
    font-size: 1rem;
    font-weight: 700;
    color: #007bff;
    background-color: #e0f7fa;
    padding: 0.5rem 1rem;
    border-radius: 12px;
    display: inline-block;
    margin-top: .5rem;
    transition: background-color 0.3s ease;
}

.education-footer .percentage:hover {
    background-color: #004f8e;
    color: #fff;
}

.education-card p {
    font-size: 1rem;
    color: #555;
    margin: 0.5rem 0;
    line-height: 1.5;
}

/* Hover Effects on Card */
.education-card:hover p {
    color: #333;
}

/* Page Number */
.page-number {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: #555;
    font-weight: bold;
}

/* Responsive Design for Smaller Screens */
@media (max-width: 768px) {
    .education-section {
        padding: 0 1rem;
    }

    .education-card {
        padding: 1.5rem;
    }

    .education-header h3 {
        font-size: 1.2rem;
    }

    .education-footer .percentage {
        font-size: 1rem;
        padding: 0.4rem 0.8rem;
    }
}

@media (max-width: 480px) {
    .education-section {
        flex-direction: column;
        padding: 0 0.5rem;
    }

    .education-card {
        padding: 1rem;
        height: auto;
    }

    .education-header h3 {
        font-size: 1.1rem;
    }

    .education-header i {
        font-size: 2rem;
    }
}
/* Main Layout */
.skills-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 30px;
    background: linear-gradient(90deg, #007bff, #10e7f2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
  }
  
  .skills-section {
    display: flex;
    flex-direction: column;
    gap: 25px;
    padding: 10px;
  }
  
  /* Glassmorphism Box */
  .skills-category.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border-radius: 16px;
    padding: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.2);
  }
  
  /* Badges */
  .skill-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 10px;
  }
  
  .badge {
    color: white;
    font-weight: 600;
    padding: 10px 18px;
    display: inline-block;
    font-size: 0.9rem;
    transition: transform 0.3s ease;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }
  
  .badge:hover {
    transform: scale(1.1);
  }
  
  /* Shapes */
  .circle { border-radius: 50px; }
  .rounded { border-radius: 10px; }
  .pill { border-radius: 999px; }
  .square { border-radius: 5px; }
  .hexagon {
    clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
  }
  
  /* Colors */
  .blue { background: linear-gradient(135deg, #007bff, #00c6ff); }
  .purple { background: linear-gradient(135deg, #6610f2, #9d4edd); }
  .orange { background: linear-gradient(135deg, #1e7d57, #73fb34); }
  .teal { background: linear-gradient(135deg, #20c997, #12c2e9); }
  .green { background: linear-gradient(135deg, #28a745, #a2facf); }
  .pink { background: linear-gradient(135deg, #41e6ff, #2d522d); }
  .red { background: linear-gradient(135deg, #3583dc, #ff6a6a); }
  .cyan { background: linear-gradient(135deg, #17a2b8, #00e0ff); }
  .indigo { background: linear-gradient(135deg, #6610f2, #8a2be2); }
  .violet { background: linear-gradient(135deg, #6f42c1, #b983ff); }
  .skills-category  h2{
    font-size: 20px;
  }
  /* Responsive */
  @media (max-width: 768px) {
    .skill-badges {
      justify-content: center;
    }
  }
  

.project {
    background-color: #f8f9fa;
    padding: .5rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
}

.project:hover {
    transform: scale(1.02);
    background-color: #e6f4ff;
}

.project h2 {
    font-size: .9rem;
    font-weight: bold;
    color: #00abf0;
}

.project p {
    font-size: 0.9rem;
    color: #555;
}

.tech-stack {
    display: inline-block;
    font-size: 0.6rem;
    font-weight: bold;
    color: #008ccf;
    background: #e3f2fd;
    padding: 0.3rem 0.6rem;
    border-radius: 5px;
}

.timeline {
    position: relative;
    padding-left: 40px;
    display: flex;
    flex-direction: column;
    gap: 40px;
    margin-top: 20px;
  }
  
  .timeline::before {
    content: '';
    position: absolute;
    margin-top: 1.8rem;
    left: 27px;
    width: 4px;
    height: 90%;

    background: linear-gradient(to bottom, #6a11cb, #2575fc);
    border-radius: 2px;
  }
  
  /* Timeline Item */
  .timeline-item {
    position: relative;
    padding-left: 50px;
  }
  
  /* Icon + Pulse Circle */
  .icon {
    position: absolute;
    margin-top: 2rem;
    left: 0;
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 0.9rem;
    z-index: 1;
  }
  
  .icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    animation: pulse 2s infinite;
    background: inherit;
    z-index: -1;
  }
  
  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(106, 17, 203, 0.5);
      transform: scale(1);
    }
    50% {
      box-shadow: 0 0 0 12px rgba(106, 17, 203, 0);
      transform: scale(1.15);
    }
    100% {
      box-shadow: 0 0 0 0 rgba(106, 17, 203, 0);
      transform: scale(1);
    }
  }
  
  /* Content */
  .certification-info h3 {
    font-size: 1.25rem;
    margin-top: 2rem;
    text-align: justify;
    color: #37728d;
    font-weight: 600;
  }
  
  .certification-info p {
    margin-top: 6px;
    font-size: 0.95rem;
    color: #726f6f;
    line-height: 1.6;
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .timeline {
      padding-left: 25px;
    }
  
    .timeline::before {
      left: 12px;
    }
  
    .timeline-item {
      padding-left: 45px;
    }
  
    .icon {
      left: -5px;
    }
  }
  
  

.contact-container {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease-in-out;
}

.contact-item:hover {
    background: #e6f4ff;
}

.contact-item i {
    font-size: 1.5rem;
    color: #00abf0;
    padding: 0.5rem;
}

.contact-item h3 {
    font-size: 1.1rem;
    color: #374151;
    margin-bottom: 0.2rem;
}

.contact-item p a {
    text-decoration: none;
    color: #008ccf;
    font-weight: bold;
}

.contact-item p a:hover {
    text-decoration: underline;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
}

.contact-form button {
    width: 100%;
    padding: 0.8rem;
    background: #00abf0;
    color: #fff;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.contact-form button:hover {
    background: #008ccf;
}
 
        .page-number {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1rem;
            color: #555;
        }

        html {
  scroll-behavior: smooth;
}

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="book">
            <!-- Left Page (Profile) -->
            <div class="book-page active left-page" id="page1">
                <h1 class="skills-title">✨ Profile</h1>
                <img src="https://cdn-icons-png.flaticon.com/512/4537/4537097.png" alt="Profile Photo" class="profile-img">
                <h2>Wajeeha Nadeem</h2>
    <h3>Software Engineer | Web Developer</h3>
    
    <p>
        Passionate software engineer with expertise in full-stack web development, 
        specializing in PHP, JavaScript, and MySQL. Enthusiastic about building 
        user-friendly applications and scalable systems.
    </p>
    
    <button class="btn-custom" onclick="window.print()">
  <i class="fa-solid fa-download"></i> Print Resume (PDF)
</button>

<a href="https://linkedin.com/in/example" class="btn-custom" id="contactMeButton"><i class="fa-solid fa-envelope"></i> Contact Me</a>


            </div>


<!-- Right Page (Education) -->
<div class="book-page active right-page" id="page2">
    <h1 class="skills-title">✨ Education</h1>
  
    
    <!-- Education Section -->
    <div class="education-section">
        <div class="education-item">
            <div class="education-card">
                <div class="education-header">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <h3>Software Engineering</h3>
                </div>
                <p><strong>University of Agriculture Faisalabad</strong> (2021-2025)</p>
                <div class="education-footer">
                    <span class="percentage">81%</span>
                </div>
            </div>
        </div>

        <div class="education-item">
            <div class="education-card">
                <div class="education-header">
                    <i class="fa-solid fa-school"></i>
                    <h3>FSc Pre-engineering</h3>
                </div>
                <p><strong>Sandal College Faisalabad</strong> (2019-2021)</p>
                <div class="education-footer">
                    <span class="percentage">92%</span>
                </div>
            </div>
        </div>

        <div class="education-item">
            <div class="education-card">
                <div class="education-header">
                    <i class="fa-solid fa-user-graduate"></i>
                    <h3>Matriculation</h3>
                </div>
                <p><strong>Sacred Angel School</strong> (2017-2019)</p>
                <div class="education-footer">
                    <span class="percentage">90%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="page-number">1</div>
</div>

          <!-- Left Page (Projects) -->
<div class="book-page left-page" id="page3">
    <h1 class="skills-title">✨ Projects</h1>
    
    <div class="projects-section">
        <div class="project">
            <h2>Portfolio Website</h2>
            <p>A sleek and interactive personal portfolio showcasing skills, education, and projects.</p>
            <span class="tech-stack">HTML, CSS, JavaScript, PHP, MySQLi</span>
        </div>

        <div class="project">
            <h2>Code Editor</h2>
            <p>A real-time web-based code editor supporting multiple programming languages.</p>
            <span class="tech-stack">JavaScript, HTML, CSS</span>
        </div>

        <div class="project">
            <h2>Chat Application</h2>
            <p>A real-time chat application with user authentication and message storage.</p>
            <span class="tech-stack">HTML, CSS, JavaScript, PHP, MySQLi</span>
        </div>

        <div class="project">
            <h2>Attendance System</h2>
            <p>An automated attendance system with GPS-based validation and selfie check-in.</p>
            <span class="tech-stack">HTML, CSS, JavaScript, PHP, MySQLi</span>
        </div>

        <div class="project">
            <h2>Validated Forms</h2>
            <p>Secure and user-friendly forms with real-time validation and database integration.</p>
            <span class="tech-stack">PHP, MySQLi, JavaScript</span>
        </div>

        <div class="project">
            <h2>Quiz Form</h2>
            <p>A dynamic quiz platform with timer-based questions and result calculation.</p>
            <span class="tech-stack">HTML, CSS, JavaScript</span>
        </div>

        <div class="project">
            <h2>E-Commerce Website (Final Year Project)</h2>
            <p>
                A full-featured e-commerce platform allowing customers to buy electronic products,  
                request repairs from technicians, view automatic ratings, and receive AI-based product recommendations.
            </p>
            <span class="tech-stack">HTML, CSS, JavaScript, PHP, MySQLi, Python</span>
        </div>
    </div>

    <div class="page-number">2</div>
</div>

<div class="book-page right-page" id="page4">
    <h1 class="skills-title">✨ Skills</h1>
  
    <div class="skills-section">
  
      <!-- Frontend -->
      <div class="skills-category glass">
        <h2>Frontend Development</h2>
        <div class="skill-badges">
          <span class="badge circle blue">HTML</span>
          <span class="badge circle purple">CSS</span>
          <span class="badge circle orange">JavaScript</span>
          <span class="badge circle teal">React</span>
          <span class="badge circle green">Next.js</span>
          <span class="badge rounded indigo">Bootstrap</span>
        </div>
      </div>
  
      <!-- Backend -->
      <div class="skills-category glass">
        <h2>Backend Development</h2>
        <div class="skill-badges">
          <span class="badge hexagon pink">PHP</span>
          <span class="badge hexagon cyan">MySQL</span>
          <span class="badge hexagon red">FastAPI</span>
        </div>
      </div>
  
      <!-- Tools & Technologies -->
      <div class="skills-category glass">
        <h2>Tools & Technologies</h2>
        <div class="skill-badges">
          <span class="badge square violet">Git</span>
          <span class="badge square violet">GitHub</span>
          <span class="badge square orange">Firebase</span>
          <span class="badge square blue">Google Apps Script</span>
          <span class="badge square purple">VS Code</span>
        </div>
      </div>
  
      <!-- Design -->
      <div class="skills-category glass">
        <h2>Design & UI</h2>
        <div class="skill-badges">
          <span class="badge pill pink">Figma</span>
          <span class="badge pill green">Canva</span>
        </div>
      </div>
    </div>
  
    <div class="page-number">3</div>
  </div>
  
  <div class="book-page left-page" id="page5">
    <h1 class="skills-title">✨ Work Experience</h1>
  
    <div class="certification-container timeline">
  
      <div class="timeline-item">
        <div class="icon"><i class="fa-solid fa-award"></i></div>
        <div class="certification-info">
          <h3>E-Hunar Kamyab Jawan Program</h3>
          <p>Completed a <strong>6-month online web development</strong> course with hands-on projects.</p>
        </div>
      </div>
  
      <div class="timeline-item">
        <div class="icon"><i class="fa-solid fa-university"></i></div>
        <div class="certification-info">
          <h3>University of Agriculture Faisalabad</h3>
          <p>Completed a <strong>2-month web development</strong> course at Agri Extension Building.</p>
        </div>
      </div>
  
      <div class="timeline-item">
        <div class="icon"><i class="fa-solid fa-briefcase"></i></div>
        <div class="certification-info">
          <h3>Micrologicx Software House</h3>
          <p>Completed a <strong>6-week internship</strong> in web development at Jinnah Colony, Faisalabad.</p>
        </div>
      </div>
  
    </div>
  
    <div class="page-number">4</div>
  </div>
  
  <div id="contact">
  <!-- Right Page (Contact) -->
  <div class="book-page right-page" id="page6">
  <h1 class="skills-title">✨ Contact Me</h1>

    <div class="contact-container">
        <div class="contact-item">
            <i class="fa-solid fa-envelope"></i>
            <div>
                <h3>Email</h3>
                <p><a href="wajeehanadeem649@gmail.com">wajeehanadeem649@gmail.com</a></p>
            </div>
        </div>

        <div class="contact-item">
            <i class="fa-brands fa-linkedin"></i>
            <div>
                <h3>LinkedIn</h3>
                <p><a href="https://linkedin.com/in/example" target="_blank">linkedin.com/in/example</a></p>
            </div>
        </div>

        <div class="contact-item">
            <i class="fa-brands fa-github"></i>
            <div>
                <h3>GitHub</h3>
                <p><a href="https://github.com/wajeehanadeem649" target="_blank">https://github.com/wajeehanadeem649</a></p>
            </div>
        </div>

    </div>
    


    <h2>Send a Message</h2>
    <form class="contact-form" method="POST" action="">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
    <button type="submit" class="btn-custom">Send Message</button>
</form>


    <div class="page-number">5</div>
</div></div>
            <!-- Navigation Buttons -->
            <span class="nextprev-btn back" id="prevBtn"><i class="fa-solid fa-chevron-left"></i></span>
            <span class="nextprev-btn forward" id="nextBtn"><i class="fa-solid fa-chevron-right"></i></span>
        </div>
    </div>

    <script>
        let currentPage = 1;
        const totalPages = 6; 
        const pages = document.querySelectorAll('.book-page');

        function updatePages() {
            pages.forEach(page => {
                page.classList.remove('active');
                page.style.transform = 'rotateY(0deg)';
            });

            let leftPage = document.getElementById(`page${currentPage}`);
            let rightPage = document.getElementById(`page${currentPage + 1}`);

            if (leftPage) leftPage.classList.add('active');
            if (rightPage) rightPage.classList.add('active');
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentPage + 2 <= totalPages) {
                let leftPage = document.getElementById(`page${currentPage}`);
                let rightPage = document.getElementById(`page${currentPage + 1}`);

                leftPage.classList.add('flipping');
                rightPage.classList.add('flipping');

                setTimeout(() => {
                    currentPage += 2;
                    updatePages();
                }, 500);
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentPage - 2 >= 1) {
                let leftPage = document.getElementById(`page${currentPage - 2}`);
                let rightPage = document.getElementById(`page${currentPage - 1}`);

                leftPage.classList.remove('flipping');
                rightPage.classList.remove('flipping');

                setTimeout(() => {
                    currentPage -= 2;
                    updatePages();
                }, 500);
            }
        });
    </script>
<script>
  document.querySelector('#scrollToContact').addEventListener('click', function(event) {
    event.preventDefault(); // Prevents default behavior (if any)
    document.querySelector('#contact').scrollIntoView({
      behavior: 'smooth'  // This enables smooth scroll
    });
  });
</script>



    
</body>
</html>
