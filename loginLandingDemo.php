<!DOCTYPE HTML>
<html>
<title>UB CSE Peer Evaluation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>
<?php session_start(); ?>

<style>
.grid-container {
  display: grid;
  grid-column-start: 1;
  grid-column-end: 3;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
hr {
    clear: both;
    visibility: hidden;
}

</style>

<!-- Header -->
<header id="header" class="w3-container w3-theme w3-padding">
    <div id="headerContentName"  <font color="black"> <h1> <?php echo $_SESSION['email']. ' has been logged in!' ?></h1> </font> </div>
</header>


</html>
