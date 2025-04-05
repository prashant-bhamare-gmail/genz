<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>Full Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email Address:</strong> {{ $formData['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $formData['phone'] }}</p>
    <p><strong>City:</strong> {{ $formData['city'] }}</p>
    <p><strong>Current Role:</strong> {{ $formData['role'] }}</p>
    <p><strong>Current Company:</strong> {{ $formData['company'] }}</p>
    <p><strong>Message:</strong> {{ $formData['message'] }}</p>
</body>
</html>
