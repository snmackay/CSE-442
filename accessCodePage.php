<!DOCTYPE HTML>
<html>
<title>UB CSE Peer Evaluation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>


<style>

hr {
    clear: both;
    visibility: hidden;
}

</style>

<!-- Header -->
<header id="header" class="w3-container w3-theme w3-padding">
    <div id="headerContentName"  <font class="w3-center w3-theme"> <h1> UBCSE Peer Evaluation </h1> </font> </div>
</header>




<hr>

<div id="login" class="w3-row-padding w3-center w3-padding">

  <form id="loginEmail" class="w3-container w3-card-4 w3-light-green" method='post'>
    <h2>Please type in the access code that has been sent to your UB email. You'll then be redirected to the peer evaluation form.</h2>
    <div id="codeEntry" class="w3-section w3-center ">
      <input placeholder="access code here" name ='accessCodeEntryText' id="accessCodeEntryText" class="w3-input w3-light-grey" type="text" pattern="^[a-zA-Z0-9]$" required>
      <hr>
      <input type='submit' id="accessCodeEntryButton" class="w3-center w3-button w3-theme-dark" value='Access Peer Evaluation'></input>
      <h2>If your code is older than 15 minutes, click here to get a new one.</h2>
      <input type='button' onclick="window.location.href = 'index.php';" class="w3-center w3-button w3-theme-dark" value="Dont have a valid code?"/></input>
      <hr>
    </div>
  </form>

  <?php
//error logging
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "~/php-error.log");
?>
  <hr>


</div>

<!-- Footer -->
<footer id="footer" class="w3-container w3-theme-dark w3-padding-16">
  <h3>Acknowledgements</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <p> <a  class=" w3-theme-light" target="_blank"></a></p>
</footer>

</body>
</html>
