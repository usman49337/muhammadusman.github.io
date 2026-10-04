<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Usman | Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="Logo.png">
</head>
<style>
    .card {
        background: rgba(15, 23, 42, 0.45) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-color: rgba(34, 211, 238, 0.25) !important;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-6px);
        border-color: rgba(34, 211, 238, 0.7) !important;
        box-shadow: 0 15px 40px rgba(34, 211, 238, 0.12);
    }
    .profile-img {
        transition: all 0.5s ease;
        border-radius: 20px;
        box-shadow: 0 0 15px rgba(13, 202, 240, 0.25);
    }

    .profile-img:hover {
        transform: scale(1.08);
        box-shadow:
            0 0 10px #0dcaf0,
            0 0 20px rgba(13, 202, 240, 0.5),
            0 0 50px rgba(49, 46, 129, 0.5);
    }
    .form-control {
    background: #020617 !important;
    color: white;
    }
  .btn {
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn:hover {
    transform: scale(1.12) translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
    filter: brightness(1.1);
}
</style>
<body class="bg-dark text-light min-vh-100" style=" background: radial-gradient(circle at 10% 20%, #164E63 0%, transparent 30%), radial-gradient(circle at 90% 10%, #312E81 0%, transparent 30%), radial-gradient(circle at 50% 90%, #0F766E 0%, transparent 35%), linear-gradient(135deg, #020617, #0F172A); background-attachment: fixed; min-height: 100vh;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent border border-secondary border-opacity-50 mx-auto mt-3 mb-4 rounded-4 shadow-lg w-75 h-25">
            <div class="container">
                <a class="navbar-brand fw-bold text-info d-flex align-items-center gap-2" href="#home">
                <img src="Logo.png" alt="#" width="50" height="50">Muhammad Usman
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                        <li class="nav-item">
                            <a class="nav-link btn" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item mt-2 mt-lg-0">
                            <a href="#contact" class="btn btn-info fw-semibold btn-sm"><i class="bi bi-send-fill me-2"></i>Hire Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="home" class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-7">
                    <span class="badge bg-transparent border border-secondary rounded-pill mb-3 px-3 py-2"><span class="text-success"><i class="bi bi-circle-fill me-2 small"></i></span>Software Engineering Student</span>
                    <h1 class="text-light fw-bold display-2">Hi, I'm <span class="text text-info">Usman</span></h1>
                    <p class="text text-light fs-5">
                        UI/UX Designer | Frontend Developer | MySQL<br> | Developer | Google Data Analyst | SEO Specialist<br> | and Figma Designer.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#projects" class="btn btn-primary"><i class="bi bi-rocket-takeoff-fill me-2"></i>Explore my Work</a>
                        <a href="#contact" class="btn btn-outline-light"><i class="bi bi-chat-fill me-2"></i>Let's Connect</a>
                        <a href="https://github.com/" class="btn btn-outline-secondary"><span class="text-light"><i class="bi bi-github"></i></span></a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 mt-3">
                    <img src="profile.png" alt="#" class="profile-img rounded-4 border border-2 border-info" height="250" width="250">
                </div>
            </div>
            <div class="container-fluid py-4 mt-5">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="card bg-transparent border-secondary rounded-4">
                            <div class="card-body text-center">
                                 <i class="bi bi-briefcase-fill fs-1 text-info"></i>
                                <h2 class="fs-3 fw-bold mb-2 text-light">1+</h2>
                                <p class="text-secondary fw-semibold mb-0">Years <br> Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <div class="card bg-transparent border-secondary rounded-4">
                           <div class="card-body text-center">
                                <i class="bi bi-bezier2 fs-1 text-info"></i>
                               <h2 class="fs-3 fw-bold mb-2 text-light">5+</h2>
                               <p class="text-secondary fw-semibold mb-0">Completed Projects</p>
                           </div>
                       </div>
                   </div>
                     <div class="col-md-2">
                        <div class="card bg-transparent border-secondary rounded-4">
                            <div class="card-body text-center">
                                 <i class="bi bi-people fs-1 text-info"></i>
                                <h2 class="fs-3 fw-bold mb-2 text-light">5+</h2>
                                <p class="text-secondary fw-semibold mb-0">Happy <br> Clients</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="card bg-transparent border-secondary rounded-4">
                            <div class="card-body text-center">
                                 <i class="bi bi-cpu-fill fs-1 text-info"></i>
                                <h2 class="fs-3 fw-bold mb-2 text-light">10+</h2>
                                <p class="text-secondary fw-semibold mb-0">Mastered Technologies</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="card bg-transparent border-secondary rounded-4">
                            <div class="card-body text-center">
                                 <i class="bi bi-globe-americas fs-1 text-info"></i>
                                <h2 class="fs-3 fw-bold mb-2 text-light">2+</h2>
                                <p class="text-secondary fw-semibold mb-0">Countries <br> Served</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="card bg-transparent border-secondary rounded-4">
                            <div class="card-body text-center">
                                 <i class="bi bi-shield-fill fs-1 text-info"></i>
                                <h2 class="fs-3 fw-bold mb-2 text-light">100%</h2>
                                <p class="text-secondary fw-semibold mb-0">Client Success Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="container py-5">
            <div class="text-center mt-4 mb-5">
                <span class="badge bg-transparent border border-secondary rounded-pill mb-3 px-3 py-2 text-info">Web Development Excellence</span>
                <h1 class="text-light">About <span class="text-info">Muhammad Usman</span></h1>
            </div>
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6">
                    <div class="card h-100 bg-transparent border-secondary rounded-4">
                        <div class="card-body p-4">
                            <h4 class="text-light mb-3">Professional Overview</h4>
                            <p class="text-secondary mb-0">I'm a passionate Web Developer with 1 year of hands-on experience building responsive websites and web applications. I work with HTML5, CSS3, Bootstrap, PHP, MySQL, WordPress, Shopify, and Figma, with a focus on creating clean, responsive, and user-friendly digital experiences.<br><br>
                            I have experience developing and customizing websites, creating responsive layouts, working with databases, and building PHP-based web solutions. I also have experience with WordPress and Shopify customization, along with UI/UX design using Figma.<br><br>
                            My approach is focused on writing clean, maintainable code and creating solutions that are practical, responsive, and aligned with business requirements. I enjoy learning new technologies and turning ideas into functional digital products.
                            <br><br>
                            <strong class="text-light">Core Skills:</strong><br>HTML5 • CSS3 • Bootstrap • PHP • MySQL • WordPress • Shopify • Figma • Responsive Web Design • UI/UX • Web Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-transparent border-secondary rounded-4 mb-4">
                        <div class="card-body p-4">
                            <i class="bi bi-bullseye text-info fs-2"></i>
                            <h4 class="text-light mt-3">My Mission</h4>
                            <p class="text-secondary mb-0">To create modern, user-friendly, and effective digital experiences that help businesses build a strong online presence and achieve their goals.</p>
                        </div>
                    </div>
                    <div class="card bg-transparent border-secondary rounded-4 mb-4">
                        <div class="card-body p-4">
                            <i class="bi bi-eye-fill text-info fs-2"></i>
                            <h4 class="text-light mt-3">My Vision</h4>
                            <p class="text-secondary mb-0">To continuously grow as a developer and create innovative digital solutions by combining technology, creativity, and meaningful user experiences.</p>
                        </div>
                    </div>
                    <div class="card bg-transparent border-secondary rounded-4">
                        <div class="card-body p-4">
                            <i class="bi bi-gem text-info fs-2"></i>
                            <h4 class="text-light mt-3">Core Values</h4>
                            <p class="text-secondary mb-0">Quality, integrity, innovation, collaboration, and continuous learning guide every. I focus on writing clean code, building reliable solutions, and delivering practical digital experiences.</p>
                        </div>
                    </div>
                </div>
                <section class="container-fluid px-3 py-5">
                    <div class="card bg-dark rounded-4 shadow-lg">
                        <div class="card-body px-4 px-lg-5 py-5">
                            <div class="text-center mb-5">
                                <span class="badge bg-transparent border border-secondary rounded-pill text-info px-4 py-2 mb-3">METHODOLOGY</span>
                                <h2 class="text-light fw-bold display-6 mb-0">The Engineering Process</h2>
                            </div>
                            <div class="row g-4 text-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="p-3">
                                        <h5 class="text-light fw-bold">1. Discovery & Strategy</h5>
                                        <p class="text-secondary lh-lg mb-0">Understand business goals, user needs, and technical requirements to define a clear roadmap.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="p-3">
                                        <h5 class="text-light fw-bold">2. Architecture & Planning</h5>
                                        <p class="text-secondary lh-lg mb-0">Design scalable system architecture, database structure, APIs, and development workflows.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="p-3">
                                        <h5 class="text-light fw-bold">3. Development</h5>
                                        <p class="text-secondary lh-lg mb-0">Build clean, maintainable, and high-performance applications using modern frameworks and best practices.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="p-3">
                                        <h5 class="text-light fw-bold">4. Testing & Optimization</h5>
                                        <p class="text-secondary lh-lg mb-0">Ensure reliability through rigorous testing, performance optimization, and security reviews.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="border-secondary">
                <section id="projects" class="container py-5">
                    <div class="text-center mt-5 mb-5">
                        <span class="badge bg-transparent border border-secondary rounded-pill mb-3 px-3 py-2 text-info">MY WORK</span>
                        <h1 class="text-light">Featured <span class="text-info">Projects</span></h1>
                        <p class="text-secondary">A selection of projects showcasing my web development, UI/UX, database, and design skills.</p></div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 bg-transparent border-secondary rounded-4 overflow-hidden">
                                    <div class="project-image bg-dark d-flex align-items-center justify-content-center" style="height: 200px;">
                                        <img src="portfolio site.png" alt="Portfolio Website" class="card-img-top rounded-top-4 h-100 w-100">
                                    </div>
                                    <div class="card-body p-4">
                                        <span class="badge bg-info text-dark mb-3">Web Development</span>
                                        <h4 class="text-light">Personal Portfolio Website</h4>
                                        <p class="text-secondary">A responsive personal portfolio website designed to showcase my skills, experience, services, and professional work. </p>
                                        <div class="d-flex flex-wrap gap-2 mb-4">
                                            <span class="badge bg-dark border border-secondary">HTML5</span>
                                            <span class="badge bg-dark border border-secondary">CSS3</span>
                                            <span class="badge bg-dark border border-secondary">Bootstrap</span>
                                            <span class="badge bg-dark border border-secondary">JavaScript</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-info"><i class="bi bi-eye me-2"></i>View Project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 bg-transparent border-secondary rounded-4 overflow-hidden">
                                    <div class="project-image bg-dark d-flex align-items-center justify-content-center" style="height: 200px;">
                                        <img src="Figma.png" alt="Portfolio Website" class="card-img-top rounded-top-4 h-100 w-100">
                                    </div>
                                    <div class="card-body p-4">
                                        <span class="badge bg-info text-dark mb-3">UI/UX Design</span>
                                        <h4 class="text-light">Mobile App UI Design</h4>
                                        <p class="text-secondary">A clean and modern mobile application interface designed with a focus on usability, accessibility, and user experience.</p>
                                        <div class="d-flex flex-wrap gap-2 mb-4">
                                            <span class="badge bg-dark border border-secondary">Figma</span>
                                            <span class="badge bg-dark border border-secondary">UI/UX</span>
                                            <span class="badge bg-dark border border-secondary">Prototyping</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-info"><i class="bi bi-eye me-2"></i>View Design</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 bg-transparent border-secondary rounded-4 overflow-hidden">
                                    <div class="project-image bg-dark d-flex align-items-center justify-content-center" style="height: 200px;">
                                        <i class="bi bi-wordpress text-info display-4"></i>
                                    </div>
                                    <div class="card-body p-4">
                                        <span class="badge bg-info text-dark mb-3">WordPress</span>
                                        <h4 class="text-light">Business Website</h4>
                                        <p class="text-secondary">A responsive business website developed and customized using WordPress with a focus on performance and professional design.</p>
                                        <div class="d-flex flex-wrap gap-2 mb-4">
                                            <span class="badge bg-dark border border-secondary">WordPress</span>
                                            <span class="badge bg-dark border border-secondary">Elementor</span>
                                            <span class="badge bg-dark border border-secondary">SEO</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-info"><i class="bi bi-eye me-2"></i>View Project</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </section>
                        <hr class="border-secondary">
                        <section id="skills" class="container py-4">
                            <div class="text-center mt-5 mb-5">
                                <span class="badge bg-transparent border border-secondary rounded-pill mb-3 px-3 py-2 text-info">VALUE PROPOSITION</span>
                                <h1 class="text-light">Technical <span class="text-info">Skills</span></h1>
                                <p class="text-secondary">Engineering high-performance enterprise applications focused on business growth, scalability, and long-term maintainability.</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-filetype-html text-info fs-2"></i>
                                            <h4 class="text text-light">HTML5</h4>
                                            <p class="text text-secondary">Semantic and responsive <br>Web structure.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-filetype-css text-info fs-2"></i>
                                            <h4 class="text text-light">CSS3</h4>
                                            <p class="text text-secondary">Modren Layout and <br>animation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-bootstrap fs-2 text-info"></i>
                                            <h4 class="text text-light">BOOTSTRAP</h4>
                                            <p class="text text-secondary">Responsive Frontend<br>Development.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-database-fill fs-2 text-info"></i>
                                            <h4 class="text text-light">MySQL</h4>
                                            <p class="text text-secondary">SQL and Database<br>Development.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-vector-pen text-info fs-2"></i>
                                            <h4 class="text text-light">Figma</h4>
                                            <p class="text text-secondary">UI/UX and Interface  <br>Design.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-google text-info fs-2"></i>
                                            <h4 class="text text-light">Google Analyst</h4>
                                            <p class="text text-secondary">Data Analysis and <br> Reporting.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-filetype-php fs-2 text-info"></i>
                                            <h4 class="text text-light">PHP</h4>
                                            <p class="text text-secondary">Custom PHP and Web <br>Development.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-code-slash fs-2 text-info"></i>
                                            <h4 class="text text-light">Development</h4>
                                            <p class="text text-secondary">Web applications <br>Development.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-wordpress fs-2 text-info"></i>
                                            <h4 class="text text-light">WordPress/Shopify</h4>
                                            <p class="text text-secondary">Customize WordPress <br>& Shopify.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-search fs-2 text-info"></i>
                                            <h4 class="text text-light">SEO</h4>
                                            <p class="text text-secondary">Search Engine <br> Optimization.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card bg-transparent border-secondary rounded-4">
                                        <div class="card-body">
                                            <i class="bi bi-github fs-2 text-info"></i>
                                            <h4 class="text text-light">GitHub</h4>
                                            <p class="text text-secondary">Version control and <br> Optimization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr class="border-secondary">
                        <section id="contact" class="container py-5">
                            <div class="text-center mt-5 mb-5">
                                <span class="badge bg-transparent border border-secondary rounded-pill mb-3 px-3 py-2 text-info">INITIATE COLLABORATION</span>
                                <h1 class="text-light">Let's Build Something <span class="text-info">Extraordinary</span></h1>
                                <p class="text-secondary">Have a complex project, custom Designs, or high-performance application in mind?Reach out directly.</p>
                            </div>
                            <div class="row g-4 align-items-stretch">
                                <div class="col-lg-5">
                                    <div class="card bg-transparent border-info mb-3 rounded-4">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <a href="mailto:muhammadusmana548@gmail.com" class="btn btn-outline-secondary btn-lg text-light"><i class="bi bi-envelope-fill"></i></a>
                                                <div>
                                                    <small class="text-secondary d-block">Direct Message</small>
                                                    <p class="text-light mb-0">muhammadusmana548@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-transparent border-info mb-3 rounded-4">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3 rounded-4">
                                                <a href="https://wa.me/923196805884" target="_blank" class="btn btn-outline-secondary btn-lg text-light"><i class="bi bi-whatsapp"></i></a>
                                                <div>
                                                    <small class="text-secondary d-block">WhatsApp Business</small>
                                                    <p class="text-light mb-0">+92-319 6805884</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-transparent border-info mb-3 rounded-4">
                                        <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                            <a href="https://www.linkedin.com/in/muhammad-usman-afzal-646052379/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-lg text-light"><i class="bi bi-linkedin"></i></a>
                                            <div>
                                                <small class="text-secondary d-block">LinkedIn Profile</small>
                                                <p class="text-light mb-0">Muhammad Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-transparent border-info rounded-4">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                            <a href="https://github.com/" target="_blank" class="btn btn-outline-secondary btn-lg text-light"><i class="bi bi-github"></i></a>
                                            <div>
                                                <small class="text-secondary d-block">GitHub Profile</small>
                                                <p class="text-light mb-0">Muhammad Usman</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card bg-transparent border-info h-100 rounded-4">
                                    <div class="card-body p-4">
                                        <form action="#" method="POST">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label text-secondary">Your Name</label>
                                                    <input type="text" class="form-control bg-transparent text-light border-secondary" name="name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label text-secondary">Email Address</label>
                                                    <input type="email" class="form-control bg-transparent text-light border-secondary" name="email" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label text-secondary">Subject</label>
                                                    <input type="text" class="form-control bg-transparent text-light border-secondary" name="subject" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label text-secondary">Project Details</label>
                                                    <textarea class="form-control bg-transparent text-light border-secondary" name="message" rows="4" required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-info text-dark px-4 py-2"><i class="bi bi-send-fill me-2"></i>Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <footer class="footer bg-transparent text-white mt-5 pt-5 pb-4">
                    <hr class="border-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 mb-4">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <img src="Logo.png" alt="Logo" width="45" height="45">
                                    <h5 class="text-info fw-bold mb-0">Muhammad Usman</h5>
                                </div>
                                <p class="text-secondary">BS Software Engineering Student at University<br>of Management and Technology.</p>
                                <p class="text-secondary">UI/UX Designer | Frontend Developer | MySQL<br> | Developer | Google Data Analyst | SEO Specialist<br> | and Figma Designer.</p>
                                <div class="mt-3">
                                    <a href="https://wa.me/923196805884" class="me-2 text-secondary btn fs-3" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                    <a href="https://www.linkedin.com/in/muhammad-usman-afzal-646052379/"class="me-2 text-secondary btn fs-3"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://github.com/"class="text-secondary btn fs-3" target="_blank"><i class="bi bi-github"></i></a>
                                    <a href="mailto:muhammadusmana548@gmail.com" class="text-secondary btn fs-3"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <h6 class="text-info fw-bold mb-3">Quick Links</h6>
                                <div class="d-flex flex-column gap-2">
                                    <a href="#home" class="text-secondary text-decoration-none">Home</a>
                                    <a href="#about" class="text-secondary text-decoration-none">About</a>
                                    <a href="#skills" class="text-secondary text-decoration-none">Skills</a>
                                    <a href="#projects" class="text-secondary text-decoration-none">Projects</a>
                                    <a href="#contact" class="text-secondary text-decoration-none">Contact</a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <h6 class="text-info fw-bold mb-3">Services</h6>
                                <div class="d-flex flex-column gap-3 flex-wrap text-secondary">
                                    <span><i class="bi bi-check-lg me-2"></i>Website Maintenance</span>
                                    <span><i class="bi bi-check-lg me-2"></i>Website Optimization</span>
                                    <span><i class="bi bi-check-lg me-2"></i>Database Development</span>
                                    <span><i class="bi bi-check-lg me-2"></i>WordPress & Shopify</span>
                                    <span><i class="bi bi-check-lg me-2"></i>UI/UX Design</span>
                                    <span><i class="bi bi-check-lg me-2"></i>Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <hr class="border-secondary">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="mb-0 text-secondary">@ Muhammad Usman. All Rights Reserved.</p>
                            </div>
                            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                <a href="#" class="text-secondary text-decoration-none me-4">Privacy Policy</a>
                                <a href="#about" class="text-secondary text-decoration-none me-2">About Me</a>
                                <a href="#home" class="rounded-circle d-inline-flex align-items-center justify-content-center shadow bg-transparent border border-info" style="width: 35px; height: 35px;" aria-label="Back to top"><i class="bi bi-arrow-up text-light"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>