<?php
include_once '../config/bd.php';
$conexionBD = BaseData::crearInstancia();
?>

<?php
$id = isset($_POST["id"]) ? $_POST["id"] : "";
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : "";


$programs = isset($_POST["programs"]) ? $_POST["programs"] : "";
$action = isset($_POST["action"]) ? $_POST["action"] : "";


if ($action != "") {
    switch ($action) {
        case 'add':
            $sql = 'INSERT INTO students (name, last_name) VALUES(:name, :last_name)';
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':name', $name);
            $request->bindParam(':last_name', $last_name);
            $request->execute();

            $student_id = $conexionBD->lastInsertId();

            foreach ($programs as $program) {
                $sql = 'INSERT INTO student_program (id_alumno, id_program) VALUES(:id_student, :id_program)';
                $request = $conexionBD->prepare($sql);
                $request->bindParam(':id_student', $student_id);
                $request->bindParam(':id_program', $program);
                $request->execute();
            }


            break;
        case 'edit':



            $sql = 'UPDATE students SET name=:name, last_name=:last_name  WHERE id=:id';
            $request =  $conexionBD->prepare($sql);
            $request->bindParam(':id', $id);
            $request->bindParam(':name', $name);
            $request->bindParam(':last_name', $last_name);
            $request->execute();
            
            if(isset($programs)){
                $sql = 'DELETE FROM student_program WHERE id_alumno=:id';
                $request = $conexionBD->prepare($sql);
                $request->bindParam(":id", $id);
                $request->execute();

                
                if(is_array($programs)){

                    foreach($programs as $program){
                        $sql = 'INSERT INTO student_program (id_alumno, id_program) VALUES (:id_student, :id_program)';
                        $request = $conexionBD->prepare($sql);
                        $request->bindParam(':id_student', $id);
                        $request->bindParam(':id_program', $program);
                        $request->execute();
                        
                        }
                        $programsArray = $programs;
            }
            }


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


            $sql = 'SELECT programs.id FROM student_program 
            INNER JOIN programs ON student_program.id_program = programs.id
            WHERE student_program.id_alumno=:student_id';

            $request = $conexionBD->prepare($sql);
            $request->bindParam(':student_id', $id);
            $request->execute();
            $studentPrograms = $request->fetchAll(PDO::FETCH_ASSOC);

            foreach($studentPrograms as $program){
                echo $program["id"];
                $programsArray[] = $program["id"];
            }

            break;
    }
}


$sql = "SELECT * FROM students ORDER BY id ASC";

$request = $conexionBD->prepare($sql);
$request->execute();
$students = $request->fetchAll();



foreach ($students as $key => $student) {
    
    $sql = 'SELECT * FROM programs WHERE id IN (SELECT id_program FROM student_program WHERE id_alumno=:id_student)';
    $request = $conexionBD->prepare($sql);
    $request->bindParam(':id_student', $student["id"]);
    $request->execute();
    $studentPrograms = $request->fetchAll();
    $students[$key]['programs'] = $studentPrograms;
    }
    
    
$sqlProgramList = "SELECT * FROM programs";
$requestProgramList = $conexionBD->prepare($sqlProgramList);
$requestProgramList->execute();
$programList = $requestProgramList->fetchAll();

?>