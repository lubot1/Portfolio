<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
    <title>Luis Botello</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./Stylesheets/main.css">
    <link rel="stylesheet" href="./Stylesheets/timeline.css">
    <script src="https://kit.fontawesome.com/d24233894e.js" crossorigin="anonymous"></script>
    <script src="./src/index.js"></script>
</head>
<body>
    <header>
        <!-- Navbar template from https://bootstrapious.com/p/transparent-navbar -->
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
                <a href="#home" class="navbar-brand text-uppercase font-weight-bold">Luis<span class="LastName">Botello</span></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="#home" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="#resume" class="nav-link text-uppercase font-weight-bold">Resume</a></li>
                        <li class="nav-item"><a href="#portfolio" class="nav-link text-uppercase font-weight-bold">Projects</a></li>
                        <li class="nav-item"><a href="case-studies.html" class="nav-link text-uppercase font-weight-bold">Case Studies</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="jumbotron bg-cover" id="home">
            <h2 class="sr-only">Luis Botello Intro</h2>
            <div class="container py-5 text-center d-flex flex-column align-items-center" id="JumbotronContainer">
                <img id="ProfilePic" src="./Images/LuisProfile.jpg" class="rounded img-fluid"></img>
                <div id="IntroText" class="d-flex flex-column align-items-center">
                    <h1 class="display-4 font-weight-bold">Hi! I'm Luis</h1>
                    <p>Versatile web-developer with a love for solving challenging problems. He has a bachelor’s degree in Space Engineering from York University where he first learned to program in various languages. He is currently pursuing a certificate in web-development at Humber college where he is developing data-driven websites.</p>
                    <a href="#resume" class="btn btn-outline-dark">Learn more</a>
                </div>
            </div>
        </section>
        <section class="text-center" id="resume">
            <h2>My Story</h2>
            <div class="container">
                <!-- Timeline template from https://www.bootdey.com/snippets/view/bs4-my-experience-timeline#html -->
                <div class="main-timeline">
                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content" id="firstTimeBubble">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">5 Years</span>
                                <span class="year">2015</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h3 class="title">B.Eng Space Engineering <span class="educationCampus">York University</span></h3>
                            <p class="description">
                                Relevant courses in: Project Management & Economics, Software Tools, Advanced Object-Oriented
                                Programming, Computational methods for Physicists and Engineers
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->
                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content" id="secondTimeBubble">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">3 Years</span>
                                <span class="year">2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h3 class="title">Science Team Lead <span class="educationCampus">York University Rover Team</span></h3>
                            <ul class="description">
                                <li>
                                    Created a comprehensive science strategy for use at the Canadian International Rover Challenge (CIRC)
                                    which was received very well by the judges
                                </li>
                                <li>
                                    Managed a small team of four people to collect research and identify what sensors were needed to
                                    identify potential signs of life in arid regions
                                </li>
                                <li>
                                    Achieved a high degree of organisation by maintaining budgets, requirements documents, and science
                                    plans to ensure team executives were kept informed on progress
                                </li>
                                <li>
                                    Developed software to control and retrieve data from sensors using an Arduino microcontroller
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end experience section-->
                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content" id="thirdTimeBubble">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">1 Year</span>
                                <span class="year">2019</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h3 class="title">VP Communications <span class="educationCampus">York University Rover Team</span></h3>
                            <ul class="description">
                                <li>
                                    Coordinated a social media strategy that was used to recruit new members and attract sponsors
                                </li>
                                <li>
                                    Kept detailed meeting notes to ensure progress was communicated to the entire team
                                </li>
                                <li>
                                    Provided administrative support for the rover team by organizing meetings, creating budgets, and
                                planning deadlines
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end experience section-->
                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content" id="fourthTimeBubble">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">1 Year</span>
                                <span class="year">2020</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h3 class="title">Web Development <span class="educationCampus">Humber College</span></h3>
                            <p class="description">
                                Post-graduate certificate in web development with classes expected to finish in June. Relevant courses in Database design & development, 
                                project management, Security & Quality Assurance, and Web Application Development. Learned how to create full-stack websites.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->
                </div>
            </div>
            <div class="container">
                <h3 id="techHeader">Technologies</h3>
                <div class="row">
                    <div class="col">
                        <i class="fas fa-database techIcons"></i>
                        <h4 class="techNames">MySQL</h4>
                    </div>
                    <div class="col">
                        <i class="fab fa-microsoft techIcons"></i>
                        <h4 class="techNames">Asp .NET</h4>
                    </div>
                    <div class="col">
                        <i class="fab fa-php techIcons"></i>
                        <h4 class="techNames">PHP</h4>
                    </div>
                    <div class="col">
                        <i class="fab fa-js techIcons"></i>
                        <h4 class="techNames">Javascript</h4>
                    </div>
                    <div class="col">
                        <i class="fab fa-node-js techIcons"></i>
                        <h4 class="techNames">Node.js</h4>
                    </div>
                    <div class="col">
                        <i class="fab fa-css3-alt techIcons"></i>
                        <h4 class="techNames">CSS</h4>
                    </div>
                    <div class="col">
                        <i class="fab fa-bootstrap techIcons"></i>
                        <h4 class="techNames">Bootstrap</h4>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="text-center" id="portfolio">
            <h2>Projects</h2>
            <div class="container">
                <div class="row PortfolioGroup">
                    <div class="col text-center">
                        <h3 class="text-center">US Army HR Application</h3>
                        <a href="http://clash.luisbotello.tech/"><img class="img-fluid" src="./Images/Clash.png" alt="Homescreen for Clash Force Five HR application"></a>
                        <a href="https://github.com/2021-Winter-HTTP-5202-A/ChopperForceFive" class="portfolioLinks">Github</a>
                        <p>
                            Web application developed with PHP and MySQL to manage a company of troops. I designed the personnel list, update, and create pages as well as
                            the alerts feature located on the main page that shows details about information that needs to be updated.
                        </p>
                        <i class="fab fa-php portfolioIcons"></i>
                    </div>
                    <div class="col text-center">
                        <h3>Isochrone</h3>
                        <a href="http://isochrone.luisbotello.tech"><img class="img-fluid" src="./Images/Isochrone.png" alt="Map with polygons drawn on it representing the area someone can travel within a given timeframe"></a>
                        <a href="https://github.com/lubot1/Isochrone" class="portfolioLinks">Github</a>
                        <p>
                            Travel-time visualizer using <a href="https://www.geoapify.com/" class="portfolioLinks">Geoapify</a> and Google maps API's. The backend was implemented using PHP, with
                            Bootstrap being used for the frontend CSS. Users can view the area reachable within the chosen timeframes via driving, cycling, walking, or public transit.
                        </p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <i class="fab fa-bootstrap portfolioIcons"></i>
                                </div>
                                <div class="col">
                                    <i class="fab fa-php portfolioIcons"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row PortfolioGroup">
                    <div class="col text-center">
                        <h3>Peel Covid dashboard</h3>
                        <a href="http://covid.luisbotello.tech"><img class="img-fluid" src="./Images/Covid.png" alt="Graph of Covid cases in Peel during the whole pandemic" srcset=""></a>
                        <a href="https://github.com/lubot1/CovidDashboard" class="portfolioLinks">Github</a>
                        <p>
                            Interactive Covid dashboard designed using data pulled from Ontario's public databanks. Created with Javascript to make GET requests from users' browsers
                            and Chart.js to display data. The app also displays active cases in the region and uses public health guidelines to assign a risk level.
                        </p>
                        <i class="fab fa-js-square portfolioIcons"></i>
                    </div>
                    <div class="col text-center">
                        <h3>Taj Mahal restaurant</h3>
                        <a href="http://tajmahal.luisbotello.tech/"><img src="./Images/Taj.png" class="img-fluid" alt="Locations page of an indian restaurant showing nearest locations"></a>
                        <a href="https://github.com/lubot1/TajMahal" class="portfolioLinks">Github</a>
                        <p>
                            Fully functioning website for a fictional chain of indian restaurants in the GTA. I designed and implemented the locations and sitemap pages using vanilla Javascript and JQuery.
                            The locations page allows users to see all restaurant locations as well as search for a list of the nearest locations.
                        </p>
                        <i class="fab fa-js-square portfolioIcons"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center" id="contact">
            <h2>Interested? Contact me</h2>
            <div class="row" id="SocialBtnsGroup">
                <div class="col-sm d-flex flex-column socialLinksBox">
                    <a href="https://github.com/lubot1"><i class="fab fa-github-square socialIcons socialLinks" aria-hidden="true"></i></a>
                    <!-- <a href="https://github.com/lubot1" class="socialLinks">github.com/lubot1</a> -->
                </div>
                <div class="col-sm d-flex flex-column socialLinksBox">
                    <a href="https://www.linkedin.com/in/luis-botello-160b58101/"><i class="fab fa-linkedin socialIcons socialLinks" aria-hidden="true"></i></a>
                    <!-- <a href="https://www.linkedin.com/in/luis-botello-160b58101/" class="socialLinks">linkedin.com/in/luis-botello-160b58101/</a> -->
                </div>
                <div class="col-sm d-flex flex-column socialLinksBox">
                    <a href="mailto:botello468@gmail.com"><i class="fas fa-envelope socialIcons socialLinks" aria-hidden="true"></i></a>
                    <!-- <a href="mailto:botello468@gmail.com" class="socialLinks">botello468@gmail.com</a> -->
                </div>
                <div class="col-sm d-flex flex-column socialLinksBox">
                    <a href="tel:6474661522"><i class="fas fa-phone socialIcons socialLinks" aria-hidden="true"></i></a>
                    <!-- <a href="tel:6474661522" class="socialLinks">(647)-466-1522</a> -->
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Enter in links to github and linkedin -->
    </footer>
</body>
</html>