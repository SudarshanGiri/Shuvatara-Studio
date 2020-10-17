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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuvatara Studio</title>
    <link rel="shortcut icon" type="image" href="./images/logo.png">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!--custom styles-->
<link rel="stylesheet" href="styles/style.css">
<!--animate css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
<!---scroll animation-->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!--font awesome-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav id="primary-nav" class="navbar navbar-expand-lg navbar-light bg-light sticky-top primary-nav">
        <a class="navbar-brand" href="#"><img src="images/LOGO.jpeg" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#photography">photography</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#videography" tabindex="-1" aria-disabled="true">videography</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#framing" tabindex="-1" aria-disabled="true">Framing</a>
              </li>
            <li class="nav-item">
                <a class="nav-link " href="#contact" tabindex="-1" aria-disabled="true">contact</a>
              </li>
          </ul>
        </div>
      </nav>
    <!---navbar end-->
    <section id="home">
        <div class="studio-text"> Digital Lab & Studio</div>
        <div class="social-icons-wrapper">
            <a href=""> <i class="fa fa-facebook"></i></a>
            <a href=""> <i class="fa fa-youtube"></i></a>
            <a href=""> <i class="fa fa-instagram"></i></a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="https://i.ytimg.com/vi/PW8tr4j1ZWE/maxresdefault.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/c8/f9/ca/c8f9ca34d3bc0b83f298aab457d925d7.png" class="d-block w-100" alt="...">
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
                <img class="card-img-top" src="https://images.unsplash.com/photo-1513031300226-c8fb12de9ade?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title" >Photography</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">videography</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.caloundraframingfactory.com.au/wp-content/uploads/2018/01/3-key-principles-picture-framing.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Photo Framing</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               
                </div>
            </div>    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.olizstore.com/media/catalog/product/cache/image/1000x1320/e9c3970ab036de70892d86c6d221abfe/z/h/zhutu3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Flex-print</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>    
            
            
                
        </div>

    </section>
    <section id="photography">
        <div class="title" data-aos="fade-left">photography <i class="fa fa-camera"></i></div>
        <div class="photos_wrapper " data-aos="fade-left">
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
                            <a href=""> <i class="fa fa-facebook"></i></a>
                            <a href=""> <i class="fa fa-youtube"></i></a>
                            <a href=""> <i class="fa fa-instagram"></i></a>
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