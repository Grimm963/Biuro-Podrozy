<!DOCTYPE html>
<html>
    <head>
        <title>SKLEP</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="store.css" />
        <script src="store.js" async></script>
        <link rel="stylesheet" href="bootstrap-icons.css">
    </head>
    <body>
<?php
include("navbar.php");
?>
        <section class="container content-section">
            <h2 class="section-header">WYCIECZKI</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">JAPONIA</span>
                    <a href="c.php">
                    <img class="shop-item-image" src="https://r1.ilikewallpaper.net/ipad-air-wallpapers/download/11446/Japan-Honshu-Island-iPad-4-wallpaper-ilikewallpaper_com_200.jpg">
                    </a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">7400 pln</span>
                        <button class="btn btn-primary shop-item-button" type="button">DODAJ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">ISLANDIA</span>
                    <a href="b.php">
                    <img class="shop-item-image" src="https://r1.ilikewallpaper.net/ipad-pro-wallpapers/download-108987/stokksnes-iceland-5k_200.jpg">
                    </a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">6500 pln</span>
                        <button class="btn btn-primary shop-item-button"type="button">DODAJ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">KOLUMBIA</span>
                    <a href="a.php">
                    <img class="shop-item-image" src="https://www.lse.ac.uk/lacc/images/200x200-general/colombia-medellin-comuna-13-200x200.jpg">
                    </a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">5600 pln</span>
                        <button class="btn btn-primary shop-item-button" type="button">DODAJ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">MEKSYK</span>
                    <a href="Meksyk.php">
                    <img class="shop-item-image" src="https://breathtakinglandscapes.files.wordpress.com/2013/04/cancun_mexico_breathtaking-nature_shoreline_f-spring_breakers_arrival_travel_destination_wallpaper_breathtaking_landscapes_scenery_wallpaper_161_1.jpg?resize=200%2C200">
                    </a>
                    <div class="shop-item-details">
                        <span class="shop-item-price">4900 pln</span>
                        <button class="btn btn-primary shop-item-button" type="button">DODAJ</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">UBEZPIECZENIE</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">DOBRE</span>
                    <img class="shop-item-image" src="https://www.nszzfipw.org.pl/wp-content/uploads/2013/07/pzu.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">500 pln</span>
                        <button class="btn btn-primary shop-item-button" type="button">DODAJ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">HUJOWE</span>
                    <img class="shop-item-image" src="https://d32z7op07v8pur.cloudfront.net/images/3/3/145830033.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">100 pln</span>
                        <button class="btn btn-primary shop-item-button" type="button">DODAJ</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">KOSZYK</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">RZECZ</span>
                <span class="cart-price cart-header cart-column">CENA</span>
                <span class="cart-quantity cart-header cart-column">ILOŚĆ</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Razem</strong>
                <span class="cart-total-price">0 PLN</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">KUP</button>
        </section>
<?php
include("footer.php");
?>
    </body>
</html>