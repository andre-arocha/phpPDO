<!-- <?php 

// CONEXAO -----------------------------------------------------------

// try {
//     $pdo = new PDO("mysql:dbname=crudpdo;host=localhost", "root", "");

// } catch (PDOException $e) { // Erro relacionado com o banco de dados
//     echo "Erro com o banco de dados | ".$e->getMessage();

// } catch (PDOException $e) { // Qualquer outro tipo de erro
//     echo "Erro generico: ".$e->getMessage();
// }   



// INSERT ------------------------------------------------------------

// 1° forma
// prepare() = Quando precisamos passar algum parametro e depois substituir
// $res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES(:nome, :tel, :email)"); 

// // Exitem duas forma de substituição dos parametros
// // 1° forma
// $res->bindValue(":nome", "Armando"); // Aceita variaveis, funções....
// $res->bindValue(":tel","11987654321");
// $res->bindValue(":email","armando@gmail.com");
// $res->execute(); // Ececução

// 2° forma
// $nome="armando";
// $res->bindParam(":nome",$nome); // Não aceita um valor passado diretamente, só aceita variaveis


// 2° forma
// query() = Quando tem um comando que não precisa de nenhuma substituição, já executa o coman
// $pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES('Regis', '11956478732', 'regis@gmail.com')"); // Ele mesmo já executa



// DELETE ------------------------------------------------------------

// cmd = COMAND
// $cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");

// $cmd->bindValue(":id",7);
// $cmd->execute();

// ou

// $res = $pdo->query("DELETE FROM pessoa WHERE id = '4' ");



// UPDATE ------------------------------------------------------------

// $cmd = $pdo->prepare("UPDATE pessoa SET email = :email WHERE id = :id ");

// $cmd->bindValue(":email","armando@gmail.com");
// $cmd->bindValue(":id",5);
// $cmd->execute();

// ou

// $res = $pdo->query("UPDATE pessoa SET email = 'armando@gmail.com' WHERE id = '5' ");



// SELECT ------------------------------------------------------------

// $cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");


// $cmd->bindValue(":id",5);
// $cmd->execute();

// Função para transformar informação que vem do banco de dados em uma Array
// Existem dois metodos
// 1° metodo
// $result = $cmd->fetchAll(PDO::FETCH_ASSOC); // Quando vem apenas UM registro do banco

// 2° metodo
// $cmd->fetchAll(); // Quando vem apenas MAIS de um registro do banco


// echo "<pre>";
// print_r($result);
// echo "</pre>";

// foreach ($result as $key => $value) {
//     echo $key." - ".$value."<br>";
// }
 

?> -->