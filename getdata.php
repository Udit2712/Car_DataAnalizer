<?php
$bk_amt = "./";
$title = "Car Data Analyzer";
require_once 'includes/header.php';
?>

<body>

    <div class="container" id="result">
        <?php
        // $x = "SELECT ID_Number,Make,Model,Variant,ExShowroom_Price,Body_Type,ARAI_Certified_Mileage_in_kmlitre,POINT_SUM FROM cars_data where Body_Type='hatchback' and  ExShowroom_Price < 1000000 and POINT_SUM=(SELECT MAX(POINT_SUM) FROM cars_data where ExShowroom_Price < 1000000 and Body_Type='hatchback')";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["pricer"] == "Select Price Range" and $_POST["make"] == "Company Names" and $_POST["Body_Type"] == "Body Type" and $_POST["Fuel_Type"] == "Select Fuel Type") {
                echo "<b><h1 class='mt-5 text-light'>No Values Selected</h1></b";
            } else {
                $sql = "SELECT ID_Number,Make,Model,Variant,ExShowroom_Price,Body_Type,ARAI_Certified_Mileage_in_kmlitre,ARAI_Certified_Mileage_for_CNG_in_kmkg,POINT_SUM FROM cars_data";
                $sqltopcar = "SELECT ID_Number,Make,Model,Variant,ExShowroom_Price,Body_Type,ARAI_Certified_Mileage_in_kmlitre,ARAI_Certified_Mileage_for_CNG_in_kmkg,POINT_SUM FROM cars_data";
                $maxsel = "POINT_SUM=(SELECT MAX(POINT_SUM) FROM cars_data ";

                $pricer = $make = $body_Type = $Fuel_Type = $qu_price_r = $qu_bdy_type = $qu_make = $qu_fuel_type = $topctmprice = $topctmmake = $topctmbody = $topctmfuel = "";
                $end_coma = ";";
                $end_bracket = ")";
                $pricer = ($_POST["pricer"]);
                // selecting price ranges for query

                if ($pricer == "Select Price Range") {
                    $qu_price_r = "";
                    $topctmprice = "";
                } else {
                    $tmp_price = (explode("_", $pricer));
                    // print_r($tmp_price);
                    // ""
                    $st_price = $tmp_price[0];
                    if (!empty($tmp_price[1])) {
                        $lt_price = $tmp_price[1];
                        $qu_price_r = " where ExShowroom_Price > {$st_price} AND ExShowroom_Price<={$lt_price}";
                        $topctmprice = " where ExShowroom_Price > {$st_price} AND ExShowroom_Price<={$lt_price}";
                    } else {
                        $lt_price = "";
                        $qu_price_r = " where ExShowroom_Price > {$st_price}";
                        $topctmprice = " where ExShowroom_Price > {$st_price}";
                    }
                }
                $sql .= $qu_price_r;
                $sqltopcar .= $topctmprice;
                $maxsel .= $topctmprice;


                $make = ($_POST["make"]);
                if ($make == "Company Names") {
                    $qu_make = "";
                    $topctmmake = "";
                } else {
                    // print_r($tmp_price);
                    if ($pricer == "Select Price Range") {
                        $qu_make = " where Make ='{$make}'";
                        $topctmmake = " where Make ='{$make}'";
                    } else {
                        $qu_make = " and Make ='{$make}'";
                        $topctmmake = " and Make ='{$make}'";
                    }
                }
                $sql .= $qu_make;
                $sqltopcar .= $topctmmake;
                $maxsel .= $topctmmake;



                $Body_Type = ($_POST["Body_Type"]);
                if ($Body_Type == "Body Type") {
                    $qu_bdy_type = "";
                    $topctmbody = "";
                    // echo "-=================================-";
                    // echo $maxsel;
                } else {
                    if ($make == "Company Names" and $pricer == "Select Price Range") {
                        $qu_bdy_type = " where Body_Type ='{$Body_Type}'";
                        $topctmbody = " where Body_Type ='{$Body_Type}'";
                    } else {
                        $qu_bdy_type = " and Body_Type ='{$Body_Type}'";
                        $topctmbody = " and Body_Type ='{$Body_Type}'";
                    }
                    // echo "-=================================-";
                    // echo $maxsel;
                }
                $sql .= $qu_bdy_type;
                $sqltopcar .= $topctmbody;
                $maxsel .= $topctmbody;
                // echo "-=================================-";
                // echo $maxsel;

                $Fuel_Type = ($_POST["Fuel_Type"]);
                if ($Fuel_Type == "Select Fuel Type") {
                    $qu_fuel_type = "";
                    $topctmfuel = "";
                    // echo "-=================================-";
                    // echo $maxsel;
                } else {
                    if ($make == "Company Names" && $pricer == "Select Price Range" && $Body_Type == "Body Type") {
                        $qu_fuel_type = " where Fuel_Type ='{$Fuel_Type}'";
                        $topctmfuel = " where Fuel_Type ='{$Fuel_Type}'";
                    } else {
                        $qu_fuel_type = " and Fuel_Type ='{$Fuel_Type}'";
                        $topctmfuel = " and Fuel_Type ='{$Fuel_Type}'";
                    }
                    // echo "-=================================-";
                    // echo $maxsel;
                }
                $sql .= $qu_fuel_type;
                $sqltopcar .= $topctmfuel;
                $maxsel .= $topctmfuel;
                // echo $maxsel;
                if (empty($maxsel)) { //is maxsel empty? yes
                    $sqltopcar .= " where ";
                } else {
                    $sqltopcar .= " and ";
                }
                // echo "maxsel query=" . $maxsel . "\n";
                // echo "-=================================-";
                // echo  "sqltopcar query=" . $sqltopcar . "\n";
                // echo "-=================================-";
                $sqltopcar .= $maxsel;
                $sqltopcar .= $end_bracket;
                $sqltopcar .= $end_coma;
                // echo  "sqltopcar query=" . $sqltopcar . "\n";
                // echo "-=================================-";
                // echo  "maxsel query=" . $maxsel . "\n";

                $sql .= $end_coma;
                // echo $sql;
                // echo "-=================================-";
                // echo $sqltopcar;
                $result = $conn->query($sql);
                $topCarResult = $conn->query($sqltopcar);
            }
        }


        ?>
        <?php
        if ($_POST["pricer"] == "Select Price Range" and $_POST["make"] == "Company Names" and $_POST["Body_Type"] == "Body Type" and $_POST["Fuel_Type"] == "Select Fuel Type") {
            // echo "<b><h1 class='text-light'>No Values Selected</h1></b";
        } else {
            if ($Fuel_Type == "CNG") {
                $row_cnt = $result->num_rows;
                if ($row_cnt > 0) {
                    echo "<table id='data_table' class='table text-light'>
                        <tr>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(0)'>S.No</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(1)'>No. of Points</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(2)'>Make</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(3)'>Model</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(4)'>Variant</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(5)'>Ex-Showroom Price</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(6)'>Body Type</th></h2>
                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(7)'>Milage in Km/Kg</th></h2>
                        <h2><th class='tableHead table-dark text-light'>Details</th></h2>
                        </tr>
                                    ";
                    $topcar = $topCarResult->fetch_assoc();
                    echo "<tr class=' text-dark table-light'><h1 class='text-dark'>
                        <td><h1 class='text-danger'>Top car</h1>" . "</td>
                        <td>" . $topcar["POINT_SUM"] . "</td>
                        <td>" . $topcar["Make"] . "</td>
                        <td>" . $topcar["Model"] . "</td>
                        <td>" . $topcar["Variant"] . "</td>
                        <td>" . $topcar["ExShowroom_Price"] . "</td>
                        <td>" . $topcar["Body_Type"] . "</td>
                        <td>" . $topcar["ARAI_Certified_Mileage_for_CNG_in_kmkg"] . "</td>
                        <td><a class='btn btn-light' href='viewdetail.php?ID_Number=" . $topcar["ID_Number"] . "'>" . "Know More" . "</a>" . "</td>
                        </h1></tr>";
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $i++ . "</td>
                                <td>" . $row["POINT_SUM"] . "</td>
                                <td>" . $row["Make"] . "</td>
                                <td>" . $row["Model"] . "</td>
                                <td>" . $row["Variant"] . "</td>
                                <td>" . $row["ExShowroom_Price"] . "</td>
                                <td>" . $row["Body_Type"] . "</td>
                                <td>" . $row["ARAI_Certified_Mileage_for_CNG_in_kmkg"] . "</td>
                                <td><a class='btn btn-light' href='viewdetail.php?ID_Number=" . $row["ID_Number"] . "'>" . "Know More" . "</a>" . "</td>
                                </tr>";
                    }
                    echo "</table>";
                    echo "<h6><span class='p-2 bg-dark text-light'> Number of Results " . $row_cnt . " </span></h6>";
                } else {
                    echo "<b><h1 class='mt-5 text-light'>No results found</h1></b>";
                }
            } else {
                $row_cnt = $result->num_rows;
                if ($row_cnt > 0) {
                    echo "<table id='data_table' class='table text-light'>
                                    <tr>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(0)'>S.No</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(1)'>No. of Points</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(2)'>Make</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(3)'>Model</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(4)'>Variant</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(5)'>Ex-Showroom Price</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(6)'>Body Type</th></h2>
                                        <h2><th class='tableHead table-dark text-light' onclick='sortTable(7)'>Milage in Km/L</th></h2>
                                        <h2><th class='tableHead table-dark text-light'>Details</th></h2>
                                    </tr>
                                    ";
                    $topcar = $topCarResult->fetch_assoc();
                    echo "<tr class=' text-dark table-light'><h1 class='text-dark'>
                    <td><h1 class='text-danger'>Top car</h1>" . "</td>
                    
                    <td>" . $topcar["POINT_SUM"] . "</td>
                    <td>" . $topcar["Make"] . "</td>
                    <td>" . $topcar["Model"] . "</td>
                    <td>" . $topcar["Variant"] . "</td>
                    <td>" . $topcar["ExShowroom_Price"] . "</td>
                    <td>" . $topcar["Body_Type"] . "</td>
                    <td>" . $topcar["ARAI_Certified_Mileage_in_kmlitre"] . "</td>
                    <td><a class='btn btn-dark text-light' href='viewdetail.php?ID_Number=" . $topcar["ID_Number"] . "'>" . "Know More" . "</a>" . "</td>
                    </h1></tr>";
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>" . $i++ . "</td>
                        <td>" . $row["POINT_SUM"] . "</td>
                        <td>" . $row["Make"] . "</td>
                        <td>" . $row["Model"] . "</td>
                        <td>" . $row["Variant"] . "</td>
                        <td>" . $row["ExShowroom_Price"] . "</td>
                        <td>" . $row["Body_Type"] . "</td>
                        <td>" . $row["ARAI_Certified_Mileage_in_kmlitre"] . "</td>
                        <td><a class='btn btn-light' href='viewdetail.php?ID_Number=" . $row["ID_Number"] . "'>" . "Know More" . "</a>" . "</td>
                        </tr>";
                    }
                    echo "</table>";
                    echo "<h6><span class='p-2 bg-dark text-light'> Number of Results " . $row_cnt . " </span></h6>";
                } else {
                    echo "<b><h1 class='mt-5 text-light'>No results found</h1></b>";
                }
            }
        }
        ?>
    </div>
    <br>
    <br>
    <br>
    <br>

    <br>


    <?php
    require_once 'includes/footer.php';
    ?>