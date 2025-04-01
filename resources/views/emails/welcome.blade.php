<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
<body>
    <h1>Welcome, {{ $studentName }}!</h1>
    <p>Thank you for registering. Click the link below to access the website:</p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>
    <p>Best regards,<br> Your Team</p>
    <img src="images/pblogo.png" alt="">
</body>
</html>
