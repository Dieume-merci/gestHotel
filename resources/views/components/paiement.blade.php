@extends('layouts.global-layouts')

@section('contenu')
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
  createOrder() {
    // This function sets up the details of the transaction, including the amount and line item details.
    return fetch("/my-server/create-paypal-order", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        cart: [
          {
            sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
            quantity: "YOUR_PRODUCT_QUANTITY"
          }
        ]
      })
    });
  },.render('#paypal-button-container');
    </script>
          
@endsection