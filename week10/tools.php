<html>
<body>
  <?php echo '<h3>This is body area</h3>'; ?>



<?php  //"preShow()" function prints data and shape/structure of data:
   session_start(); 
   function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
         return $ret;
   else 
        echo $ret; 
 }


 //Output your current file's source code:
   session_start();
   function printMyCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'><ol>";
    foreach ($lines as $line)
        echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
 }


//A "php multiple dimensional array to javascript object" function
    session_start();
    function php2js( $arr, $arrName ) { // i need to put var from jsp to$arrName
    $lineEnd="";
    echo "<script>\n";
    echo "/* Generated with A4's php2js() function */";
    echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
    echo "</script>\n\n";
 }

// to put jsp var
session_start();
$priceObject = 
['full' => ['STA' => 19.8,'STP' => 17.5,'ACT' => 15.5,],
'discount' => ['STA' => 10.8,'STP' => 10.5,'ACT' => 10.5,]];

// to test user_input 
//trim = it will take away white space in my data 
//stripslashes = it will take away quote

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
       $nameErr = "Name is required";
     } else {
       $name = test_input($_POST["name"]);
       if (!preg_match("/^[a-zA-Z ]*$/", $name)){
         $nameErr = "Only letters and whitespace are allowed.";
       }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $emailErr = "Invalid email format";
      }
    }
}
// writing file and creating form.php"
// but this is not effective way
#$filename = "form.php";

#if ($numBytes = file_put_contents($filename,
#$linesOrBigString))
 #   echo "File Saved, $numBytes written.";
#else 
 #   echo "File Access Error. Does $filename exist 
  #  and have 606 permissions?";
//we cas use 'LOCK_SH'

#$filename = "..\week9\processing.php";
#echo "<ol>";
#$fp = fopen($filename, "r");
#flock($fp, LOCK_SH);
#while ($line = fgets($fp))
#  echo "<li>$line</li>";
#flock($fp, LOCK_UN);
#fclose($fp);
#echo "</ol>";

# for html file, we use 'htmlspecialchars'
#$filename = "..\week9\\feedback.html";
#echo "<ol>";
#$fp = fopen($filename, "r");
#flock($fp, LOCK_SH);
#while ($line = fgets($fp))
#    $line = htmlspecialchars($line);
#  echo "<li>$line</li>";
#flock($fp, LOCK_UN);
#fclose($fp);
#echo "</ol>";

#this is for writing.
#$filename = ""text.txt";
#$fp = fopen($filename,"w");
#flock($fp, LOCK_EX); 

#fwrite($fp, "Here is the first line\n");
#fwrite($fp, "Here is the second line\n");

#flock($fp, LOCK_UN);
#fclose($fp);
?>

</body>
</html>

