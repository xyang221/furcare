<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Verification</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
    }

    p {
      color: #555;
    }

    .verification-code {
      font-size: 24px;
      font-weight: bold;
      color: #007bff;
      margin-bottom: 20px;
    }

    .footer {
      margin-top: 20px;
      text-align: center;
      color: #777;
    }
  </style>
</head>

<body>
  <div class="container">
    <p>Dear User,</p>
    <p>Your verification code is:</p>
    <p class="verification-code">{{ $verificationCode }}</p>
    <p>Please use this code to verify your account.</p>
    <div class="footer">
      <p>If you did not request this verification, please ignore this email.</p>
      <p>This email was sent automatically. Please do not reply.</p>
    </div>
  </div>
</body>

</html>