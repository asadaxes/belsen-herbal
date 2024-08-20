<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form Submission</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>From:</strong> {{ $email }}</p>
    <p><strong>Subject:</strong> {{ $subject }}</p>
    <p><strong>Message:</strong><br>{!! $body !!}</p>
</body>
</html>