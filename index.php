<?php
include_once 'header.php';
?>


<!-- package start -->

<style>


.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25D366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
  @import url(https://fonts.googleapis.com/css?family=Lato:400,700);

body {
  background: #F2F2F2;
  padding: 0;
  maring: 0;
}

#price {
  text-align: center;
}

.plan {
  display: inline-block;
  margin: 10px 1%;
  font-family: 'Lato', Arial, sans-serif;
}

.plan-inner {
  background: #fff;
  margin: 0 auto;
  min-width: 252px;
  max-width: 100%;
  position:relative;
}

.entry-title {
  background: #82b04d;
  height: 140px;
  position: relative;
  text-align: center;
  color: #fff;
  margin-bottom: 30px;
}

.entry-title>h3 {
  background:#1d542a;
  font-size: 17px;
  padding: 5px 0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0;
}

.entry-title .price {
  position: absolute;
  bottom: -25px;
  background: #82b04d;
  height: 104px;
    
    width: 159px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius: 12px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 28px;
  font-weight: 700;
}

.price span {
  position: absolute;
  font-size: 9px;
  bottom: -10px;
  left: 30px;
  font-weight: 400;
}

.entry-content {
  color: #323232;
}

.entry-content ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}

.entry-content li {
  border-bottom: 1px solid #E5E5E5;
  padding: 10px 0;
}

.entry-content li:last-child {
  border: none;
}

.btn {
  padding: 3em 0;
  text-align: center;
}

.btn a {
  background: #323232;
  padding: 10px 30px;
  color: #82b04d;
  text-transform: uppercase;
  font-weight: 700;
  text-decoration: none
}
.hot {
    position: absolute;
    top: -7px;
    background: #F80;
    color: #fff;
    text-transform: uppercase;
    z-index: 2;
    padding: 2px 5px;
    font-size: 9px;
    border-radius: 2px;
    right: 10px;
    font-weight: 700;
}
.basic .entry-title {
  background: ;
}

.basic .entry-title > h3 {
  background: ;
}

.basic .price {
  background: ;
}

.standard .entry-title {
  background: ;
}

.standard .entry-title > h3 {
  background: ;
}

.standard .price {
  background: ;
}

.ultimite .entry-title > h3 {
  background: ;
}

.ultimite .entry-title {
  background: ;
}

.ultimite .price {
  background: ;
}
</style>
<!-- package end -->
<style>
.btn-get-started {
    font-family: normal;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 32px;
    border-radius: 5px;
    transition: 0.5s;
    line-height: 1;
    margin: 10px;
    color: #fff;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    border: 0;
    background: #82b04d;
    
    
}



body {
  
    
    

    font-family: 
}

#demo {
    background: linear-gradient(112deg, #dee2e6 50%, #dee2e6 50%);
   
    margin: auto
}

.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: rgba(78, 77, 77, 0.856);
    text-align: center;
    font-size: 1rem;
    font-style: normal;
    font-weight: ;
    line-height: 
}

@media(max-width:767px) {
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;
        color: rgba(78, 77, 77, 0.856);
        text-align: center;
        font-size: 0.7rem;
        font-style: italic;
        font-weight: bold;
        line-height: 1.5rem
    }
}

.carousel-caption img {
    width: 15rem;
    border-radius: 5rem;
    margin-top: 2rem
}

@media(max-width:767px) {
    .carousel-caption img {
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem
    }
}

#image-caption {
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem
}

@media(max-width:767px) {
    #image-caption {
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem
    }
}

.fa-arrow-right {
    background-color: black;
    padding: 1.4rem
}
.fa-arrow-left {
    background-color: black;
    padding: 1.4rem
}
@media(max-width:767px) {
  .fa-arrow-right  {
        padding: 0.8rem
    }
    .fa-arrow-left  {
        padding: 0.8rem
    }
}

.carousel-control-prev {
    justify-content: flex-start
}

.carousel-control-next {
    justify-content: flex-end
}

.carousel-control-prev,
.carousel-control-next {
    transition: none;
    opacity: unset
}
</style>
<script>
      $(".video-play").on('click', function(e) {
        e.preventDefault(); 
        var vidWrap = $(this).parent(),
            iframe = vidWrap.find('.video iframe'),
            iframeSrc = iframe.attr('src'),
            iframePlay = iframeSrc += "?autoplay=1";
        vidWrap.children('.video-thumbnail').fadeOut();
        vidWrap.children('.video-play').fadeOut();
        vidWrap.find('.video iframe').attr('src', iframePlay);


    });
 
