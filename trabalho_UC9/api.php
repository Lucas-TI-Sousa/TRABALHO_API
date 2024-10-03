<?php

class CarroModelo {
    private $servername = "localhost"; // ou seu servidor
    private $username = "root"; // seu usuário
    private $password = ""; // sua senha
    private $dbname = "carros";
    private $conn;

    // Criar a conexão
    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        // Checar conexão
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Método para consultar os dados
    public function consultarCarros() {
        $sql = "SELECT * FROM modelos_carros";
        $result = $this->conn->query($sql);
        $cars = [];

        if ($result->num_rows > 0) {
            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_assoc();
                $cars[] = $row;
            }
        }

        return $cars;
    }

    public function fecharConexao() {
        $this->conn->close();
    }
}

header('Content-Type: application/json');

$carroModelo = new CarroModelo();
$cars = $carroModelo->consultarCarros();
$carroModelo->fecharConexao();
echo json_encode($cars);

?>

