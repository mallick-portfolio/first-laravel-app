<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="{{ route('/') }}">Home</a></li>
        <li><a href="{{ route('about.us') }}">About</a></li>
        <li><a href="{{ route('contact.us') }}">Contact</a></li>
        <li><a href="{{ route('country') }}">Country</a></li>
    </ul>
</body>

</html>
