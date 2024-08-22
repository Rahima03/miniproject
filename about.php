<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

    <div class="row">

        <div class="image">
          <img src="images/about-img.svg" alt="">
        </div>

        <div class="content">
          <h3>why choose us?</h3>
          <p>At Madrasa. , we blend traditional Islamic studies with modern academics. Our supportive environment and state-of-the-art facilities ensure comprehensive development for every student.</p>
          <a href="courses.html" class="inline-btn">our courses</a>
        </div>

    </div>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
                <h3>+1k</h3>
                <span>online courses</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
                <h3>+25k</h3>
                <span>brilliant students</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
                <h3>+5k</h3>
                <span>expert teachers</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
                <h3>100%</h3>
                <span>holistic growth</span>
            </div>
        </div>

    </div>
</section>

<!--reviews section-->

<section class="reviews">

    <h1 class="heading">student's reviews</h1>

    <div class="box-container">

        <div class="box">
            <p>This madrasa has transformed my understanding of Islam. The teachers are knowledgeable and supportive, and the curriculum is well-rounded. I have grown both spiritually and intellectually. Highly recommended!</p>
          
            <div class="user">
              <img src="images/pic-2.jpg" alt="">
              <div>
                <h3>Amina Siddiqui</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              </div>

            </div>
        </div>

        <div class="box">
            <p>Attending this madrasa has been an enlightening experience. The blend of traditional and modern education is outstanding. The community is warm, and the personalized attention has greatly benefited my learning journey</p>        
            <div class="user">
              <img src="images/pic-4.jpg" alt="">
              <div>
                <h3>Omar Ali</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              </div>

            </div>
        </div>

        <div class="box">
            <p>The online classes are interactive and engaging. The instructors are always available to help, and the resources provided are top-notch. My faith and knowledge have deepened significantly since enrolling here</p>
            <div class="user">
              <img src="images/pic-5.jpg" alt="">
              <div>
                <h3>Zainab Ahmed</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              </div>

            </div>
        </div>

        <div class="box">
            <p>This madrasa offers a perfect balance between religious studies and contemporary subjects. The supportive environment and excellent teaching staff have made my learning experience incredibly enriching and fulfilling.</p>
          
            <div class="user">
              <img src="images/pic-6.jpg" alt="">
              <div>
                <h3>Yasir Malik</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              </div>

            </div>
        </div>

        <div class="box">
            <p>I am grateful for the comprehensive education I receive here. The focus on ethical values and community involvement, along with academic excellence, has made a significant positive impact on my life and character.</p>
          
            <div class="user">
              <img src="images/pic-7.jpg" alt="">
              <div>
                <h3>Fatima Hassan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              </div>

            </div>
        </div>

        <div class="box">
            <p>Enrolling in this madrasa has been one of the best decisions I've made. The holistic approach to education, combined with a caring and knowledgeable faculty, has helped me achieve personal and academic growth.</p>
          
            <div class="user">
              <img src="images/pic-3.jpg" alt="">
              <div>
                <h3>Farah Khan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
              </div>

            </div>
        </div>

    </div>

</section>











<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>