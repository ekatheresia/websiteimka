<!DOCTYPE html>
<html>
<title>Smart Traffic Light</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
<style>
body {font-family: "Dosis", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Raleway";
    letter-spacing: 5px;
}
.w3-raleway {
    font-family: "Raleway", serif;
}
#map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card-2" style="letter-spacing:4px;">
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right">
      <a href="#home" class="w3-bar-item w3-button w3-raleway">Maps</a>
      <a href="#traffic-data" class="w3-bar-item w3-button w3-raleway">Traffic Data</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:250px" id="home">
  <img class="w3-image" src="img/Header.png" alt="Header-Image" width="1600" height="400">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
  </div>
   <h1 class="w3-center">Maps</h1> 
<!-- Maps -->
<div id="map">
  <script type="text/javascript">
    function initMap() {
    var locations = [
      ['Traffic Light Dago 04', -6.899046, 107.612876, 4],
      ['Traffic Light Dago 03', -6.898778, 107.612886, 3],
      ['Traffic Light Dago 02', -6.898849, 107.612688, 2],
      ['Traffic Light Dago 01', -6.899109, 107.612680, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 20,
      center: new google.maps.LatLng(-6.898940, 107.612776),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyC61abLPeV6t97nf461cTKMQT5Wb0orJZA&callback=initMap">
    </script>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

<!-- Traffic Data -->
  <div class="w3-container w3-padding-64" id="traffic-data">
    <h1 class="w3-center">Traffic Data</h1>
              <?php
              $con=mysqli_connect("mysql3.gear.host","websiteimka","iloveJESUS<3","websiteimka");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($con,"SELECT* FROM traffic_data");

              echo '<table class="w3-table-all">
              <tr class="w3-light-blue">
              <th>ID</th>
              <th>Region</th>
              <th>Conditions</th>
              <th>Traffic</th>
              <th>Duration</th></tr>';
              while($row = mysqli_fetch_array($result))
              {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['region'] . "</td>";
              echo "<td>" . $row['tl_condition'] . "</td>";
              echo "<td>" . $row['traffic'] . "</td>";
              echo "<td>" . $row['duration'] . "</td>";
              echo "</tr>";
              }
              echo "</table>";

              mysqli_close($con);
              ?>
  </div>

  <hr>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Smart Traffic Light | May 2017. Fully made with love by Alif, There and Fanni, with love.</p>
</footer>

</body>
</html>
