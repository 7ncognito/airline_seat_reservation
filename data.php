
<?php
	$connect=mysqli_connect("localhost","root","","flight_booking_db") or die("Connection failed");
	$qry = $connect->query(SELECT .*, tags.*, tags_relation.*, 
FROM tags WHERE tags.slug = 'people' 
INNER JOIN tags_relation ON = tags_relation.tid = tags.id 
INNER JOIN photo ON photo.custom_id = tags_relation.pid
LIMIT 20  
ORDER BY photo.date DESC);
              while($row = $qry->fetch_assoc());


             ?>
             <tr>
              
              <td><?php echo $i++ ?></td>
              <td>
                <p>Name :<b><?php echo $row['name'] ?></b></p><br>
                <p><small>Contact :<b><?php echo $row['contact'] ?></small></b></p><br>
                <p><small>Address :<b><?php echo $row['address'] ?></small></b></p><br>
                <p><small>Seat No :<b><?php echo $row['seat'] ?></small></b></p><br>
              </td>
              <td>
              	 <p>Airline :<b><?php echo $row['airlines'] ?></b></p><br>
                <p><small>Plane :<b><?php echo $row['plane_no'] ?></small></b></p><br>
                <p><small>Airline :<b><?php echo $row['airlines'] ?></small></b></p><br>
                <p><small>Location :<b><?php echo $aname[$row['departure_airport_id']].' ----> '.$aname[$row['arrival_airport_id']] ?></small></b></p><br>
                <p><small>Departure :<b><?php echo date('M d,Y h:i A',strtotime($row['departure_datetime'])) ?></small></b></p><br>
                <p><small>Arrival :<b><?php echo date('M d,Y h:i A',strtotime($row['arrival_datetime'])) ?></small></b></p>
              <?php
          }
          
        ?>