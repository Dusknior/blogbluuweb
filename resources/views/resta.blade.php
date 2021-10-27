<form action="restacontroller" method="post">
    <input type="text" name="numero1">
    <input type="text" name="numero2">

    {{ @csrf_field() }}

    <button type="submit">Enviar</button>
</form>