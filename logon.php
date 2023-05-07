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
            <col width="10%">
            <col width="30%">
            <col width="50%">
            <col width="10%">
          </colgroup>
         
          <tbody>

              <?php
  $name = $_POST['name'];
  $contact = $_POST['contact'];

  //Database connection
  $conn = new mysqli('localhost','root','','flight_booking_db');
  if($conn->connect_error) {
    die("Failed to connect : ".$con->connect_error);
  } else {
    $stmt = $conn->prepare("select * from booked_flight where name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
      $data = $stmt_result->fetch_assoc();
      if($data['contact'] == $contact) {
        echo "<h2>Login Successfully..</h2>";
        header("location: tick\info.html"); 
      } else {
        echo "<h2>Invalid username or Password</h2>";
      }
    } else {

      echo "<h2>Invalid Username or Password</h2>";
    }
  }
?>

            <?php
              $airport = $conn->query("SELECT * FROM airport_list ");
              while($row = $airport->fetch_assoc()){
                $aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
              }
              $i=1;
              $qry = $conn->query("SELECT b.*,f.*,a.airlines,a.logo_path,b.id as bid FROM  booked_flight b inner join flight_list f on f.id = b.flight_id inner join airlines_list a on f.airline_id = a.id  order by b.id desc");
              while($row = $qry->fetch_assoc()):

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
                <div class="row">
               
                <div class="col-sm-6">
                <p>Airline :<b><?php echo $row['airlines'] ?></b></p><br>
                <p><small>Plane :<b><?php echo $row['plane_no'] ?></small></b></p><br>
                <p><small>Airline :<b><?php echo $row['airlines'] ?></small></b></p><br>
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
  background-color: skyblue;
  } 
</style>  
<div name="button" align="center" style="margin-top: 10%;">
            <button onclick="window.print()">Print Ticket</button>
        </div><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
</head>
<body>
    <?php
        include('admin/db_connect.php');

        if(!isset($_POST['name']))
            $name=null;
        else
            $name=$_POST['name'];
        $contact=$_POST['contact'];

        // validation
        if (empty($name) or empty($contact) or preg_match("/[a-z]/i",$contact)) {
            if(empty($name))
                echo '<p name="error">Please select your name</p>';
            if(empty($contact))
                echo '<p name="error">Please enter your roll number</p>';
            if(preg_match("/[a-z]/i",$contact))
                echo '<p name="error">Please enter valid roll number</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `name` FROM `booked_flight` WHERE `contact`='$contact' and `name`='$name'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `address`, `contact`, `seat` FROM `booked_flight` WHERE `contact`='$contact' and `name`='$name'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $address = $row['address'];
            $contact = $row['contact'];
            $seat = $row['seat'];
           
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }
    ?>

    <div name="container">
        <div name="details">
            <span>Name:</span> <?php echo $name ?> <br>
            <span>name:</span> <?php echo $name; ?> <br>
            <span>Roll No:</span> <?php echo $contact; ?> <br>
        </div>

        <div name="main">
            <div name="s1">
                <p>Subjects</p>
                <p>Paper 1</p>
                <p>Paper 2</p>
                
            </div>
            <div name="s2">
                <p>Marks</p>
                <?php echo '<p>'.$address.'</p>';?>
                <?php echo '<p>'.$contact.'</p>';?>
                <?php echo '<p>'.$seat.'</p>';?>
               
            </div>
        </div>

        <div name="result">
            
        </div>

        <div name="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>