<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="thanks.php" method="GET">
    <div>
        <label for="firstName">First Name :</label>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div>
        <label for="lastName">Last Name :</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="userMail">
    </div>
    <div>
        <label for="phone">Phone number :</label>
        <input type="tel" id="phone" name="userPhone">
    </div>
    <select name="topic" id="select-topic">
        <option value="">--Please choose an option--</option>
        <option value="refund">I want a refund</option>
        <option value="order-status">Where's my order ?</option>
        <option value="cancel-order">I want to cancer my order</option>
    </select>
    <div>
        <label for="userMessage">Message :</label>
        <textarea id="msg" name="userMessage"></textarea>
    </div>
    <div class="button">
        <button type="submit">Send</button>
    </div>
</form>
    
</body>
</html>
