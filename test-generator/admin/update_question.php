<?php
require_once('../middlewares/auth.php');
require_once('../config/Database.php');

$db = (new Database)->connect();

$id = $_GET['id'];
$id_questions = $_GET['id_questions'];
$test_title = $_GET['title'];

$question = $_POST['question'];
$answer_a =$_POST['answer_a'];
$answer_b =$_POST['answer_b'];
$answer_c =$_POST['answer_c'];
$answer_d =$_POST['answer_d'];
$correct = $_POST['correct'];



$sql = "UPDATE questions SET question=?, answer_a=?, answer_b=?, answer_c=?, answer_d=?, correct=? WHERE id='$id_questions'";

$stmt = $db->prepare($sql);
$stmt->bind_param('ssssss', $question, $answer_a, $answer_b, $answer_c, $answer_d, $correct);
$stmt->execute();

 header("Location: /admin/test.php?test_id=".$id."&title=".$test_title);

?>