<?php
session_start();
include 'connection.php';
$msg = "";
if (isset($_SESSION['msg'])) {
  $msg = $_SESSION['msg'];
  unset($_SESSION['msg']);
}

if ($msg != "") {
  echo "<script> alert('$msg')</script>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->


      <!-- Main content -->
      <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard </h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
            </div>
          </div>
        </div>

        <!-- Add dashboard content here -->
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr class="bg-success" >
                  <th scope="col">ID</th>
                  <th scope="col">first_name</th>
                  <th scope="col">last_name</th>
                  <th scope="col">phone_number</th>
                  <th scope="col">email_address</th>
                  <th scope="col">municipal_problem</th>
                  <th scope="col">address</th>
                  <th scope="col">description</th>
                  <th scope="col">image</th>
                  <th scope="col">added_on</th>
                </tr>
              </thead>


              <tbody>
                <?php
                $sql = "select * from message ";
                $res = mysqli_query($conn, $sql);
                $sn = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                  $sn++;
                  // echo "<pre>";
                  // print_r($row);

                ?>
                  <tr>
                    <td>CIVI0-<?php echo $sn; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php echo $row['email_address']; ?></td>
                    <td><?php echo $row['municipal_problem']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><img src="uploads/<?php echo $row['image']; ?>"  width="250px" alt="Image"></td>
                    <td><?php echo $row['added_on']; ?></td>
                  <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

      </main>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>