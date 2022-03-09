<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Główna</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap-icons.css">
</head>
<body>
    

<?php
include('navbar.php');
?>

    <div class="slideshow-container">

        <div class="mySlides fade">
          <a href="b.php" class="textowo">
          <img  src="https://windows10spotlight.com/wp-content/uploads/2020/10/6d968bf8c4525d5ff4ea119c9e3a808f.jpg" style="width:100%"></a>

        </div>
        
        <div class="mySlides fade">
            <a href="a.php">
          <img src="https://wallpaperaccess.com/full/1666711.jpg" style="width:100%"></a>
        </div>
        
        <div class="mySlides fade">
            <a href="c.php">
          <img src="https://www.wallpaperflare.com/static/357/838/437/mt-fuji-japan-wallpaper.jpg" style="width:100%"></a>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
    </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        <br><br><br>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }

            // function myFunction(){
            //     document.getElementById("zamiana").src="https://c.tenor.com/O6nu0csYjhUAAAAM/astolfo.gif";
            // }
            // function myFunction1(){
            //     document.getElementById("zamiana").src=document.getElementById("zamiana").src="https://resources.matcha-jp.com/resize/720x2000/2021/01/28-112002.jpeg";
            // }

            function myFunction()
            {
                if( document.getElementById("zamiana").src == "https://resources.matcha-jp.com/resize/720x2000/2021/01/28-112002.jpeg")
                    {
                    document.getElementById("zamiana").src = "https://c.tenor.com/O6nu0csYjhUAAAAM/astolfo.gif";
                    }

                else if( document.getElementById("zamiana").src == "https://c.tenor.com/O6nu0csYjhUAAAAM/astolfo.gif")
                    {
                        document.getElementById("zamiana").src = "https://resources.matcha-jp.com/resize/720x2000/2021/01/28-112002.jpeg";
                    }
            }
            </script>
    
    

    <!-- <div class="oferty"> 
        <img src="https://paczka-wiedzy.pl/wp-content/uploads/2018/02/palmy.jpg">
        <span>aaaaaaaaaaaa</span>
        <div class="cena">  
            <span>2000 zl</span>
        </div> -->

    <!-- <div class="struktura">
        <div class="oferta">
            <img src="https://uwalls.pl/gallery/73/7582_thumb_b1000.jpg" width="60%">
            <div class="bot">
                <span> oferta jest super, polecam</span>
            </div>
        </div>
        <div class="oferta">
            <img src="http://bambusowysen.pl/wp-content/uploads/2012/11/phoenix_mini2.jpg" width="80%>">
            <div class="bot">
                <span> oferta jest super, polecam</span>
            </div>
        </div>
        <div class="oferta">
            <img src="https://static.zakumaj.pl/data/store/2015/7/1a94544d-84d7-7073-7775-3c79c406c43a/picture_large.jpg" width="280em">
            <div class="bot">
                <span> oferta jest super, polecam</span>
            </div>
        </div>
    </div> -->

    <!-- <div class="struktura">
        <ul class="linia">
            <li class="oferta">
                <img src="https://uwalls.pl/gallery/73/7582_thumb_b1000.jpg"width="30%">
                <div class="bot">oferta</div>
            </li>
            <li class="oferta">
                <img src="http://bambusowysen.pl/wp-content/uploads/2012/11/phoenix_mini2.jpg"width="30%">
                <div class="bot">oferta</div>
            </li>
            <li class="oferta">
                <img src="https://static.zakumaj.pl/data/store/2015/7/1a94544d-84d7-7073-7775-3c79c406c43a/picture_large.jpg" width="50%">
                <div class="bot">oferta</div>
            </li>
        </ul>
    </div> -->
    <div class="content_img"> <a href="Uganda.php">
        <img src="https://www.ndf.int/media/photos/images/cache/rwanda-view-of-kigali-oledoe-cc-400x400,c,q=75.jpg"  width="100%" height="100%">
        <div class="text">
            <span>Rwanda i Uganda</span><br>
            <span>&#11088 &#11088 &#11088 &#x2606 &#x2606</span><br>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi incidunt accusamus earum possimus nobis est ipsum optio dignissimos quaerat soluta tenetur corrupti nam, aspernatur et tempora repellendus? Architecto, adipisci hic!</span>
        </div>
    </a></div>

    <div class="content_img"><a href="a.php">
        <img src="https://img.locationscout.net/images/2021-01/clock-tower-monument-cartagena-colombia_m.jpg" width="100%" height="100%">
        <div class="text" > 
            <span>Kolumbia</span><br>
            <span>&#11088 &#11088 &#11088 &#11088 &#x2606</span><br>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsam consequuntur animi odit. Modi vitae, voluptatum tempore ipsum optio perspiciatis laboriosam sunt delectus obcaecati omnis, magnam eaque corrupti provident cupiditate?</span>
        </div>
    </a></div>

    <div class="content_img"><a href="Meksyk.php">
        <img src="https://images.pling.com/cache/400x400/img/00/00/61/26/90/1553186/e39783802266e143a45b1e3610a1906221398c700c3ba8ecbcbc959a72caa84c6519.jpg"width="100%" height="100%">
        <div class="text">
            <span>Meksyk</span><br>
            <span>&#11088 &#11088 &#11088 &#11088 &#x2606</span><br>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi numquam cumque deserunt soluta quisquam ipsum consequatur consectetur expedita? Odio asperiores officiis blanditiis pariatur iste. Delectus, nihil magnam! Laboriosam, aliquam nam!</span>
        </div>
    </a></div>

    
    <section class="video_container">
    <div class="video">
        <iframe width="1000" height="500" src="https://www.youtube.com/embed/AVHozwCteL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </section>

    
    
    <div class="kontener1">
        <div class="left1">
            <div>        
                <!-- <a href="c.php"> -->
                <img class="zdjecie2" id="zamiana" src="https://resources.matcha-jp.com/resize/720x2000/2021/01/28-112002.jpeg" onclick="myFunction()">
            </a></div>
            <div class="srodek">
            <div class="tytul">
                <h2>Japonia</h2>
            </div>
            <div class="cena1">
                <h3>7400 zł</h3>
            </div>
            <div class="gwiazdki">
                <span>&#11088 &#11088 &#11088 &#11088 &#11088</span>
            </div>
            </div>
        </div>
        <div class="right1">
            <div><a href="b.php">
                <img class="zdjecie2" src="https://imagazine.pl/wp-content/uploads/2019/04/islandia.jpg">
            </a></div>
            <div class="srodek">
            <div class="tytul">
                <h2>Islandia Interior</h2>
            </div>
            <div class="cena1">
                <h3>6500 zł</h3>
            </div>
            <div class="gwiazdki">
                <span>&#11088 &#11088 &#11088 &#11088 &#x2606</span>
            </div>
            </div>
        </div>
        <div class="opis">
            <h2>Podróżować to żyć</h2><br>
            <span><b>Egzotyczne podróże wcale nie muszą pozostawać w sferze marzeń i planów do realizacji na „nigdy”. W rzeczywistości to prostsze niż się wydaje, wystarczy tylko znaleźć dobre towarzystwo – i tu pojawiamy się my!<br>
            Pokazujemy, że egzotyczne wyprawy mogą mieć inne oblicze – organizowane jako wyjazdy trampingowe, trekkingi i off roady. Każda z naszych propozycji to egzotyczna wyprawa, której nie zapomnisz to końca życia. Mamy też coś dla miłośników bliższych kierunków.<br>
            Sprawdź propozycje naszych wyjazdów i wybierz coś dla siebie!</b></span>
        </div>



    </div>
    
    <div class="main-header">
        <div class="row">
          <div>
            <h1 class="logo">BleepBleep</h1>
            <h3>Mała grupka przyjaciół,<br>która pomaga podróżować</h3>
          </div>
        </div>
     </div>



<?php
include ('footer.php');
?>
</body>
</html>