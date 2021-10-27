<form action="empleadocontroller" method="post">
    <input type="text" name="nombre" placeholder="Nombre Empleado">
    <input type="text" name="lunes" placeholder="Valor Lunes">
    <input type="text" name="martes" placeholder="Valor Martes">
    <input type="text" name="miercoles" placeholder="Valor Miercoles">
    <input type="text" name="jueves" placeholder="Valor Jueves">
    <input type="text" name="viernes" placeholder="Valor Viernes">
    <input type="text" name="sabado" placeholder="Valor Sabado">

    {{ @csrf_field() }}

    <button type="submit">Enviar</button>
</form>