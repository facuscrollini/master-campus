<?php
   include_once '../config/bd.php';
$conexionBD= BaseData::crearInstancia();
   ?>

<?php
$id = isset($_POST["id"]) ? $_POST["id"]: "";
$name = isset( $_POST["name"]) ? $_POST["name"]: "";
$last_name = isset($_POST["last_name"]) ? $_POST["last_name"]: "";
$action = isset($_POST["action"]) ? $_POST["action"]: "";




if($action != ""){
    switch($action){
        case 'add':
            $sql = 'INSERT INTO students (name, last_name) VALUES(:name, :last_name)';
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':name', $name);
            $request->bindParam(':last_name', $last_name);
            $request->execute();
            break;
        case 'edit':
            $sql = 'UPDATE students SET name=:name, last_name=:last_name  WHERE id=:id';
            $request =  $conexionBD->prepare($sql);
            $request->bindParam(':id', $id);
            $request->bindParam(':name', $name);
            $request->bindParam(':last_name', $last_name);
            $request->execute();

            $id= "";
            $name= "";
            $last_name= "";
            break;
        case 'delete':
            $sql = 'DELETE FROM students WHERE id=:id';
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':id', $id);
            $request->execute(); 
            $name = "";
            $last_name = "";
            $id = "";   
            break;
        case 'select':
            $sql = 'SELECT * FROM students WHERE id=:id';
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':id', $id);
            $request->execute();
            $student = $request->fetch(PDO::FETCH_ASSOC);
            $name = $student["name"];
            $last_name = $student["last_name"];
            print_r($student);
            break;
      
    }
}



$sql = "SELECT * FROM students";

$request = $conexionBD->prepare($sql);
$request->execute();
$students = $request->fetchAll();

?>