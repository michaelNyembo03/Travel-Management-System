<?php session_start();
if(!isset($_SESSION["username"]))
{
        header("Location:blockedBooking.php");
        $_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>

<!DOCTYPE html>

<html lang="en">
    
    <!-- HEAD TAG STARTS -->

    <head>
    
        <meta charset="UTF-8">
        <meta name="author" content="Michael Nyembo Chungu">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="images/favicon.ico">
    
        <title>Cabs</title>
    
        <link href="css/main.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-select.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-select.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/moment-with-locales.js"></script>
        <script src="js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript">
        
            $(function () {
                
                $('#datetimepicker4').datetimepicker({
                    format: 'L',
                    locale: 'en-gb',
                    useCurrent: false,
                    minDate: moment()
                });
            });
            
            $(function () {
                
                $('#datetimepicker7').datetimepicker({
                    format: 'LT',
                    locale: 'en-gb',
                    minDate: moment()
                });
            });
        
        </script>
        
    </head>
    
    <!-- HEAD TAG ENDS -->
    
    <!-- BODY TAG STARTS -->
    
    <body>
    
        <div class="container-fluid">
        
            <div class="cabs col-sm-12">
            
            <!-- HEADER SECTION STARTS -->
                
                <div class="col-sm-12">
                    
                    <div class="header">
                    
                        <?php include("common/headerTransparentLoggedIn.php"); ?>
                    
                        <div class="col-sm-12">
                        
                        <div class="menu text-center">
                            
                            <ul>
                                <a href="hotels.php"><li>Hotels</li></a>
                                <a href="flights.php"><li>Flights</li></a>
                                <a href="trains.php"><li>Trains</li></a>
                                <a href="bus.php"><li>Buses</li></a>
                                <li class="selected">Cabs</li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    
                    </div> <!-- header -->
                
                </div> <!-- col-sm-12 -->
                
            <!-- HEADER SECTION ENDS -->
                
                
                
            <!-- CAB SEARCH SECTION STARTS -->
                
                <div class="col-sm-12">
                    
                    <div class="search">
                    
                        <div class="content">
                        
                        <form action="booking.php" method="POST">
                        
                            <div class="col-sm-6">          
                            <div class="form-group">
                                 <label for="originBus">Origin:<p> </p></label>
     
                                    <select id= "originBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin City" name="originCity" required>
                                        <option value="Bukavu" data-tokens="BKV Bukavu">Bukavu</option>
                                        <option value="Kolwezi" data-tokens="KZI Kolwezi">Kolwezi</option>
                                        <option value="Kasai" data-tokens="KS Kasai">Kasai</option>
                                        <option value="Lubumbashi" data-tokens="L'SHI Lubumbashi">Lubumbashi</option>
                                        <option value="Nzilo" data-tokens="NZL Nzilo">Nzilo</option>
                                        <option value="Goma" data-tokens="GMA Goma">Goma</option>
                                        <option value="Nortehn-Kivu" data-tokens="NKV Nortehn-Kivu">Nortehn-Kivu</option>
                                        <option value="Matadi" data-tokens="MTD Matadi">Matadi</option>
                                        <option value="Kananga" data-tokens="KNG Kananga">Kananga</option>
                                        <option value="Lubudi" data-tokens="LBD Lubudi">Lubudi</option>
                                        <option value="Kalemi" data-tokens="KLM Kalemi">Kalemi</option>
                                        <option value="Fungurume"" data-tokens="FG Fungurume">Fungurume"</option>
                                    </select>
                            </div>
                        </div>
                        
                            <div class="col-sm-6">          
                            <div class="form-group">
                                 <label for="destinationBus">Destination:<p> </p></label>
     
                                    <select id= "destinationBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination City" name="destinationCity" required>
                                      <option value="Bukavu" data-tokens="BKV Bukavu">Bukavu</option>
                                        <option value="Kolwezi" data-tokens="KZI Kolwezi">Kolwezi</option>
                                        <option value="Kasai" data-tokens="KS Kasai">Kasai</option>
                                        <option value="Lubumbashi" data-tokens="L'SHI Lubumbashi">Lubumbashi</option>
                                        <option value="Nzilo" data-tokens="NZL Nzilo">Nzilo</option>
                                        <option value="Goma" data-tokens="GMA Goma">Goma</option>
                                        <option value="Nortehn-Kivu" data-tokens="NKV Nortehn-Kivu">Nortehn-Kivu</option>
                                        <option value="Matadi" data-tokens="MTD Matadi">Matadi</option>
                                        <option value="Kananga" data-tokens="KNG Kananga">Kananga</option>
                                        <option value="Lubudi" data-tokens="LBD Lubudi">Lubudi</option>
                                        <option value="Kalemi" data-tokens="KLM Kalemi">Kalemi</option>
                                        <option value="Fungurume"" data-tokens="FG Fungurume">Fungurume"</option>
                                    </select>
                            </div>
                        </div>
                        
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="datetime4">Select Pickup Date:<p> </p></label>
                                    <div class="input-group date" id="datetimepicker4">
                                        <input id="datetime4" type="text" class="inputDate form-control" placeholder="Select Date" name="date" required/>
                                        <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="datetime7">Select Pickup Time:<p> </p></label>
                                    <div class="input-group date" id="datetimepicker7">
                                        <input id="datetime7" type="text" class="inputDate form-control" placeholder="Select Time" name="time" required/>
                                        <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                            <label for="carType">Type of car: <p> </p></label>
                                <div class="form-group">
                                    <select id= "carType" class="selectpicker form-control" data-size="5" title="Select car type" name="carType" required>
                                        <option data-subtext="Mahindra Scorpio  |  Maruti Suzuki Vitara Breeza  |  Toyota Innova  |  Toyota Fortuner" value="SUV">SUV</option>
                                        <option data-subtext="Maruti Suzuki Ciaz  |  Honda City  |  Toyota Etios  |  Maruti Suzuki Swift Dzire" value="Sedan">Sedan</option>
                                        <option data-subtext="Maruti Suzuki Alto 800  |  Hyundai i10  |  Maruti Suzuki WagonR  |  Honda Brio" value="Hatchback">Hatchback</option>  
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-sm-12 text-center">
                        
                                <input type="submit" class="button" name="searchCabs" value="Search Cabs">
                            
                            </div>
                            
                            <input type="hidden" name="modeHidden" value="cabs" />

                        </form>
                        
                        </div> <!-- content -->
                        
                    </div> <!-- search -->
                    
                </div>
            
            <!-- CAB SEARCH SECTION ENDS -->
                
            </div> <!-- trains -->  
            
            
            
            <!-- POPULAR CABS SECTION STARTS -->
            
                <!-- <div class="col-sm-12"> -->
                    
                <div class="popularCabs col-sm-12">
                    
                    <div class="heading">
                    
                            Cars Available
                    
                    </div>
                    
                    <div class="bg">
                    
                        <!-- replace listItems below by PHP loops -->
                        
                    <div class="col-sm-4">
                        
                                <div class="listItem">
                                
                                    <div class="imageContainer text-center">
                                        
                                        <img src="images/cabs/carTypes/hatchback.jpg" alt="Hatchback Cars">
                                        
                                    </div>
                                    
                                    <div class="headings">
                                        
                                        Hatchback
                                        
                                    </div>
                                    
                                    <div class="info">
                                        
                                        Fc 5.5/km and Fc 1.25/min 
                                        
                                    </div>
                                    
                                    <div class="models">
                                    
                                        <ul class="text-center">
                                            
                                            <li class="carModels">Alto 800</li>
                                            <li class="carModels">Alto K10</li>
                                            <li class="carModels">WagonR</li>
                                            <li class="carModels">Swift</li>
                                            <li class="carModels">Brio</li>
                                            <li class="carModels">i10</li>
                                            <li class="carModels">i20</li>
                                            
                                        </ul>
                                        
                                    </div>
                                    
                                </div> <!-- listItem 1 -->
                            
                            </div> <!-- col-sm-4 -->
                            
                    <div class="col-sm-4">
                        
                                <div class="listItem">
                                
                                    <div class="imageContainer text-center">
                                        
                                        <img src="images/cabs/carTypes/sedan.jpg" alt="Sedan Cars">
                                        
                                    </div>
                                    
                                    <div class="headings">
                                        
                                        Sedan
                                        
                                    </div>
                                    
                                    <div class="info">
                                        
                                        Fc 8.75/km and Fc 2/min 
                                        
                                    </div>
                                    
                                    <div class="models">
                                    
                                        <ul class="text-center">
                                            
                                            <li class="carModels">Swift Dzire</li>
                                            <li class="carModels">Verna</li>
                                            <li class="carModels">Ciaz</li>
                                            <li class="carModels">City</li>
                                            <li class="carModels">Civic</li>
                                            <li class="carModels">Xcent</li>
                                            <li class="carModels">Zest</li>
                                            
                                        </ul>
                                        
                                    </div>
                                    
                                </div> <!-- listItem 1 -->
                            
                            </div> <!-- col-sm-4 -->
                            
                    <div class="col-sm-4">
                        
                                <div class="listItem">
                                
                                    <div class="imageContainer text-center">
                                        
                                        <img src="images/cabs/carTypes/suv.jpg" alt="SUV Cars">
                                        
                                    </div>
                                    
                                    <div class="headings">
                                        
                                            SUV
                                        
                                    </div>
                                    
                                    <div class="info">
                                        
                                        Fc 13.25/km and Fc 3.75/min 
                                        
                                    </div>
                                    
                                    <div class="models">
                                    
                                        <ul class="text-center">
                                            
                                            <li class="carModels">Tucson</li>
                                            <li class="carModels">Scorpio</li>
                                            <li class="carModels">Creta</li>
                                            <li class="carModels">Fortuner</li>
                                            <li class="carModels">Vitara Breeza</li>
                                            <li class="carModels">Endeavor</li>
                                            <li class="carModels">Innova</li>
                                            
                                        </ul>
                                        
                                    </div>
                                    
                                </div> <!-- listItem 1 -->
                            
                            </div> <!-- col-sm-4 -->                        
                        
                    </div> <!-- bg -->
                        
                </div> <!-- popularBus -->
                    
                <!-- </div> -->
                
            <!-- POPULAR CABS SECTION ENDS -->
            
            
            
            <!-- FOOTER SECTION STARTS -->
                    
            <div class="footerMod col-sm-12">
                    
                    <div class="col-sm-4">
                        
                        <div class="footerHeading">
                            Contact Us
                        </div>
                            
                        <div class="footerText">
                            1st floor, Bomonti 2, <br> Haspolat, Northen Cyprus.
                        </div>
                
                        <div class="footerText">
                            E-mail: Cong@traveCongo.com
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-4">
                    
                        <div class="footerHeading">
                            Made with
                        </div>
                        
                        <div class="fa fa-heart"></div>
                        
                        <div class="footerHeading">
                            in Drc
                        </div>
                        
                        
                        
                    </div>
                    
                    <div class="col-sm-4">
                    
                        <div class="footerHeading">
                            Social Links
                        </div>
                        
                        <div class="socialLinks">
                        
                            <div class="fb">
                                facebook.com/CongoTravel
                            </div>
                        
                            <div class="gp">
                                plus.google.com/CongoTravel
                            </div>
                        
                            <div class="tw">
                                twitter.com/CongoTravel
                            </div>
                        
                            <div class="in">
                                linkedin.com/CongoTravel
                            </div>
                        
                        </div> <!-- social links -->
                        
                    </div>
                        
                    <div class="col-sm-12">
                    <div class="copyrightContainer">
                        <div class="copyright">
                        Copyright &copy; 2021 MichaelNyemboNb Software_Dev.
                        </div>
                    </div>
                    </div>
                            
                </div> <!-- footer -->
                
            <!-- FOOTER SECTION ENDS -->
            
            
        
        </div> <!-- container-fluid -->
    
    </body>
    
    <!-- BODY TAG ENDS -->
    
</html>

