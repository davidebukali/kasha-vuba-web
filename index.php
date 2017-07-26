<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<title>KASHA VUBA</title>
</head>

<body>
    <!-- <div class="container">  Hide container to display proper landing page styles --> 

    <!-- Hide header for updated styles -->
  <!--   <?php 
  //    require 'partials/navigation.php'; 
  ?> -->

  <div class="content">

    <div id="doc-summarycard" class="bs-docs-section">

        <div class="landing-page-header">
            <img src="images/header_logo.png" class="header-image"/>
            <strong>Vuba Beta</strong><br>
            <span>Quickly order products with just two clicks</span><br>

            <span class="sub-1">Conveniently and confidentially</span><br>

            <span class="sub-2">Delivered to you in Kigali</span><br>

            <span class="sub-3">More products on <a href="http://www.kasha.rw" class="samelinelink"> www.kasha.rw</a> or dial *911#</span>
            <br>

            <span class="sub-3">Questions ? Call customer service at 9111</span>

        </div>

        <div class="bs-example bs-example-type landing-page-body">

            <?php require 'partials/notifications.php'; ?>
            
            <div class="panel panel-default bootcards-summary">
                <div class="panel-body">

                    <?php require 'partials/menstrual-care.php'; ?>

                    <?php require 'partials/contraceptives.php'; ?>

                    <?php require 'partials/feminine-hygiene.php'; ?> 

                    <?php require 'partials/personal-care.php'; ?> 

                    <?php require 'partials/home-tests.php'; ?> 

                </div>
                <div class="panel-footer">
                    <small>Copyright 2016 -<?php date('Y') ?> © Kasha Inc. & Kasha Global Inc.</small>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- </div> Hide container to display proper landing page styles -->
<?php require 'partials/modal.php'; ?>
<noscript id="deferred-styles">
    <link href="build/css/app.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
</noscript>
<script>
    var loadDeferredStyles = function() {
    var addStylesNode = document.getElementById("deferred-styles");
    var replacement = document.createElement("div");
    replacement.innerHTML = addStylesNode.textContent;
    document.body.appendChild(replacement)
    addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = requestAnimationFrame || mozRequestAnimationFrame ||
webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
else window.addEventListener('load', loadDeferredStyles);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>window.jQuery||document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/wait.js"></script>
<script type="text/javascript">
   $(document).ready(function(){

    // Show modal
    $("#myModal").on('show.bs.modal',function(event){
        var button=$(event.relatedTarget);
        var titleData=button.data('title');
        var price=button.data('price');

        titleData=titleData+'('+price+'RWF)';
        $('.productid').val(button.data('productid'));
        $(this).find('.modal-title').text(titleData);
    });

    // SUBMIT INFORMATION


    $('#order-form').submit(function(event) {
        var phone = $('#customerPhone').val();
        if (phone.length > 0) {
            $('.error').addClass('hide');
            waitingDialog.show('Processing your Order', {dialogSize: 'sm'});  
        } else {
            $('.error').removeClass('hide');
            $('.error').html('Phone Number is Required');
            event.preventDefault();
        }
    });

});



</script>
</body>
</html>
