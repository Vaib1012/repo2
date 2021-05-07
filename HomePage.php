
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="HomePageStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="HomePageScript.js"></script>

</head>
<body onload="fillTable();showSlides(1);">
     <?php
        include 'header.php';
    ?>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/3.png" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="images/4.png" style="width:100%">
  </div>
<div class="mySlides fade">
  <img src="images/5.png" style="width:100%">
  </div>

<div class="mySlides fade">
  <img src="images/6.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/7.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="images/8.png" style="width:100%">
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center" >
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>


</div>

<div>
 <button class="requestButton">Request a School</button>
<div>

    
<div class="searchBar">
  <input id="searchInput" class="search" type="text" placeholder="Search.." onkeyup="filter()">
  <button class="searchBtn" type="submit" ><i class="fa fa-search"></i></button>
</div>

<div >
    <div class="tableContainer">
        <h1>Universities List</h1>

        <div class="tbl-header">
          <table  cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>School Name</th>
                <th class="city">City</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody id="tableBody" >
            </tbody>
          </table>
        </div>
    </div>

</div>


</body>
</html> 
