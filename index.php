<?php include("includes/init.php");
$title = "Styl"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Styl</title>
  <link rel="stylesheet" href="styles/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php include("includes/header.php"); ?>
  <p>Welcome to Styl! Use this website to get inspired and find
    your aesthetic.</p>
  <br><br>

  <table id="intro">
    <tr>
      <td></td>
      <td><button onclick="window.location.href='/gettingstarted.php'">Get Started</button></td>
      <td></td>
    </tr>
    <tr>
      <td>
        <!-- Source: https://assets.reebok.com/images/w_600,f_auto,q_auto:sensitive,fl_lossy/1b1fec72200f4e539484aa570020c91d_9366/Classics_International_Long_Raincoat_Black_EB3607_03_standard_hover.jpg -->
        <img class="intro" src="images/reebok.jpeg" alt="Raincoat" />
        Source: <cite><a href="https://cdna.lystit.com/photos/jdsports/8721cdda/reebok-Black-Classics-International-Long-Raincoat.jpeg">Reebok</a></cite>
      </td>
      <td>
        <!-- Source: https://s7d5.scene7.com/is/image/UrbanOutfitters/51764264_065_b?$xlarge$&hei=900&qlt=80&fit=constrain -->
        <img class="intro" src="images/urban.jpeg" alt="Furry Jacket" />
        Source: <cite><a href="https://s7d5.scene7.com/is/image/UrbanOutfitters/51764264_065_b?$xlarge$&hei=900&qlt=80&fit=constrain"> UrbanOutfitters</a></cite>
      </td>
      <td>
        <!-- Source: https://static.zara.net/photos///2019/I/0/1/p/0086/221/704/3/w/560/0086221704_1_1_1.jpg?ts=1570717170656 -->
        <img class="intro" src="images/zara.jpg" alt="Brown Coat" />
        Source: <cite><a href="https://static.zara.net/photos///2019/I/0/1/p/0086/221/704/3/w/560/0086221704_1_1_1.jpg?ts=1570717170656">Zara</a></cite>
      </td>
    </tr>
  </table>
  <?php include("includes/footer.php"); ?>
</body>

</html>
