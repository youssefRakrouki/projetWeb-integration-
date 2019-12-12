<?php
include "../../core/VoyageC.php";
include "../../entities/Voyage.php";

if (isset($_GET['idVo'])){
    $voyageC =new VoyageC(); 
  
    $result=$voyageC->recupererVoyage($_GET['idVo']);

    foreach($result as $emp){
      
         $idVo= $emp['idVo']; 
           $airline= $emp['airline']; 
           $lieu_aller= $emp['lieu_aller']; 
          $lieu_retour= $emp['lieu_retour'];
            $description= $emp['description']; 
            $nom_hotel=$emp['nom_hotel']; 
            $prix= $emp['prix']; 
            $date_aller= $emp['date_aller'];
            $date_retour=$emp['date_retour']; 
            $image=$emp['image'];
    }

}
 $_SESSION['prix']=$prix;
?>

<?php include "header.php";?>
        <!-- End Navbar Area -->

        <!-- Right Side Modal -->
        <div class="modal right fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>

                        <p>Lorem Ipsum is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        <ul class="modal-contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i> <b>27 Division St</b>New York, NY 10002, USA
                            </li>

                            <li>
                                <i class="fas fa-phone"></i> <b>+0 (321) 984 754</b>Give us a call
                            </li>

                            <li>
                                <i class="fas fa-envelope"></i><b>upstart@gmail.com</b>24/7 online support
                            </li>
                        </ul>

                        <ul class="social-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Right Side Modal -->

        <!-- Search Modal -->
        <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="search-form">
                            <input type="search" class="form-control" id="search" placeholder="Search...">
                            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->

        <!-- Page banner -->
        <section class="page-banner">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Tours</h2>
                    <p><a href="index-2.html">Home</a> / Tours</p>
                </div>
            </div>
        </section>
        <!-- End Page banner -->

        <!-- Start Single Tours Section -->
        <section class="single-tours-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-tours-item">
                                    <div class="single-tours-image">
                                        <img src="../../entities/img/<?PHP echo $emp['image']; ?>" alt="image">
                                    </div>

                                    <div class="single-tours">
                                        <ul class="tours-list">
                                            <li>
                                                <i class="fa fa-calendar-alt"></i>
                                                1
                                            </li>

                                            <li>
                                                <i class="fa fa-user"></i>
                                                13+
                                            </li>
                                        </ul>
                                    </div>   

                                    <ul class="single-tours-content">
                                        <li>
                                            Destination
                                            <span><?PHP echo $emp['lieu_retour']; ?></span>
                                        </li>

                                        <li>
                                            Date Aller 
                                            <span><?PHP echo $emp['date_aller']; ?></span>
                                        </li>

                                        <li>
                                            Date Retour
                                            <span><?PHP echo $emp['date_retour']; ?></span>
                                        </li>

                                        <li>
                                            Nom d'hotel 
                                            <span><?PHP echo $emp['nom_hotel']; ?></span>
                                        </li>

                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-details">
                                    <h2> <?PHP echo $emp['lieu_retour']; ?></h2>
                                    <ul class="details-list">
                                        <li> <?PHP echo $emp['prix']; ?> TTC</li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li>1 Review</li>
                                    </ul>
                                    <p><?PHP echo $emp['description']; ?> </p>
                                    <div class="send-btn">
                                        <a href="ajouterRvVoy.php?idVo=<?PHP echo $idVo ?>" class="send-btn-one">Reserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="tours-sidebar">
                            <div class="sidebar-content">
                                <h2>Plan Your Trip</h2>
                                <p>It’s time to plan just the perfect vacation!</p>
                            </div>

                            <div class="tours-form">
                                <form>
									<input type="text" class="form-control" placeholder="Search Tour">
									<button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
								</form>
                            </div>

                            <ul class="tours-where">
                                <li>
                                    <i class="flaticon-safari"></i>
                                    Where To
                                </li>

                                <li class="text-left">
                                    <i class="flaticon-calendar"></i>
                                    Month
                                </li>
                            </ul>

                            <div class="tours-price">
                                <h3>Filter By Price</h3>
                                <p>Price: $450-$3600</p>

                                <ul class="price-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Popular
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Latest
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Europe
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
                                        <label class="form-check-label" for="exampleRadios4">
                                            Wines
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option2">
                                        <label class="form-check-label" for="exampleRadios5">
                                            Trendd
                                        </label>
                                    </div>
                                </ul>
                            </div>

                            <div class="tours-btn">
                                <a href="#" class="tours-btn-one">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Single Tours Section -->

        <!-- Start Form Gallery Section -->
        <section class="form-gallery-section">
            <div class="container">
                <div class="form-gallery-content">
                    <h3>Form Gallery</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-gallery-image">
                            <img src="assets/img/tours/1.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-gallery-image">
                            <img src="assets/img/tours/2.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="form-gallery-image">
                            <img src="assets/img/tours/3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            
                        
        </section>
     
         <div class="container">
        <div class="post-comments">
                            <h3>Comments</h3>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/1.png" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Smith</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment left-m">
                                <div class="comment-img">
                                    <img src="assets/img/client/2.png" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Doe John</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/3.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Steven Doe</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/4.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Cina</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
        <div class="leave-a-reply">
                            <h3>Leave a Reply</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-Mail">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time.</label>
                                    </p>

                                    <div class="send-btn">
                                        <a href="#" class="send-btn-one">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
        <!-- End Form Gallery Section -->

    <! start footer section -->
<?php include "footer.php";?>