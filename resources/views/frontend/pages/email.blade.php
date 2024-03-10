

{{-- <p>Inquiry from: {{json_encode($name) }}</p>
<p> Email:{{ json_encode($email) }}</p>
<p> Message:{{json_encode ($phone) }}</p>
<p> Message:{{json_encode ($message) }} </p> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Phone Number:</strong> {{ $phone }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong> {{ $messageContent }}</p>

</body>
</html>