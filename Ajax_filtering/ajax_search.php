<?php
    $db=new mysqli('localhost:3308','root','','search_demo');
    $sql="SELECT * FROM products";
    extract($_POST);
    if(isset($size)) 
        $sql.=" WHERE size IN (".implode(',', $size).")";
    $all_row=$db->query($sql);
?>
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