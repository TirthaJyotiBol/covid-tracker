<?php  

$api =file_get_contents('https://api.covid19india.org/data.json');
$decodeApi=json_decode($api,true);
$count = count($decodeApi['cases_time_series']);

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>covid tracker</title>
</head>
<style>
  <?php include 'style.css'?>
</style>

<body>
  <nav id="bar" class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">COVID TRACKER |
        <?php echo $decodeApi['cases_time_series'][$count-1]['dateymd']  ?>
      </a>
      <hr>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <h1 id="dwct">Day Wise Covid Tracker</h1>
  <hr>
  <span>
  <p>
    Coronavirus disease 2019 (COVID-19), also known as the coronavirus, or COVID, is a contagious disease caused by
    severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first known case was identified in Wuhan, China,
    in December 2019. The disease has since spread worldwide, leading to an ongoing pandemic.

    Symptoms of COVID-19 are variable, but often include fever, cough, headache, fatigue, breathing difficulties,
    and loss of smell and taste. Symptoms may begin one to fourteen days after exposure to the virus. At
    least a third of people who are infected do not develop noticeable symptoms. Of those people who develop
    noticeable symptoms enough to be classed as patients, most (81%) develop mild to moderate symptoms (up to mild
    pneumonia), while 14% develop severe symptoms (dyspnea, hypoxia, or more than 50% lung involvement on imaging), and
    5% suffer critical symptoms (respiratory failure, shock, or multiorgan dysfunction). Older people are at a
    higher risk of developing severe symptoms. Some people continue to experience a range of effects (long COVID) for
    months after recovery, and damage to organs has been observed. Multi-year studies are underway to further
    investigate the long-term effects of the disease.
  </p>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3JOS_4I92JDCQIa2pBIHHEKHU_-13Rlp4yg&usqp=CAU" alt="covid">
  </span>
  <section>
  <span>
    <p>The first cases of COVID-19 in India were reported in the towns of Thrissur, Alappuzha and Kasargod, all in the state of Kerala, among three Indian medical students who had returned from Wuhan.[10] Lockdowns were announced in Kerala on 23 March, and in the rest of the country on 25 March. By mid-May 2020, five cities accounted for around half of all reported cases in the country: Mumbai, Delhi, Ahmedabad, Chennai and Thane.[11] On 10 June, India's recoveries exceeded active cases for the first time.[12] Infection rates started to drop in September, along with the number of new and active cases.[13] Daily cases peaked mid-September with over 90,000 cases reported per-day, dropping to below 15,000 in January 2021.[14]

A second wave beginning in March 2021 was much larger than the first, with shortages of vaccines, hospital beds, oxygen cylinders and other medicines in parts of the country.[14] By late April, India led the world in new and active cases. On 30 April 2021, it became the first country to report over 400,000 new cases in a 24-hour period.[15][16] Health experts believe that India's figures have been underreported due to several factors</p>
<img src="https://cdn.pixabay.com/photo/2021/05/22/21/32/man-6274651__340.jpg" alt="">  
</span>
</section>
<span>
  <p>
  A second wave beginning in March 2021 was much larger than the first, with shortages of vaccines, hospital beds, oxygen cylinders and other medicines in parts of the country. By late April, India led the world in new and active cases. On 30 April 2021, it became the first country to report over 400,000 new cases in a 24-hour period. Health experts believe that India's figures have been underreported due to several factors.

India began its vaccination programme on 16 January 2021, and by April was administering 3–4 million doses a day.India has authorised the British Oxford–AstraZeneca vaccine (Covishield), the Indian BBV152 (Covaxin) vaccine, and the Russian Sputnik V vaccine for emergency use. As of 25 May 2021, the country had administered over 200 million vaccine doses.
  </p>
  <img src="https://cdn.pixabay.com/photo/2020/04/26/10/35/home-5094603__340.jpg" alt="covid">
  </span>

  <h1>YOU CAN FIND THE CHART ABOUT THE NUMBER OF LIVE CASES IN INDIA</h1>

  <form method="post">
   <label > For how many days you want to see details </label> 
    <input type="text" name="totaldays"> <br>
    <button id="bton" type="submit" name="submit">FIND</button>
  </form>

  <?php  
  if(isset($_POST['submit'])){
    ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Daily Confirmed</th>
        <th scope="col">Daily Deaths</th>
        <th scope="col">Daily Recovered</th>
        <th scope="col">Total Cases</th>
        <th scope="col">Total Recovered</th>
        <th scope="col">Total Deaths</th>
      </tr>
    </thead>
    <tbody>
      <?php     
   $number = $_POST['totaldays'];
   $i=$count-1;
 while($i>=$count-$number){
      ?>
      <tr>
        <td scope="row">
          <?php echo $decodeApi['cases_time_series'][$i]['date']  ?>
        </td>
        <td scope="row">
          <?php echo $decodeApi['cases_time_series'][$i]['dailyconfirmed']  ?>
        </td>
        <td scope="row">
          <?php echo $decodeApi['cases_time_series'][$i]['dailydeceased']  ?>
        </td>
        <td scope="row">
          <?php echo $decodeApi['cases_time_series'][$i]['dailyrecovered']  ?>
        </td>
        <td>
          <?php   echo $decodeApi['cases_time_series'][$i]['totalconfirmed']  ?>
        </td>
        <td>
          <?php  echo $decodeApi['cases_time_series'][$i]['totaldeceased']   ?>
        </td>
        <td>
          <?php  echo $decodeApi['cases_time_series'][$i]['totalrecovered']   ?>
        </td>
      </tr>
      <?php
    $i--;
  }
} 
  ?>
  </table>
  <br> <br> <br>
</body>

</html>