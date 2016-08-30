<?php
  include "partials/layout.php";
  include "db.php";

  $id = $_GET["id"];
  $page = $_GET["page"];
  $page_item = $_GET["page_item"];
  $sql_show = "SELECT * FROM $page WHERE `id` = $id ";
  $query = mysqli_query($db_con,$sql_show);
  $row = mysqli_fetch_assoc($query);

   ?>
   <?php if ($page == "home" && $page_item == "menu"){ ?>
    <div class="container " style="margin-top: 20px;">
      <h2>Menu item update</h2>
      <form class="" style="width: 200px;" action="" method="post">
        <input class="form-control" type="text" name="section" value="<?= $row["name"] ?>">
        <input type="hidden" name="page" value="<?=$page?>">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input class="btn btn-success" style="margin: 15px 0 ;" type="submit" name="submit" value="update">
          <a class="btn btn-success" href="admin.php">Back</a>
      </form>
    </div>

   <?php }
     if ($page == "home" && $page_item == "title"){
    ?>
    <div class="container " style="margin-top: 20px;">
      <h2>Title update</h2>
      <form class="" style="width: 400px;" action="" method="post">
        <input style="margin: 10px 0;" class="form-control" type="text" name="header" value="<?= $row["header"] ?>">
        <input style="margin: 10px 0;" class="form-control" type="text" name="blue_header" value="<?= $row["blue_header"] ?>">
        <input style="margin: 10px 0;" class="form-control" type="text" name="header_end" value="<?= $row["header_end"] ?>">
        <input style="margin: 10px 0;" class="form-control" type="text" name="subheader" value="<?= $row["subheader"] ?>">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input class="btn btn-success" style="margin: 15px 0 ;" type="submit" name="submit" value="update">
          <a class="btn btn-success" href="admin.php">Back</a>
      </form>
    </div>
    <?php
    }

   ?>

   <?php

  if (isset($_POST['submit']) && $page == "home" && $page_item == "menu") {
    if ($db_con) {
      $section = $_POST['section'];
      $id = $_POST['id'];
      $sql_up = "UPDATE home SET name = '$section' WHERE id=$id";
      $query = mysqli_query($db_con,$sql_up);
      if ($query) {
        header("Location:admin.php");
      }else {
         ?>
         <div class="container">
           <div class="alert alert-danger">Error</div>
         </div>
         <?php

      }




    }
  }

  if (isset($_POST['submit']) && $page == "home" && $page_item == "title") {
    if ($db_con) {
      $header = $_POST['header'];
      $blue_header = $_POST['blue_header'];
      $header_end = $_POST['header_end'];
      $subheader = $_POST['subheader'];
      $section = $_POST['section'];
      $id = $_POST['id'];
      $sql_up = "UPDATE home SET header = '$header', blue_header = '$blue_header', header_end = '$header_end', subheader = '$subheader' WHERE id=$id";
      $query = mysqli_query($db_con,$sql_up);
      if ($query) {
        header("Location:admin.php");
      }else {
         ?>
         <div class="container">
           <div class="alert alert-danger">Error</div>
         </div>
         <?php

      }




    }
  }
 ?>
 </body>
 </html>
