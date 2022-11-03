<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <div class="trains-container">
        @foreach ($trains as $train)
            @if (strtotime($train['Orario partenza']) >= strtotime('now'))
                <div class="train">
                    <p>{{ $train['Codice treno'] }}</p>
                </div>
            @endif
        @endforeach
    </div>
</body>

</html>
