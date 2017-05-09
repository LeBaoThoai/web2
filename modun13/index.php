
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/styles.less', 'css/styles.css');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/jquery-3.2.0.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script type="text/javascript">
        $(document).ready(function() {
            var original_src = '';
            $('.item img').click(function() {
                $('#light-box-photo').attr('src', $(this).attr('src'));
                $('.light-box').fadeIn(500);
            });
            $('.light-box').click(function() {
                $(this).fadeOut(500);
            });
            $('.item img').mouseenter(function() {
                original_src = $(this).attr('src');
                $(this).attr('src', $(this).attr('data-src'));
            });
            $('.item img').mouseleave(function() {
                $(this).attr('src', original_src);
            });
        });
        $(document).ready(function(){
    $(".settings-view ul #type-of-display .toogle-view.active-view i").click(function(){
        $(this).item('show');
    });
});
    </script>
</head>
<body> 


      <div class="stype12">
          <div class="container">
       <div class="col-xs-12  col-sm-12 col-md-12 ">
       <div class="stype">
     <div class="settings-block pull-right">
         <form class="settings-options" method="get">
             <select name="orderby" class="orderby">
                 <option value="menu-order" selected="selected"> Default sorting </option>
                 <option value="popularity" >Sort by popularity </option>
                 <option value="rating" > Sort by average rating</option>
                 <option value="date" > Sort by newness</option>
                 <option value="price" > Sort by price: low to high </option>
                 <option value="price-desc" > Sort by price: high to low</option>
             </select>       
         </form> 
         <div class="settings-view hidden-md hidden-sm hidden-sm">
             <ul id="type-of-display" class="list-unstyled">
                 <li ><button class="btn toogle-view grid-list"> <i class="fa fa-th-list fa-fw"></i></button></li>
                 <li ><button class="btn toogle-view grid-3 active-view"> <i class="fa fa-th-large fa-fw"></i></button></li>
             </ul>
         </div>   
     </div>
 </div>
 </div>
 
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="item">

                    <img src="./images/iphone1.jpg" data-src="./images/iphone.jpg">
                    <span class="product-item_sale sale color-main font-additional customBgColor circle"></span>
                    <span class="sale"></span>
                    <h3>APPLE IPHONE 6S PLUS</h3>
                    <span class="woocommerce-Price">
                        <span class="woocommerce">£</span>600.00
                    </span>
                    <span class="woocommerce-Price1">
                        <span class="woocommerce1">£</span>560.00
                    </span> 
                    <!--ICON SOCIAL-->

                    <div class="social-list">

                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="item">
                    <img src="./images/iphone2.jpg" data-src="./images/iphone.jpg">
                    <h3>BLU VIVO 5 SMARTPHONE</h3>
                    <span class="woocommerce-Price1">
                        <span class="woocommerce1">£</span>875.00
                    </span> 
                    <!--ICON SOCIAL-->
                    
                    <div class="social-list">

                     <i class="fa fa-eye" aria-hidden="true"></i>
                     <i class="fa fa-heart-o" aria-hidden="true"></i>
                     <i class="fa fa-hospital-o" aria-hidden="true"></i>
                 </div>
             </div>
         </div>
         <div class="col-md-4 col-xs-6">
            <div class="item">
                <img src="./images/iphone3.jpg" data-src="./images/iphone.jpg">
                <h3>HUAWAI NEXUS 6P</h3>
                <span class="woocommerce-Price1">
                    <span class="woocommerce1">£</span>875.00
                </span> 
                <!--ICON SOCIAL-->
                
                <div class="social-list">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                   <i class="fa fa-heart-o" aria-hidden="true"></i>
                   <i class="fa fa-hospital-o" aria-hidden="true"></i>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-xs-6">
        <div class="item">
           <img src="./images/iphone4.jpg" data-src="./images/iphone.jpg">
           <h3> LG OPTIMUS ZONE</h3>
           <span class="woocommerce-Price1">
            <span class="woocommerce1">£</span>456.00
        </span> 
        <!--ICON SOCIAL-->

        <div class="social-list">

            <i class="fa fa-eye" aria-hidden="true"></i>
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
        </div>
    </div>
</div>
<div class="col-md-4 col-xs-6">
    <div class="item">
       <img src="./images/iphone5.jpg" data-src="./images/iphone.jpg">
       <h3>MOTO G PLUS(4TH GEN)</h3>
       <span class="woocommerce-Price1">
        <span class="woocommerce1">£</span>560.00
    </span> 
    <!--ICON SOCIAL-->

    <div class="social-list">

        <i class="fa fa-eye" aria-hidden="true"></i>
        <i class="fa fa-heart-o" aria-hidden="true"></i>
        <i class="fa fa-hospital-o" aria-hidden="true"></i>
    </div>
</div>
</div>
<div class="col-md-4 col-xs-6">
    <div class="item">
       <img src="./images/iphone6.jpg" data-src="./images/iphone.jpg">
       <h3>ORBIC SLIM</h3>
       <span class="woocommerce-Price">
        <span class="woocommerce">£</span>600.00
    </span>
    <span class="woocommerce-Price1">
        <span class="woocommerce1">£</span>456.00
    </span> 
    <!--ICON SOCIAL-->

    <div class="social-list">
       <i class="fa fa-eye" aria-hidden="true"></i>
       <i class="fa fa-heart-o" aria-hidden="true"></i>
       <i class="fa fa-hospital-o" aria-hidden="true"></i>
   </div>
</div>
</div>

</div>
<div class="clearfix b--grid row">  
    <div class="pagination-container">
        <nav class="pagination-full clearfix">
            <ul class="pagination">
                <li> <span class="page-numbers current">1</span></li>
                <li> <a class="page-numbers" href="">2</a></li>
            </ul>
            <ul class="pagination pagination-add">
              <li> <a href="">Next</a></li>            
          </ul>
      </nav>
  </div>
</div> 
</div>

</div>
</body>
</html>
