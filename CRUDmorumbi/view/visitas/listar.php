<?php
//Página view para listagem de visitas
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controller/VisitaController.php");

$visitaCont = new VisitaController();
$visita = $visitaCont->lista();
?>
<?php
require(__DIR__ . "/../include/header.php");
?>


<h4 class="text-light">Listagem de visitas</h4>

<div>
    <a class="btn btn-success" href="inserir.php">Inserir</a>
</div>

<div class="divDadosVisita my-3" style="background-color: transparent; padding: 15px; width: max-content; border-radius: 10px; border: 3px solid black;">

    <h4>Informações do visitante:</h4>


    </div>


<h1>Visitantes:</h1>


    <?php foreach ($visita as $v) : ?>

        <div class="visitantes" id="visit">

            <span style="font-size: 20px;"><?= $v->getNomeVisitante(); ?></span>

            <a href="alterar.php?idVisita=<?= $v->getId() ?>">Editar</a>
            <a href="excluir.php?idVisita=<?= $v->getId() ?>" onclick="return confirm('Confirma a exclusão?');">Excluir</a>

            <br>
            <a href="#" onclick="buscarDadosVisita(<?= $v->getId() ?>);" style="color: white; font-weight: bold; text-decoration: none;">
                informações da visita
            </a>

            <br><br>

        </div>


<?php endforeach; ?>

</div>



<script src="js/dadosVisita.js"></script>
