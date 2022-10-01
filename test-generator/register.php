<?php
require('./config/Database.php');
$db = (new Database)->connect();

if (isset($_POST['fullname'])){

    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $password = $_POST['password'];
    $user_type = 2;
    
    $conn = $db->prepare("INSERT INTO users (fullname,email,password,grade_id, user_type) VALUES(?,?,?,?,?)");
    $conn->bind_param('sssii', $fullname, $email, $password, $grade, $user_type);
    $conn->execute();
    if($conn){
        header('location: /');
       
   }
   
};

$grades = $db->query("SELECT * FROM degrees");

include('./template/header.php'); 

?>

<!-- Login form -->
<form method="POST" class="card w-25 mx-auto my-5">
    <div class="card-header fs-2 text-center">Login</div>
    <div class="card-body d-flex flex-column">
        <div class="mb-3">
            <label for="fullname" class="form-label">Nombre completo</label>
            <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Digite su nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com"required>
        </div>
        <div class="mb-3">
            <label for="grade" class="form-label">Grado</label>
            <select class="form-select" name="grade" id="grade">
                <?php while($prueba = $grades->fetch_assoc()){ ?>
                <option value="<?php echo $prueba['id']?>"><?php echo $prueba['grade']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrarme</button>
        <a href="/" class="text-white mt-2 text-center">Ingresar</a>
    </div>
    
</form>


<?php include('./template/footer.php'); ?>