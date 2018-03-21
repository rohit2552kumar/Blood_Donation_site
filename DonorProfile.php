<?php
    
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Red Drop -- Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
      .navbar-custom {
      background-color: #ff3333;
      border-color: #ff1212;
      background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ff6666), to(#ff3333));
      background-image: -webkit-linear-gradient(top, #ff6666, 0%, #ff3333, 100%);
      background-image: -moz-linear-gradient(top, #ff6666 0%, #ff3333 100%);
      background-image: linear-gradient(to bottom, #ff6666 0%, #ff3333 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff6666', endColorstr='#ffff3333', GradientType=0);
                padding: 10px 0px;
        }
        .navbar-custom .navbar-brand {
          color: #ffffff;
        }
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-brand:focus {
          color: #e6e6e6;
          background-color: transparent;
        }
        .navbar-custom .navbar-text {
          color: #ffffff;
        }
        .navbar-custom .navbar-nav > li:last-child > a {
          border-right: 1px solid #ff1212;
        }
        .navbar-custom .navbar-nav > li > a {
          color: #ffffff;
          border-left: 1px solid #ff1212;
        }
        .navbar-custom .navbar-nav > li > a:hover,
        .navbar-custom .navbar-nav > li > a:focus {
          color: #c0c0c0;
          background-color: transparent;
        }
        .navbar-custom .navbar-nav > .active > a,
        .navbar-custom .navbar-nav > .active > a:hover,
        .navbar-custom .navbar-nav > .active > a:focus {
          color: #c0c0c0;
          background-color: #ff1212;
          background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ff1212), to(#ff4545));
          background-image: -webkit-linear-gradient(top, #ff1212, 0%, #ff4545, 100%);
          background-image: -moz-linear-gradient(top, #ff1212 0%, #ff4545 100%);
          background-image: linear-gradient(to bottom, #ff1212 0%, #ff4545 100%);
          background-repeat: repeat-x;
          filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff1212', endColorstr='#ffff4545', GradientType=0);
        }
        .navbar-custom .navbar-nav > .disabled > a,
        .navbar-custom .navbar-nav > .disabled > a:hover,
        .navbar-custom .navbar-nav > .disabled > a:focus {
          color: #cccccc;
          background-color: transparent;
        }
        .navbar-custom .navbar-toggle {
          border-color: #dddddd;
        }
        .navbar-custom .navbar-toggle:hover,
        .navbar-custom .navbar-toggle:focus {
          background-color: #dddddd;
        }
        .navbar-custom .navbar-toggle .icon-bar {
          background-color: #cccccc;
        }
        .navbar-custom .navbar-collapse,
        .navbar-custom .navbar-form {
          border-color: #ff0f0f;
        }
        .navbar-custom .navbar-nav > .dropdown > a:hover .caret,
        .navbar-custom .navbar-nav > .dropdown > a:focus .caret {
          border-top-color: #c0c0c0;
          border-bottom-color: #c0c0c0;
        }
        .navbar-custom .navbar-nav > .open > a,
        .navbar-custom .navbar-nav > .open > a:hover,
        .navbar-custom .navbar-nav > .open > a:focus {
          background-color: #ff1212;
          color: #c0c0c0;
        }
        .navbar-custom .navbar-nav > .open > a .caret,
        .navbar-custom .navbar-nav > .open > a:hover .caret,
        .navbar-custom .navbar-nav > .open > a:focus .caret {
          border-top-color: #c0c0c0;
          border-bottom-color: #c0c0c0;
        }
        .navbar-custom .navbar-nav > .dropdown > a .caret {
          border-top-color: #ffffff;
          border-bottom-color: #ffffff;
        }
        @media (max-width: 767) {
          .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
            color: #ffffff;
          }
          .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
          .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #c0c0c0;
            background-color: transparent;
          }
          .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
          .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
          .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #c0c0c0;
            background-color: #ff1212;
          }
          .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
          .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
          .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
            color: #cccccc;
            background-color: transparent;
          }
        }
        .navbar-custom .navbar-link {
          color: #ffffff;
        }
        .navbar-custom .navbar-link:hover {
          color: #c0c0c0;
        }
            
            
            body {
            padding-top: 70px;
          }
             
            .foot{
                    background-color: #d9d9d9;
                }
            
            
            .nav>li>a {
            padding-top: 15px;
            padding-bottom: 15px;
        }
            
            
            .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }
            
            .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
        }
            
         
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
    
</style>
      
      
      
      
    
