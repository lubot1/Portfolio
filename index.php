<?php
include "config.php";
?>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="jumbotron bg-cover" id="home">
            <h2 class="sr-only">Luis Botello Intro</h2>
            <div class="container py-5 text-center d-flex flex-row justify-content-around">
                <img id="ProfilePic" src="./Images/LuisProfile.jpg" class="rounded"></img>
                <div id="IntroText" class="d-flex flex-column align-items-center">
                    <h1 class="display-4 font-weight-bold">Hi! I'm Luis</h1>
                    <p>Versatile web-developer with a love for solving challenging problems. He has a bachelor’s degree in Space Engineering from York University where he first learned to program in various languages. He is currently pursuing a certificate in web-development at Humber college where he is developing data-driven websites.</p>
                    <a href="#resume" class="btn btn-outline-dark">Learn more</a>
                </div>
            </div>
        </section>
        <section class="text-center" id="resume">
            <h2>My story</h2>
            <div class="container">
                <!-- Timeline template from https://www.bootdey.com/snippets/view/bs4-my-experience-timeline#html -->
                <div class="main-timeline">
                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">5 Years</span>
                                <span class="year">2015</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">B.Eng Space Engineering <span class="educationCampus">York University</span></h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">1 Years</span>
                                <span class="year">2020</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Web Development <span class="educationCampus">Humber College</span></h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->
                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                        <span class="month">?</span>
                                <span class="year">2021</span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Web Developer</h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->
                </div>
            </div>
        </section>
        <section id="projects">
            <h2>Projects</h2>
        </section>
        <section id="contact">
            <h2>Interested? Contact me</h2>
            <dl>
                <dt></dt>
            </dl>
            <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>

        </section>
    </main>
    <footer>
        <!-- Enter in links to github and linkedin -->
    </footer>
</body>
</html>