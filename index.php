<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand me-2" href="index.php">
                <img src="images/logo.png" height="50" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
            </a>

            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About us</a>
                    </li>
                    <li class="nav-item dropdown" data-bs-theme='light'>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Explore
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Free Courses</a></li>
                            <li><a class="dropdown-item" href="#">Top Courses</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Free Webinar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="hirefromus.php">Hire From Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Institute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contactus.php">Contact Us</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn btn-outline-light px-3 me-2">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="500" style="background-color: #36348E;">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 600px; width: 90%">
                <img src="images/new.png" class="d-block img " alt="...">
                <h1 class="carosuel-text">Get Industry Ready <br> with our in-demand courses</h1>
                <button class="btn btn-outline-light carosuel-btn">Get certificed</button>
            </div>
            <div class="carousel-item " style="height: 600px; width: 90%">
                <img src="images/happy.png" class="d-block img1" alt="...">
                <h1 class="carosuel-text">Get Certified in just<br> 3 months</h1>
                <span class="text-warning" style="margin-left: 11.5%; font-size: 30px; font-weight: 500">LEARN - IMPLEMENT - PLACE</span><br>
                <button class="btn btn-outline-light carosuel-btn">Get certificed</button>
            </div>
            <div class="carousel-item " style="height: 600px; width: 90%">
                <img src="images/girl.png" class="d-block img2" alt="...">
                <h1 class="carosuel-text">Kickstart your career with our<br>Free Weninar</h1>
                <button class="btn btn-outline-light carosuel-btn">View Details </button>
            </div>
        </div>
    </div>


    <div class="company">
        <div class="comp-text">
            <h1>Premier Placement Partnerships</h1>
            <p>As you navigate through our website, you'll discover the extensive network of organizations we collaborate with, including esteemed names such as [List of Key Companies]. These partnerships open doors to a multitude of placement opportunities for our candidates, spanning diverse sectors like technology, finance, healthcare, and beyond.</p>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide companies" data-bs-ride="carousel" style="max-width:400px">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/tcs.jpg" class="d-block comp-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/infosys.png" class="d-block comp-img1" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/wipro.svg" class="d-block comp-img1" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <section class="pt-5 pb-5 courses" style="margin-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 course-title">Top Courses</h3>
                </div>
                <div class="col-6 text-center">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/html.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/python.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/java.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/c.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/js.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/php.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5 pb-5 courses" style="margin-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 course-title">Free Courses</h3>
                </div>
                <div class="col-6 text-center">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/sql.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/git.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/dm.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/iot.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/seo.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="images/agile.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <button class="btn btn-outline-primary text-center">Enroll Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="associate-main">
        <h1>Our Hiring Partners </h1>
        <img src="images/arrow.png" alt="">
        <div class="associate">
            <img src="images/microsoft.png" alt="">
            <img src="images/ibm.png" alt="">
            <img src="images/accenture.png" alt="">
            <img src="images/oracle.png" alt="">
            <img src="images/tcs.png" alt="">
        </div>
    </div>



    <div class="vid">
        <h1>Bridge the skill GAP with Our Courses</h1>
        <div class="vid-sub">
            <div class="vid-child">
                <h1>Conceptual Videos</h1>
                <spam>Understand the coencpts anywhere and anytime</span>
            </div>
            <div class="vid-child">
                <h1>Conceptual Videos</h1>
                <spam>Understand the coencpts anywhere and anytime</span>
            </div>
            <div class="vid-child">
                <h1>Conceptual Videos</h1>
                <spam>Understand the coencpts anywhere and anytime</span>
            </div>
        </div>
        <div>
            <video src="images/video.mp4" controls></video>
        </div>
    </div>



    <?php include('./view/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/logic.js"></script>
</body>

</html>