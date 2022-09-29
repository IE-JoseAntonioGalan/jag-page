<?php
require_once('../middlewares/auth.php');

include('./template/header.php');
require_once('../config/Database.php');
$db = (new Database())->connect();

$id = $_GET['id'];
$id_questions = $_GET['id_questions'];
$test_title = $_GET['title'];

$query = "SELECT * FROM questions WHERE id='$id_questions'";
$result = $db->query($query);
while($row= $result->fetch_assoc()){



?>

<form method="post" action="/admin/update_question.php?id=<?= $id?>&title=<?= $test_title ?>&id_questions=<?= $id_questions?>" class="card w-75 mt-4 mx-auto">
    <div class="card-header d-flex align-items-center justify-content-between">
        <p class="fs-3 mb-0">Actualiza la pregunta</p>
        <button class="btn btn-lg btn-primary" type="submit">Actualizar</button>
    </div>

    <!-- Send test_id -->
    <input type="hidden" name="test_id" value="<?= $_GET['test_id'] ?>">

    <div class="card-body">
        <div class="form-group">
            <label for="question" class="form-label fw-bold fs-5">Escriba la pregunta</label>
            <div class="text-white" id="editor"><?php echo $row["question"]?></div>
            <textarea name="question" id="question" class="form-control" hidden ><?php echo $row["question"]?></textarea>
        </div>

        <div class="form-group mt-2">
            <label for="correct" class="form-label fw-bold fs-6">Respuesta correcta</label>
            <select name="correct" id="correct" class="form-select">
                <option  value="a">A</option>
                <option  value="b">B</option>
                <option  value="c">C</option>
                <option  value="d">D</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <label for="answer_a" class="form-label fw-bold fs-6">Respuesta A:</label>
            <div id="qlEditorA"><?php echo $row["answer_a"]?></div>
            <textarea name="answer_a" id="answer_a" rows="5" class="form-control" hidden><?php echo $row["answer_a"]?></textarea>
        </div>

        <div class="form-group mt-2">
            <label for="answer_b" class="form-label fw-bold fs-6">Respuesta B:</label>
            <div id="qlEditorB"><?php echo $row["answer_b"]?></div>
            <textarea name="answer_b" id="answer_b" rows="5" class="form-control" hidden><?php echo $row["answer_b"]?></textarea>
        </div>

        <div class="form-group mt-2">
            <label for="answer_c" class="form-label fw-bold fs-6">Respuesta C:</label>
            <div id="qlEditorC"><?php echo $row["answer_c"]?></div>
            <textarea name="answer_c" id="answer_c" rows="5" class="form-control" hidden><?php echo $row["answer_c"]?></textarea>
        </div>

        <div class="form-group mt-2">
            <label for="answer_d" class="form-label fw-bold fs-6">Respuesta D:</label>
            <div id="qlEditorD"><?php echo $row["answer_d"]?></div>
            <textarea name="answer_d" id="answer_d" rows="5" class="form-control" hidden><?php echo $row["answer_d"]?></textarea>
        </div>
    </div>
</form>
<?php }?>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="./js/handlerQuill.js"></script>

<?php include('./template/footer.php'); ?>