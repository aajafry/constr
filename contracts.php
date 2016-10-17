
<?php
include("validation.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <!--ALL META TAG-->
        <meta charset="utf-8">
        <meta author="Jafry">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GREEN CONSTRUCTION</title>
        <link rel="icon" href="img/icon.png">
        <!--ALL CSS LINK-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <!--ALL FONT LINK-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"> 
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="common-hero-area">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="brand-logo">
                                <a href="index.html"><img src="img/logo.png" alt="band-logo"></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="index.php" class="_animate">HOME</a></li>
                                    <li><a href="about.html" class="_animate">ABOUT</a></li>
                                    <li><a href="services.html" class="_animate">SERVICES</a></li>
                                    <li><a href="team.html" class="_animate">TEAM</a></li>
                                    <li><a href="potffolio.html" class="_animate">POTFFOLIO</a></li>
                                    <li><a href="contracts.php" class="_animate">CONTRACTS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END OF THE HEADER-AREA-->
            <div class="common-slider-area">
               <div class="single-slide-item contracts-slider-img">
                    <div class="single-slide-item-table">
                        <div class="single-slide-item-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10">
                                       <div class="background-border">
                                           <h2>HOME <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>CONTRACTS</strong></h2>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><!--END OF THE SLIDER-AREA-->
       </div><!--END OF THE COMMON-HERO-AREA-->
       <div class="contracts-area margin-top">
            <div class="content-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><strong>GIVE</strong> US A GOOD NEWS</h2>
                            <div class="form-wrapper">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <p>
                                        <input type="text" name="user_name" placeholder="Name">
                                        <span>* <?php echo $name_error; ?></span>
                                    </p>
                                    <p>
                                        <input type="email" name="user_email" placeholder="Email">
                                        <span>* <?php echo $email_error; ?></span>
                                    </p>
                                    <p>
                                        <input type="text" name="user_subject" placeholder="Subject">
                                        <span>* <?php echo $subject_error; ?></span>
                                    </p>
                                    <p>    
                                        <textarea name="user_message" rows="5" placeholder="Your Message" maxlength="140"></textarea>
                                        <span>* <?php echo $message_error; ?></span>
                                    </p>
                                    <input type="submit" name="sub_button" value="  SUBMIT  " class="common-button">
                                    <span class="success_msg"><?php echo $success_msg; ?></span> 
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2><strong>CONTRACTS</strong> INFORMATION</h2>
                            <div class="contracts-info">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>107727 Santa Monica Boulevard Los Angeles, California 90025-4718 United States of America </p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>0251 542 52 54</p>
                                <p><i class="fa fa-facebook-official" aria-hidden="true"></i>/jon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--END OF THE CONTRACTS-AREA-->
        <div class="contracts-map-area">
            <div class="container-fluid">
                <div class="row">
                    <div id="googlemap">
                    <!--   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29220.68355438898!2d90.4277725!3d23.72649375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1473361403048" width="1170" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>ALL RIGHTS RESERVER &reg; 2016</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                    </a>
                               </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </a>
                               </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                    </a>
                               </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    </a>
                               </li>
                                <li>
                                    <a href="">
                                        <i class="fa  fa-tumblr-square" aria-hidden="true"></i>
                                    </a>
                               </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--END OF THE FOOTER-AREA-->
  
        
        <!--ALL JS LINK-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB36JWUj6VuXcGl0Akpu7p7JtL50dw5GCk"></script><!--use api key-->
        <script src="js/jquery.scrollUp.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
        
        <script>
            
            /*==========================================================================================
        ========================= THIS PLUGIN USED ALL.HTML FILE MENU-BAR ==========================
        ============================================================================================*/
            var animationName = 'animated rubberBand';
            var _animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            $("._animate").hover(function(){
              $(this).addClass(animationName).one(_animationEnd,function(){
                  $(this).removeClass(animationName);
              });  
            });
            
            /*==========================================================================================
            ==================== THIS PLUGIN USED CONTRACTS.HTML(LINE NO : 98) ========================
            ============================================================================================*/
            var myCenter = new google.maps.LatLng(23.813409, 90.423542);
                function initialize() {
                    var mapProp = {
                        center: myCenter,
                        zoom: 18,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googlemap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                        animation: google.maps.Animation.BOUNCE
                    });

                    marker.setMap(map);

                    var infowindow = new google.maps.InfoWindow({
                        content: "I'm Here !!!"
                    });

                    infowindow.open(map, marker);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>