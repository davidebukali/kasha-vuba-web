<div class="row">
<?php if(isset($_GET['status'])): ?>
  <?php 
    switch ($_GET['status']) {
      case 'success':
        $status = 'success';
        break;
      
      default:
        $status = 'error';
        break;
    }
   ?>

   <div class="alert alert-<?php echo $status == 'success' ? 'success' : 'danger'; ?> alert-dismissible col-xs-12 col-md-12" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong><?php echo strtoupper($status); ?>!</strong> 
    <?php echo $status == 'success' ? 'Thank you for your order. Customer service will contact you shortly for delivery location' : 'We are sorry Something went wrong with your order. Please try again or dial 9111 for customer service.' ?>.
  </div>
<?php endif; ?>
</div>