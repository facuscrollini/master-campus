<?php 


$id = isset($_POST['id'])? $_POST['id'] : '';
$program_name = isset($_POST['program_name'])? $_POST['program_name'] : '';
$action = isset($_POST['action'])? $_POST['action'] : '';

if($action != ''){

    switch($action){


        case 'add':
            $sql = "INSERT INTO programs(program_name) VALUES (:program_name)";
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':program_name', $program_name);
            $request->execute();
          
            break;


        case'edit':
            $sql = "UPDATE programs SET program_name=:program_name WHERE id=:id";
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':program_name', $program_name);
            $request->bindParam(':id', $id);
            $request->execute();
          
            break;


        case'delete':
            $sql = "DELETE FROM programs WHERE id=:id";
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':id', $id);
            $request->execute();
            $id = "";
            $program_name= "";
            break;

        case 'Select':

            $sql = 'SELECT * FROM programs WHERE id=:id';
            $request = $conexionBD->prepare($sql);
            $request->bindParam(':id', $id);
            $request->execute();
            $program = $request->fetch(PDO::FETCH_ASSOC);
            $program_name = $program['program_name'];
            
            break;
    }
}


//Solicitud para GET de todos los PROGRAMS
$consulta = $conexionBD->prepare("SELECT * FROM programs");
$consulta->execute();
$programList= $consulta->fetchAll();

?>