<div
    style="
    border: 1px solid #ccc
    border-radius: 8px;
    padding: 20px;
    max-width: 300px;
    font-family: Arial, sans-serif;
    text-align: center;
    ">
    <img src="{{ $pessoa['image'] }}" alt="Imagem de {{ $pessoa['nome'] }}"
        style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover; margin-bottom: 15px;">
    <h1 style="font-size: 24px; color: #333; margin: 10px 0;">{{ $pessoa['nome'] }}</h1>
    <h3 style="font-size: 18px; color: #777; margin: 5px 0;">Nasceu em: {{ $pessoa['birth'] }}</h3>
    <p style="font-size: 16px; color: #555;">{{ $pessoa['idade'] }} anos</p>
</div>


