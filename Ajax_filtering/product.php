<?php
    $db=new mysqli('localhost:3308','root','','search_demo'); 
    $all_row=$db->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">      
<div class="col-sm-3 col-md-3">
    <form id="search_form">
    <div class="well">
    <h4 class="text-info">Search by Size</h4>
    <input value="32" class="sort_rang" name="size[]"  type="checkbox"> 32
    <input value="36" class="sort_rang" name="size[]"  type="checkbox"> 36
    <input value="40" class="sort_rang" name="size[]"  type="checkbox"> 40
    </div>
    </form>
</div>
</div>   
<div class="row">
<div class="ajax_result">
<?php if(isset($all_row) && is_object($all_row) && count(array($all_row))): $i=1;?>
<?php foreach ($all_row as $key => $product) { ?>       
<div class="col-sm-3 col-md-3">
<div class="well">
<h2 class="text-info"><?php echo $product['name']; ?></h2>
<p><span class="label label-info">Size : 
<?php echo $product['size']; ?></span></p>                      
<p><?php echo $product['description']; ?></p>
<hr>
<h3>$<?php echo $product['price']; ?> / month</h3>
<hr>
<p><a class="btn btn-default btn-lg" href="#">
<i class="icon-ok"></i> Add cart</a></p>
</div>
</div>        
<?php } ?>
<?php endif; ?>
</div>
</div>      
</div>
    
<script type="text/javascript">
$(document).on('change','.sort_rang',function(){
   var url = "ajax_search.php";
   $.ajax({
     type: "POST",
     url: url,
     data: $("#search_form").serialize(),
     success: function(data)
     {                  
        $('.ajax_result').html(data);
     }               
   });
  return false;
});
</script>
</body>
</html>