<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo!</title>
</head>

<body style="display: flex; justify-content: center; padding: 20px;">
    <div
    style=" 
            display: flex;
            justify-content: center;
            align-items: center;
            ">
        @foreach ($pessoas as $pessoa)
            @include('components.card_pessoa', $pessoa)
        @endforeach
    </div>
</body>

</html>
