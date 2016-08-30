<?php
  include "partials/layout.php";
  include "db.php";
 ?>
       <div class="container">
            <h1>Administrator paneli</h1>

                <?php
                session_start();

                 if(!$_SESSION['login'] == true){
                     header('Location:index.php');
                 } ?>



            <BUTTON class="alert alert-success"><a href='admin.php?page=home'>Home</a></BUTTON>
            <BUTTON class="alert alert-success"><a href='logout.php'>LOGOUT</a></BUTTON>

<!--========= Home  start=========-->
            <?php
              if (isset($_GET['page']) && $_GET['page'] == "home") {
            ?>
            <div class="row">
              <div class="col-md-5">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info">
                      <th>id</th>
                      <th>Menu item</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    if ($db_con) {
                      $sql = "SELECT * FROM `home`";
                      $query = mysqli_query($db_con,$sql);
                      while ($row = mysqli_fetch_assoc($query)) {
                  ?>
                      <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td>
                          <a class="btn btn-success" href="update.php?page=home&page_item=menu&id=<?= $row["id"] ?>">Update</a>
                        </td>
                      </tr>
                  <?php
                      }
                    }
                  ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-7">
                  <table class="table table-bordered">
                    <thead>
                      <tr class="info">
                        <th>Header</th>
                        <th>Blue header</th>
                        <th>Header end</th>
                        <th>Subheader</th>
                        <th><Action></Action></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        if ($db_con) {
                          $sql = "SELECT * FROM `home`";
                          $query = mysqli_query($db_con,$sql);
                          $row = mysqli_fetch_assoc($query);
                      ?>
                          <tr>
                            <td><?= $row["header"] ?></td>
                            <td><?= $row["blue_header"] ?></td>
                            <td><?= $row["header_end"] ?></td>
                            <td><?= $row["subheader"] ?></td>
                            <td>
                              <a class="btn btn-success" href="update.php?page=home&page_item=title&id=<?= $row["id"] ?>">Update</a>
                            </td>
                          </tr>
                      <?php

                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>





<!--========= Home end =========-->

            <?php
              }
            ?>


        </div>
    </body>
</html>