</script>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slider.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"> <span></span></h2>
                <p class="animate__animated animate__fadeInUp">Adopt a lifestyle that promotes your health and happiness. Join my program and I will empower you to discover your healthier self .</p>
                <a href="about_dr_maheswari.php
                " class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slider1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp">Health is Holistic. Samathva program helps you achieve balance between your food, thoughts, lifestyle and your attitude towards all these. </p>
                <a href="programs.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slider2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp">Through our well designed Holistic health program I coach people to lead a whole and complete life. Choose your program now. </p>
                <a href="testimonial.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/dr.jpg" class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About <br> Dr Maheshwari</h2>
              
              <p>Dr. Maheshwari Sangolli, Founder of ‘Samathva Holistic Health’, is an Integrative Medicine Physician specializing in the field of Naturopathy &  Yoga, Fitness, Plant based Nutrition, Acupuncture. She founded Samathva in 2012 with the vision of inspiring people to follow a healthy diet and lifestyle.Passionate in Working towards Reversing and Preventing disease by inspiring people to adopt Natural Diet, Healthy Lifestyle and Mindful living.She got her Bachelors medical degree in Naturopathy and Yogic Sciences (under AYUSH- Indian System of Medicines) from SDM College of Naturopathy and Yogic Sciences, Ujire.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
             
              <h4 class="title"><a href="">Also done her Certifications in, </a></h4>
              <p class="description">*Nutrition and Child Care <br>*Pre and Postnatal Fitness Instructor Training<br>*Fitness Diet and Nutrition<br>*Primary and Advanced Pilates Instructor Training<br>*Aerobic Instructor Training<br>*Spinning Instructor Training</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              
             
            </div>
           
          </div>
          <a href="about_dr_maheswari.php" class="btn-get-started">Read More</a>
        </div>
        

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->


<!-- packages section -->
<section id="about" class="about">
<div class="container">
  <br>
<div class="section-title">
         <h2>Programs</h2>
        </div>
<div id="price">
  <!--price tab-->
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>1 Hour Session  </h3>
        <div class="price"> 3000/- 
        </div>
      </div>
      <div class="entry-content">
       
      </div>
      <div class="btn">
        <a href="programs.php">Pick This Plan</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan basic">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>2 Months Program </h3>
        <div class="price"> 12,500/- 
        </div>
      </div>
      <div class="entry-content">
      
      </div>
      <div class="btn">
        <a href="programs.php">Pick This Plan</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan standard">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>4 Months Program</h3>
        <div class="price">21,500/- 
        </div>
      </div>
      <div class="entry-content">
       
      </div>
      <div class="btn">
        <a href="programs.php">Pick This Plan</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan ultimite">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>6 Months Program </h3>
        <div class="price"> 32,500/- 
        </div>
      </div>
      <div class="entry-content">
        
      </div>
      <div class="btn">
        <a href="programs.php">Pick This Plan</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
</div>
<a class="btn-get-started" href="programs.php#signUp">Read More</a>

</div>
</section>

