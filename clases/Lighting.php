<?php
require_once 'Connection.php';
class Lighting extends Connection {

    public function importLamps(){
        $dataBase = $this->getConn(); 
        
        $sql = "INSERT INTO lamps (lamp_id, lamp_name, lamp_model, lamp_zone, lamp_on) VALUES (?, ?, ?, ?, ?)";
        $stmt = $dataBase->prepare($sql);
        
        $file = fopen("lighting.csv", "r");
        if ($file !== FALSE) {
            while (($data = fgetcsv($file, 1600, ",")) !== FALSE) {
                $stmt->bind_param("sssss", $data[0], $data[1], $data[2], $data[3], $data[4]);
                $stmt->execute();
            }
            fclose($file);
        } else {
            echo "Error: No se pudo abrir el archivo CSV.";
        }
        $stmt->close();
    }
        
    public function deleteList() {
        $conn = new Connection;
        $dataBase = $conn->getConn();
        $sql = "DELETE FROM lamps";
        $result = $dataBase->query($sql);
        return $result;
    }
    
    public function init() {
            $this->deleteList();
            $this->importLamps();
    }

    public function getAllLamps(){
        $conn = new Connection();
        $dataBase = $conn->getConn();

        $lamps = "SELECT * FROM lamps";
        $resultado = mysqli_query($dataBase, $lamps);
        
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $lampsArray[] = $fila;
            }
        } else {
            echo "Error: " . mysqli_error($dataBase);
        }
    
        return $lampsArray;
    }

    public function drawLampsList(){
        $datos = $this->getAllLamps();
        $html = '<table border="1">';
        $html .= '<tr>';
        $html .= '<tr><td colspan="5" align="center"><h1>Datos</h1></td></tr>';
        $html .= '<tr>';
        $html .= '<tr></th><th>Lamp_Id</th><th>Lamp_Name</th><th>Lamp_Model</th><th>Lamp_Zone</th><th>Lamp_On</th></tr>';
       
        foreach ($datos as $datos) {
                $html .= '<tr>';
                $html .= '<td>' . $datos['lamp_id'] . '</td>';
                $html .= '<td>' . $datos['lamp_name'] . '</td>';
                $html .= '<td>' . $datos['lamp_model'] . '</td>';
                $html .= '<td>' . $datos['lamp_zone'] . '</td>';
                $html .= '<td>' . $datos['lamp_on'] . '</td>';
                $html .= '</tr>';
            }
        $html .= '</table>';
        echo $html;
    }


    }



