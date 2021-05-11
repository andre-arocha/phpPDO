<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="esquerda">
        <form action="">
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">NOME </label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">TELEFONE </label>
            <input type="text"name="telefone" id="telefone">
            <label for="email">EMAIL </label>
            <input type="text" name="email" id="email">

            <input type="submit" value="CADASTRAR">
        </form>
    </section>

    <section id="direita">
        <table>
            <tr id="titulo"> <!-- LINHAS -->
                <td>NOME</td> <!-- COLUNAS -->
                <td>TELEFONE</td> <!-- COLUNAS -->
                <td colspan="2">EMAIL</td> <!-- COLUNAS -->
            </tr>

            <tr> 
                <td>??</td> 
                <td>??</td> 
                <td>??</td> 
                <td><a href="#">EDITAR</a><a href="#">EXCLUIR</a></td> 
            </tr>


        </table>
    </section>
</body>
</html> 