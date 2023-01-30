<?php
if(isset($_POST['submit']))
{
include('PHPMailer-master/src/PHPMailer.php');
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$message=$_POST['message'];
$date= date ('d-m-y h:i:s');

$to_email = "fatema.godharawala@gmail.com";
 $subject = "Contact form - KFCPL";
 $body = $message;
 $headers = "From:".$email;

 if (mail($to_email, $subject, $body, $headers)) {
   echo "Email successfully sent...";
 } else {
   echo "Email sending failed...";
 }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>KFCPL</title>

        <!-- CSS FILES -->      
         <link href=”https://unpkg.com/aos@2.3.1/dist/aos.css” rel=”stylesheet”>  
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/aos.css" rel="stylesheet">
       <link    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link href="css/template.css" rel="stylesheet">
         <link rel="stylesheet" href="css/animate.css"> 


    </head>
    
    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                       
                           <h6 >
                           Kushal Finnovation Capital Private Limited </h6  >
                      

                   
                    </div>

                   <!-- <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container my-3">
                <a class="navbar-brand" href="index.php">
                                   
                        KFCPL
                        
                   <span> 
                    <!-- <img src="images/lg.png" class="logo img-fluid" alt="Kind Heart Charity"> -->
                     </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#top">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">why choose us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Customers</a>
                        </li>

                      

                       <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact</a>
                        </li>

                         <!--<li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="donate.html">Apply Now</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section hero-section-full-height ">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 col-12 p-0">
                            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/slide/kisan2.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>KFCPL</h1>
                                            
                                            <p>We strive to be a Thoughtful Organization</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slide/kisan10.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Helping</h1>
                                            
                                            <p> Unlock the Potential for Livelihood Upgradation.</p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="images/slide/kisan7.jpg" class="carousel-image img-fluid" alt="...">
                                        
                                        <div class="carousel-caption d-flex flex-column justify-content-end">
                                            <h1>Dreams </h1>
                                            
                                            <p>Enabling Aspirations and Potential in the Rurban</p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
 
   <section class=" section-padding section-bg " id="section_2">
                <div class="container">
                    <div class="  row ">
                          <div class="col-lg-6 col-md-12 comelop animate aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <div class="custom-text-box ">
                                <h2 class="mb-2">About Us</h2>

                                <h5 class="mb-3">KFCPL</h5>

                                <p class="mb-0">Kushal Finnovation Capital Private Limited (“KFCPL”) holds a certificate of registration bearing no. N-02.00352 from the Reserve Bank of India to commence / carry on the business of non-banking financial institution. It is a Private Limited Company, which was incorporated on 29 January 2022 under the provisions of Companies Act, 2013. It is a wholly owned subsidiary of AFAA Private Limited.</p>
                           
                              
                                       
                                    </div>
                                                 
                            </div>
                                <div class="col-lg-6 col-md-12 animate aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                                   
                                    
                                       
                                         <div class="contact-image-wrap d-flex flex-wrap">
                                    <img src="images/slide/arjun.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0"><strong>Arjun Ahluwalia</strong></p>
                                        <p class="mb-0">Non-Executive Director</p>
                                      <!--  <a href="https://www.linkedin.com/in/arjun-ahluwalia-02baa325/" class=" bi-linkedin" target="_blank"></a> -->
                                        <div class="col-sm-12 toppostmmop">
            
            <ul class="list-inline social social-intro">
                  <li><a href="https://www.linkedin.com/in/rajesh-pawar" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
              </ul></div>
                                    </div>
                                </div>
                                     <div class="contact-image-wrap d-flex flex-wrap">
                                    <img src="images/slide/jayesh.jfif" class="img-fluid avatar-image" alt="">

                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0"><strong>Jayesh Modi</strong></p>
                                        <p class="mb-0">Executive Director</p>
                                   <!--<a href="https://www.linkedin.com/in/jayeshsmodi/" class="bi-linkedin" target="_blank"></a> -->
                                    </div>

                                </div>
                                   
                                      <div class="contact-image-wrap d-flex flex-wrap">
                                    <img src="images/slide/arvind.jfif" alt="" class="img-fluid avatar-image">

                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0"><strong>M. N. Aravindkumar</strong></p>
                                        <p class="mb-0">Non-Executive Director</p>
                                      <!--  <a href="https://www.linkedin.com/in/aravind-kumar-marur-narasimha/" class=" bi-linkedin" target="_blank"></a> -->
                                    </div>
                                </div>
                                        
                                   
                               
                        </div>

                       
                 
                        

                        </div>
                         </div>

                  
            </section>


            <section class="section-padding " id="section_3">
                <div class="container ">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5 animate headingmblod aos-init aos-animate" data-aos="zoom-out" data-aos-duration="700">Our Product</h2>
                        </div>
                            
                              <div class="container"> 
                                <div class="row"> 
                                    <div class="col-lg-6 col-md-12 content aos-init" data-aos="fade-right" data-aos-duration="750" data-aos-delay="750" data-aos-easing="ease-out-cubic">
                                      <h3>Supply Chain Management</h3> <p>Supply Chain Financing is a flexible and collateral free credit solution for growth-oriented businesses. We provide tailored solutions to our customers to help them bridge gaps in their credit cycles.</p>

                                     </div> 
                                    <div class="col-lg-6 col-md-12 content aos-init"data-aos="fade-left" data-aos-duration="750" data-aos-delay="750" data-aos-easing="ease-out-cubic">
                                      
                                        <img src="images\slide\supply-chain.png" class="img-fluid" height="auto" width="auto">
                                    
                                     </div> 
                                    </div>
                                </div> 
                              </div>
                       
                    
                </div>
            </section> 
          
          


           

             <section class="cta-section section-padding section-bg " id="section_4">
                <div class="container" style="
    padding-top: 70px; padding-bottom: 70px;
">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0 aos-init aos-animate" data-aos="fade-left" data-aos-duration="700">Why Choose Us?.</h2>
                        </div>

                        <div class="col-lg-5 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-duration="700">
                            <h5>Responsible Lending</h5>
                             <h5>Quick Loan Approval</h5>
                            <h5>Simplified Documention</h5>
                            
                             <h5>Customer First Approach</h5>
                             <h5>Hassle Free Service</h5>
                        </div>

                    </div>
                </div>
            </section>


          
            <section class="cta-section section-bg section-padding " id="section_5">
                <div class="container ">
                     <div class="col-lg-12 col-md-12 justify-content-center align-items-center text-center"   >
                            <h2 class="col-lg-12 col-12 col-md-12 text-center">Our Customers</h2>
                        </div>
            

                    


                        <div class="row justify-content-center align-items-center"style="padding-top: 70px; padding-bottom: 70px;"  >
       <div class=" col-lg-2  bordergrenc imgblock animate aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
         <div class="interest-block text-center  my-2">
            <img src="images\icons\dairy.png" class="img-fluid " height="50px" width="50px">
           <p> <strong>Dairy</strong> </p>
         </div>
       </div>
       <div class="col-lg-2  bordergrenc imgblock animate aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
         <div class="interest-block text-center my-2" >
          <img src="images\icons\chicken.png" class="img-fluid " height="50px" width="50px" >
           <p ><strong> Poultry </strong></p>
         </div>
       </div> <!-- END col-lg-2 col-md-4-->

       <div class="col-lg-2 bordergrenc imgblock animate aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
         <div class="interest-block text-center  my-2">
            <img src="images\icons\harvest.png" class="img-fluid " height="50px" width="50px">
           <p><strong >Agriculture</strong>  </p>
         </div>
       </div> <!-- END col-lg-2 col-md-4-->

       <div class="col-lg-2 bordergrenc imgblock animate aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
         <div class="interest-block text-center  my-2">
          <img src="images\icons\factory.png" class="img-fluid " height="50px" width="50px">
           <p><strong >Manufacturing</strong>  </p>
         </div>
       </div> <!-- END col-lg-2 col-md-4-->

       <div class=" col-lg-2  bordergrenc imgblock animate aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
         <div class="interest-block text-center  my-2">
           <img src="images\icons\fish.png" class=" img-fluid " height="50px" width="50px">
           <p > <strong>Fishery</strong> </p>
         </div>
       </div> 
     
      
                    </div>

            </section>



             <section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                            <div class="contact-info-wrap">
                                <h2>Get in touch</h2>

                                 <div class="contact-image-wrap d-flex flex-wrap">
                                  <!--  <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid avatar-image" alt="">

                                   <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0">Clara Barton</p>
                                        <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                    </div> -->
                                </div>

                                <div class="contact-info">
                                    

                                    <p class="d-flex mb-2">
                                        <i class="bi-geo-alt me-2"></i>
                                       Kushal Finnovation Capital Private Limited (CIN:- U65929KA2022PTC157209) </br></br>
Registered Address -No. 87,Anugraha Building, 3rd Floor, 7th Cross, 4th B Block, Koramangala, Bangalore KA 560034</br></br>
Corporate Address - Unit No 225, Second Floor, Trade Centre, Bandra Kurla Complex, Bandra East, Mumbai MH 400051
                                    </p>

                                  <!--  <p class="d-flex mb-2">
                                        <i class="bi-telephone me-2"></i>

                                        <a href="tel: 022-2343434">
                                            022-2343434
                                        </a>
                                    </p> -->

                                    <p class="d-flex">
                                        <i class="bi-envelope me-2"></i>

                                        <a href="mailto:info@kfcpl.com">
                                           compliance@kfcpl.co.in
                                        </a>
                                       
                                    </p>
  <p>In case of any queries or grievances,</br> Mr. Jayesh Modi can be contacted through the above-mentioned email id. </p>
                                    <a href="https://goo.gl/maps/VxsoEXshKKPACJSR7" class="custom-btn btn mt-3"target="_blank">Get Direction</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto">
                            <form action="connect.php" method="post" class="custom-form contact-form" name="contactForm">
                                <h2>Contact form</h2>

                                <p class="mb-4">Or you can just send an email: 
                                    <a href="#">compliance@kfcpl.co.in</a>
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="E-mail id" required>

                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                                <button type="submit" name="submit" value="submit" class="form-control">Send Message</button>
                            </form>

                        </div>

                    </div>
                </div>
            </section>
 
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-4">
                        <h5 class="site-footer-title mb-3">Quick Links</h5>

                       <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#section_2" class="footer-menu-link">Our Story</a></li>

                            <li class="footer-menu-item"><a href="#section_5" class="footer-menu-link">Customers</a></li>

                            <li class="footer-menu-item"><a href="#section_4" class="footer-menu-link">Why choose Us</a></li>

                            <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">Product</a></li>

                            
                        </ul> 
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                       
                    </div> 

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                        <!--<p class="text-white d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel: 120-240-9600" class="site-footer-link">
                                120-240-9600
                            </a>
                        </p> -->

                        <p class="text-white d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@kfcpl.com" class="site-footer-link">
                               compliance@kfcpl.co.in
                            </a>
                        </p>

                        <p class="text-white d-flex mt-3">
                            <i class="bi-geo-alt me-2"></i>
                           Banglore,India
                        </p>

                        <a href="https://goo.gl/maps/VxsoEXshKKPACJSR7" class="custom-btn btn mt-3">Get Direction</a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © <a href="#" >Kushal Finnovation Capital Private Limited</a></p>
                        </div>
                        
                     <!--   <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                                </li>
                            </ul>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/aos.js"></script>
        <script type="text/javascript">//chlogironmanrajuharry();</script>
         <script>
AOS.init();
</script>


 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    </body>
</html>