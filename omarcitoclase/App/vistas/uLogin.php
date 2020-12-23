<?php
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="codigo" placeholder="Ingrese su codigo"><br>
    <input type="text" name="pass" placeholder="Ingrese su contraseña"><br>
    <input type="submit" name="submit" value="Login"><br>
</form>
<?php
    if(isset($_POST["submit"])){
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        $controladorUsuario = new ControladorUsuario();
        $controladorUsuario->login($codigo, $password);
    }