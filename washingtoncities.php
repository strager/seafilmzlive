<!--link to the start of a seafilmz general webpage template-->
<?php $title = "Washington State Cities - SeaFilmz"; ?>
<?php require_once "sftemplate.php"; ?>


    <meta name="description" content="SeaFilmz is your Seattle media connection with a focus on film.">
  </head>

  <body>
    <!--link to header-->
<?php require_once("sfheader.php"); ?>

        <?php         
            // 4. Release returned data
            mysqli_free_result($result);
        ?>

    <h2 class="WashingtonCitiesHeader"><b>Other Washington State Cities</b></h2>

    <div class="WashingtonCitiesContent">

      <p class="WashingtonCitiesLink"><a href="shoreline">Shoreline</a></p>

      <p class="WashingtonCitiesLink"><a href="lfp">Lake Forest Park</a></p>

      <p class="WashingtonCitiesLink"><a href="tukwila">Tukwila</a></p>

      <p class="WashingtonCitiesLink"><a href="burien">Burien</a></p>

      <p class="WashingtonCitiesLink"><a href="seatac">SeaTac</a></p>

      <p class="WashingtonCitiesLink"><a href="mercerisland">Mercer Island</a></p>

      <p class="WashingtonCitiesLink"><a href="medina">Medina</a></p>

      <p class="WashingtonCitiesLink"><a href="bellevue">Bellevue</a></p>

      <p class="WashingtonCitiesLink"><a href="renton">Renton</a></p>      

    </div>

    <!--link to footer-->
<?php require_once("sffooter.php"); ?>

  </body>

</html>