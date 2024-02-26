<?php
    session_start(); // INICIA A SESSÃO
    // POST EMAIL NAO PODE ESTAR VAZIO ------------------- POST EMAIL NAO PODE ESTAR VAZIO
    if(isset($_POST["submit"]) && !empty($_POST['email']) && !empty($_POST['senha'])) 
    {
        //acessa
        include_once('config.php'); // CONEXÃO COM O BANCO DE DADOS
        $email = $_POST['email'];
        $senha = $_POST['senha'];

       // print_r('email: ' . $email);
       // print_r('<br>');
       // print_r('<br>');
       // print_r('senha: ' . $senha);

       // $sql VERIFICAR SE OS PARAMETROS EXISTEM NO BD
        //     seleciode de usuarios onde o email seja igual a variável email e a senha igual a variável senha 
       $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

       // manda executar o codigo acima no banco de dados criando uma variavel result que vai ter o resultado
       // Depois passar uma conexão para realizar uma query(consulta).
       // Essse chamado vai executar a configuração definida lá no config.php
       $result = $conexao->query($sql);

       // Vamos fazer um print_r para ver o que vai ser mostrado
       // print_r($sql); // para aprimorar a consulta
      // print_r($result);

      // Condições para verificar se existe usuario cadastrado. Menor que < 1 NAO EXISTE!
      if(mysqli_num_rows($result) < 1)
      //{
      //  print_r("Não existe");
      //}
      //else
      //{
       // print_r("Existe!");
      //}
      { // CASO NÃO EXISTE O EMAIL COM A SENHA VOU MANDAR DESTRUIR OS DADOS
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: acesso.php");
      }
      else
      { // QUANDO ACESSA O SISTEMA ELE ACESSA ESSAS DUAS VARIÁVEIS
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: sistema.php");
      }

      


       
    }
    else
    {
        // Não acessa e volta pra pagina abaixo.
        header("Location: acesso.php");
    }
?>