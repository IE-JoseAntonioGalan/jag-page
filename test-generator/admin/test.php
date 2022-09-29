<?php 
require_once('../middlewares/auth.php');

include('./template/header.php'); 
?>

<?php  
require_once('../config/Database.php');
$db = (new Database())->connect();

$test_title = $_GET['title'];
$test_id = $_GET['test_id'];


$query = "SELECT * FROM questions WHERE test_id='$test_id'";
$result = $db->query($query);

?>

<!-- Custom Styles -->
<style>
    .card-header img {
        width: 60%;
        display:block;
        margin:auto;
    }

    .card-body img{
         width: 35%;
    }

    .my-4 {
        background: white;
        color: black;
    }

    .d-flex{
        background: white;
        color: black;
    }

    .title{
        background: none;
        color: white;
    }
</style>
<div class="cuerpo-title">
<div class="d-flex align-items-center justify-content-between mt-4 title" style="background: rgb(15,37,55);">
    <p class="fs-1"><?= $test_title ?></p>
    
    <a href="/admin/question_view.php?test_id=<?= $test_id ?>&title=<?= $test_title ?>" class="btn btn-primary fs-5">Agregar una pregunta</a>
</div>

<?php while($item = $result->fetch_assoc()) { ?>
<div class="card my-4">

    <div class="card-header pb-3 d-flex flex-column">
        <?= $item['question']; ?> 

        <div class="mt-2">
            <a href="/admin/edit_question.php?id=<?php echo $test_id?>&title=<?= $test_title ?>&id_questions=<?= $item['id'] ?>" class="btn btn-primary">Editar pregunta</a>
            <a href="/admin/delete_question.php?question_id=<?= $item['id'] ?>&test_id=<?= $test_id ?>&test_title=<?= $test_title ?>" class="btn btn-danger mx-2">Eliminar pregunta</a>  
        </div>
    </div>

    <div class="card-body">
        <ul type="a" class="list-group">
            <li class="list-group-item d-flex"><span class="mx-2">A. </span> <?= $item['answer_a']; ?></li>
            <li class="list-group-item d-flex"><span class="mx-2">B. </span> <?= $item['answer_b']; ?></li>
            <li class="list-group-item d-flex"><span class="mx-2">C. </span> <?= $item['answer_c']; ?></li>
            <li class="list-group-item d-flex"><span class="mx-2">D. </span> <?= $item['answer_d']; ?></li>
        </ul>
    </div>
</div>
<?php } ?>
</div>
<?php include('./template/footer.php'); ?>