<!--link to the start of a seafilmz general webpage template-->
<?php
  $title = "Seattle Movies by Runtime - SeaFilmz"; 
  $mDesc = "List of movies filmed fully or partly in the city of Seattle organized by runtime.";
  require_once "sftemplate.php";
?>


  <body>
    <!--link to header-->
<?php require_once("sfheader.php"); ?>


    <h2 class="MoviesPageHeader"><b>Movies Filmed in Seattle by Runtime</b></h2>

    <div class="MRTable">
    <table class="MovieRuntimeTable">
      <tr>
        <th class="MovieRuntimeColumnHeader1">Title</th>
        <th class="MovieRuntimeColumnHeader2">Runtime (Minutes)</th>
      </tr>

        <?php
            // 2. Perform database query
            $query = "SELECT * ";
            $query .= "FROM moviesfilminglocation ";
            $query .= "INNER JOIN movies ";
            $query .= "ON movies.MovieID = moviesfilminglocation.MovieID ";
            $query .= "INNER JOIN filminglocations ";
            $query .= "ON filminglocations.FilmingLocationID = moviesfilminglocation.FilmingLocationID ";
            $query .= "WHERE City = 'Seattle' ";
            $query .= "ORDER BY RunTime ASC, MovieTitle ";
            $result = mysqli_query($connection, $query);
            //Test if there was a query error
            if (!$result) {
                die("Database query failed.");
            }
        ?>

        <?php
            // 3. Use returned data (if any)
            while($movies = mysqli_fetch_assoc($result)) {
                // output data from each row
        ?>

      <tr class="MoviesContent">
        <td class="MovieTitlesContent"><b><a href= "<?php echo $movies["MoviePageLink"]; ?>"><?php echo $movies["MovieTitle"]; ?></a></b></td>
        <td class="MovieRuntimeContent"><?php echo $movies["RunTime"]; ?></td>
      </tr>

        <?php
            }
        ?>

        <?php  
            // 4. Release returned data
            mysqli_free_result($result);
        ?>

        </table>
        </div>

    <div class="MTRTable">
    <table class="MovieTotalRuntimeTable">
      <tr class="MoviesContent">
        <th class="MovieTotalRuntimeRowHeader">Total Seattle Movie Runtime</th>

        <?php
            // 2. Perform database query
            $query = "SELECT SUM(RunTime) ";
            $query .= "FROM moviesfilminglocation ";
            $query .= "INNER JOIN movies ";
            $query .= "ON movies.MovieID = moviesfilminglocation.MovieID ";
            $query .= "INNER JOIN filminglocations ";
            $query .= "ON filminglocations.FilmingLocationID = moviesfilminglocation.FilmingLocationID ";
            $query .= "WHERE City = 'Seattle' ";
            $result = mysqli_query($connection, $query);
            //Test if there was a query error
            if (!$result) {
                die("Database query failed.");
            }
        ?>

        <?php
            // 3. Use returned data (if any)
            while($movies = mysqli_fetch_assoc($result)) {
                // output data from each row
        ?>

        <td class="MovieTotalRuntimeNumber"><?php echo $movies["SUM(RunTime)"]; ?> Minutes</td>
      </tr>

        <?php
            }
        ?>

        <?php  
            // 4. Release returned data
            mysqli_free_result($result);
        ?>

    </table>
    </div>

    <!--link to footer-->
<?php require_once("sffooter.php"); ?>

  </body>

</html>

<?php
    // 5. Close database connection
    mysqli_close($connection);
?>