<!-- packages section end -->


    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">

    <div class="section-title">
         <h2>Testimonial</h2>
        </div>
    <div class="container">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption"><img src="images/2.jpg"> 
                    <p>" Being health conscious I have always preferred to stay healthy. Still my weight was stuck at some point since years. I have accepted the fate of it. One of my  friend who has followed Dr. Maheshwari Sangolli's  online diet program has transformed herself. Seeing that, I have started my health journey with Dr. Sangolli and to my surprise, my weight started to drop! I never counted calories, instead, learnt the healthier way to eat,cook and sustain my health. I am totally inspired by the goodness of her diet. Overall I am happy to share that, I am more energetic and joyous now and I have dropped 10 kg in 4 months! I really appreciate the conviction and support that Dr. Maheshwari Sangolli  provided in the journey. I Thank and wish every one a good journey with Samathva Naturopathy. " </p>
                    <div id="image-caption">Regards,</br>Sapna</div>
                    
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/1.jpg">  <p>"All thanks to Dr. Maheshwari  Sangolli who transformed me from FAT to FIT naturally without a single Medicine. Not with FAD  Diets like Keto, low calorie etc.. All by guiding on natural food.
She guided me with proper nutrition, right exercise & lifestyle changes which made me look lean,fit & I stay more energetic throughout the day now.
Didn't know such is the power of nature.
All I would say is-:
Take care of your body naturally & it will definitely heal naturally. </p>
                    <div id="image-caption">Regards,</br>Manish Singh</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/4.jpg"> <p>"Having to live in a country of extreme climates and exotic food our favorite pastime in Kuwait is indulging in food.  When we were young we never realized what harm that would do to our health.  From 50 kg to 80 kg  I added consistently in a span of 18 years along with Hypothyroidism. Two years before sudden realization  came into my mind  and I thought it was high time and I took charge of my life and health.  Made lot of changes in the food habits and life style.  Lo and behold could not achieve anything and didn't reduce even one 1 kg in the past two years.  Almost lost hope. And then I heard about Dr. Maheshwari Sangolli and enrolled in her programme.   Wow!!! It made wonders in my life.  I lost 6 kg in a span of just 3 months.  Her consistent guidance and persistent follow up helped in achieving this only by way of diet.  Not only that, she has taught me the secret of healthy life.  I am indebted to her always.   Thank you Dr.  these are words straight from my heart.   Please continue the good work in turning the lives of more and more human beings.  </p> 
                    <div id="image-caption">Regards,</br>Sujatha Elangovan
<br>Kuwait.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/5.jpg"><p>" I had tried so many options for weight loss but nothing worked for me. Finally I tried Dr. Maheshwari Sangolli's weight loss program. All thanks to our Zumba instructor Sampoorna, who introduced Dr. Maheshwari to . I would like to express my appreciation, joy and happiness to her in helping me achieve my fitness goal and going back to where I was 12 years ago. I suffered from Hypothyroid. After following this program, I observed a drastic change in my overall health and lifestyle, better eating habits and toned body. I feel great and more energetic than before. Thank you Dr. Maheshwari for all the support in guiding me achieve this success."  </p> 
                    <div id="image-caption">Regards,</br>Ritu Singh<br>From, Kuwait.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/7.jpg"><p>"I am thankful for Dr. Maheshwari Sangolli's support, guidance for helping me lead a healthy and happy lifestyle and I also dropped 4 kg even along with Hypothyroid and PCOD conditions. You taught me how to enjoy life in a healthy way Dr. Thank you so much." </p> 
                <div id="image-caption">Regards,</br>Srirupa Ganguly
<br>Kuwait.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/8.jpg"><p>"Working with Dr. Maheshwari has been an eye opening experience. I have learnt a lot with regards to eating and being healthy. The different methods of eating right, the misconceptions about food, the right way of listening to our body's needs etc., It's been a wonderful yet challenging experience. In this process I have lost a few inches and 2.5 kgs. But it's my achievement. It has made me confident, that with mindful eating and a conscious effort, anything can be achieved. 
Dr. Maheshwari Sangolli has been patient and willing to modify my meals according to my needs. I will definitely follow her methods and guidance towards achieving a greater weight loss. Thank you Dr. Maheshwari for your constant guidance. " </p> 
                    <div id="image-caption">Regards,</br>From Kuwait,
Iris.
</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/9.jpg"> <p>"I came to Dr. Maheshwari when I had diabetes with severe acidity and fatigue. My main intention was to get rid of my sugar complications and get into a healthy lifestyle of eating right. I was looking for natural, medicine-less treatment and not english medicines. That is when I discovered Dr. Maheshwari. She treated me just with right food, THY FOOD IS THY MEDICINE - is her mantra. I can say today after 3 months I feel free of my sugar complications, dropped around 10 kg weight and free from allopathy medicines. I can never thank her enough for introducing me to her diet and she is truly life changing. Thank you Dr. Maheshwari." </p> 
                    <div id="image-caption">Regards,</br>Divya
