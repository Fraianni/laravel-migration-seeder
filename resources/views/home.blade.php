<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<style>
    .trains-container {
        display: flex;

    }

    .train {
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>
    <div class="trains-container">
        @foreach ($trains as $train)
            @if (strtotime($train['Orario_partenza']) >= strtotime('now'))
                <div class="train">
                    <p>{{ $train['Azienda'] }} </p>
                    <p> {{ $train['Codice_treno'] }}</p>

                </div>
            @endif
        @endforeach
    </div>
</body>

</html>
