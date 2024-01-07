<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="<?= base_url('css/payment.css'); ?>" rel="stylesheet">
</head>
<body>
<main id='container'>
        <aside id='info'>
            <label for='paymentMethod'>Payment Method</label>
            <select name='paymentMethod'>
                <option>Visa</option>
                <option>MasterCard</option>
                <option>Elo</option>
            </select>
<form action="/payments" method="post">
            <!-- Credit Card Number -->
            <label for='cardNumber'>Credit Card Number</label>
            <input type='text' name='cardNumber' required/>

            <!-- Credit Card Holder Name -->
            <label for='cardholderName'>Cardholder Name</label>
            <input type='text' name='cardholderName' required/>

            <!-- Expiration Date -->
            <label for='cardDate'>Expiration Date</label>
            <input type='text' name='cardDate' required/>

            <!-- CVV Card Number -->
            <label for='cvv'>CVV</label>
            <input type='text' name='cvv' required/>
            <?php if ($barangData) : ?>
            <input type="hidden" name="course" value="<?= $barangData['course']; ?>">
            <input type="hidden" name="price" value="<?= $barangData['price']; ?>">
            <?php else : ?>
        <p>No data available</p>
    <?php endif; ?>
            <input type="hidden" name="userId" value="<?= $userId; ?>">
            <button type="submit" id='makePayment'>MAKE A PAYMENT</button>
           
</form>
        </aside>
        <?php if ($barangData) : ?>
            <aside id='description'>
    <h2><?= $barangData['course']; ?></h2>
    <h3><?= $barangData['description']; ?></h3>
    <?php
        $imageData = base64_encode($barangData['img']); // Mengonversi blob ke base64
        $imageSrc = 'data:image/jpeg;base64,' . $imageData; // Data URI
    ?>
    <img src="<?= $imageSrc; ?>" alt="Product Image">
    <h1>Rp. <?= $barangData['price']; ?>.000</h1>
    <button id='editOrder'><a href="/">Cancel Payment</a></button>
</aside>
        <?php else : ?>
        <p>No data available</p>
    <?php endif; ?>
    </main>

  <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>



</body>
</html>