<form action="triangulocontroller" method="post">
    <input type="text" name="lado1" placeholder="Lado 1">
    <input type="text" name="lado2" placeholder="Lado 2">
    <input type="text" name="lado3" placeholder="Lado 3 - Base">
    <input type="text" name="altura" placeholder="Altura">

    {{ @csrf_field() }}

    <button type="submit">Enviar</button>
</form>