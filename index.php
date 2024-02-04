<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Community Forge Club (CFC)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
 <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-light" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/photo3.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>CFC</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
    <a href="#aboutcommunityforgeclub" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT CFC</a> 
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 
    <a href="#collaborations" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COLLABORATIONS</a> 
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
    
  </div>
  <div class="w3-panel w3-large">
    <img src="photo/fb.jpg" style="width:10%;" class="w3-round">
 <img src="photo/ig.jpg" style="width:11%;" class="w3-round">
 <img src="photo/twitter.jpg" style="width:10%;" class="w3-round">
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Community Forge Club </b></h1>
      
  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/photo5.jpg" alt="Me" style="width:100%"></p>
    </div>
    
  <div id="aboutcommunityforgeclub" class="w3-container w3-padding-large" style="margin-bottom:32px">
     <h4><b>AboutCommunity Forge Club</b></h4>
    <p> A community club is a group of individuals united by shared interests or geographical areas. They have a defined mission, promoting inclusivity and engagement. They are led by elected leaders and committees, hold meetings, and provide facilities for gatherings. They contribute to social well-being through events, cultural activities, and community service initiatives. They also foster volunteerism, leadership development, and community identity.</p>
    <hr>


     <!-- Header -->
  <header id="committee">
    <h4><b>Community Forge Club Membership</b></h4>
    <!-- Progress bars / Skills -->
    <!-- Team Container -->
<div id="committee"class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR COMMITTEE</h2>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/photo8.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Shazleen Izzati</h3>
  <p>President</p>
</div>

<div class="w3-quarter">
  <img src="photo/photo7.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Zafran Zuhairi</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photo/photo10.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Shafiq Abdullah</h3>
  <p>Secretary</p>
</div>

<div class="w3-quarter">
  <img src="photo/photo11.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aminah Ghazali</h3>
  <p>Treasurer</p>
</div>

</div>
</div>

 <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
   <!-- Header -->
  <header id="membership">
  <p id="membership" align="center"><h3><b>Membership form for Community Forge Club 2024</b></h3></p>
   

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
        
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
           
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    </p>
    <hr>

    <!-- Header -->
  <header id="activity">
    <div id="activity" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3><b>Activities Community Forge Club (CFC)</b></h3></p>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
          
          </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
  </div>
<hr>
 <header id="collaborations">
  <p id="collaborations" align="center"><h3><b>Collaborations form for Community Forge Club 2024</b></h3></p>
    

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
       
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM club";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
          
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<!-- Header -->
  <header id="achievements">
<p id="achievements" align="center"><h3><b>Achievements Community Forge Club (CFC)</b></h3></p>
   <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="photo/photo12.jpg" alt="Sandwich" style="width:100%">
      <h3>Innovation and Creativity Award</h3>
      <p>Awarded to the members club that has shown exceptional creativity and innovation in organizing events or programs.</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo14.jpeg" alt="Steak" style="width:100%">
      <h3>Member of the Year Award</h3>
      <p>Awarded to an outstanding individual member who has made exceptional contributions to the community club throughout the year.</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo13.jpg" alt="Cherries" style="width:100%">
      <h3>Community Impact Award</h3>
      <p> Awarded to the members club that has demonstrated the most significant positive impact on the local community.</p>
    </div>
    <div class="w3-quarter">
      <img src="photo/photo15.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Collaboration Excellence Award</h3>
      <p>Awarded to a community club that has excelled in building partnerships and collaborations with other community organizations, businesses, or government agencies.</p>
    </div>
  </div>
  
  <!-- Header -->
  <header id="contact">
  <h2><b><p class="w3-text-black"><b>Contact Us for Community Forge Club (CFC)</b></h2>
 <br>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Contact Number</th>
   <th scope="col">Email</th>
          <th scope="col">Comment</th>
         
        </tr>
      </thead>
      <tbody>
  
        <?php
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>