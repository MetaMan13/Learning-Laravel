{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML EMAIL</title>
</head>
<body>
    <h1>Hello from the html5 email brotha</h1>
    <p>The topic is {{ $topic }}</p>
</body>
</html> --}}

{{-- SECTION ABOVE IS WHEN WE SEND HTML5 EMAILS --}}

@component('mail::message')
# Main title

Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos nemo saepe nisi! Vero facilis itaque, explicabo dolorum dignissimos expedita.

- Item 1
- Item 2
- Item 3
@endcomponent