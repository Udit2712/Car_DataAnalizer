<?php
$bk_amt = "./";
$title="Car Details";
require_once 'includes/header.php';

$id = "";
if (!isset($_GET['ID_Number'])) {
    echo 'error';
} else {
    $id = $_GET['ID_Number'];

}
$cardetatils = "SELECT ID_Number,Make,Model,Variant,ExShowroom_Price,Body_Type,ARAI_Certified_Mileage_in_kmlitre,POINT_SUM,Displacement_in_cc,Cylinders,Valves_Per_Cylinder,Emission_Norm_in_BS,Torque,Power,Boot_Space_in_L,Power_Steering,Power_Windows,Front_Brakes,Rear_Brakes,Odometer,Speedometer,Seats_Material,Type,Cruise_Control,Airbags,Drivetrain,Cylinder_Configuration,Height_in_MM,Length_in_MM,Width_in_MM,Bluetooth FROM cars_data";
$end_coma = ";";
$qu_id = " where ID_Number = {$id}";
$cardetatils .= $qu_id;
$cardetatils .= $end_coma;
$datares = $conn->query($cardetatils);
$cardata = $datares->fetch_assoc();

?>

<body>
    <div class="container">

        <table class="mt-5 table table-striped table-striped-columns text-light">
            <thead>
                <h1 class="mt-5 text-light"><b><?php echo $cardata["Make"] . " " . $cardata["Model"]. " " . $cardata["Variant"];?></b></h1><br>
                <span class="display-4"><h5 class="badge badge-dark text-light"><?php echo $cardata["POINT_SUM"]." " ?>Points</h5></span><br>
            </thead>
            <tbody>
                <tr>
                    <th class="table-dark text-light">Company</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?></td>
                    <th class="table-dark text-light">Model</th>
                    <td class="table-light text-dark"><?php echo $cardata["Model"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Variant</th>
                    <td class="table-light text-dark"><?php echo $cardata["Variant"] ?></td>
                    <th class="table-dark text-light">Ex Showroom Price</th>
                    <td class="table-light text-dark"><?php echo $cardata["ExShowroom_Price"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Body Type</th>
                    <td class="table-light text-dark"><?php echo $cardata["Body_Type"] ?></td>
                    <th class="table-dark text-light">ARAI Certified Mileage in Km/l</th>
                    <td class="table-light text-dark"><?php echo $cardata["ARAI_Certified_Mileage_in_kmlitre"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Power</th>
                    <td class="table-light text-dark"><?php echo $cardata["Power"] ?></td>
                    <th class="table-dark text-light">Torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Torque"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Displacement in cc</th>
                    <td class="table-light text-dark"><?php echo $cardata["Displacement_in_cc"] . "cc" ?></td>
                    <th class="table-dark text-light">No of Cylinders,Valves Per Cylinder</th>
                    <td class="table-light text-dark"><?php echo $cardata["Cylinders"] . " Cylinders, " . $cardata["Valves_Per_Cylinder"] . " " . "Valves per Cylinder" ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Drivetrain</th>
                    <td class="table-light text-dark"><?php echo $cardata["Drivetrain"] ?></td>
                    <th class="table-dark text-light">Cylinder_Configuration</th>
                    <td class="table-light text-dark"><?php echo $cardata["Cylinder_Configuration"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Emission Norm</th>
                    <td class="table-light text-dark"><?php echo "BS " . $cardata["Emission_Norm_in_BS"] ?></td>
                    <th class="table-dark text-light">Boot Space</th>
                    <td class="table-light text-dark"><?php echo $cardata["Boot_Space_in_L"] . " Litres" ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Height_in_MM</th>
                    <td class="table-light text-dark"><?php echo $cardata["Height_in_MM"] ?></td>
                    <th class="table-dark text-light">Length_in_MM</th>
                    <td class="table-light text-dark"><?php echo $cardata["Length_in_MM"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Width_in_MM</th>
                    <td class="table-light text-dark"><?php echo $cardata["Width_in_MM"] ?></td>
                    <th class="table-dark text-light">Airbags</th>
                    <td class="table-light text-dark"><?php echo $cardata["Airbags"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Front Brakes</th>
                    <td class="table-light text-dark"><?php echo $cardata["Front_Brakes"] ?></td>
                    <th class="table-dark text-light">Rear Brakes</th>
                    <td class="table-light text-dark"><?php echo $cardata["Rear_Brakes"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Seats Material</th>
                    <td class="table-light text-dark"><?php echo $cardata["Seats_Material"] ?></td>
                    <th class="table-dark text-light">Type</th>
                    <td class="table-light text-dark"><?php echo $cardata["Type"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Odometer</th>
                    <td class="table-light text-dark"><?php echo $cardata["Odometer"] ?></td>
                    <th class="table-dark text-light">Speedometer</th>
                    <td class="table-light text-dark"><?php echo $cardata["Speedometer"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Cruise_Control</th>
                    <td class="table-light text-dark"><?php echo $cardata["Cruise_Control"] ?></td>
                    <th class="table-dark text-light">Bluetooth</th>
                    <td class="table-light text-dark"><?php echo $cardata["Bluetooth"] ?></td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Power Steering</th>
                    <td class="table-light text-dark"><?php echo $cardata["Power_Steering"] ?></td>
                    <th class="table-dark text-light">Power Windows</th>
                    <td class="table-light text-dark"><?php echo $cardata["Power_Windows"] ?></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <?php
    require_once 'includes/header.php';
    ?>