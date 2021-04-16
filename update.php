<?php
if ($_GET) {
    $id = $_GET['id'];
} else {
    header("location:index.php");
    exit;
}

include 'DB/connect.php';
include 'controller/medico.php';

$db = new BD;
$medico = new Medico;
$db->conectar();

//Seleciona os dados para mostrar na tela
$sql = "SELECT * FROM tbmedicos WHERE medId = $id";
$medicos = $db->PesquisaDados($sql);

//Armazena na variavel Linha
$linha = $medicos->fetch_object();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Estilização CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar Médico</title>
</head>

<body>

    <div class="mx-auto text-center mt-2">
        <img src="img/logo.png" alt="Logo" class="mx-auto" id="imgLogo">
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Alterar médico</h5>
                        <form method="POST">
                            <div class="form-group">
                                <label for="medName">Nome do Médico</label>
                                <input maxlength="100" type="text" class="form-control" id="medName" name="medName" placeholder="Nome" value="<?php echo $linha->medNome ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="medPhone">Telefone</label>
                                <input maxlength="15" type="text" class="form-control" id="medPhone" name="medPhone" placeholder="Telefone" value="<?php echo $linha->medTelefone ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="medCRM">CRM</label>
                                <div class="row">
                                    <select id="medCRMState" name="medCRMState" class="form-control col-3 ml-3">
                                        <option value="">...</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                        <option value="DF">DF</option>
                                    </select>
                                    <input maxlength="6" type="text" class="form-control col-8" id="medCRM" name="medCRM" placeholder="CRM" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="medEspec1">Primeira especialização</label>
                                <select id="medEspec1" name="medEspec1" class="form-control">
                                    <option value="">Escolher...</option>
                                    <option value="ALERGOLOGIA">ALERGOLOGIA</option>
                                    <option value="ANGIOLOGIA">ANGIOLOGIA</option>
                                    <option value="BUCO MAXILO">BUCO MAXILO</option>
                                    <option value="CARDIOLOGIA CLINICA">CARDIOLOGIA CLINICA</option>
                                    <option value="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</option>
                                    <option value="CIRURGIA CABEÇA E PESCOÇO">CIRURGIA CABEÇA E PESCOÇO</option>
                                    <option value="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</option>
                                    <option value="CIRURGIA DE CABEÇA/PESCOÇO">CIRURGIA DE CABEÇA/PESCOÇO</option>
                                    <option value="CIRURGIA DE TORAX">CIRURGIA DE TORAX</option>
                                    <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                                    <option value="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</option>
                                    <option value="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</option>
                                    <option value="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</option>
                                    <option value="CIRURGIA VASCULAR">CIRURGIA VASCULAR</option>
                                    <option value="CLINICA MEDICA">CLINICA MEDICA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="medEspec2">Segunda especialização</label>
                                <select id="medEspec2" name="medEspec2" class="form-control">
                                    <option value="">Escolher...</option>
                                    <option value="ALERGOLOGIA">ALERGOLOGIA</option>
                                    <option value="ANGIOLOGIA">ANGIOLOGIA</option>
                                    <option value="BUCO MAXILO">BUCO MAXILO</option>
                                    <option value="CARDIOLOGIA CLINICA">CARDIOLOGIA CLINICA</option>
                                    <option value="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</option>
                                    <option value="CIRURGIA CABEÇA E PESCOÇO">CIRURGIA CABEÇA E PESCOÇO</option>
                                    <option value="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</option>
                                    <option value="CIRURGIA DE CABEÇA/PESCOÇO">CIRURGIA DE CABEÇA/PESCOÇO</option>
                                    <option value="CIRURGIA DE TORAX">CIRURGIA DE TORAX</option>
                                    <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                                    <option value="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</option>
                                    <option value="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</option>
                                    <option value="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</option>
                                    <option value="CIRURGIA VASCULAR">CIRURGIA VASCULAR</option>
                                    <option value="CLINICA MEDICA">CLINICA MEDICA</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" id="updateDoctor" name="updateDoctor">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    //Caso o método POST seja para atualizar médico
    if (isset($_POST['updateDoctor'])) {
        //Definindo as variáveis com os valores dos inputs
        $nameDoc = $_POST['medName'];
        $phoneDoc = $_POST['medPhone'];
        $CRMNumber = $_POST['medCRM'];
        $CRMState = $_POST['medCRMState'];
        //Fomatar CRM como: CRM/estado número ex: CRM/SP 100200
        $CRMDoc = "CRM/" . $CRMState . " " . $CRMNumber;
        $especDoc1 = $_POST['medEspec1'];
        $especDoc2 = $_POST['medEspec2'];

        //Verificação de campos vazios e com tamanhos menores ou iguais aos indicados nas colunas do BD
        if (!empty($nameDoc) && strlen($nameDoc) <= 100 && !empty($phoneDoc) && strlen($phoneDoc) <= 15 && !empty($CRMDoc) && strlen($CRMDoc) <= 13 && !empty($especDoc1) && strlen($especDoc1) <= 30 && !empty($especDoc2) && strlen($especDoc2) <= 30) {
            $medico->conectar("testecrud", "localhost", "root", "");
            if ($medico->msgErro == "") {
                //Caso a função alterarMedico retorne true entra no IF, caso retorne false pula para o else
                if ($medico->alterarMedico($id, $nameDoc, $phoneDoc, $CRMDoc, $especDoc1, $especDoc2)) {
    ?>
                    <script>
                        alert("Médico atualizado com sucesso");
                        window.close();
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Erro ao atualizar médico");
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert("Erro ao conectar com o banco de dados");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("Informe todos os campos");
            </script>
    <?php
        }
    }
    ?>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
    <script src="js/main.js"></script>
</body>

</html>