</head>   
    
    
<body>
    
    <nav class="navbar navbar-custom navbar-fixed-top">
    
        <div class="container">
        
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
                
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<img src="logo1.JPG" style="padding: 0;" class="img-rounded img-responsive navbar">-->
                <a class="navbar-brand" href="#"><span style="color: #FFFFFF;">Red Drop</span></a>
            </div>
            
            
            <div class="collapse navbar-collapse" id="navCollapse">
            
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="BecomeADonor.php">Become a Donor</a></li>

                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile<span class="caret"></span></a>
                    
                            <ul class="dropdown-menu">

                                <li><a href="DonorProfileChange1.php" >Edit Profile</a></li>
                                <li><a href="Page.php" >Log Out</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    
    
    
    <div class="conatiner">
            <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="active"><a class="btn btn-success" data-toggle="tab" href="#Home">Home</a></li>
            <li><a data-toggle="tab" href="#BloodTips" class="btn btn-success">Blood Tips</a></li>
            <li><a data-toggle="tab" href="#Hospitals" class="btn btn-success">Hospitals</a></li>
            <li><a data-toggle="tab" href="#AboutUs" class="btn btn-success">About Us</a></li>
            <li><a data-toggle="tab" href="#ContactUs" class="btn btn-success">Contact Us</a></li>
          
          </ul>
    </div>
      
    <div class="tab-content">
    
<div id="Home" class="tab-pane fade in active">
        
        <main role="main">

             <div id="myCarousel" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <div class="numbertext">1 / 3</div>
            <img  src="121.jpg" alt="First slide">
          </div>
          <div class="item">
              <div class="numbertext">2 / 3</div>
            <img  src="122.jpg" alt="Second slide">
        
          </div>
          <div class="item">
              <div class="numbertext">3 / 3</div>
            <img  src="123.jpg" alt="Third slide">
          </div>
        </div>
                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" area-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" area-hidden="true"></span>
                      <span class="sr-only">Next</span>
                </a>
       </div>
                    
                    
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 container">
            <div class="featurette-heading jumbotron" style="background: transparent"><h2>"Love is much like a wild rose, beautiful and calm, but willing to draw blood in its defense"</h2></div>
              <div class="jumbotron">
            <p class="lead">Blood is a cleansing and sanctifying thing, and the nation that regards it as the final horror has lost its manhood … there are many things more horrible than bloodshed, and slavery is one of them!</p></div>
          </div>
          <div class="col-md-5">
            <img class="img-circle person featurette-image img-fluid mx-auto" style="border-radius: 50%;" src="img/feat1.jpg" height="400" width="500" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto img-circle person" src="img/feat2.jpg" height="600" width="500" alt="Generic placeholder image">
            </div>
            
          <div class="col-md-7 order-md-2">
              
            <div class="featurette-heading jumbotron text-center" style="background:  transparent; font-size: 50px;">
                Become Someone's Hero
            </div>
              <h3>
                    <span class="text-muted">See for yourself.</span>
              </h3>
            <br><br><br>
              <div class="jumbotron">
            <p class="lead text-center">Do You Feel You Don’T Have Much To Offer? You Have The Most Precious Resource Of All: The Ability To Save A Life By Donating Blood! Help Share This Invaluable Gift With Someone In Need
            </p></div>
        
          </div>
          
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <div class="featurette-heading jumbotron" style="background:  transparent"><h1 class="text-center">Part of Someone</h1></div>
              
            <div class="jumbotron">
            <p class="lead text-center">The blood you donate gives someone another chance at life. One day that someone may be a close relative, a friend, a loved one or even you.</p></div>
          </div>
          <div class="col-md-5 pull-right">
            <img class="featurette-image img-fluid mx-auto" src="img/feat3.jpg" style="border-radius: 50%;" height="400" width="450" alt="Generic placeholder image">
          </div>
        </div>
                    
                
                    
</main>
            
            

        </div>
        

<div id="Hospitals" class="tab-pane fade">
 
    <div class="topdiv" style="margin-top:60px; padding-bottom: 20px;"></div>
    
    
    <div class="container"><br><br><br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>HospitalID</th>
            <th>Hospital Name</th>
            <th>Blood Type</th>
            <th>Address</th>
            <th>Phone No. </th>
            <th>E-mail</th>
            
          </tr>
        </thead>
          <tbody>
            <?php
             $servername = "phpmyadmin";
                        $username = "username";
                        $password = "password";
                        $dbname = "database_name";

            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT * FROM Hospital,BloodBank where HospitalID = H_ID";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $i=1;
                while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                            <th scope="row"><?php echo $i ?></th>
                                  <td><?php echo $row['HospitalID']; ?></td> 
                                  <td><?php echo $row['HospitalName']; ?></td> 
                                  <td><?php echo $row['bloodtype']; ?></td>
                                  <td><?php echo $row['HospitalAddress']; ?></td>
                                  <td><?php echo $row['HospitalMobile']; ?></td>
                                  <td><?php echo $row['Email']; ?></td>
                                 
                                </tr>
                <?php
                $i=$i+1;
              }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            </tbody>
       </table>
       <br><br><br><br><br><br><br><br><br><br>
    </div>

    
