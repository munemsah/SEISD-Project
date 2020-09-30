<?php
require('config.php');
?>



<form action="submit.php" method="POST">

<script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $public; ?>"
    data-amount = "100000"
    data-name="donate for poor found"
    data-description="Donation Process"
    data-currency="BDT"
    data-email="bdc74956@bcaoo.com"
>
</script>


</form>