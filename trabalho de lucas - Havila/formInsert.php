<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> insert </title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
    <main>
        <header>cadastrar dados dos clientes</header>
        <section>
            <form action="insert.php" method="post">
                <p> Nome: <input type="text" name="nome"></p>
                <p> E-mail: <input type="email" name="e-mail"></p>
                <p> Idade: <input type="number" name="idade"></p>
                
                <button type="submit"> inserir dados </button>
            </form>
        </section>
    </body>
    </main>
</html>