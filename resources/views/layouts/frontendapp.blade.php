
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="CaaM4MwPFS4rhe4EHXIYLDJesz0eSIBNgaTwvKsD">
    <meta name="description" content="Develop your professional &amp; personal skills through Creative IT Institute. We provide Graphic Design, Web &amp; Software, Digital Marketing, Networking, Film &amp; Media, Robotics &amp; Automation Training etc affordable price." />


    <title>Home - Chattogram Branch</title>
    <link href="https://creativeitinstitutectg.com/frontend/images/icon.jpg" rel="icon" />
    <link href="//fonts.googleapis.com/css?family=Arimo:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/lightbox.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/media.css')}}" rel="stylesheet" />
    
    


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">
    
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <!--<div id="fb-customer-chat" class="fb-customerchat">-->
    <!--</div>-->
     <!-- Your customer chat code -->
    <div id="fb-customer-chat" class="fb-customerchat"
      attribution=setup_tool
      page_id="284482795491686"
      theme_color="#fa3c4c"
      logged_in_greeting="আপনি কি আইটি ক্যারিয়ার নিয়ে ভাবছেন ? বলুন কিভাবে সাহায্য করতে পারি ?"
      logged_out_greeting="আপনি কি আইটি ক্যারিয়ার নিয়ে ভাবছেন ? বলুন কিভাবে সাহায্য করতে পারি ?">
    </div>

    <script >
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "284482795491686");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    

        <header id="header">
    <div class="container">
        <div class="row mx-0">
            <div class="col-lg-2 col-sm-3 px-0">
                <div class="news-title">
                    <p>Latest News</p>
                </div>
            </div>
            <div class="col-lg-10 col-sm-9 px-0">
                <div class="news-details">
                    <p class="marquee">Creative IT Institute, one of the leading IT training institutes in Bangladesh offers the best training opportunities. It has been playing a vital role to eradicate the unemployment problem since 2008. Enriched with quality training this institute has never failed to help the individuals to reveal their talents making harmony between creativity and IT. No matter what is your background, we are offering 30 courses for you conducted by experienced trainers to advance your skills.</p>
                </div>
            </div>
        </div>
    </div>
</header>


<!--============== Navbar Part Goes Here ================-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="https://creativeitinstitutectg.com">
            <img src="https://creativeitinstitutectg.com/storage/logo/logo_6055bcd524c62.png" alt="logo">
            <span style="font-family: 'Ubuntu Condensed', sans-serif; color: #666; font-weight: 400;"> &nbsp;|
                Chattogram</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://creativeitinstitutectg.com">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://creativeitinstitutectg.com#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://creativeitinstitutectg.com#courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://creativeitinstitutectg.com#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://creativeitinstitutectg.com#footer">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://creativeitinstitute.com/">Dhaka Branch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link seminar-click" href="https://creativeitinstitutectg.com#seminar">Seminar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')


 <footer>
            <div class="col-lg-4 col-md-4 col-sm-6 pt-sm-4 pt-md-0">
                <div class="contact-right">
                    <div class="address">
                        <h3>Contact</h3>
<h5>ctg@creativeitinstitute.com</h5>
<p>+880 1847422965, +880 1847422959</p>
<p>+880 1847422966 </p>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/CITI.Chattogram" target="_blank"><i class="fa fa-facebook-f"
                                aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCWxEU-3nFwQ95_VniFMU4Ng" target="_blank"><i
                                class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/company/75671629/admin" target="_blank"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/creativeitinstitutechattogram/" target="_blank"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============== Copyright Part Goes Here ================-->
<a href="#" class="back2"> <i class="fa fa-chevron-up" aria-hidden="true"></i> </a>
<section id="footer-btm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footerbtm text-center">
                    <p>Copyright © 2020 Creative IT Institute Chattogram. </p>
                </div>
            </div>
        </div>
    </div>
</section>



	<script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/js/lightbox.min.js')}}"></script>
	<script src="{{asset('frontend/js/slick.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.marquee.min.js')}}"></script>
	<script src="{{asset('frontend/js/custom.js')}}"></script>
    
   
    
</body>

</html>
