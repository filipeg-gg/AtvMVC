<?php
require_once __DIR__ . '/../config/database.php';

class Aula {
    private $conn;
    private $table_name = "aulas";

    public function __construct($db) {
        $this->conn = $db;
    }


public function getAll() {
    $query = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
}


public function create($tipo_aula, $professor, $aluno) {
    $query = "INSERT INTO " . $this->table_name . " (tipo_aula, professor, aluno)
              VALUES (:tipo_aula, :professor, :aluno)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':tipo_aula', $tipo_aula);
    $stmt->bindParam(':professor', $professor);
    $stmt->bindParam(':aluno', $aluno);

    return $stmt->execute();
}


public function update($id_aula, $tipo_aula, $professor, $aluno) {
    $query = "UPDATE " . $this->table_name . " 
              SET tipo_aula = :tipo_aula, professor = :professor, aluno = :aluno
              WHERE id_aula = :id_aula";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':id_aula', $id_aula);
    $stmt->bindParam(':tipo_aula', $tipo_aula);
    $stmt->bindParam(':professor', $professor);
    $stmt->bindParam(':aluno', $aluno);

    return $stmt->execute();
}


public function delete($id_aula) {
    $query = "DELETE FROM " . $this->table_name . " WHERE id_aula = :id_aula";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id_aula', $id_aula);
    return $stmt->execute();
}

public function getById($id_aula) {
    $query = "SELECT * FROM " . $this->table_name . " WHERE id_aula = :id_aula";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id_aula', $id_aula);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
?>