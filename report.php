<?php
include("action/fetch.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report </title>

      <!--Bootstrap link-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main>
        <section>
            <h1 class="fs-1 text-center my-5">Report of Collected Data</h1>
            <br>
            <table class="table table-hover">
                <?php if($result->num_rows>0){ ?>
  <thead class="table-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Course</th>
      <th scope="col">DOB</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <?php while($row = $result->fetch_assoc()){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <th scope="row"><?php echo $row['name'] ?></th>
      <th scope="row"><?php echo $row['email'] ?></th>
      <th scope="row"><?php echo $row['contact'] ?></th>
      <th scope="row"><?php echo $row['course'] ?></th>
      <th scope="row"><?php echo $row['date'] ?></th>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php }else{ ?>
        </section>
        <p>Nothing is inserted!</p>
        <?php } ?>
    </main>
</body>
</html>