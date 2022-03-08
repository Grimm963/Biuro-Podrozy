<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
    <link rel="stylesheet" href="koszyk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-icons.css">


    <script>
          //   const text = '"wycieczki":[{"nazwa":"Japonia", "cena":7400, "waluta":"pln"}' ;
          //   const obj = JSON.parse(text);


          // console.log(obj.nazwa);
            

            // function myFunction(){
            //   document.getElementById("ubezpieczenie").innerHTML = "Ubezpieczenie";
            // }
            // function myFunction2(){
            //   document.getElementById("ubezpieczenie-cena").innerHTML = "400 pln";
            // }
          </script>
</head>
<body>
<?php
  include('navbar.php');
?>

    <div class="row">
      <div class="col-75">
        <div class="container">
          <!-- <form method="POST" action="/action_page.php"> -->
          
            <div class="row">
              <div class="col-50">
                <h3>Adres rachunkowy</h3>
                <label for="fname"><i class="fa fa-user"></i> Imie i nazwisko</label>
                <input type="text" id="fname" name="firstname" placeholder="Jan Kowalski">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="biuro@mail.com">
                <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
                <input type="text" id="adr" name="address" placeholder="545 ul. pszczulki">
                <label for="city"><i class="fa fa-institution"></i> Miasto</label>
                <input type="text" id="city" name="city" placeholder="Catovice">
    
                <div class="row">
                  <div class="col-50">
                    <label for="state">Województwo</label>
                    <input type="text" id="state" name="state" placeholder="Slunsk">
                  </div>
                  <div class="col-50">
                    <label for="zip">Kod pocztowy</label>
                    <input type="text" id="zip" name="zip" placeholder="43-502">
                  </div>
                </div>
              </div>
    
              <div class="col-50">
                <h3>Płatność</h3>
                <label for="fname">Akceptowalne karty</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Imie na karcie</label>
                <input type="text" id="cname" name="cardname" placeholder="Jan Kowalski">
                <label for="ccnum">Numer karty kredytowej</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Data ważności</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="04/25">
                <div class="row">
                  <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                  </div>
                </div>
              </div>
              
            </div>
            <label>
              <!-- <input type="checkbox" name="sameadr" onclick="myFunction();myFunction2()"> 
              <img src="https://solisci.pl/wp-content/uploads/2018/08/kraina-gejszy-i-samurajow-5.jpg" width="20%"> -->
            </label>
            <input type="submit" value="Kontynuuj" class="btn">
          </form>
        </div>
      </div>
      <div class="col-25">
        <div class="container">
          <h3>Koszyk <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h3>
          <p><a href="#">Japonia - <br>kraina gejszy i span clsamurajów</a> <ass="price">7400 pln</span></p>
          <p><a href="#" id="ubezpieczenie"></a><span id="ubezpieczenie-cena" class="price"></span></p>
          <hr>
          <p>Suma <span class="price" style="color:black"><b>7400 pln</b></span></p>
        </div>
      </div>
    </div>
    

<?php
  include('footer.php');
?>
</body>
</html>