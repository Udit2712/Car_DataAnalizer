<?php
$title = "Car Data Analyzer";
$bk_amt = "./";
require_once 'includes/header.php';
?>

<?php
$id = "";
// http:localhost/data-analyser/viewdetail.php?ID_Number=1
if (!isset($_GET['ID_Number'])) {
    echo 'error';
} else {
    $id = $_GET['ID_Number'];
    // echo $id;
    // echo "";

}
$sql = "SELECT ID_Number,Make,Model,Variant,ExShowroom_Price,Body_Type,ARAI_Certified_Mileage_in_kmlitre,POINT_SUM,Displacement_in_cc,Cylinders,Valves_Per_Cylinder,Emission_Norm_in_BS,Torque,Power,Airbags,Boot_Space_in_L FROM cars_data";
$end_coma = ";";
$qu_id = " where ID_Number = {$id}";
$sql .= $qu_id;
$sql .= $end_coma;
// echo $sql;
$result = $conn->query($sql);
$cardata = $result->fetch_assoc();

$spacer = " ";
$title = "";

$title .= $cardata["Make"] .= $spacer .= $cardata["Model"];
?>

<body>
    <div class="container">

        <table class="mt-5 table table-striped table-striped-columns text-light">
            <thead>
                <h1 class="mt-5 text-light"><b><?php echo $cardata["Make"] . " " . $cardata["Model"] . " " . $cardata["Variant"] ?></b></h1>
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
                    <th class="table-dark text-light">Emission Norm</th>
                    <td class="table-light text-dark"><?php echo "BS " . $cardata["Emission_Norm_in_BS"] ?></td>
                    <th class="table-dark text-light">Boot Space</th>
                    <td class="table-light text-dark"><?php echo $cardata["Boot_Space_in_L"] . " Litres" ?></td>
                </tr>
                <!-- <tr>
                    <th class="table-dark text-light">body type</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT body type</td>
                    <th class="table-dark text-light">displacement</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT displacement</td>
                </tr>
                <tr>
                    <th class="table-dark text-light">displacement</th>
                    <td class="table-light text-dark"><?php echo $cardata["displacement"] ?></td>
                    <th class="table-dark text-light">torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                </tr>
                <tr>
                    <th class="table-dark text-light">torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                    <th class="table-dark text-light">torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                </tr>
                <tr>
                    <th class="table-dark text-light">torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                    <th class="table-dark text-light">torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                </tr>
                <tr>
                    <th class="table-dark text-light">Power</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                    <th class="table-dark text-light">torque</th>
                    <td class="table-light text-dark"><?php echo $cardata["Make"] ?>RESULT torque</td>
                </tr> -->
            </tbody>
        </table>
        <!-- <div class="card" style="width: 20rem;">
            <div class="card-body">
                <b>
                    <h5 class="card-title"></h5>
                </b>
                <b>
                    <p class="card-text"><?php echo "Ex Showroom Price: " . " " . $cardata["ExShowroom_Price"] ?></p>
                </b>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo "Body Type: " . " " . $cardata["Body_Type"] ?></li>
                <li class="list-group-item"><?php echo "ARAI Certified Mileage" . " " . $cardata["ARAI_Certified_Mileage_in_kmlitre"] ?></li>
                <h5>
                    <li class="list-group-item"><?php echo "Points  " ?><span class="badge badge-success"><?php echo " " . $cardata["POINT_SUM"] ?></span></li>
                </h5>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
                <li class="list-group-item"><?php echo $cardata["POINT_SUM"] ?></span></li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div> -->
    </div>
    <?php
    require_once 'includes/header.php';
    ?>