<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URIEL PACIS - Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Main Page -->
    <section id="mainpage">
        <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="m-auto" style="width: 60%;">
                <div class="">
                    <div class="container px-5 text-start">
                        <p class="line1">Hi, my name is </p>
                        <h1 class="line2">Uriel Jeremiah Pacis</h1>
                        <h2 class="my-3 line3">I create reliable software with precision and purpose.</h2>
                        <p class="line4">I am an Information Technology graduate driven by a passion for crafting innovative software and ensuring its top-notch quality. <br> A blend of creativity and precision, I aim to deliver solutions that exceed expectations and make a lasting impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" style="height: 100vh; padding: 20px;">
        <div class="container">
            <div class="text-center mt-5 border-bottom border-dark mb-3">
                <h1>About Me</h1>
                <p class="fst-italic">"The only way to do great work is to love what you do."   - Steve Jobs</p>
            </div>
            <div class="row text-start">
                <div class="col-lg-8">
                <p class="custom-bullet-one">
                    Driven by a passion for creating reliable and innovative software, I thrive on transforming complex challenges into elegant, scalable solutions. With a solid foundation in software development, automation testing, and agile project management, I bring a comprehensive approach to each project I undertake. My technical expertise, paired with a deep understanding of industry best practices, allows me to deliver robust, high-performance applications that meet the needs of users while maintaining long-term maintainability. As a recent Information Technology graduate, I am well-equipped to contribute to projects that demand both creativity and technical precision.                </p>
                <p class="custom-bullet-two">
                    My capstone project, a Document Management System integrated with job posting functionality, allowed me to demonstrate my ability to develop practical, user-centric solutions that address real-world problems. By leveraging cutting-edge technologies and agile methodologies, I was able to create a system that not only meets current requirements but is also scalable for future growth. With a keen eye for detail, a passion for innovation, and a commitment to quality, I am dedicated to exceeding expectations and driving impactful change through every project I work on.                </p>
                <p class="custom-bullet-three">
                    When I’m not coding, I enjoy exploring the latest tech trends, mentoring peers in programming, and discovering new ways to use technology to solve real-world problems. Additionally, I have a passion for building computers, where I enjoy assembling hardware and optimizing systems for performance. This hands-on experience with technology deepens my understanding of how hardware and software work together, and I am always excited to experiment with new builds and configurations.
                </p>
                <p class="custom-bullet-four">
                    I am excited to bring my skills to a forward-thinking team and contribute to cutting-edge solutions that shape the future. I believe that collaboration and innovation go hand in hand, and I am eager to work with like-minded individuals who are passionate about creating impactful technology. By contributing my technical expertise, I aim to drive meaningful progress and help shape the next generation of software solutions.
                </p>
                </p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <img src="images/self1.png" alt="Profile Picture" class="img-fluid rounded shadow">
                </div>
            </div>
        
        </div>

    </section>

    <!-- Projects -->
    <section id="projects" style="height: 100vh; padding: 20px;">
        <h1 class="text-center mb-4">Projects</h1>
        <p class="text-center">Click on a project to learn more about it.</p>
        <div class="accordion" id="projectsAccordion">
            <!-- Project 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Document Management System with Job Posting
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#projectsAccordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <strong>Overview:</strong>
                                <p>
                                    The Document Management System with Job Posting functionality is an innovative solution designed to streamline document organization and recruitment processes for businesses. By combining robust document handling features with job posting capabilities, it ensures an efficient, secure, and user-friendly experience.
                                </p>
                                <strong>Key Functionalities:</strong>
                                <ul>
                                    <li>
                                        <strong>Document Tagging:</strong> Efficient categorization and tagging for quick retrieval of documents.
                                    </li>
                                    <li>
                                        <strong>Role-Based Access Control:</strong> Secure access management to protect sensitive documents, with user roles such as Admin, HR, and Employee.
                                    </li>
                                    <li>
                                        <strong>Job Posting Module:</strong> Tools for creating, publishing, and managing job listings, including an applicant tracking feature for HR professionals.
                                    </li>
                                    <li>
                                        <strong>Visual Data Representation:</strong> Integrated with <strong>CanvasJS</strong> to present visual analytics for system usage and job application statistics.
                                    </li>
                                    <li>
                                        <strong>Automated Testing:</strong> Comprehensive test coverage using <strong>Selenium</strong> and <strong>Robot Framework</strong> for ensuring reliability and error-free operations.
                                    </li>
                                </ul>
                                <strong>Technologies and Tools Used:</strong>
                                <ul>
                                    <li>
                                        <strong>Backend:</strong> <strong>PHP</strong> for server-side logic, managing system workflows and data processing.
                                    </li>
                                    <li>
                                        <strong>Frontend:</strong> <strong>JavaScript</strong> for interactivity, <strong>CSS</strong> and <strong>Bootstrap</strong> for responsive design and styling.
                                    </li>
                                    <li>
                                        <strong>Database:</strong> <strong>SQL</strong> with <strong>PHPMyAdmin</strong> for relational database management, ensuring organized and efficient data storage.
                                    </li>
                                    <li>
                                        <strong>Data Visualization:</strong> <strong>CanvasJS</strong> for creating dynamic, user-friendly charts and graphs.
                                    </li>
                                    <li>
                                        <strong>Testing:</strong> <strong>Selenium</strong> and <strong>Robot Framework</strong> for automated end-to-end and regression testing.
                                    </li>
                                    <li>
                                        <strong>Development Tools:</strong> <strong>Visual Studio</strong> for code development and debugging.
                                    </li>
                                    <li>
                                        <strong>Version Control:</strong> <strong>GitHub</strong> for source code management, collaboration, and CI/CD pipelines.
                                    </li>
                                </ul>
                                <strong>Challenges Overcome:</strong>
                                <ul>
                                    <li>Optimizing database performance to handle growing document storage and user base.</li>
                                    <li>Creating an intuitive and mobile-friendly user interface with <strong>Bootstrap</strong>.</li>
                                    <li>Implementing CI/CD pipelines for automated testing and deployment workflows using <strong>GitHub Actions</strong>.</li>
                                </ul>
                                <a href="https://github.com/qtbsarcia1/KamiasConnectv16" class="btn btn-primary btn-sm" target="_blank">View Code</a>
                            </div>
                            <div class="col-lg-5 align-items-center justify-content-center">
                                <img src="images/project1.png" alt="" class="img-fluid rounded shadow">
                                <img src="images/project2.png" alt="" class="img-fluid rounded shadow mt-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Automation Testing Portfolio
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#projectsAccordion">
                    <div class="accordion-body">
                        <strong>Overview:</strong> A repository of automated tests for web applications and APIs.  
                        <ul>
                            <li><strong>Technologies:</strong> Cypress, Robot Framework, Selenium, GitHub Actions.</li>
                            <li><strong>Features:</strong> Login validation, API CRUD tests, CI/CD pipelines for automation.</li>
                            <li><strong>Challenges:</strong> Debugging flaky tests, parallel execution, and reusable test suites.</li>
                        </ul>
                        <a href="https://github.com/your-repo" class="btn btn-primary btn-sm" target="_blank">View Code</a>
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Solar Installation Management System
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#projectsAccordion">
                    <div class="accordion-body">
                        <strong>Overview:</strong> A system designed to manage solar installation schedules, inventory, and client updates.  
                        <ul>
                            <li><strong>Technologies:</strong> Flask/Django, React/Vue, SQL, REST APIs.</li>
                            <li><strong>Features:</strong> Scheduling module, inventory tracking, and client portal.</li>
                            <li><strong>Challenges:</strong> Synchronizing schedules, intuitive UI, and scalability.</li>
                        </ul>
                        <a href="https://github.com/your-repo" class="btn btn-primary btn-sm" target="_blank">View Code</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" style="padding: 50px 0; text-align: center;">
        <div class="container">
            <div class="text-center mt-1 border-bottom mb-3">
                <h1>Contact Me</h1>
                <p>Get in touch with me via the links below</p>
            </div>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/uriel-jeremiah-pacis-622120332/" target="_blank" class="px-3 btn btn-outline-primary btn-circle mx-2">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.facebook.com/uriel.pacis.3/" target="_blank" class="px-3 btn btn-outline-primary btn-circle mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="mailto:urielpacis@gmail.com" class="px-3 btn btn-outline-primary btn-circle mx-2">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://github.com/chrysanthemum20" target="_blank" class="px-3 btn btn-outline-primary btn-circle mx-2">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://ph.jobstreet.com/profile/urieljeremiah-pacis-ynZ54dgLQ4" target="_blank" class="px-3 btn btn-outline-primary btn-circle mx-2">
                    <i class="fas fa-briefcase"></i>
                </a>
            </div>
        </div>
    </section>





    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>