<!--header-->
  <div class="strip"> </div>
  <div class="header-top" id="home">
    <div class="container">
      <div class="head-section">
        <div class="logo-content">
          <!--top-logo-->
          
              <div class="logo">
                  <a href="index.php"><img src="images/logo.png"  alt="" width="200" height="150" /></a>
                  <h4 style="color: orange; size: 80px;" >THE RETIREMENT HOME</h4>
              </div>
              <div class="top-log">
                <ul>
                  <li><a href="https://www.facebook.com/Shibasramkolkata/"><b>Facebook</b></a></li>
                  <li><a href="https://www.helpageindia.org/our-work/welfare-development/old-age-homes/"><b>Google</b></a></li>
                 <li><a href="https://twitter.com/happyoldagehome"><b>Twitter</b></a></li>
                <li><a href="https://www.youtube.com/watch?v=n5DNbCvAUy0"> <b>Youtube</b> </a></li>
                 
                </ul>
                  <div class="clearfix">
                   </div> 
              </div>  
              <div class="clearfix"> </div> 
          </div>
          <div class="social-content">
              <div class="top-icons">
                <ul>
                  <li><a class="fb" href="https://www.facebook.com/Shibasramkolkata/"><span> </span></a></li>
                  <li><a class="gp" href="https://www.helpageindia.org/our-work/welfare-development/old-age-homes/"><span> </span></a></li>
                  <li><a class="tw" href="https://twitter.com/happyoldagehome"><span> </span></a></li>
                  <li><a class="you" href="https://www.youtube.com/watch?v=n5DNbCvAUy0"><span> </span></a></li>
                  <div class="clearfix"> </div>
                </ul>
              </div>
            </div>
          </div>
            <div class="clearfix"></div>
      </div>
        <div class="clearfix"></div>
    <div class="sub-header">
    <!--start-top-nav-->
             <nav class="top-nav">
              <ul class="top-nav">
                <li class="active"><a href="index.php"> Home</a></li>
                <li><a href="about.php">  About </a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="eligibility.php">Eligibility</a></li>
                <li><a href="rules.php"> Rules </a></li>
                <li><a href="search.php"> Search </a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="admin/login.php"> ADMIN </a></li>
                <li><a href="admin/testimonial.php"> Testimonial </a></li>
                  <div class="clearfix"> </div>

              </ul>
              <a href="#" id="pull"><h6>MENU</h6><img src="images/menu-icon.png" title="menu" /></a>

            </nav>
            <!--start-top-nav-script-->
          <script>
            $(function() {
              var pull    = $('#pull');
                menu    = $('nav ul');
                menuHeight  = menu.height();
              $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
              });
              $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                      menu.removeAttr('style');
                    }
                });
            });
          </script>
  <!--//End-top-nav-script-->

      <!-- script-for-menu -->
        <script>
          $(document).ready(function(){
            $("span.menu").click(function(){
              $(".top-nav ul").slideToggle(200);
            });
          });
        </script>
      <div class="clearfix"> </div>
    </div>
    <!--/header-->