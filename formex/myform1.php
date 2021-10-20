<?php
//   if($_POST['formSubmit'] == "Submit") 
//   {
//     $varMovie = $_POST['formMovie'];
//     $varName = $_POST['formName'];
//   }

  if($_POST['formSubmit'] == "Submit") 
{
  $errorMessage = "";

  if(empty($_POST['formMovie'])) 
  {
    $errorMessage .= "<li>You forgot to enter a movie!</li>";
  }
  if(empty($_POST['formName'])) 
  {
    $errorMessage .= "<li>You forgot to enter a name!</li>";
  }

  $varMovie = $_POST['formMovie'];
  $varName = $_POST['formName'];

  if(!empty($errorMessage)) 
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  } 

}

  if($errorMessage != "") 
{
  echo("<p>There was an error:</p>\n");
  echo("<ul>" . $errorMessage . "</ul>\n");
} 
else 
{
  $fs = fopen("mydata.csv","a");
  fwrite($fs,$varName . ", " . $varMovie . "\n");
  fclose($fs);

  header("Location: thankyou.html");
  exit;
}
?>
