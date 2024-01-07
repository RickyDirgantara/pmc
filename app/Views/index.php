<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?= $this->include('layouts/navbar') ?>
    <!-- Navbar End -->

    <?php if (session()->get('logged_in')): ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h1 class="display-3 mb-md-4" style="color:#eef274;">Hi, <?= session()->get('username') ?></h3>
                            <h3 class="text-white text-uppercase mb-md-3">How are you doing so far?</h3>
                            <a href="/progress/<?= session('id'); ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">See Your Progress</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 mb-md-4" style="color:#eef274;">Hi, <?= session()->get('username') ?></h3>
                            <h3 class="text-white text-uppercase mb-md-3">It's nice to see you here</h1>
                            <a href="/progress/<?= session('id'); ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">See Your Progress</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h1 class="display-3 mb-md-4" style="color:#eef274;">Hi, <?= session()->get('username') ?></h3>
                            <h3 class="text-white text-uppercase mb-md-3">Can't wait to see the new you</h3>
                            <a href="/progress/<?= session('id'); ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">See Your Progress</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container-fluid py-5 ">
        <div class="container py-5" >
            <div style="display: flex; justify-content: center;" class="row align-items-center">
                <div class="col-lg-7">
               
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Premier Music Centre Semarang adalah tempat ideal bagi mereka yang ingin mengembangkan keterampilan musik mereka. Kami menyediakan berbagai kursus musik termasuk Gitar, Bass, Biola, Piano, Keyboard, Cello, Drum, dan Biola.
Instruktur berpengalaman kami siap membimbing Anda, dari pemula hingga tingkat lanjutan. Fasilitas modern dan lingkungan belajar yang nyaman menciptakan suasana yang inspiratif untuk meningkatkan kreativitas dan kemampuan musik Anda.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="cover">
    <div class="gradient-overlay"></div>
   
    <!-- Category Start -->
    <div class="cat-item position-relative overflow-hidden rounded mb-2">
    <img class="position-relative w-100" src="img/bg.jpg" style="min-height: 300px; object-fit: cover;z-index: -2;">       <
            <div class="text-center">
                <div class="container py-5">
                <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;color: #ffffff !important;">Free Trial</h1>
                <h2 style="color: #ffffff !important;">jika kamu masih bimbang kamu bisa mengikuti simulasi kelas tanpa biaya apapun</h2>
            </div>
</div>
</div>
<?php
$desiredId = 1;
$desiredId2 = 2;
$desiredId3 = 3;
$desiredId4 = 4;
$desiredId5 = 5;
?>
            <div style="display: flex; justify-content: center;margin-right: 0px;margin-left: 0px;" class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?= base_url('payment/' . $desiredId); ?>">
                            <h4 class="text-white font-weight-medium">Violin Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?= base_url('payment/' . $desiredId2); ?>">
                            <h4 class="text-white font-weight-medium">Drum Set Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?= base_url('payment/' . $desiredId3); ?>">
                            <h4 class="text-white font-weight-medium">Vocal class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?= base_url('payment/' . $desiredId4); ?>">
                            <h4 class="text-white font-weight-medium">Piano Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?= base_url('payment/' . $desiredId5); ?>">
                            <h4 class="text-white font-weight-medium">Guitar Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>  
           
        </div>
    </div>

    <?php else: ?>
 <!-- Carousel Start -->
 <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Education From Your Home</h1>
                            <a href="#freeTrial" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Free Trial</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Online Learning Platform</h1>
                            <a href="#freeTrial" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Free Trial</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                            <a href="#freeTrial" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 ">
        <div class="container py-5" >
            <div style="display: flex; justify-content: center;" class="row align-items-center">
                <div class="col-lg-7">
               
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Premier Music Centre Semarang adalah tempat ideal bagi mereka yang ingin mengembangkan keterampilan musik mereka. Kami menyediakan berbagai kursus musik termasuk Gitar, Bass, Biola, Piano, Keyboard, Cello, Drum, dan Biola.
Instruktur berpengalaman kami siap membimbing Anda, dari pemula hingga tingkat lanjutan. Fasilitas modern dan lingkungan belajar yang nyaman menciptakan suasana yang inspiratif untuk meningkatkan kreativitas dan kemampuan musik Anda.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="cover">
    <div class="gradient-overlay"></div>
   
    <!-- Category Start -->
   
    <div class="cat-item position-relative overflow-hidden rounded mb-2">
    <img class="position-relative w-100" src="img/bg.jpg" style="min-height: 300px; object-fit: cover;z-index: -2;">       <
            <div class="text-center">
                <div class="container py-5">
                <section id="freeTrial">
                <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;color: #ffffff !important;">Free Trial</h1>
                <h2 style="color: #ffffff !important;">jika kamu masih bimbang kamu bisa mengikuti simulasi kelas tanpa biaya apapun</h2>
            </div>
</div>
</div>
            <div style="display: flex; justify-content: center;margin-right: 0px;margin-left: 0px;" class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/login">
                            <h4 class="text-white font-weight-medium">Violin Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/login">
                            <h4 class="text-white font-weight-medium">Drum Set Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/login">
                            <h4 class="text-white font-weight-medium">Vocal class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/login">
                            <h4 class="text-white font-weight-medium">Piano Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="/login">
                            <h4 class="text-white font-weight-medium">Guitar Class</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>  
           
        </div>
    </div>
    </section>
    <!-- Carousel End -->
    <?php endif; ?>
    <!-- About Start -->
  
   

    <!-- Footer Start -->
    <?= $this->include('layouts/footer') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>