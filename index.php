<?php
if(isset($_POST['submit']) && !empty($_POST)) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message=$_POST['message'];
    $mailBody = "Here is the user contact details:\n";
    $mailBody .= "User Name: " . $firstname . " " . $lastname .  "\n";
    $mailBody .= "User Email: " . $email . "\n";
    $mailBody .= "Phone: " . $phone . "\n";
    $mailBody .= "Message: " . $message . "\n";
    $recipient = "shuvataraphoto@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    if(mail($recipient, $subject, $mailBody, $mailheader)){
      ?>
      <script> alert("Thank you for contacting us. We will connect with you soon. ")</script>
      <?php
    }

  }
?>
<?php include "head.php" ?>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
   <?php include "nav.php" ?>
    <section id="home">
        <div class="studio-text"> Digital Lab & Studio</div>
        <div class="social-icons-wrapper">
          <a href="https://www.facebook.com/Studio-Shuvatara-2199594963470853" target="_blank"> <i class="fa fa-facebook"></i></a>
          <a href="https://www.youtube.com/channel/UCtOaG5F-TA0NeAvz_RymARA" target="_blank"> <i class="fa fa-youtube"></i></a>
          <a href="https://www.instagram.com/studio.shuvatara9/" target="_blank"> <i class="fa fa-instagram"></i></a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="./images/slider/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/slider/2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/slider/3.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./images/slider/4.jpg" class="d-block w-100" alt="...">
              </div>
              
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>

    </section>
    <section id="services">
        <div class="title">services</div>
        <div class="services-items-wrapper" data-aos="fade-right">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/services/photography.jpeg" alt="Card image cap">
                <div class="card-body">
                <a href="./photography.php"><h5 class="card-title" >Photography</h5></a>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/services/videography.jpeg" alt="Card image cap">
                <div class="card-body">
                  <a href="#videography"><h5 class="card-title">videography</h5></a>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/services/framing.jpg" alt="Card image cap">
                <div class="card-body">
                  <a href="#framing"><h5 class="card-title">Photo Framing</h5></a>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               
                </div>
            </div>    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./images/services/flex-print.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Flex-print</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>    
            
            
                
        </div>
       <div class="printing-wrapper ">
       <div class="photo-enlargement-showcase">
            <p>Photo printing and Enlargement</p>
            <img class="wide" src="./images/services/content_enlargement.png" alt="">
          
          </div>
          <div class="mug-print-showcase">
            <p>Cup/Mug Print</p>
            <img src="./images/cup-print/1.jpg" alt="">
            <img src="./images/cup-print/2.jpg" alt="">
            <img src="./images/cup-print/3.jpg" alt="">
          
          </div>
          
          <div class="mug-print-showcase">
            <p>Tshirt Print</p>
            <img src="./images/services/tshirt-print/personalized-tshirt.jpg" alt="">
            <img src="./images/services/tshirt-print/Tshirt-printing.jpg" alt="">
            <img src="./images/services/tshirt-print/cheap-white-t-shirt-printing-266x300.jpg" alt="">
          
          </div>
          <div class="cusion-print-showcase">
            <p>Cusion Print</p>
            <img src="./images/services/cusion-print/111-500x500.jpg" alt="">
            <img src="./images/services/cusion-print/sublimation-pillow-with-cushion-500x500.jpg" alt="">
            <img src="./images/services/cusion-print/se.jpg">
          
          </div>
          <div class="cusion-print-showcase">
            <p>PVC/ID card Print</p>
            <img src="./images/services/id-card-print/1.png" alt="">
            <img src="./images/services/id-card-print/3684340673948fd595890e7cd3a5fd01.jpg" alt="">
            <img src="./images/services/id-card-print/design-and-print-pvc-and-rfid-cards.jpg" alt="">
          
          </div>
          <div class="marble-print-showcase">
            <p>Marble Print</p>
            <img src="./images/services/marble-printing.jpg" alt="">
           
          
          </div>
       
       </div>

    </section>
    <section id="photography">
        <div class="title">photography <i class="fa fa-camera"></i></div>
        <div class="photos_wrapper " >
            <div class="photo"><img src="https://i.ytimg.com/vi/PW8tr4j1ZWE/maxresdefault.jpg" alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSXK5xrjFcs1E-wrtjAIkh97Wtm3LjT-6iRFA&usqp=CAU""
                    alt=""></div>
            <div class=" photo"><img src="https://i.pinimg.com/originals/d2/ea/2e/d2ea2efba0bfe7aa052022286b8aea1e.jpg"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
            <div class="photo"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVwLgmCHe573bvo5Uv2atyW_4ceVbgaS1aBQ&usqp=CAU"
                    alt=""></div>
        </div>
    </section>
    <section id="videography">
        <div class="title" data-aos="fade-left">Videography <i class="fa fa-video-camera"></i></div>
        <div class="video-wrapper" data-aos="fade-right">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TboWOSW7qCI" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TboWOSW7qCI" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TboWOSW7qCI" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TboWOSW7qCI" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TboWOSW7qCI" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>


        </div>



    </section>
    <section id="framing">
        <div class="title" data-aos="fade-left">Photo Framing</div>
        <div class="wrapper">
            <div data-aos="fade-right"></div>
            <div class="content" data-aos="fade-down">
                <p>                Frame Your Imagination........” With us Pro.Photography & Videography
                </p>
                <br>
                <p>We deal with all kinds of photo framing and customization to fit your needs.</p>
            </div>
        </div>

    </section>


    <section id="contact">
        <div class="title" >contact</div>
        <div class="contact-wrapper">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.9335437481154!2d85.31988321453717!3d27.657527734287537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb177d6de50903%3A0xc832c48efc882fe2!2sShuvatara%20Digital%20Colour%20Lab%20And%20Studio!5e0!3m2!1sen!2snp!4v1601483052568!5m2!1sen!2snp"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
                <div class="form-container">
                  <form  action="" method="POST" autocomplete="off">
                    <div class="form-title">CONTACT US</div>
                    <fieldset class='form-group'>
                      <label for="firstname">First Name</label>
                      <input  required type="text" name="firstname" class='form-control' id='firstname'>
                    </fieldset>
                    <fieldset class='form-group'>
                      <label for="lastname">Last Name</label>
                      <input required type="text" name="lastname" class='form-control' id='lastname'>
                    </fieldset>
                    <fieldset class='form-group'>
                        <label for="email">Email Adress</label>
                        <input required type="email" name="email" class='form-control' id='email'>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="phone">Phone Number</label>
                        <input required type="number" class="form-control" id="phone" name="phone">
                        
        
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="message">Message</label>
                        <textarea  name="message" id="content" cols="30" rows="10"></textarea>
                    </fieldset>
                    <button type="submit" id="submit" name='submit' class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div class="contact-details">
                  <div class="left">
                    <div class="brand-image"><img width="300px" height="150px"src="./images/LOGO.jpeg" alt=""></div>

                  </div>
                    <div class="right">
                      <div class="email" style="display: flex;"><i class="fa fa-envelope" style="font-size: 40px;margin-right: 10px;"></i> shuvataraphoto@gmail.com</i></div>
                      <div class="phone">Phone: 01-5152194</i></div>
                      <div class="phone">Mobile: 95959954</i></div>
  
  
                      <div class="social-icons">
                          <div>Follow Us</div>
                          <div>
                            <a href="https://www.facebook.com/Studio-Shuvatara-2199594963470853" target="_blank"> <i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCtOaG5F-TA0NeAvz_RymARA" target="_blank"> <i class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/studio.shuvatara9/" target="_blank"> <i class="fa fa-instagram"></i></a>
                          </div>
                      </div>
                    </div>

                </div>
            
        </div>
    </section>
    <footer>
        <div>
            <p>copyright &copy 2020 Shuvatara Digital Colour Lab & Studio</p>

        </div>
    </footer>

 
    <!--scroll animation library-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--Initializa values FOR SCROLL ANIMATION=-->
    <script>
        AOS.init({
            offset: 150,
            duration: 1000
        });
    </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script src="js/main.js"></script>

<script>
    
    $('nav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 350,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'


    });
</script>

</body>

</html>