<br>Bangalore</div>
                </div>
            </div>
           
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/10.jpeg"><p>" From last two years I have been gaining weight. I have tried all the possible ways to reduce my weight like yoga , walking, exercise etc., but of no results. Meanwhile I was struggling with few health issues too and I was depressed with all these. One fine day I happened to see Dr. Maheshwari Sangolli’s weight loss program and I immediately called her. She suggested to start a healthy diet. I acknowledged and started to implement the routine which she suggested . She didn’t restrict us not to eat food, but she guided us on how to eat right with right food choices and proportion. I am surprised and also happy to say that in 3 months I have reduced by 8 kg . As I told earlier I had few health issues like knee pain, headache and low BP but now I don't have any of those. Also I used get angry more often but now I can manage my anger too, due to my food habits. Because whatever we eat controls our mind too. Dr. Maheshwari stays in Odisha and I stay in Bangalore. She guided me over calls and Whats App only . I would like to thank Dr. Maheshwari Sangolli wholeheartedly for guiding me to become who I am today! Thank you Samathva ! "  </p> 
                    <div id="image-caption">Regards,</br>Suguna Satish
<br>Bangalore</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/6.jpg"> <p>"Here is my story. I'm 38 years old and reside at Bangalore. Five years ago when Dr. Maheshwarii was residing at Bangalore I had taken diet plan from her and was able to lose 10kg of my weight. Till last year, until I went through a surgery everything went on well. But after my surgery, I couldn't take care of myself. I had my menstrual problems and also was suffering from severe hair fall. Slowly I started gaining weight. At one point of time I had gained 7 kgs of extra weight. This bothered me. I tried my best to reduce my weight all by myself but I couldn't. When I tried meeting Dr. Maheshwari, I came to know that she is residing in Odisha. To my grace, when my sister told me that Dr. Maheshwari consults through phone call and WhatsApp. I am well aware of the benefits of healthy diet what she suggests. I immediately called Dr. Maheshwari and explained her my health issues. She responded so nicely and encouraged me so much by guiding me with diet program, which has helped me to lose all the extra gained 7kg in just 3 months. I am so happy as well as healthy now. She gave me the healthier and easier diet plan and also taught me how to do it as well.  she responded to me so gently each and every time in spite of her busy schedule and clarified all my queries in time. As we all know that health is wealth. Being healthy is so important. I can assure that she has a solution to all your health problems. And I suggest all of you must go through the diet program with Dr Maheshwari Sangolli. Today I'm leading my life more happily, healthily and of course confidently because of her.  I whole heartedly thank her for all her timely help, advise and guidance.  </p>
                    <div id="image-caption">Regards,</br>Bhagya
<br>Bangalore</div>
                </div>
            </div>  
            <div class="carousel-item">
                <div class="carousel-caption">
                <img src="images/3.jpg"> <p>" I would like to thank Dr. Maheshwari Sangolli for helping me to gain my confidence back and for teaching me to lead a healthier lifestyle. My journey from fat to fit was possible just because of the knowledge gained from Dr. Sangolli, she not just taught me what to eat, but most importantly how and when to eat. And I will not forget to mention that, it's all with the natural diet only. As I am preparing for my higher studies, I stay alone and followed this online program very smoothly. It was incredible for me to witness my transformation. I once again thank Dr. Maheshwari Sangolli for being my guide. " </p> 
                    <div id="image-caption">Regards,</br>Amit Samal</div>
                </div>
            </div>
        </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
        
    </div>
    <a href="testimonial.php" class="btn-get-started">Read More</a>
</div>

       
       
      </div>
      
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>BLOG</h2>
        </div>

      	<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="blog css/images/PCOD.jpg" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
									25
									</span>

									<span class="txt31">
										July, 2019
									</span>
								</div>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9">PCOD AND WEIGHT GAIN</a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Dr. Maheshwari Sangolli
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										25 July, 2019
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<!-- <span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span> -->

									<!-- <span>
										8 Comments
									</span> -->
								</div>

								<p>
                PCOD is the most common hormonal disorder in women of childbearing age and can lead to issues with  fertility. Women who have PCOD have higher levels of male hormones and are also less sensitive to Insulin and are Insulin resistant.  
								</p>

								<a href="blog.php" class="dis-block txt4 m-t-30">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>SCHEDULE A SESSION</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Patia, Bhubaneswar, Odisha</p>
            </div>
            
          </div>
          
          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            </div>
          </div>
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
  <a href="https://chatwith.io/s/www-drmaheshwarisangolli-com" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
  <?php
  include_once 'footer.php';
  ?>