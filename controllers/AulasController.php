<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Aulas.php';

class AulaController {
    private $conn;
    private $model;

    public function __construct() {
        include __DIR__ . '/../config/database.php';
        $this->conn = $conn;
        $this->model = new Aula($this->conn);
    }

    // Criar aula
    public function criarAula() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo_aula = $_POST['tipo_aula'];
            $professor = $_POST['professor'];
            $aluno = $_POST['aluno'];

            if ($this->model->create($tipo_aula, $professor, $aluno)) {
                header("Location: ../views/aulas_listar.php");
                exit;
            } else {
                echo "❌ Erro ao salvar aula.";
            }
        }
    }

    // Listar aulas
    public function listarAulas() {
        return $this->model->getAll();
    }

    // Editar aula
    public function editarAula() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id_aula'];
            $tipo_aula = $_POST['tipo_aula'];
            $professor = $_POST['professor'];
            $aluno = $_POST['aluno'];

            if ($this->model->update($id, $tipo_aula, $professor, $aluno)) {
                header("Location: ../views/aulas_listar.php");
                exit;
            } else {
                echo "❌ Erro ao editar aula.";
            }
        }
    }

    // Excluir aula
    public function excluirAula($id_aula) {
        if ($this->model->delete($id_aula)) {
            header("Location: ../views/aulas_listar.php");
            exit;
        } else {
            echo "❌ Erro ao excluir aula.";
        }
    }
}

// ------------------------------
// Controle das ações (rotas simples)
// ------------------------------
if (isset($_GET['acao'])) {
    $controller = new AulaController();

    switch ($_GET['acao']) {
        case 'criar':
            $controller->criarAula();
            break;

        case 'editar':
            $controller->editarAula();
            break;

        case 'excluir':
            if (isset($_GET['id'])) {
                $controller->excluirAula($_GET['id']);
            }
            break;

        default:
            header("Location: ../views/aulas_listar.php");
            break;
    }
}
?>
