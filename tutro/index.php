<?php 
require_once('core/init.php');

 include 'includes/head.php';

 include 'includes/navigation.php';

 include 'includes/headerfull.php';  

 include 'includes/leftbar.php';

 include 'includes/detailsmodal.php';


 ?>
<!--Featured products heading-->
    <h2 class="text-center m-auto">Feature Products</h2>
<!--main content-->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-2">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>

            <div class="col-md-4">
                <h4>Levis Jeans</h4>
                <img src="images/products/men4.png" alt="Levis Jeans" class="thumb-img"/>
                <p class="list-price text-danger">List Price <s>$54.99</s></p>
                <p class="price">Our price: $19.99</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
            </div>
        </div>
    </div>


<footer class="text-center" id="footer">&copy; Copyright 2020 Gift Box Direct</footer> 




<script>
jQuery(window).scroll(function(){
    var vscroll = jQuery(this).scrollTop();
   jQuery('#logoText').css({
       "transform" : "translate(0px, "+vscroll/2+"px)"
   })

   var vscroll = jQuery(this).scrollTop();
   jQuery('#back-flower').css({
       "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
   })

   var vscroll = jQuery(this).scrollTop();
   jQuery('#for-flower').css({
       "transform" : "translate(0px, -"+vscroll/2+"px)"
   })
});
</script>
</body>
</html>
 
      




