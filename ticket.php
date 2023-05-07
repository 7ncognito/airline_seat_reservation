<?php include 'admin/db_connect.php' ?>
<div class="borders">
<div class="container-fluid">
  <div class="border">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <large class="card-title">
          <h2 align="center"><font color="red"><i><b>BCA Airlines</b></i></font></h2>
        </large>
        
      </div>
      <div class="card-body">
        <table class="table" border="1" id="flight-list" align="center">
          <colgroup>
            <col width="1%">
            <col width="3%">
            <col width="1%">
            <col width="1%">
          </colgroup>
         
          <tbody>
           <?php
              $airport = $conn->query("SELECT * FROM airport_list ");
              while($row = $airport->fetch_assoc()){
                $aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
              }
              $i=1;
              $qry = $conn->query("SELECT b.*,f.*,a.airlines,a.logo_path,b.id as bid FROM  booked_flight b inner join flight_list f on f.id = b.flight_id inner join airlines_list a on f.airline_id = a.id ");
              while($row = $qry->fetch_assoc()):

             ?>
             <tr>
              
              <td><?php echo $i++ ?></td>
              <td><div class="col-sm-4">
                  <img src="assets/img/<?php echo $row['logo_path'] ?>" alt="" class="btn-rounder badge-pill" style="width: 60%; height: 20%;">
                </div></td>
              <td width="5%">
                <p>Name :<b><?php echo $row['name'] ?></b></p><br>
                <p><small>Contact :<b><?php echo $row['contact'] ?></small></b></p><br>
                <p><small>Address :<b><?php echo $row['address'] ?></small></b></p><br>
                <p><small>Seat No :<b><?php echo $row['seat'] ?></small></b></p><br>
              </td>
              <td width="10%">
                <div class="row">
               
                <div class="col-sm-6">
                <p>Airline :<b><font color="red"><?php echo $row['airlines'] ?></font></b></p><br>
                <p><small>Plane :<b><?php echo $row['plane_no'] ?></small></b></p><br>
                
                <p><small>Location :<b><?php echo $aname[$row['departure_airport_id']].' ----> '.$aname[$row['arrival_airport_id']] ?></small></b></p><br>
                <p><small>Departure :<b><?php echo date('M d,Y h:i A',strtotime($row['departure_datetime'])) ?></small></b></p><br>
                <p><small>Arrival :<b><?php echo date('M d,Y h:i A',strtotime($row['arrival_datetime'])) ?></small></b></p>
                </div>
                </div>
              </td>
              

             </tr>


            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div></div>

<style>
  td p {
    margin:unset;
  }
  td img {
      width: 8vw;
      height: 12vh;
  }
  td{
    vertical-align: middle !important;
  }

  .borders {
     border: 2px solid red;
  border-radius: 5px;
  background-color: whitesmoke;
  } 
</style>  
<div name="button" align="center" style="margin-top: 10%;">
            <button onclick="window.print()">Print Ticket</button>
        </div>