<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"href="css/style.css">
  </head>
  <body>
  	<!-- nav bar-->
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">Navbar</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  			</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
   </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--for caresoul-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/images1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/images2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/images3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- Abou setion-->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/images5.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>I am sunita</h2>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			<a href="about.php" class="btn  btn-success">check more</a>
		</div>
	</div>
</div>

</section>
<!--Services -->
<section class="my-5">
	<div class="py-5"> 
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  					<img class="card-img-top" src="images/images1.jpg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">John Doe</h4>
    						<p class="card-text">Some example text.</p>
   									 <a href="#" class="btn btn-primary">See Profile</a>
  					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  					<img class="card-img-top" src="images/images1.jpg" alt="Card image">
  						<div class="card-body">
    						<h4 class="card-title">John Doe</h4>
    							<p class="card-text">Some example text.</p>
    								<a href="#" class="btn btn-primary">See Profile</a>
  						</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  					<img class="card-img-top" src="images/images1.jpg" alt="Card image">
  						<div class="card-body">
    						<h4 class="card-title">John Doe</h4>
    							<p class="card-text">Some example text.</p>
    								<a href="#" class="btn btn-primary">See Profile</a>
  						</div>
				</div>
			</div>
		</div>
		<!--bvmnb,-->

	</div>



</section>
<!--contact denmo-->
<section class="bg-primary">
  <article class="py-5 text-center text-white">
    <div>
      <h3 class="display-4 ">+91-123456789</h3>
      <p>If you want best service call us now</p>
      <button class="btn btn-warning">Contact Now</button>
    </div>
  </article>
</section>
 

<section>
<div class="container">
    <h1 class="text-center text-capitalize pt-5">Gallery</h1>
    <hr class="w-25 mx-auto pt-5">

    <div class="row">
        <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>
         <div class="col-lg-4 col-md-2  col-12 mb-4">
          <img src="images/images1.jpg" class="img-fluid">
        </div>

     </div>

 </div>
</section>
<!--gellery end-->



<section class="bg-primary">
  <article class="py-5  ">
    <div class="text-center text-white">
      <h3 class="display-4 ">Want to join </h3>
      <p>Be a part of Thapa </p>
      <button class="btn btn-warning" data-toggle="modal" data-target="#myModal"  >Join  Now</button>

    </div>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" autocomplete="off">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
  </article>
</section>





<!-- contact us-->
<section>
 
<div class="container mb-5">
    <h1 class="text-center text-capitalize pt-5">Cotact Us</h1>
    <hr class="w-25 mx-auto pt-5">
    <div class="w-50 mx-auto">
                    <form action="/action_page.php">
                          <div class="form-group">
                            <label for="email">Your Name:</label>
                            <input type="email" class="form-control" id="email" autocomplete="off" placeholder="Enter Your Name">
                        </div>
                      <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Email:</label>
                          <input type="email" class="form-control" id="pwd" autocomplete="off">
                      </div>
                      <div class="form-group">
                          <label>Textarea:</label>
                          <textarea class="form-control"></textarea>
                      </div>

                      
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
              </form>
      </div>
    </div>

</section>
<!-- footer-->
<footer>
  <p class="text-center bg-dark text-white">@thapa techical </p> 
</footer>




  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
  </html>