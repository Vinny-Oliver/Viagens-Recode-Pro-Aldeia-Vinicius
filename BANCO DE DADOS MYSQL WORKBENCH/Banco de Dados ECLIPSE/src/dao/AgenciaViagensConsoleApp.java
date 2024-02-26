package dao;

import java.sql.*;
import java.util.Scanner;

public class AgenciaViagensConsoleApp {

    // Configurações do banco de dados
    String SERVIDOR = "localhost:3306";
    String BANCO = "dados_java";
    String USUARIO = "root";
    String SENHA = "";
    String STRINGDECONEXAO = "jdbc:mysql://" + SERVIDOR + "/" + BANCO + "?useSSL=false";


    public Connection conectar() {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver"); // Use o driver correto para o MySQL Connector/J
            return DriverManager.getConnection(STRINGDECONEXAO, USUARIO, SENHA);

        } catch (SQLException | ClassNotFoundException e) {
            System.out.println("Falha ao criar uma conexão com o banco de dados!");
            throw new RuntimeException(e);
        }
    }

    public void executar() {
        try (Connection connection = conectar()) {
            criarTabelas(connection); // Cria as tabelas se não existirem

            try (Scanner scanner = new Scanner(System.in)) {
                int opcao;

                do {
                    System.out.println("1. Adicionar Cliente");
                    System.out.println("2. Listar Clientes");
                    System.out.println("3. Atualizar Cliente");
                    System.out.println("4. Remover Cliente");
                    System.out.println("5. Sair");
                    System.out.print("Escolha uma opção: ");
                    opcao = scanner.nextInt();

                    switch (opcao) {
                        case 1:
                            adicionarCliente(connection);
                            break;
                        case 2:
                            listarClientes(connection);
                            break;
                        case 3:
                            atualizarCliente(connection);
                            break;
                        case 4:
                            removerCliente(connection);
                            break;
                    }
                } while (opcao != 5);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    private void criarTabelas(Connection connection) throws SQLException {
        // Implemente a lógica para criar as tabelas se não existirem
        // Utilize a classe Statement ou PreparedStatement
    }
    
    private void adicionarCliente(Connection connection) throws SQLException {
        try (PreparedStatement preparedStatement = connection.prepareStatement(
                "INSERT INTO clientes (nome, email) VALUES (?, ?)")) {

            Scanner scanner = new Scanner(System.in);

            System.out.print("Nome do Cliente: ");
            String nome = scanner.nextLine();

            System.out.print("Email do Cliente: ");
            String email = scanner.nextLine();

            preparedStatement.setString(1, nome);
            preparedStatement.setString(2, email);

            int rowsAffected = preparedStatement.executeUpdate();

            if (rowsAffected > 0) {
                System.out.println("Cliente adicionado com sucesso!");
            } else {
                System.out.println("Falha ao adicionar o cliente.");
            }
        }
    }
    
    private void listarClientes(Connection connection) throws SQLException {
        try (Statement statement = connection.createStatement();
             ResultSet resultSet = statement.executeQuery("SELECT * FROM clientes")) {

            while (resultSet.next()) {
                int id = resultSet.getInt("id");
                String nome = resultSet.getString("nome");
                String email = resultSet.getString("email");

                System.out.println("ID: " + id + ", Nome: " + nome + ", Email: " + email);
            }
        }
    }
    
    private void atualizarCliente(Connection connection) throws SQLException {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Informe o ID do cliente que deseja atualizar: ");
        int idCliente = scanner.nextInt();

        scanner.nextLine(); // Consumir a quebra de linha pendente

        System.out.print("Novo Nome do Cliente: ");
        String novoNome = scanner.nextLine();

        System.out.print("Novo Email do Cliente: ");
        String novoEmail = scanner.nextLine();

        try (PreparedStatement preparedStatement = connection.prepareStatement(
                "UPDATE clientes SET nome = ?, email = ? WHERE id = ?")) {

            preparedStatement.setString(1, novoNome);
            preparedStatement.setString(2, novoEmail);
            preparedStatement.setInt(3, idCliente);

            int rowsAffected = preparedStatement.executeUpdate();

            if (rowsAffected > 0) {
                System.out.println("Cliente atualizado com sucesso!");
            } else {
                System.out.println("Falha ao atualizar o cliente. Verifique se o ID é válido.");
            }
        }
    }
    
    private void removerCliente(Connection connection) throws SQLException {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Informe o ID do cliente que deseja remover: ");
        int idCliente = scanner.nextInt();

        try (PreparedStatement preparedStatement = connection.prepareStatement(
                "DELETE FROM clientes WHERE id = ?")) {

            preparedStatement.setInt(1, idCliente);

            int rowsAffected = preparedStatement.executeUpdate();

            if (rowsAffected > 0) {
                System.out.println("Cliente removido com sucesso!");
            } else {
                System.out.println("Falha ao remover o cliente. Verifique se o ID é válido.");
            }
        }
    }

    public static void main(String[] args) {
        new AgenciaViagensConsoleApp().executar();
    }
}
