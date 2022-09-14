<?php
if (isset($_POST['nome']) && isset($_POST['cpf'])) {

$filename = "cadastro.txt";
if(!file_exists("cadastro.txt")){
    $handle = fopen("cadastro.txt", "w");
} else {
    $handle = fopen("cadastro.txt", "a");
}

$_POST["nome"];
$_POST["cpf"];

fwrite($handle, $_POST["nome"] . " " . $_POST["cpf"] ."\n");
fflush($handle);
fclose($handle);

/*
$handle = fopen("cadastro.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);*/

}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Faça seu cadastro</h2>
        <p>Escolhar username e senha</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="nome" class="form-control" value="orlando">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="password" name="cpf" class="form-control" value="123mudar">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>