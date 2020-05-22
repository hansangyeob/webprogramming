<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- this is to include your php file to this web--> 
 <?php include 'tools9.php'?>
 <style>
        .error{ color:red; 
                font-style : italic;
              }
</style>
</head>

<body>

 <!-- This is session for customer -->

<!-- this is for user-input-->
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="tutorial9.php">  
 
  <label for="Name"> Name:</label> 
  <input type="text" name="name1">
  <span class="error">* <?php echo $nameErr;?></span>

  <br><br>
  
  <label for="Email"> E-mail:</label> 
  <input type="text" name="email1">
  <span class="error">* <?php echo $emailErr;?></span>
  
  <br><br>

  <label for="moblie"> Mobile:</label> 
  <input type="text" name="mobile1">
  <span class="error">* <?php echo $mobileErr;?></span>

  <br><br>
  
  <label for="card"> Credit card:</label> 
  <input type="text" name="card1">
  <span class="error">* <?php echo $cardErr;?></span>
  
  <br><br>

  <label for="expiry"> Expiry date:</label> 
  <input type="date" name="expiry1">
  <span class="error">* <?php echo $expiryErr;?></span>

  <br><br>


  <!-- This is session for movie -->


  <label for="Moive ID"> Moive ID:</label> 
  <select name="movie_id1" id="movie_id">
    <option value="please_select_1">Please select</option>  
    <option value="ACT">ACT</option>
    <option value="ANM">ANM</option>
  </select>
  <span class="error">* <?php echo $moiveIDErr;?></span>                  
  
  <br><br>
                    

  <label for="Moive Day">Moive Day:</label>
  <select name="movie_day1" id="movie_day">
    <option value="please_select_2">Please select</option>
    <option value="MON">MON</option>
    <option value="TUE">TUE</option>
    <option value="WED">WED</option>
    <option value="TUR">TUR</option>
    <option value="FRI">FRI</option>
    <option value="SAT">SAT</option>
    <option value="SUN">SUN</option>
  </select>
  <span class="error">* <?php echo $moiveDAYErr;?></span>                  
                    
  <br><br>


  <label for="Moive Hour">Moive Hour:</label>
  <select name="movie_hour1" id="movie_hour">
    <option value="please_select_3">Please select</option>
    <option value="T12">T12</option>
    <option value="T15">T15</option>
    <option value="T18">T18</option>
    <option value="T21">T21</option>
  </select>
  <span class="error">* <?php echo $moiveHOURErr;?></span>                  
                                      
  <br><br>

<!-- This is session for seats-->

<label for="STA">Seats for STA:</label>
  <select name="STA1" id="STA">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
                    
                                      
  <br><br>

<label for="STP">Seats for STP:</label>
  <select name="STP1" id="STP">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
                    
                                      
  <br><br>

<label for="STC">Seats for STC:</label>
  <select name="STC1" id="STC">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>

  <BR><BR>
<label for="FCA">Seats for FCA:</label>
  <select name="FCA1" id="FCA">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>

                                      
  <br><br>

  <label for="FCP">Seats for FCP:</label>
  <select name="FCP1" id="FCP">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
                    
                                      
  <br><br>

  <label for="FCC">Seats for FCC:</label>
  <select name="FCC1" id="FCC">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
                    
                                      
  <br><br>
  <br><br>  
  <input type="submit" name="submit" value="Submit">  
  <br><br>
  <input type="submit" name = "session-reset" value = "session-reset">
  
</form>


</body>        

<hr>
<footer style= "bottom:0px;">

<h3> This area is footer for debugging</h3>
    <?php
    echo '$_POST';
    preShow($_POST);    
     echo '<br><br>';
     echo '$_SESSION';
    preShow($_SESSION); 
    ?>
<hr>

<?php
 printMyCode(); 
?>

</footer>

</html>