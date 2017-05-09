<?php
              $con=mysqli_connect("localhost","root","","smart_traffic_light");
              // Check connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($con,"SELECT* FROM traffic_data");

              echo "<table>
              <tr>
              <th>ID</th>
              <th>Region</th>
              <th>Conditions</th>
              <th>Traffic</th>
              <th>Duration</th></tr>";
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