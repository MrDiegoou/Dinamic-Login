<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html/styles.css">
    <title>Genn</title>
</head>
<body>
    <div class="box">
        <div class="qr-header">
            <h1>Generar QR</h1>
            <input type="text" placeholder="Type your text or URL" id="qr-text">
            <div>
            <label for="sizes">Select Size:</label>
            <select id="sizes">
                <option value="100">100 x 100</option>
                <option value="500">500 x 500</option>
            </select>
        </div>
        </div>
        <div class="qr-body"></div>
        <div class="qr-footer">
            <a href="" id="generateBtn">Generar</a>
        </div>
    </div>

    <script src="html/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</body>
</html>
