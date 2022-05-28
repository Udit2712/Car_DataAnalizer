<?php
$servername = "bxlqioeaf2nxdeugfemn-mysql.services.clever-cloud.com";
$username = "uhnbcyoa0gynhczg";
$password = "QoD888qNbDN812WfCndP";
$dbname = "bxlqioeaf2nxdeugfemn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//sql queries
$sql = "SELECT ID_Number,Make,Model,Variant,ExShowroom_Price,Body_Type,ARAI_Certified_Mileage_in_kmlitre,POINT_SUM,Fuel_Type,Power FROM cars_data";
$pricer = $make = $body_Type = $Fuel_Type = $qu_price_r = $qu_bdy_type = $qu_make = $qu_fuel_type = "";
$end_coma = ";";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pricer = ($_POST["pricer"]);
    // selecting price ranges for query
    if ($pricer == "Select Price Range") {
        $qu_price_r = "";
    } else {
        $tmp_price = (explode("_", $pricer));
        $st_price = $tmp_price[0];
        if (!empty($tmp_price[1])) {
            $lt_price = $tmp_price[1];
            $qu_price_r = " where ExShowroom_Price > {$st_price} AND ExShowroom_Price<={$lt_price}";
        } else {
            $lt_price = "";
            $qu_price_r = " where ExShowroom_Price > {$st_price}";
        }
    }
    $sql .= $qu_price_r;
    $make = ($_POST["make"]);
    if ($make == "Company Names") {
        $qu_make = "";
    } else {
        //if condition for company name
        if ($pricer == "Select Price Range") {
            $qu_make = " where Make ='{$make}'";
        } else {
            $qu_make = " and Make ='{$make}'";
        }
    }
    $sql .= $qu_make;
    //Condtioning for body type
    $Body_Type = ($_POST["Body_Type"]);
    if ($Body_Type == "Body Type") {
        $qu_bdy_type = "";
    } else {
        if ($make == "Company Names" and $pricer == "Select Price Range") {
            $qu_bdy_type = " where Body_Type ='{$Body_Type}'";
        } else {
            $qu_bdy_type = " and Body_Type ='{$Body_Type}'";
        }
    }
    $sql .= $qu_bdy_type;
    //conditioning for fuel type
    $Fuel_Type = ($_POST["Fuel_Type"]);
    if ($Fuel_Type == "Select Fuel Type") {
        $qu_fuel_type = "";
    } else {
        if ($make == "Company Names" and $pricer == "Select Price Range") {
            $qu_fuel_type = " where Fuel_Type ='{$Fuel_Type}'";
        } else {
            $qu_fuel_type = " and Fuel_Type ='{$Fuel_Type}'";
        }
    }
    $sql .= $qu_fuel_type;
}
$sql .= $end_coma;
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/074a81184f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Car Data Analyser</title>
</head>

<body>
    <!--first container-->

    <div class="container-fluid pl-sm-4 pr-sm-4 c1">

<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <!-- <a class="navbar-brand" href="#"> <img src="https://stimg.cardekho.com/pwa/img/Desktop-logo.svg" alt="Logo">
    </a> -->
    <span>
        <b>Car Data Analyser</b>
    </span>
    <!-- <button class="navbar-toggler" name="model" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav p-sm-2" stye="position:fixed;overflow-x:hidden">
        <ul class="navbar-nav" stye="position:fixed;overflow-x:hidden">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navdropdown" data-toggle="dropdown">Pages</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Features</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="data_report.php">See Data Report</a>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search cars or brands">
            <button class="btn btn-dark" type="submit">Search</button>
        </form>
    </div>