</div>
        
      
<div id="AboutUs" class="tab-pane fade">


    <div class="topdiv" style="margin-top:60px; padding-bottom: 20px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6"><h2>About Us</h2><br>
            <div>
          <p>'One Drop' is the product resulted out of the initiative called 'DBMS Project' from PDPM IIITDM Jabalpur. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.
          </p></div>
          <p>
          Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md"><img src="img/about.jpg" alt="One Drop" height="400" width="400"></div>
      </div>
    </div>

</div>
        

        
<div id="ContactUs" class="tab-pane fade">
            
        <div class="topdiv" style="margin-top:60px;"></div>



        <div class="container marketing">

            <div class="row">
              <div class="col-lg-1" ></div>
              <div class="col-lg-4">
                <img class="rounded-circle" src="img/hospital.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Jabalpur City Hospital</h2>
                <h5>
                <p>Contact No.</p>
                <p>9779989499</p>
                <p>Address-</p>
                <p>
                Sadar Bazaar Main Road,Jabalpur  
                </p></h5>
          
              </div>
              <div class="col-lg-2" ></div>
              <div class="col-lg-4">
                <img class="rounded-circle" src="img/bank.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Jabalpur Blood Bank</h2><h5>
                <p>Contact No.</p>
                <p>9789939199</p>
                <p>Address-</p>
                <p>
                Sadar Bazaar Main Road,Jabalpur  
                </p></h5>
              </div>
            </div>
        </div>
                
         <br><br><br>       
</div>
        
        
        
        
<div id="BloodTips" class="tab-pane fade">
            
            
            
            <div class="modal fade" id="Hlogin" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">  
         <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">hey</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                
            </div>
            <div class="modal-body">
                <div class="container">
                        <br>
                    <form class="form-inline">
                    <div class="form-group"> 
                        <div style="padding-left:135px;">
                            <input type="text" class="form-control" name="Husername" id="Husername" placeholder="Username">
                        </div>
                    </div>
                        <br><br>
                    <div class="form-group">
                        <div style="padding-left:135px;">
                            <input type="password" class="form-control" name="Hpwd" id="Hpwd" placeholder="Password">
                        </div>
                    </div>
                    
                    </form>
                    <br><br>
                    
                </div>
                <div class="modal-footer">
                    <button class="btn-primary btn-lg" type="button">Proceed</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>











<div class="topdiv" style="margin-top:20px; padding-bottom: 20px;"></div>



