<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="php/verifica_login.php" method="GET">
        
        <input type="email" id="login" name="login" placeholder="Login(e-mail)" required><br><br> <!-- Campo para o login-->
        <input type="password" id="senha" name="senha" placeholder=""  required><br><br> <!-- Campo para a senha-->
        <input type="text" name="numero_da_camisa" placeholder="Numero da camisa"><br><br> <!-- Campo para o numero da camisa de corrida-->
        <input type="text" name="quilometragem_para_percorrer" placeholder="quilometragem para percorrer"><br><br> <!-- Campo para a quilometragem que ira percorrer na corrida -->
        
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>