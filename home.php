<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to <?php echo $_SESSION['setting_name']; ?></h3>
                        <hr class="divider my-4" />
                    <div class="col-md-12 mb-2 text-left">
                        <div class="card">
                            <div class="card-body">
                                <form id="manage-filter" action="index.php?page=flights" method="POST">
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label for="" class="control-label">From</label>
                                            <select name="departure_airport_id" id="departure_location" class="custom-select browser-default select2">
                                                <option value=""></option>
                                            <?php
                                                $airport = $conn->query("SELECT * FROM airport_list order by airport asc");
                                            while($row = $airport->fetch_assoc()):
                                            ?>
                                                <option value="<?php echo $row['id'] ?>" <?php echo isset($departure_airport_id) && $departure_airport_id == $row['id'] ? "selected" : '' ?>><?php echo $row['airport'] ?></option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="" class="control-label">To</label>
                                            <select name="arrival_airport_id" id="arrival_airport_id" class="custom-select browser-default select2">

                                                <option value=""></option>

                                            <?php
                                                $airport = $conn->query("SELECT * FROM airport_list order by airport asc");
                                            while($row = $airport->fetch_assoc()):
                                            ?>
                                                <option value="<?php echo $row['id'] ?>" <?php echo isset($arrival_airport_id) && $arrival_airport_id == $row['id'] ? "selected" : '' ?>><?php echo $row['airport'] ?></option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="" class="control-label">Departure Date</label>
                                            <input type="date" class="form-control input-sm datetimepicker2" name="date" autocomplete="off">
                                        </div>
                                        <div class="col-sm-3" id="rdate" style="display: none">
                                            <label for="" class="control-label">Return Date</label>
                                            <input type="date" class="form-control input-sm datetimepicker2" name="date_return" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-2 text-center">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="trip" id="onewway" value="1" checked>
                                              <label class="form-check-label" for="onewway">
                                                One-way
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="trip" id="rtrip" value="2">
                                              <label class="form-check-label" for="rtrip">
                                               Round Trip
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 offset-sm-5">
                                            <button class="btn btn-block btn-sm btn-primary" type="submit"><i class="fa fa-plane-departure"></i> Find Flights</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<h2 class="w3-center">visit</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img/kerala.jpg" style="width:100%">
  <img class="mySlides" src="img/port blair.jpg" style="width:100%">
  <img class="mySlides" src="img/Kolkata.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</body>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
        $('.select2').select2({
            placeholder:'Select Departure',
            width:'100%'
        })
        $('[name="trip"]').on("keypress change keyup",function(){
            if($(this).val() == 1){
                $('#rdate').hide()
            }else{
                $('#rdate').show()
            }
        })
    </script>
	
    </section>

