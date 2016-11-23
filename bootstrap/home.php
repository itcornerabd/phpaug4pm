<?php include './include/constr.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Home Page</title>
   <?php include './include/meta.php'; ?>
  </head>

  <body>

  <?php include './include/nav.php'; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
      <?php 

        $query = "select * from category ";

        $rows = mysqli_query($con,$query);
        if(!$rows)
          die("error in selection");

        while($rs=mysqli_fetch_array($rows)):
       ?>

        <div class="col-md-4">
          <h2> <?=$rs['name']; ?> </h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="category.php?id=<?=$rs['id']?>" role="button">View details &raquo;</a></p>
        </div>
        <?php endwhile ?>
      </div>

      <hr>

     <?php include './include/footer.php'; ?>

    </div> <!-- /container -->


    </body>
</html>
