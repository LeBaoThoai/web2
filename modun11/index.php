
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

    


</head>
<body>
    <!-- Product1 -->
    <div class="stype-11">
        <div class="container">
        <div class="col-xs-12 col-xs-12 col-md-9">
            <div class="row">
                <div class="col-md-4">
                  <h3 class="produt1">
                      <span class="produt2">
                       PRODUCT SEARCH
                   </span>
                   <div  class="duongvien" ></div>
               </h3>
               <form class="form" >
                  <input  type="text" placeholder="Search Products...">
              </form>
              <h3 class="produt1">
                  <span class="produt2">
                    PRODUCTS CATEGORIES
                </span>
                <div  class="duongvien"   ></div>
            </h3>
            <div class="produt3">

                <a href="#">Accessories</a>
                <a href="#">Carrier Phones</a>
                <a href="#">Cases</a>
                <a href="#">Exclusive Phones</a>
                <a href="#">Unlocked Phones</a>
            </div>

        </div>
    </div> 
    <!-- Product2 -->
    <div class="price_filter-2">
      <span class="menu-item">
         FLTER MY PRICE
     </span>
     <div  class="duongvien"   ></div>
     <div  class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"></div>
    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
</div>

<div class="filte">
<input type="text" id="min_price" name="min_price" value data_min="451" placeholder="Min price" style="display: none;">
<input type="text" id="max_price" name="max_price" value data_max="451" placeholder="Max price" style="display: none;">
    <button type="text" class="button">Filter</button>
    <div class="clear">
        <div class="price_lable">
            Price:
            <span class="from">£451</span> -
            <span class="to">£875</span>
        </div>
        <div class="clear"></div>
    </div>   
    <img src="images/1.png">
</div>


</div>
</div>
<!-- Product3 -->
<div class="stype">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <h3 class="produt3">
                  <span class="produt2">
                    PRPDUCT TAGS
                </span>
                <div  class="duongvien"></div>
            </h3>
            <div class="tang">
                <a href="#">ACCESSONRIES</a>
                <a href="#">ANDROID</a>
                <a href="#">APPLE</a>
                <a href="#">CASES</a>
                <a href="#">ENVATO</a>
                <a href="#">IPHONE</a>
                <a href="#">NEXUS</a>
                <a href="#">NOKIA</a>
                <a href="#">PREMIUM</a>
                <a href="#">SAMSUNG</a>
                <a href="#">SMART</a>
                <a href="#">ULOCKED</a>
            </div>

        </div>
    </div> 
</div>
</div>
</div>


</body>
</html>
