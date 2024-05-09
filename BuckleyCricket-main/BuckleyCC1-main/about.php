<?php
include("boostrap.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Buckey Cricket Club</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href= 
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> 

</head> 
    <style>
        .about-banner {
            background-image: url('img/ABOUTUSBANNER3.png');
            background-size: contain;
            height: 100%;
            width: 100%;
            position: absolute;
            background-repeat: no-repeat;
        }
        .banner h1 {
            color: #fff;
            text-align: center;
            padding-top: 100px; 
        }
    </style>
</head>

<body>

<div class="about-banner"></div>

<div class="about-container">
    <h2>WELCOME TO<br>BUCKLEY CC,<br>WALES.<br>
            <a href="https://www.facebook.com/groups/902566951168307/" class="fa fa-facebook" target="_blank"></a>
            <a href="https://twitter.com/buckleycc?lang=en" class="fa fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/buckleycricketclub/" class="fa fa-instagram" target="_blank"></a></h2>
    <div class="slideshow-container">
        <div class="photoslide fade">
            <img src="img/slideshow1.png" style="width:80%">
        </div>
        <div class="photoslide fade">
            <img src="img/slideshow2.png" style="width:80%">
        </div>
        <div class="photoslide fade">
            <img src="img/slideshow3.png" style="width:80%">
        </div>
        <div class="photoslide fade">
            <img src="img/slideshow4.png" style="width:80%">
        </div>
        <div class="photoslide fade">
            <img src="img/slideshow5.png" style="width:80%">
        </div>
        <div class="photoslide fade">
            <img src="img/slideshow6.png" style="width:80%">
        </div>
        <div class="photoslide fade">
            <img src="img/slideshow7.png" style="width:80%">
        </div>
    </div>
</div>

<div class="about-sponsors-container">
    <h2>OFFICIALS<ion-icon name="people-outline"></ion-icon></h2>
    <div class="teams-wrapper"> 
        <i id="left" class="fa-solid  fas fa-angle-left"></i> 
        <ul class="teams-carousel"> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Gareth Sprowell </h2> 
                <span>Hon. Secretary<br>garethsprowell@hotmail.com<br>07515343794</span> 
            </li> 


            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="Lee Taylor" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Lee Taylor </h2> 
                <span>Club Captain<br>leefaytay15@gmail.com<br>07368908701</span> 
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Daniel Ellis </h2> 
                <span>Head Groundsperson<br>Contact Buckley CC<br>for more info.</span> 
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Alex Storey </h2> 
                <span>Hon. Fixture Secretary<br>Contact Buckley CC<br>for more info.</span> 
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Gary Mayers </h2> 
                <span>2nd XI Captain<br>garymayers66@googlemail.com<br>07961587671</span> 
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Andrew Bellis </h2> 
                <span>3rd XI Captain<br>andy.bellis@hotmail.co.uk<br><br> </span> 
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Jack Gibson </h2> 
                <span>Midweek Captain<br>Contact Buckley CC<br>for more info.</span>  
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Simon Murray </h2> 
                <span>Junior Coordinator<br>simon.murray@airbus.com<br><br> </span> 
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Mark McManus </h2> 
                <span>Chairperson<br>Contact Buckley CC<br>for more info.</span>  
            </li> 

            <li class="card"> 
                <div class="img"><img src= "img/ClubBadge.jpg" alt="" draggable="false"> </div> 
                <h2 style="color: #162938; font-weight:bold;"> Claire Worral </h2> 
                <span>Women's 1XI Captain<br>missusuu@gmail.com<br><br> </span> 
            </li> 


        </ul> 
        <i id="right" class="fa-solid fas fa-angle-right"></i> 
    </div> 
</div>

<div class="about-content">
    <button class="accordion">
        JOINING.
        <ion-icon name="caret-down-outline" class="icon-down"></ion-icon>
        <ion-icon name="caret-up-outline" class="icon-up" style="display: none;"></ion-icon>
    </button>
    <div class="panel">
        <p><br>- Buckley CC currently have two senior teams playing in the NWCL on a Saturday & one senior team playing in the same league on a Sunday.<br>
- We have a midweek 20/20 team representing the town in the third division of the Chester & District Midweek League.<br>
- Buckley have entered four junior teams for the 2023 season; Under 9's, Under 11's, Under 13's and Under 15’s.<br>
- Buckley have also launched a very successful women's section who represent the club in the women's softball league on a sunday.<br>
- Training nights for juniors are held on Friday evenings from April-August, 6pm til 8pm at the club ground.<br><br>
We are welcoming new members of all ages and abilities!<br><br>
If you or anyone you know would like to join our club please come along to the club and speak to any of the officials listed above.<br></p>
    </div>

    <button class="accordion">
        PLAYING FACILITIES.
        <ion-icon name="caret-down-outline" class="icon-down"></ion-icon>
        <ion-icon name="caret-up-outline" class="icon-up" style="display: none;"></ion-icon>
    </button>
    <div class="panel">
        <div class="address">
            <h2><br>LANE END GROUND</h2>
            <p><br>Buckley Cricket Club
            <br>Chester Road
            <br>Buckley
            <br>Wales
            <br>CH7 3AQ</p>
            <h2><br>FACILITIES<br><br></h2>
            <ul>
                <li>Changing Facilities on-site</li>
                <li>Covers</li>
                <li>Pavilion</li>
                <li>Rollers</li>
                <li>2 Artificial Nets</li>
                <li>1 Artificial Match Play wickets</li>
                <li>Square 1 -10<br><br></li>
            </ul>
        </div>
    
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4783.773754710852!2d-3.065897!3d53.16606900000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ac55ae4c0f3e3%3A0xbf9002332d4f2a79!2sBuckley%20Cricket%20Club!5e0!3m2!1sen!2suk!4v1715284724697!5m2!1sen!2suk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <button class="accordion">
        AFFILIATIONS.
        <ion-icon name="caret-down-outline" class="icon-down"></ion-icon>
        <ion-icon name="caret-up-outline" class="icon-up" style="display: none;"></ion-icon>
    </button>
    <div class="panel">
    <p style="text-decoration: underline;"><br>
        <a href="https://wales.play-cricket.com/home">Cricket Wales</a><br>
        <a href="https://ecbu19clubt20.play-cricket.com/home">ECB U19 Club T20</a><br>
        <a href="https://walesregionalcomps.play-cricket.com/">Cricket Wales Regional Competitions</a><br>
        <a href="https://nwcl.play-cricket.com/home">North Wales Cricket League</a>
    </p>
</div>
</div>

</body>

<script>

/* js for slideshow */
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("photoslide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3500); 
}

var acc = document.getElementsByClassName("accordion");

for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            this.querySelector('.icon-down').style.display = 'inline-block';
            this.querySelector('.icon-up').style.display = 'none';
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            this.querySelector('.icon-down').style.display = 'none';
            this.querySelector('.icon-up').style.display = 'inline-block';
        }
    });
}
</script>


<?php
require ('footer.php');
?>
