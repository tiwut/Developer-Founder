<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Till Wuttke - Developer & Founder</title>
    <meta name="description" content="The official portfolio of Till Wuttke, a skilled software developer and founder. Explore my skills, projects, and professional profile.">
    <meta name="keywords" content="Till Wuttke, Tiwut, developer, founder, software engineer, C++, Python, Java, web development, mobile development, portfolio">
    <meta name="author" content="Till Wuttke">

    <!-- Open Graph Meta Tags for social media sharing -->
    <meta property="og:title" content="Till Wuttke - Developer & Founder">
    <meta property="og:description" content="Discover the work and skills of Till Wuttke, a passionate software developer and founder.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tiwut.de">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Till Wuttke - Developer & Founder">
    <meta name="twitter:description" content="Explore the portfolio of Till Wuttke, showcasing a wide range of skills in software development.">

    <!-- Favicon -->
    <link rel="icon" href="icon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav>
            <a href="#home" class="logo">Till Wuttke</a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#profiles">Profiles</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-text">
                <h1>Till Wuttke</h1>
                <p>Developer & Founder</p>
            </div>
        </section>

        <section id="about">
            <h2>About Me</h2>
            <p>I am a passionate and versatile software developer with a wide range of experience across different platforms and technologies. My expertise lies in creating efficient, scalable, and innovative solutions. I am driven by a constant desire to learn and adapt to new challenges in the ever-evolving world of technology.</p>
        </section>

        <section id="skills">
            <h2>Skills</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Programming & Scripting</h3>
                    <ul>
                        <li>C++</li>
                        <li>C</li>
                        <li>C#</li>
                        <li>Kotlin</li>
                        <li>Swift</li>
                        <li>Python</li>
                        <li>PHP</li>
                        <li>Assembly</li>
                        <li>PowerShell</li>
                        <li>Unix Shell</li>
                        <li>Tcl</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Operating Systems</h3>
                    <ul>
                        <li>Windows & Win32</li>
                        <li>Linux (Gnome)</li>
                        <li>Android</li>
                        <li>macOS & iOS (Apple iPhone)</li>
                        <li>BSD</li>
                        <li>ChromeOS</li>
                        <li>GNU Hurd</li>
                        <li>Windows Server</li>
                        <li>Embedded Operating Systems</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Development & Technologies</h3>
                    <ul>
                        <li>Web-based Development</li>
                        <li>Software Development</li>
                        <li>WINE</li>
                        <li>Xbox & PlayStation</li>
                        <li>Terminals</li>
                        <li>Internet Technologies</li>
                        <li>Games Development</li>
                        <li>Security</li>
                        <li>OS Independent</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="profiles">
            <h2>Online Profiles</h2>
            <div class="profiles-container">
                <a href="https://sourceforge.net/u/tiwut/profile/" target="_blank" rel="noopener noreferrer" class="profile-link">
                    <i class="fab fa-sourcetree"></i> SourceForge
                </a>
                <a href="https://github.com/tiwut" target="_blank" rel="noopener noreferrer" class="profile-link">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <a href="https://gitlab.com/Tiwut" target="_blank" rel="noopener noreferrer" class="profile-link">
                    <i class="fab fa-gitlab"></i> GitLab
                </a>
            </div>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>If you would like to get in touch, please feel free to reach out.</p>
            <a href="mailto:contact@tiwut.de" class="cta-button">Email Me</a>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Till Wuttke. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<style>
:root {
    --primary-color: #2c3e50;
    --secondary-color: #3498db;
    --background-color: #ecf0f1;
    --text-color: #34495e;
    --light-gray: #bdc3c7;
    --white: #ffffff;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: var(--background-color);
    color: var(--text-color);
    line-height: 1.6;
}

header {
    background-color: var(--primary-color);
    color: var(--white);
    padding: 1rem 5%;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-family: 'Poppins', sans-serif;
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--white);
    text-decoration: none;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-left: 2rem;
}

.nav-links a {
    color: var(--white);
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--secondary-color);
}

.hamburger {
    display: none;
    cursor: pointer;
}

.hamburger span {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px;
    background-color: var(--white);
    transition: all 0.3s ease-in-out;
}

main {
    padding-top: 60px; /* Adjust for fixed header */
}

section {
    padding: 4rem 5%;
    text-align: center;
}

section h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 2.5rem;
    margin-bottom: 2rem;
    color: var(--primary-color);
}

.hero {
    background: linear-gradient(rgba(44, 62, 80, 0.7), rgba(44, 62, 80, 0.7));
    color: var(--white);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero-text h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 4rem;
}

.hero-text p {
    font-size: 1.5rem;
    font-weight: 300;
}

#about p {
    max-width: 800px;
    margin: 0 auto;
    font-size: 1.1rem;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    text-align: left;
    margin-top: 3rem;
}

.skill-category {
    background-color: var(--white);
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.skill-category h3 {
    font-family: 'Poppins', sans-serif;
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.skill-category ul {
    list-style: none;
}

.skill-category li {
    margin-bottom: 0.5rem;
}

.profiles-container {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
}

.profile-link {
    font-size: 1.2rem;
    color: var(--primary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.profile-link:hover {
    color: var(--secondary-color);
}

.profile-link i {
    margin-right: 0.5rem;
}

.cta-button {
    display: inline-block;
    background-color: var(--secondary-color);
    color: var(--white);
    padding: 1rem 2rem;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #2980b9;
}

footer {
    background-color: var(--primary-color);
    color: var(--white);
    text-align: center;
    padding: 1.5rem 5%;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: var(--primary-color);
    }

    .nav-links.active {
        display: flex;
    }

    .nav-links li {
        text-align: center;
        margin: 1rem 0;
    }

    .hamburger {
        display: block;
    }

    .hero-text h1 {
        font-size: 3rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
            }
        });
    });
});
</script>