<div class="container">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        

          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="well" data-toggle="collapse" data-target="#first" >Blood Donation<span class="glyphicon glyphicon-plus" style="float: right"></span> </div>
                </a>
              </h5>
            </div>


         
            <div id="first" class="collapse jumbotron">
              <p>Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:</p> <ul> <li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution. </li> <li>A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form. </li> <li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor. </li> <li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood. </li> <li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided. </li> <li>Blood will be separated into components within eight hours of donation </li> <li>The blood will then be taken to the laboratory for testing. </li> <li>Once found safe, it will be kept in special storage and released when required. </li> <li>The blood is now ready to be taken to the hospital, to save lives.</li> </ul> 
            </div>
            </div>
          </div>
        </div>


      <div id="accordion" role="tablist" aria-multiselectable="true" class="container">
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="well" data-toggle="collapse" data-target="#second" >Blood Group<span class="glyphicon glyphicon-plus" style="float: right"></span> </div>
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div id="second" class="card-block jumbotron">
              <p>Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.</p> <p>Most humans are in the ABO blood group. The ABO group has four categories namely <br> 1) A group 2) B group 3) O group and 4) AB group<br>  In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.</p> <p>Thus blood group of any human being will mainly fall in any one of the following groups. <br>  A positive or A negative <br> B positive or B negative <br> O positive or O negative <br> AB positive or AB negative. </p> </div>
            </div>
          </div>
        </div>

      <div id="accordion" role="tablist" aria-multiselectable="true" class="container">
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="well" data-toggle="collapse" data-target="#third" >Universal Donor and Recipients<span class="glyphicon glyphicon-plus" style="float: right"></span> </div>
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div id="third" class="card-block jumbotron">
              <p>The most common blood type is O, followed by type A. </p> <p>Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p> <p>However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</p> </div>
            </div>
          </div>
        </div>


      <div id="accordion" role="tablist" aria-multiselectable="true" class="container">
        <div class="card">
          <div class="card-header" role="tab" id="headingForth">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseForth" aria-expanded="false" aria-controls="collapseForth">
                <div class="well" data-toggle="collapse" data-target="#fourth" >Do Donate Bood, only if you satisfy all of the following conditions<span class="glyphicon glyphicon-plus" style="float: right"></span> </div>
              </a>
            </h5>
          </div>
          <div id="collapseForth" class="collapse" role="tabpanel" aria-labelledby="headingForth">
            <div id="fourth" class="card-block jumbotron">
              <tbody>
                <tr> 
                  <td valign="top"><img src="img/do.png" alt="-" style="max-width:10px; max-height: 10px" width="10" height="10"></td>
                   <td valign="top">You are between age group of 18-60 years.</td><br> </tr> 
                   <tr> <td valign="top"><img src="img/do.png" alt="-" style="max-width:10px; max-height: 10px" width="10" height="10"></td>
                    <td valign="top">Your weight is 45 kgs or more.</td> </tr> <br>
                    <tr> <td valign="top"><img src="img/do.png" alt="-" style="max-width:10px; max-height: 10px" width="10" height="10"></td> 
                      <td valign="top">Your hemoglobin is 12.5 gm% minimum.</td> </tr><br>
                       <tr> <td valign="top"><img src="img/do.png" alt="-" style="max-width:10px; max-height: 10px" width="10" height="10"></td>
                        <td valign="top">Your last blood donation was 3 or more months earlier.</td> 
                      </tr> <br><tr> <td valign="top"><img src="img/do.png" alt="-" style="max-width:10px; max-height: 10px" width="10" height="10"></td>
                       <td valign="top">You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</td> </tr> 
                     </tbody>
            </div>
          </div>
        </div>
      </div>


      <div id="accordion" role="tablist" aria-multiselectable="true" class="container">
        <div class="card">
          <div class="card-header" role="tab" id="headingFive">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <div class="well" data-toggle="collapse" data-target="#fifth" >Do not Donate Bood, only if you satisfy all of the following conditions<span class="glyphicon glyphicon-plus" style="float: right"></span> </div>
              </a>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
            <div id="fifth" class="card-block jumbotron">
              <table border="0" cellspacing="0" cellpadding="5"> <tbody><tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Cold / fever in the past 1 week.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Under treatment with antibiotics or any other medication.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Major surgery in the last 6 months.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Vaccination in the last 24 hours.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Had fainting attacks during last donation.</td> </tr> <tr> <td valign="top"><img src="img/dont.png " alt="-" width="10" height="10"></td> <td valign="top">Have regularly received treatment with blood products.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Shared a needle to inject drugs/ have history of drug addiction. </td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Had sexual relations with different partners or with a high risk individual.</td> </tr> <tr> <td valign="top"><img src="img/dont.png" alt="-" width="10" height="10"></td> <td valign="top">Been tested positive for antibodies to HIV.</td> </tr> </tbody></table> </div>
            </div>
          </div>
        </div>



      <div id="accordion" role="tablist" aria-multiselectable="true" class="container">
        <div class="card">
          <div class="card-header" role="tab" id="headingSix">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <div class="well" data-toggle="collapse" data-target="#sixth" >A Healthy Donor<span class="glyphicon glyphicon-plus" style="float: right"></span> </div>
              </a>
            </h5>
          </div>
          <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
            <div id="sixth" class="card-block jumbotron">
              <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p> <table border="0" cellpadding="5" cellspacing="0" class="ULtable"> <tbody><tr>  <td>--- Low fat foods</td> </tr> <tr>  <td>--- Iron rich foods</td> </tr> </tbody></table> </div>
            </div>
          </div>
        </div>
<br> <br> <br>
</div>

        
        
        
</div>
    

<br><br><br>
<!-- FOOTER -->
            
      <div class="divider"></div>
      <div class="foot">
        <footer class="page-footer center-on-small-only">
          <!--Footer Links-->
          
            <div class="container-fluid">
                <div class="row">
                    <!--First column-->
                    <div class="col-md-3"></div>
                    
                    <div class="col-md-4">
                        <h3 class="title">Red Drop</h3>
                        <p>A life may depend on a gesture from you, a bottle of Blood.</p>
                    </div><br>
                    <div class="col-md">
                        
                    </div>
                </div>
            </div>
            <br>
            <div class="footer-copyright">
                <div class="container-fluid text-center">
                    © 2016 Copyright: <a href="#"> RedDrop </a>

                </div>
            </div>
            <br><br>
        </footer>
      
      </div>


</body>
</html>
