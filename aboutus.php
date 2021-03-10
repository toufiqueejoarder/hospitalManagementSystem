<?php
include("header.php");
?>
<div class="wrapper col2">
  <div id="gallery">
    <ul>
      <li class="placeholder" style="background-image:url(images/demo/image1.jpg);">Image Holder</li>
      <li><a class="swap" style="background-image:url(images/demo/img03.jpg);" href="#gallery"></a></li>
      <li><a class="swap" style="background-image:url(images/demo/img01.jpg);" href="#gallery"></a></li>
      <li class="last"><a class="swap" style="background-image:url(images/demo/img02.jpg);" href="#gallery"></a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1>About Online Hospital</h1>
      <p align="justify">Vision: To be the emerging markets largest integrated healthcare network.</p>
      <p align="justify">Mission: To build a legacy of accessible, high quality, safe private healthcare for low and middle-income patients in emerging markets.</p>
      <div class="homecontent">
        <ul>
          <li>
           <h2>Online Medical Services</h2>
             <p class="imgholder"><img src="images/speciality.jpg" width="286px" height="100px" alt="My cool photo" style="border-radius: 15px; -moz-border-radius: 15px;"   /></p>
          </li>
          <li class="last">
            <h2>24X7 services</h2>
            <p class="imgholder"><img src="images/24x7.png" alt="" style="width:286px;height:100px;"   /></p>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
      <p><strong>Directors message:</strong><br />
      Our hospital provides team medicine, where all the staff work towards the same goal of delivering advanced medical care. We're enhancing the functions of the Career Development Support Center, promoting team medical education, and fostering superior medical staff with a caring spirit.</p>
    </div>
    <div id="column">
      <div id="featured">
        <ul>
          <li>
            <h2>Our Services</h2>
            <p class="imgholder"><img src="images/SDM-Image-6.png" alt="" style="width:240px;height:90px;" /></p>
          </li>
          <li role="menuitem">Online Hospital</li>
          <li aria-haspopup="Sidebar1_Menu2:submenu:36" role="menuitem">Diagnostic Services</li>
          <li role="menuitem">Consultation</li>
          <li role="menuitem">In Patient Services</li>
          <li role="menuitem">Health Checkup Packages</li>
          <li role="menuitem">24 X 7 Services</li>
          <li role="menuitem">Physiotherapy Services</li>
          <li role="menuitem">Dialysis</li>
          <li role="menuitem">Insurance Schemes</li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
?>