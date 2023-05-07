<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SELECT YOUR SEAT</title>
 

    <style>
    *, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}

.exit {
  position: relative;
  height: 50px;
}
.exit:before, .exit:after {
  content: "EXIT";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 2px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: green;
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 5px;
  position: relative;
}
.seat:nth-child(3) {
  margin-right: 14.28571428571429%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: #bada55;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: #dddddd;
  text-indent: -9999px;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 4px 0;
  background: #F42536;
  border-radius: 5px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 75%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}
.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}

    </style>
</head>
<body>
   


    <div class="plane">
        <h3 align="center">SELECT YOUR SEAT</h3>
      <div class="fuselage">
        
      </div>
      <form action="#" method="post">
      <table cellspacing="2" align="center" cellpadding="8" border="0">
<tr>
<td>Passenger Name </td>
<td><input type="text" placeholder="Passenger Name" id="name" name="name" required style="width: 100%" /></td>
</tr>
</table>
      <ol class="cabin fuselage">

        <li class="row row--1">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="1A" name="area[]" value="1A" />
            
              <label for="1A">1A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1B" name="area[]" value="1B" />
              <label for="1B">1B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1C" name="area[]" value="1C" />
              <label for="1C">1C</label>
            </li>
            <li class="seat">
              <input type="checkbox" disabled id="1D" value="1D" />
              <label for="1D">Occupied</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1E" name="area[]" value="1E" />
              <label for="1E">1E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1F" name="area[]" value="1F" />
              <label for="1F">1F</label>
            </li>
          </ol>
        </li>
        <li class="row row--2">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="2A" name="area[]" value="2A" />
              <label for="2A">2A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2B" name="area[]" value="2B" />
              <label for="2B">2B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2C" name="area[]" value="2C" />
              <label for="2C">2C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2D" name="area[]" value="2D" />
              <label for="2D">2D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2E" name="area[]" value="2E" />
              <label for="2E">2E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2F" name="area[]" value="2F" />
              <label for="2F">2F</label>
            </li>
          </ol>
        </li>
        <li class="row row--3">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="3A" name="area[]" value="3A" />
              <label for="3A">3A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3B" name="area[]" value="3B" />
              <label for="3B">3B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3C" name="area[]" value="3C" />
              <label for="3C">3C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3D" name="area[]" value="3D" />
              <label for="3D">3D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3E" name="area[]" value="3E" />
              <label for="3E">3E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3F" name="area[]" value="3F" />
              <label for="3F">3F</label>
            </li>
          </ol>
        </li>
        <li class="row row--4">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="4A" name="area[]" value="4A" />
              <label for="4A">4A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4B" name="area[]" value="4B" />
              <label for="4B">4B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4C" name="area[]" value="4C" />
              <label for="4C">4C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4D" name="area[]" value="4D" />
              <label for="4D">4D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4E" name="area[]" value="4E" />
              <label for="4E">4E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4F" name="area[]" value="4F" />
              <label for="4F">4F</label>
            </li>
          </ol>
        </li>
        <li class="row row--5">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="5A" name="area[]" value="5A" />
              <label for="5A">5A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5B" name="area[]" value="5B" />
              <label for="5B">5B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5C" name="area[]" value="5C" />
              <label for="5C">5C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5D" name="area[]" value="5D" />
              <label for="5D">5D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5E" name="area[]" value="5E" />
              <label for="5E">5E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5F" name="area[]" value="5F" />
              <label for="5F">5F</label>
            </li>
          </ol>
        </li>
        <li class="row row--6">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="6A" name="area[]" value="6A" />
              <label for="6A">6A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6B" name="area[]" value="6B" />
              <label for="6B">6B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6C" name="area[]" value="6C" />
              <label for="6C">6C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6D" name="area[]" value="6D" />
              <label for="6D">6D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6E" name="area[]" value="6E" />
              <label for="6E">6E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6F" name="area[]" value="6F" />
              <label for="6F">6F</label>
            </li>
          </ol>
        </li>
        <li class="row row--7">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="7A" name="area[]" value="7A" />
              <label for="7A">7A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7B" name="area[]" value="7B" />
              <label for="7B">7B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7C" name="area[]" value="7C" />
              <label for="7C">7C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7D" name="area[]" value="7D" />
              <label for="7D">7D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7E" name="area[]" value="7E" />
              <label for="7E">7E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7F" name="area[]" value="7F" />
              <label for="7F">7F</label>
            </li>
          </ol>
        </li>
        <li class="row row--8">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="8A" name="area[]" value="8A" />
              <label for="8A">8A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8B" name="area[]" value="8B" />
              <label for="8B">8B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8C" name="area[]" value="8C" />
              <label for="8C">8C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8D" name="area[]" value="8D" />
              <label for="8D">8D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8E" name="area[]" value="8E" />
              <label for="8E">8E</label>
            </li>
            <li class="seat"> 
              <input type="checkbox" id="8F" name="area[]" value="8F" />
              <label for="8F">8F</label>
            </li>
          </ol>
        </li>
        <li class="row row--9">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="9A" name="area[]" value="9A" />
              <label for="9A">9A</label> 
            </li>
            <li class="seat">
              <input type="checkbox" id="9B" name="area[]" value="9B" />
              <label for="9B">9B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9C" name="area[]" value="9C" />
              <label for="9C">9C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9D" name="area[]" value="9D" />
              <label for="9D">9D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9E" name="area[]" value="9E" />
              <label for="9E">9E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9F" name="area[]" value="9F" />
              <label for="9F">9F</label>
            </li>
          </ol>
        </li>
        <li class="row row--10">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="10A" name="area[]" value="10A" />
              <label for="10A">10A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10B" name="area[]" value="10B" />
              <label for="10B">10B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10C" name="area[]" value="10C" />
              <label for="10C">10C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10D" name="area[]" value="10D" />
              <label for="10D">10D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10E" name="area[]" value="10E" />
              <label for="10E">10E</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10F" name="area[]" value="10F" />
              <label for="10F">10F</label>
            </li>
          </ol>
        </li>
      </ol>
      <div class="fuselage">
        
      </div><br>

      <input type="submit" name="submit" Value="Submit" />

<?php include 'checkbox_value.php';?>
    
    </div>
  </form>
<div align="center">
  <label class="control-label">Ticket :</label>
   <a href="ticket.php"> <button type="button"> Print </button>  </a><br>

</div>
<div align="center">
     <a href="index.php?page=flights"> <button type="button" style="color: green; width: 10%; padding: 10px; margin-top: 2%;" > Confirm </button>  </a>

</div>


  </body>

  </html>