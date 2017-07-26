<div id="myModal" class="modal slide">
  <div class="modal-dialog myDialog">
    <div class="modal-content myModalContent">
      <div class="modal-header">
        <button type="button" class="close back-to-store" data-dismiss="modal" aria-hidden="true"><i class="fa fa-arrow-left"></i> <span class="back-button">Back to Store</span></button>
        <!-- <h1 class="modal-header-title"><strong>ORDER</strong></h1> -->
        <br/>
        <h4 class="modal-title my-modal-title">Modal Window</h4>
      </div>
      <form method="post" action="https://kasha.rw/create-order-api/?api_token=cs_a7094f26293b8d0c9c04fa70a83d9fe1551be927" name="order-form" id="order-form">
      <div class="modal-body">
        <!-- content goes here -->

        <div class="form-group">
          <label for="names">Names</label>
          <input type="text" class="form-control" name="names" id="customerName" placeholder="Enter Your Name (Optional)">
        </div>
        <div class="form-group">
          <label for="phone">Phone number <span>*</span></label>
          <input type="text" class="form-control phoneNumber" name="phone" id="customerPhone" placeholder="Enter Your Phone: 0722123127">

          <span class="error hide">Your Number is Required !</span>
        </div>
        <div class="form-group">
         <label for="PaymentMethod">Quantity</label>

         <select name="quantity" class="form-control" id="selectedQuantity">
           <option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option>                 </select>
         </div>
         <div class="form-group">
           <label for="shipping_method">Shipping</label>
           <br/>
           <select name="shipping_method" class="form-control" id="selectedShipping">
             <option value='same_day'>Deliver Today (500 RWF)</option>
             <option value='emergency_delivery'>Emergency 1 Hour Delivery (1500 RWF)</option>                
             <option value='kasha_agent'>Pickup From Kasha Agent Tomorrow (Free)</option>                
           </select> 
         </div>

         <div class="form-group paymentMethod">
          <label for="PaymentMethod">Payment Method <span>*</span></label>   
          <br/>         
          <input type="radio" name="payment_method" class="payment" value="TIGOCASH">Mobile Money
          <input type="radio" name="payment_method" class="payment" value="cod">Cash
        </div>
        <input type="hidden" name="productid" class="productid">
        <input type="hidden" name="mobileFlag" class="mobileFlag" value="mobile">
      </div>
      <div class="modal-footer my-modal-footer">
        <div class="btn-group-justified" role="group" aria-label="...">
          <div class="btn-group" role="group" id="submit-form" aria-label="group button">
            <button type="submit" class="btn btn-default bottom-order-buttons"><span class="order-now">Order Now</span> </button>
          </div>

          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default bottom-order-buttons cancelBtn" data-dismiss="modal" role="button"><span class="Cancel-button">Cancel</span></button>
          </div>  

        </div>
      </div>
    </form>
  </div>
</div>
</div>
