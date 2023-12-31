<!DOCTYPE html>
<!-- divinectorweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testimonial carousel using materialize css</title>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="caraousel.css">
</head>
<body>
    <section class="penawaran">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile">
                    <div class="carousel">
                        <a class="carousel-item" href="#">
                            <div class="card">
                                <div class="box1"></div>
                                <!-- <div class="img-area"><img src="img/Homepage/valen.jpg" alt=""  style="max-width:60px;"></div> -->
                                <div class="main-text">
                                    <h2>Person One</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate recusandae quam amet enim voluptates alias accusantium sapiente! Adipisci vero fugiat aliquid explicabo quas eius!</p>
                                </div>
                            </div>
                        </a>lorem100
                        <a class="carousel-item" href="#">
                            <div class="card">
                                <div class="box1">
                                    <p>Person two</p>
                                </div>
                                <!-- <div class="img-area"><img src="img/Homepage/valen.jpg" alt="" style="max-width:60px;"></div> -->
                                <div class="main-text">
                                    <h2>Person two</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate recusandae quam amet enim voluptates alias accusantium sapiente! Adipisci vero fugiat aliquid explicabo quas eius!</p>
                                </div>
                            </div>
                        </a>
                        <a class="carousel-item" href="#">
                            <div class="card">
                                <div class="box1"></div>
                                <!-- <div class="img-area"><img src="img/Homepage/valen.jpg" alt="" style="max-width:80px;"></div> -->
                                <div class="main-text">
                                    <h2>Person three</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate recusandae quam amet enim voluptates alias accusantium sapiente! Adipisci vero fugiat aliquid explicabo quas eius!</p>
                                </div>
                            </div>
                        </a>
                        <a class="carousel-item" href="#">
                            <div class="card">
                                <div class="box1"></div>
                                <!-- <div class="img-area"><img src="img/Homepage/valen.jpg" alt="" style="max-width:60px;"></div> -->
                                <div class="main-text">
                                    <h2>Person four</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate recusandae quam amet enim voluptates alias accusantium sapiente! Adipisci vero fugiat aliquid explicabo quas eius!</p>
                                </div>
                            </div>
                        </a>
                        <a class="carousel-item" href="#">
                            <div class="card">
                                <div class="box1"></div>
                                <!-- <div class="img-area"><img src="img/Homepage/valen.jpg" alt="" style="max-width:60px;"></div> -->
                                <div class="main-text">
                                    <h2>Person five</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate recusandae quam amet enim voluptates alias accusantium sapiente! Adipisci vero fugiat aliquid explicabo quas eius!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
         $(document).ready(function(){
            $('.carousel').carousel();
          });	
    </script>
</body>
</html>
