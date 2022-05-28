<?php
$title = "Car Data Analyser";
$bk_amt = "./";
require_once 'includes/header.php';
?>

<!-- form container-->
<div class="container-fluid" id="biggerdiv">
    <div class="container-fluid cont2">
        <h1 class="text-light ml-5 mr-5 pt-5 pl-5 pr-5"><b><i>Look for Cars</b></i></h1>
        <h2 class="text-light ml-5 mr-5 mb-5 pl-5 pr-5"><b><i>See cars List </b></i></h2>
        <div class="background">
            <form method="POST" action="getdata.php">
                <div class="container">
                    <table>
                        <tbody>
                            <tr></tr>
                            <td>
                                <div class="col-6">
                                    <div>
                                        <div>
                                            <select name="pricer" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                                <option selected value="Select Price Range">Select Price Range</option>
                                                <!-- <ul class=" dropdown-menu"> -->
                                                <li>
                                                    <a class="dropdown-item">
                                                        <option value="Select Price Range">None</option>
                                                    </a>
                                                </li>
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
                                                        <option value="5000000_10000000">50 lakhs-1 Crore</option>
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
                            </td>
                            <td>
                                <div class="col-6">
                                    <div>
                                        <div>
                                            <select name="make" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                                <option selected value="Company Names">Company Names</option>
                                                <div>
                                                    <li>
                                                        <a class="dropdown-item">
                                                            <option value="Company Names">None</option>
                                                        </a>
                                                    </li>
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
                            </tr>
                            <td>
                                <div class="col-6">
                                    <div>
                                        <div>
                                            <select name="Body_Type" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                                <option selected value="Body Type">Body Type</option>
                                                <li>
                                                    <a class="dropdown-item">
                                                        <option value="Body Type">None</option>
                                                    </a>
                                                </li>
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
                            </td>
                            <td>
                                <div class="col-6">
                                    <select name="Fuel_Type" class="btn btn-dark dropdown-toggle text-light form-select form-select-lg mb-3">
                                        <option selected value="Select Fuel Type">Select Fuel Type</option>
                                        <li>
                                            <a class="dropdown-item">
                                                <option value="Select Fuel Type">None</option>
                                            </a>
                                        </li>
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
                            </td>
                        </tbody>
                    </table>
                    <div class="col-6 ">
                        <div class="col-6 p-3">
                            <button class="btn btn-dark" type="submit" name="submit" data-toggle="collapse" data-target="#collapsibleNavbar">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br>
<?php
require_once 'includes/footer.php';
?>