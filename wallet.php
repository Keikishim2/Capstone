<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Wallet</title>
    <link rel='stylesheet' type='text/css' href='css/wallet.css'>
</head>
<body>
    <div class='container'>
                <div class='menu'>
                    <ul>
                        <li class='logo'><img src='/images/bg/LOGO.png'></li>
                        <li><a href='ecom.php'>Home</a></li>
                        <li><a href='service.php'>Services</a></li>
                        <li><a href='index.php'>Product</a></li>
                        <li><a href='contact.php'>Contact</a></li>
                        <li><a href='#' class='signup'><span>Sign Up</span></a></li>
                    </ul>
                </div>
    <div class='app-container'>
        <div class='top-box'>
            <p><span class='left-icon'>&#x2190;</span>TOP UP<span class='right-icon'>&#xb7;&#xb7;&#xb7;</span></p>
        </div>
        <div class='middle-box'>
            <h1>0.00<span>$</span></h1>
            <p>Top Up to CoBol Wallet</p>
        </div>
        <div class='bottom-box'>
            <button type='button' class='payment-option-btn'>Top Up with PayPal</button>
            <button type='button' class='payment-option-btn'>Top Up with GCash</button>

            <div class='card-details'>
                <p>Top Up using credit or debit card</p>
                <div class='card-num-field-group'>
                    <label>Card Number</label>
                    <input type='text' class='card-num-field' placeholder='xxxx-xxxx-xxxx-xxxx'>
                </div>

                <div class='date-field-group'>
                    <label>Expiry Date</label>
                    <input type='text' class='date-field' placeholder='mm'>
                    <input type='text' class='date-field' placeholder='yyyy'>
                </div>

                <div class='cvc-field-group'>
                    <label>CVC</label>
                    <input type='password' class='cvc-field' placeholder='mm'>
                </div>
                <div class='name-field-group'>
                    <label>Card Holder Name</label>
                    <input type='text' class='name-field' placeholder='Full Name'>
                </div>
                <button type='button' class='pay-btn'>Top Up Now</button>
            </div>
        </div>
    </div>



</body>
</html>