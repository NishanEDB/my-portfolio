<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishan Bandara | Full Stack Developer</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body { font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
        /* Hero Section */
        .hero { height: 100vh; background: linear-gradient(135deg,#6c63ff,#3f3d56); color: #fff; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; }
        .hero h1 { font-size: 3rem; font-weight: 700; }
        .hero p { font-size: 1.2rem; margin-top: 10px; }
        .btn-primary { background-color: #6c63ff; border: none; }
        .btn-primary:hover { background-color: #5753c9; }

        /* Sections */
        section { padding: 80px 0; }
        .section-title { font-size: 2rem; font-weight: 700; margin-bottom: 40px; text-align: center; position: relative; }
        .section-title::after { content: ''; width: 60px; height: 3px; background: #6c63ff; display: block; margin: 15px auto 0; border-radius: 2px; }

        /* Skills */
        .skills .skill-card { background: #fff; border-radius: 10px; padding: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; transition: transform 0.3s; }
        .skills .skill-card:hover { transform: translateY(-5px); }

        /* Experience Timeline */
        .timeline { position: relative; padding-left: 40px; }
        .timeline::before { content: ''; position: absolute; left: 18px; top: 0; width: 4px; height: 100%; background: #6c63ff; border-radius: 2px; }
        .timeline-item { position: relative; margin-bottom: 40px; }
        .timeline-item::before { content: ''; position: absolute; left: -7px; top: 0; width: 20px; height: 20px; background: #6c63ff; border-radius: 50%; border: 4px solid #fff; }
        .timeline-item h5 { font-weight: 700; }
        .timeline-item span { font-size: 0.9rem; color: #555; }

        /* Projects */
        .project-card { border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .project-card:hover { transform: translateY(-5px); }

        /* Footer */
        footer { background: #343a40; color: #fff; text-align: center; padding: 20px 0; }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1rem; }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
    <h1>Nishan Bandara</h1>
    <p>Full Stack Software Engineer | Flutter & Web Developer</p>
    <p>6+ Years Experience | 4+ Years in Flutter</p>
    <a href="#contact" class="btn btn-primary btn-lg mt-3"><i class="fa fa-envelope"></i> Contact Me</a>
</section>

<!-- About Section -->
<section id="about" class="container">
    <h2 class="section-title">About Me</h2>
    <p class="text-center">
        I am a passionate Full Stack Software Engineer with experience in **Flutter, Laravel, CodeIgniter, React, Java, and C#**. 
        Currently, I work at the **Export Development Board** as a Software Engineer / Programmer focusing on **web and mobile development**. 
        Previously, I worked at **Prodigit Pvt Limited, India** and **Imedirep (VisionCare Group)**. 
        I enjoy creating clean, scalable, and innovative software solutions using the latest technologies.
    </p>
</section>

<!-- Skills Section -->
<section id="skills" class="bg-light">
    <div class="container">
        <h2 class="section-title">My Skills</h2>
        <div class="row g-4 skills">
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-brands fa-flutter fa-2x mb-2"></i><h6>Flutter</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-brands fa-laravel fa-2x mb-2"></i><h6>Laravel</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-solid fa-code fa-2x mb-2"></i><h6>CodeIgniter</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-brands fa-react fa-2x mb-2"></i><h6>React</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-brands fa-java fa-2x mb-2"></i><h6>Java</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-solid fa-server fa-2x mb-2"></i><h6>C#</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-brands fa-google fa-2x mb-2"></i><h6>Firebase / GCP</h6></div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="skill-card"><i class="fa-solid fa-microphone fa-2x mb-2"></i><h6>Agora</h6></div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="container">
    <h2 class="section-title">Experience</h2>
    <div class="timeline">
        <div class="timeline-item">
            <h5>Software Engineer / Programmer</h5>
            <span>Export Development Board | Present</span>
            <p>Web and mobile development using Laravel, CodeIgniter, React, Flutter, and cloud integration (Firebase, GCP).</p>
        </div>
        <div class="timeline-item">
            <h5>Software Engineer</h5>
            <span>Prodigit Pvt Limited, India | 2 Years</span>
            <p>Worked on Flutter and Laravel projects for client solutions and mobile/web apps delivery.</p>
        </div>
        <div class="timeline-item">
            <h5>Associate Software Engineer</h5>
            <span>Imedirep (VisionCare Group) | Prior</span>
            <p>Assisted in web and mobile development projects using Flutter and Laravel.</p>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="bg-light">
    <div class="container">
        <h2 class="section-title">Projects</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="project-card p-3">
                    <img src="https://via.placeholder.com/400x200" class="img-fluid mb-3" alt="Project 1">
                    <h5>Project One</h5>
                    <p>Flutter mobile app integrated with Firebase and GCP backend.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card p-3">
                    <img src="https://via.placeholder.com/400x200" class="img-fluid mb-3" alt="Project 2">
                    <h5>Project Two</h5>
                    <p>Laravel web application with CodeIgniter API integration and React frontend.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card p-3">
                    <img src="https://via.placeholder.com/400x200" class="img-fluid mb-3" alt="Project 3">
                    <h5>Project Three</h5>
                    <p>Real-time video communication app using Flutter and Agora SDK.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container">
    <h2 class="section-title">Contact Me</h2>
    <p class="text-center mb-4">You can reach me via email or social media</p>
    <div class="text-center">
        <a href="mailto:nishan@example.com" class="btn btn-primary mx-2"><i class="fa fa-envelope"></i> Email</a>
        <a href="https://github.com/nishanbandara" target="_blank" class="btn btn-dark mx-2"><i class="fa fa-github"></i> GitHub</a>
        <a href="https://linkedin.com/in/nishanbandara" target="_blank" class="btn btn-info mx-2"><i class="fa fa-linkedin"></i> LinkedIn</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} Nishan Bandara. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>