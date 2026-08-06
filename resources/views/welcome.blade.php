{{-- <div>
    {{ $name }} {{ $surname }}
</div> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blade Challenge</title>
</head>
<body>

    <h1>Welcome to My Website</h1>

    <!-- Including the alert subview with custom variables -->
    @include('alert', [
        'message' => 'Success! Your changes have been saved completely.',
        'color' => 'green'
    ])

    @include('alert', [
        'message' => 'Congratulations Joshua',
        'color' => 'blue'
    ])

</body>
</html>

