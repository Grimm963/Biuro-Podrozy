<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include("navbar.php");
?>
<style>
.container {
  
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
</style>
</head>
<body>

<h2>Button on Image</h2>
<p>Add a button to an image:</p>

<div class="container">
  <img src="https://solisci.pl/wp-content/uploads/2018/09/sladami-majow-i-aztekow-42-600x399.jpg" alt="Snow" style="width:100%">
  <button class="btn">Button</button>
</div>

</body>
</html>