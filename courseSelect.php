<!DOCTYPE HTML>
<html>
<title>UB CSE course select</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>


<style>

hr {
    clear: both;
    visibility: hidden;

}


.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>

<!-- Header -->
<header id="header" class="w3-container w3-theme w3-padding">
    <div id="headerContentName"  <font class="w3-center w3-theme"> <h1> Please select the course you would like to complete a peer evaluation for. </h1> </font> </div>
</header>

<hr>

<div id= "dropdown" style="text-align:center;">
<div class="dropdown w3-theme w3-center ">
  <button class="dropbtn w3-theme w3-center">Dropdown</button>
  <div class="dropdown-content w3-theme w3-center">
      <a href="#">Class 1 here</a>
      <a href="#">Class 2 here</a>
      <a href="#">Class 3 here</a>
  </div>
</div>
</div>

</body>
</html>
