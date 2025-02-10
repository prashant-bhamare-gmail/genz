<!DOCTYPE html>
<html>
<head>
    <title>Event Booking Confirmation</title>
</head>
<body>
    <h2>Hello, {{$user->name}}</h2>
    <p>Thank you for booking for the event <strong>{{ $event->title }}</strong>.</p>
    <p>Description: {{ $event->description }}</p>
    
    <p><strong>Event Date:</strong> {{ $event->event_date }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    

    <p>We look forward to seeing you there!</p>

    <p>Best regards,</p>
    <p>The Event Team</p>
</body>
</html>
