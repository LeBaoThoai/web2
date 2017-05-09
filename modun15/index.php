
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
    <div class="stype-15">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="Aple-6 pull-left">SHOP</h3>
                </div>
                <div class="col-md-5">
                <div class="b-breadcrumbs pull-right">
                    <ul class="list-unstyled">
                       <li><a  href="#"> HOME <i class="fa fa-chevron-right">  </i></a></li>
                 
               
                        <li><a style="text-decoration: none;color: #888888; " href="#">SHOP</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
