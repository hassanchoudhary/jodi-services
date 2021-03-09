<!-- Footer Section -->

<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <h2>About Company</h2>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i> Seattle, WA 
        </p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <h2>Useful Links</h2>
        <a href="#">About</a>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <h2>Subscribe Newsletter</h2>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Your Email address" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
          </div>
        </div>
        <p>Sign up for our latest news & articles. We won’t spam you!</p>
      </div>
    </div>

<div class="row footer-bottom">
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<p >Copyright © 2020 JoDi Services</p>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <a href="">FACEBOOK</a>
    <a href="">LINKEDIN</a>
    <a href="">INSTAGRAM</a>
      </div>
</div>


  </div>
</section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script>
      $(document).ready(function(){
          // Add minus icon for collapse element which is open by default
          $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
          });
          
          // Toggle plus minus icon on show hide of collapse element
          $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
          }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
          });
      });
  </script>
  
<script>
  $('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>


  </body>
</html>