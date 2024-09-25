<!-- resources/views/emails/custom_email.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .content {
            padding: 20px;
            text-align: left;
        }
        .header {
            background-color: #ffffffd7;
            color: black;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank you for contacting me!</h1>
        </div>
        <div class="content">
            <p style="text-align: center; font-size: 24px;">
                Hi <?=$details['name']?>,<br>
                Thank you for reaching out! I've received your message and will get back to you as soon as possible.<br><br>
                Best regards,<br>
                <a href="<?=getenv('APP_URL')?>" style="color:black">BoyK07</a>
            </p>
        </div>
    </div>
</body>
</html>
