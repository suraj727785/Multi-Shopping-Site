<?php include "includes/header.php"  ?>
    <div id="wrapper">
<?php
    
    
?>
        <!-- Navigation -->
       <?php include "includes/navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">
                
                
                

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                        <h1 class="page-header">
                            Welcome to Sales
                            <small><?php echo $_SESSION['username'];   ?></small>
                        </h1>
                        
                        
                       
                    </div>
                </div>
                <!-- /.row -->
                
<?php
$query="SELECT * FROM orders WHERE order_shop_id='{$_SESSION['shop_id']}' ";
$select_all_order=mysqli_query($connection,$query);
$order_count=mysqli_num_rows($select_all_order); 
                
$query="SELECT * FROM product_categories WHERE shop_id='{$_SESSION['shop_id']}' ";
$select_product_categories=mysqli_query($connection,$query);
$product_categories_count=mysqli_num_rows($select_product_categories);  
                
$query="SELECT * FROM products WHERE product_shop_id='{$_SESSION['shop_id']}'  ";
$select_all_products=mysqli_query($connection,$query);
$all_products_count=mysqli_num_rows($select_all_products);  

                
                
?>                
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      
                    <?php
                    $query="SELECT * FROM orders WHERE order_shop_id='{$_SESSION['shop_id']}'";
                   $select_all_order=mysqli_query($connection,$query);
                   $order_count=mysqli_num_rows($select_all_order);        

                    echo  "<div class='huge'>{$order_count}</div>";


                    ?>  
               
                        <div>Orders</div>
                    </div>
                </div>
            </div>
            <a href="orders.php">
                <div class="panel-footer">
                    <span class="pull-left">View All Orders</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-product-hunt fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                    <?php
                    $query="SELECT * FROM products WHERE product_shop_id='{$_SESSION['shop_id']}' ";
                    $select_all_products=mysqli_query($connection,$query);
                    $products_count=mysqli_num_rows($select_all_products);        

                    echo  "<div class='huge'>{$products_count}</div>";

                    ?>  
                     
                      <div>Products</div>
                    </div>
                </div>
            </div>
            <a href="product.php">
                <div class="panel-footer">
                    <span class="pull-left">View All Products</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                                                                                         
                    <?php
                    $query="SELECT * FROM product_categories WHERE shop_id='{$_SESSION['shop_id']}' ";
                    $select_all_categories_query=mysqli_query($connection,$query);
                    $categories_count=mysqli_num_rows($select_all_categories_query);        

                    echo  "<div class='huge'>{$categories_count}</div>";


                    ?>  
       
                         <div>Product Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row --> 
                <div class="row">
                    
                    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'count'],
            <?php
            
  $element_text=['Product Categories','Products','All orders',];
  $element_count=[$product_categories_count,$all_products_count,$order_count];
            
            
            for($i=0 ; $i<3 ; $i++){
                
            echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}], ";
                
                
            }
            
            
            
            ?>
            
//          ['posts', 1000,],
         
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
                    
     <div id="columnchart_material" style="width: auto; height: 500px;"></div>            
                    
                </div>   
                
                

            </div>
            <!-- /.container-fluid -->
       
            

        </div>
       <!-- /#page-wrapper -->
       <?php include "includes/footer.php" ?>