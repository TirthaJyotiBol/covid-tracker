<?php
$api = file_get_contents('https://api.covid19api.com/summary');
$apiDecode =json_decode($api,true);
// echo $apiDecode['Countries'][0]['Country'];
$totalcount =count($apiDecode['Countries']);
$i=0;
// echo $totalcount;
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>World Covid Tracker</title>
    <style>
     <?php include 'style.css'?>
    </style>
  </head>
  <body>
  <nav id="navbar">
  <img src="https://cdn.pixabay.com/photo/2020/09/02/13/04/virus-5538240__340.png" alt="&&">
<h2 id="corona">CORONA</h3>
<a href="daytracker.php" id="daytracker">Day Tracker</a>
<a href="covid.php">Country Data</a>

</nav>

    <h1>World Covid DATA</h1>

    <table class="table secondary">
  <thead>
    <tr id="keep">
      <th scope="col">COUNTRIES</th>
      <th scope="col">TotalConfirmed</th>
      <th scope="col">TotalDeaths</th>
      <th scope="col">TotalRecovered</th>
      <th scope="col">NewConfirmed</th>
      <th scope="col">NewDeaths</th>
      <th scope="col">NewRecovered</th>
    </tr>
  </thead>
  <tbody>
  <?php  while($i<$totalcount) 
  {
  ?>
    <tr id="tablecomponents">
      <td> <?php echo $apiDecode['Countries'][$i]['Country']; ?>  </td>
      <td> <?php echo $apiDecode['Countries'][$i]['TotalConfirmed']; ?> </td>
      <td> <?php echo $apiDecode['Countries'][$i]['TotalDeaths']; ?> </td>
      <td> <?php echo $apiDecode['Countries'][$i]['TotalRecovered']; ?> </td>
      <td> <?php echo $apiDecode['Countries'][$i]['NewConfirmed']; ?> </td>
      <td> <?php echo $apiDecode['Countries'][$i]['NewDeaths']; ?> </td>
      <td> <?php echo $apiDecode['Countries'][$i]['NewRecovered']; ?> </td>
    </tr>
    <?php
$i++;
} ?>
  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>

  <div class="footer">
  <p> @Tirtha Jyoti Bol |     B.Tech ECE , CGC Landran</p>
</div>
</html>