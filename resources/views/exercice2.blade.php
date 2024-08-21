<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>

<body>
    @for ($i = 0; $i < 50; $i++)
        <img src="{{ $url . rand(1, 50) }}" alt="foto de pessoa" />
    @endfor
</body>

</html>
