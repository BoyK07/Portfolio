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
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Contact Form Submission on {{ config('app.name') }}</h1>
        </div>
        <div class="content">
            <p style="border: #8a8a8a 1px solid; padding: 10px; border-radius: 5px; background-color: #f7f7f7;">Name: {{$details['name']}}</p>
            <p style="border: #8a8a8a 1px solid; padding: 10px; border-radius: 5px; background-color: #f7f7f7;">Email: {{$details['email']}}</p>
            <p>Message:<br><br><span style="border: #8a8a8a 1px solid; padding: 10px; border-radius: 5px; background-color: #f7f7f7;"> {{ $details['message'] }}</span></p>
        </div>
    </div>
</body>
</html>
