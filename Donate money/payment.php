<?php
require('config.php');
?>



<form action="submit.php" method="POST">

<script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $public; ?>"
    data-amount = "100000"
    data-name="DONATE US"
    data-description="Donate For Our Free Campaign"
    data-currency="BDT"
    data-email="bdc74956@bcaoo.com"
>
</script>


</form>