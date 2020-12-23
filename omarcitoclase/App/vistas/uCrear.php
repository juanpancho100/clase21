<?php
    declare(strict_types=1);
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombres" placeholder="Ingrese nombres"><br>
    <input type="text" name="apellidos" placeholder="Ingrese apellidos"><br>
    <input type="number" name="codigo" placeholder="Ingrese Codigo/DNI"><br>
    <input type="password" name="password" placeholder="Ingrese Contraseña"><br>
    <select name="tipo">
        <option value="estudiante">Estudiante</option>
        <option value="profesor">Profesor</option>
        <option value="administrador">Administrador</option>
    </select><br>
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(isset($_POST["submit"])){
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $codigo = (int)$_POST["codigo"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];

    $controladorUsuario = new ControladorUsuario();
    echo $controladorUsuario->crearUsuario($nombres, $apellidos, $codigo, $password, $tipo);
}

