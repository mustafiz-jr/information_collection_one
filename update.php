<?php
include("action/database.php");

$update = sprintf("SELECT * FROM `data` WHERE `id`=%s",$_GET['id']);
$result = $connect->query($update);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        input:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <h1 class="fs-1 my-5 text-center">Information Update Form </h1>
            <form action="action/edit.php" method="post" class="container p-5 border rounded-3 border-dark">
                <input type="text" name="name" value="<?php echo $row['name'] ?>" class=" fs-5 p-2 w-100 border-0 border-bottom ">
                <br>
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <br>
                <br>
                <input type="email" name="email" value="<?php echo $row['email'] ?>" class=" fs-5 p-2 w-100 border-0 border-bottom ">
                <br>
                <br>
                <br>
                <input type="text" name="contact" value="<?php echo $row['contact'] ?>" class="fs-5 p-2 w-100 border-0 border-bottom">
                <br>
                <br>
                <br>
                <input type="text" name="course" value="<?php echo $row['course'] ?>" class="fs-5 p-2 w-100 border-0 border-bottom">
                <br>
                <br>
                <br>
                <input type="date" name="date" value="<?php echo $row['date'] ?>" class="fs-5 p-2 w-100 border-0 border-bottom">
                <br>
                <br>
                <br>
                <div class="d-flex gap-5">
                    <button type="submit" class="btn btn-primary btn-md px-3">submit</button>
        <a href="report.php" class="btn btn-secondary px-4 py-1">Go to Report page</a>
                </div>
            </form>
        </section>
    </main>

</body>

</html>