 <!-- footer start -->
 <footer class="footer-area">
     <div class="footer-top bg-1">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-sm-6 col-12 pt-4">
                     <div class="footer-widget footer-logo">
                         <img src="images/logo.png" width="200" alt="Responsive image">
                         <p class="mt-4">At Stack, customers come first. And their satisfaction is not just our top priority but also the driving force for us, every single day.</p>
                         <h4>Working Hours: </h4>
                         <span>Mon - Sat 8:00 - 18:00 (Sunday off)</span>
                         <ul>
                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 col-12">
                     <div class="footer-widget footer-contact">
                         <h4 class="widget-title">GET IN TOUCH</h4>
                         <ul class="list-unstyled">
                             <li><i class="fa fa-building-o"></i> 256 Interior the good, New York</li>
                             <li><i class="fa fa-envelope-o"> </i> Supportyou@Interrio.com
                             <li><i class="fa fa-phone"></i> (+321) 567 89 0123
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-2 col-sm-6 col-12">
                     <div class="footer-widget footer-menu">
                         <h4 class="widget-title">Quick Links</h4>
                         <ul class="list-unstyled">
                             <li><a href="#hero-area">Home</a></li>
                             <li><a href="#feature">Feature</a></li>
                             <li><a href="#services">Services</a></li>
                             <li><a href="#testimonial">Testimonial</a></li>
                             <li><a href="#contact">Contact</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6 col-12">
                     <div class="footer-widget newsletter">
                         <h4 class="widget-title">newsletter</h4>
                         <p>To be one of the most trusted and globally reputed financial distribution companies.</p>
                         <form action="#">
                             <input type="text" placeholder="Enter Your Email">
                             <button>subscribe</button>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="footer-bootom">
                 <!-- <div class="container"> -->
                 <div class="row">
                     <div class="col-12">
                         <p class="float-left">&copy;Copyright &copy;All rights reserved</p>
                         <p class="float-right"><small> This site by <a href="" target="_blank">wittyweb</a></small></p>
                     </div>
                 </div>
                 <!-- </div> -->
             </div>
         </div>
     </div>

 </footer>
 <!-- footer end -->

 <button onclick="topFunction()" id="myBtn" title="Go to top" class="topbtn shadow px-3 py-2 rounded"><i
          class="fa fa-angle-up"></i></button>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
     integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
 </script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
 </script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
$(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: false,
        navigationText: ["", ""],
        slideSpeed: 1000,
        singleItem: true,
        transitionStyle: "fade",
        autoPlay: true
    });
});

 //Get the button
 var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

  AOS.init();
</script>
 </body>

 </html>