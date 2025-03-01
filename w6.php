<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Google Pay Form</title>
<style>
  .container {
  width: 50%;
  margin: 50px auto;
}

.form-group {
  margin-bottom: 20px;
}

input[type="text"],
input[type="email"],
input[type="radio"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
}

input[type="radio"] + label {
  margin-left: 5px;
}

.btn {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

.btn:hover {
  background-color: #0056b3;
}

#bankTransferDetails,
#upiDetails,
#cashDetails {
  display: none;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
  $('input[type="radio"]').change(function() {
    var id = $(this).attr('id');
    $('.form-group[id$="Details"]').hide();
    $('#' + id + 'Details').show();
  });
});

</script>
</head>
<body>

<div class="container">
  <h2>Google Pay Form</h2>
  <form id="paymentForm" action="w6.php" method="post">
    
    <div class="form-group">
      <input type="radio" id="bankTransfer" name="paymentMethod" value="bankTransfer" required>
      <label for="bankTransfer">Bank Transfer</label><br>
      
      <input type="radio" id="upi" name="paymentMethod" value="upi" required>
      <label for="upi">UPI</label><br>
      
      <input type="radio" id="cash" name="paymentMethod" value="cash" required>
      <label for="cash">Cash Payment</label>
    </div>
    <div class="form-group" id="bankTransferDetails">
      <label for="bankDetails">Bank Transfer Details:</label>
      <input type="text" id="bankDetails" name="bankDetails">
    </div>
    <div class="form-group" id="upiDetails">
      <label for="upiID">UPI ID:</label>
      <input type="text" id="upiID" name="upiID">
    </div>
    <div class="form-group" id="cashDetails">
      <label for="cashAmount">Cash Amount:</label>
      <input type="text" id="cashAmount" name="cashAmount">
    </div>
    <button type="submit" class="btn btn-primary">Proceed to Google Pay</button>
  </form>
</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $paymentMethod = $_POST['paymentMethod'];

    // Depending on the payment method, process the details accordingly
    switch ($paymentMethod) {
        case 'bankTransfers':
            $bankDetails = $_POST['bankDetails'];
            // Process bank transfer details
            break;
        case 'upi':
            $upiID = $_POST['upiID'];
            // Process UPI details
            break;
        case 'cash':
            $cashAmount = $_POST['cashAmount'];
            // Process cash payment details
            break;
        default:
            // Handle invalid payment method
            break;
    }

    // Add your logic to initiate Google Pay transaction here
    // For example, you can pass this information to your server-side script
    // and use Google Pay API to process the payment
    // Replace the following line with your logic
}
?>