</nav>
</div>

    <!-- second container-->
    <div class="container-fluid" id="biggerdiv">
        <div class="container-fluid cont2">
            <h1 class="text-dark ml-5 mr-5 pt-5 pl-5 pr-5"><i>Buying your dream car?</i></h1>
            <h2 class="text-dark ml-5 mr-5 pl-5 pr-5"><i>Check Now!</i></h2>
            <div class="background">
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <div class="container">
                        <div class="col-6">
                            <div>
                                <div>
                                    <select name="pricer" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                        <option selected value="Select Price Range">Select Price Range</option>
                                        <!-- <ul class=" dropdown-menu"> -->
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="100000_500000">1 lakh-5 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="500000_1000000">5 lakhs-10 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="1000000_1500000">10 lakhs-15 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="1500000_2000000">15 lakhs-20 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="2000000_2500000">20 lakhs-25 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="2500000_3000000">25 lakhs-30 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="3000000_5000000">30 lakhs-50 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="5000000_10000000">50 lakhs-100 lakhs</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="10000000_">1 Crore+</option>
                                            </a>
                                        </li>
                                        <!-- </ul> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <div>
                                    <select name="make" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                        <option selected value="Company Names">Company Names</option>
                                        <div>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Tata">Tata</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Datsun">Datsun</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Renault">Renault</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Maruti Suzuki">Maruti Suzuki</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Hyundai">Hyundai</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Premier">Premier</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Toyota">Toyota</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Nissan">Nissan</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Volkswagen">Volkswagen</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Ford">Ford</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Mahindra">Mahindra</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Fiat">Fiat</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Honda">Honda</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Jeep">Jeep</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Isuzu">Isuzu</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Skoda">Skoda</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Audi">Audi</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Mercedes">Mercedes</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Dc">Dc</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Mini">Mini</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Volvo">Volvo</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Jaguar">Jaguar</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Bmw">Bmw</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Land Rover">Land Rover</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Porsche">Porsche</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Lexus">Lexus</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Maserati">Maserati</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Lamborghini">Lamborghini</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Bentley">Bentley</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Ferrari">Ferrari</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Aston Martin">Aston Martin</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Rolls-Royce">Rolls-Royce</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Bugatti">Bugatti</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Bajaj">Bajaj</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Icml">Icml</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Force">Force</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Mg">Mg</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Kia">Kia</option>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <option value="Mitsubishi">Mitsubishi</option>
                                                </a>
                                            </li>
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <div>
                                    <select name="Body_Type" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                        <option selected value="Body Type">Body Type</option>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Hatchback">Hatchback</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="MPV">MPV</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="MUV">MUV</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="SUV">SUV</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Sedan">Sedan</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Crossover">Crossover</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Coupe">Coupe</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Convertible">Convertible</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Sports, Hatchback">Sports, Hatchback</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Sedan, Coupe">Sedan, Coupe</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Sports">Sports</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="SUV, Crossover">SUV, Crossover</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Sedan, Crossover">Sedan, Crossover</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Sports, Convertible">Sports, Convertible</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Pick-up">Pick-up</option>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Coupe, Convertible">Coupe, Convertible</option>
                                            </a>
                                        </li>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <select name="Fuel_Type" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                <option selected value="Select Fuel Type">Select Fuel Type</option>
                                <li>
                                    <a class="dropdown-item">
                                        <option value="Petrol">Petrol</option>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <option value="CNG">CNG</option>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <option value="Diesel">Diesel</option>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <option value="CNG + Petrol">CNG + Petrol</option>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <option value="Hybrid">Hybrid</option>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <option value="Electric">Electric</option>
                                    </a>
                                </li>
                            </select>
                        </div>
                        <div class="col-6 ">
                            <div class="col-6 p-3">
                                <button class="btn btn-dark" type="submit" data-toggle="collapse" data-target="#collapsibleNavbar">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>

            </div>
            <div id="result">
                <h6>
                    <?php
                    echo $sql;
                    ?>
                </h6>
                <!-- <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br> -->
                <br>
                <br>
                <br>
            </div>
        </div>
        </form>
        <!-- <div class="row r1">
                <div class="col-md-3">
                    <div class="dropdown ">
                        <button class="btn btn-light dropdown-toggle text-secondary" type="button" data-toggle="dropdown">Select Budget
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1 lakh-5 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">5 lakhs-10 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">10 lakhs-15 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">15 lakhs-20 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">20 lakhs-25 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">25 lakhs-30 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">30 lakhs-50 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">50 lakhs-100 lakhs</a></li>
                            <li><a class="dropdown-item" href="#">1 Crore+</a></li>
                        </ul>
                    </div>
                </div> -->
        <!-- <div class="col-md-3">
                    <label for="exampleDataList" class="form-label">Company Names</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                        <option value="Tata">
                        <option value="Datsun">
                        <option value="Renault">
                        <option value="Maruti Suzuki">
                        <option value="Hyundai">
                        <option value="Premier">
                        <option value="Toyota">
                        <option value="Nissan">
                        <option value="Volkswagen">
                        <option value="Ford">
                        <option value="Mahindra">
                        <option value="Fiat">
                        <option value="Honda">
                        <option value="Jeep">
                        <option value="Isuzu">
                        <option value="Skoda">
                        <option value="Audi">
                        <option value="Mercedes">
                        <option value="Dc">
                        <option value="Mini">
                        <option value="Volvo">
                        <option value="Jaguar">
                        <option value="Bmw">
                        <option value="Land Rover">
                        <option value="Porsche">
                        <option value="Lexus">
                        <option value="Maserati">
                        <option value="Lamborghini">
                        <option value="Bentley">
                        <option value="Ferrari">
                        <option value="Aston Martin">
                        <option value="Rolls-Royce">
                        <option value="Bugatti">
                        <option value="Bajaj">
                        <option value="Icml">
                        <option value="Force">
                        <option value="Mg">
                        <option value="Kia">
                        <option value="Mitsubishi">
                    </datalist>
                </div> -->
        <!-- </div> -->
        <!-- <div>
            <div class="row r1">
            <div class="dropdown ">
                <button class="btn btn-light dropdown-toggle text-secondary" type="button" data-toggle="dropdown">Fuel Type</button>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">CNG</a></li>
                    <li><a class="dropdown-item" href="#">Diesel</a></li>
                    <li><a class="dropdown-item" href="#">CNG + Petrol</a></li>
                    <li><a class="dropdown-item" href="#">Hybrid</a></li>
                    <li><a class="dropdown-item" href="#">Electric</a></li>
                </ul>
            </div>
        </div>
         <div class="col-md-1">
            <div class="dropdown ">
                <button class="btn btn-light dropdown-toggle text-secondary" type="button" data-toggle="dropdown">Body Type</button>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Hatchback</a></li>
                    <li><a class="dropdown-item" href="#">MPV</a></li>
                    <li><a class="dropdown-item" href="#">MUV</a></li>
                    <li><a class="dropdown-item" href="#">SUV</a></li>
                    <li><a class="dropdown-item" href="#">Sedan</a></li>
                    <li><a class="dropdown-item" href="#">Crossover</a></li>
                    <li><a class="dropdown-item" href="#">Coupe</a></li>
                    <li><a class="dropdown-item" href="#">Convertible</a></li>
                    <li><a class="dropdown-item" href="#">Sports, Hatchback</a></li>
                    <li><a class="dropdown-item" href="#">Sedan, Coupe</a></li>
                    <li><a class="dropdown-item" href="#">Sports</a></li>
                    <li><a class="dropdown-item" href="#">SUV, Crossover</a></li>
                    <li><a class="dropdown-item" href="#">Sedan, Crossover</a></li>
                    <li><a class="dropdown-item" href="#">Sports, Convertible</a></li>
                    <li><a class="dropdown-item" href="#">Pick-up</a></li>
                    <li><a class="dropdown-item" href="#">Coupe, Convertible</a></li>
                </ul>
            </div>
        </div> -->
    </div>
    </div>

    <div class="container" id="result">
        <?php
        //making a dynamic table for result from the sql query
        $row_cnt = $result->num_rows;
        if ($row_cnt > 0) {
            echo "<table class='table table-striped text-light'>
                            <tr>
                            <b>
                                <th>S.No</th>
                                <th>No. of Points</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Variant</th>
                                <th>Ex-Showroom Price</th>
                                <th>Body Type</th>
                                <th>Milage in Km/L</th>
                                <th>Fuel Type</th>
                                <th>Power</th>
                                </b>
                            </tr>";
            // output data of each row
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
                                <td>" . $row["Fuel_Type"] . "</td>
                                <td>" . $row["Power"] . "</td>
                                </tr>";
                // ++$i;
            }
            echo "</table>";
        } else {
            echo "<b><h1 class='text-light'>No results found</h1></b";
        }
        ?>
    </div>
    </div>
    <!-- footer-->
    <!-- <footer class="container-fluid  bgs pt-2 pb-2 "> -->
    <!-- <footer class="container-fluid "> -->
    <div id="foot" style="width:100%">
        <div class="container">
            <!-- <img src="https://stimg.cardekho.com/pwa/img/Desktop-logo.svg" alt="Logo" class="p-2 "> -->
            <hr style="border-top:1px solid grey">
        </div>
        <center>
            <!-- <div class="col-sm-12"> -->
            <p class="text-light"><b>Made by Udit</b></p>
            <!-- <p><i class="fa-brands fa-facebook-f fa-2m p-2 text-info"></i> <i class="fa-brands fa-twitter fa-2m p-2 text-info"></i><i class="fa-brands fa-linkedin-in fa-2m p-2 text-info"></i></p> -->
            <!-- </div> -->
        </center>
    </div>
    <!-- </footer> -->
</body>

</html>
<?php
$conn->close();
?>