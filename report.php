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

    <!-- sweet alert css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">

</head>

<body>
    <main>
        <section>
            <h1 class="fs-1 text-center my-5">Report of Collected Data</h1>
            <br>
            <table class="table table-hover container">
                <?php if ($result->num_rows > 0) { ?>
                    <thead class="table-dark">
                        <tr class="p-2">
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
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tbody class="table-secondary">
                            <tr>
                                <td scope="row"><?php echo $row['id'] ?></td>
                                <td scope="row"><?php echo $row['name'] ?></td>
                                <td scope="row"><?php echo $row['email'] ?></td>
                                <td scope="row"><?php echo $row['contact'] ?></td>
                                <td scope="row"><?php echo $row['course'] ?></td>
                                <td scope="row"><?php echo $row['date'] ?></td>
                                <td scope="row">
                                    <?php if ($row['status'] == 1) { ?>
                                        <a href="action/on-off.php?id= <?php echo $row['id'] ?>" class="btn btn-info" id="on">On</a>
                                    <?php } else { ?>
                                        <a href="action/on-off.php?id= <?php echo $row['id'] ?>" class="btn btn-warning" id="off">Off</a>
                                    <?php } ?>
                                </td>
                                <td scope="row">
                                    <a href="action/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" id="del">Delete</a>
                                </td>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm" id="edit">Edit</a>
                                </td>

                            </tr>
                        <?php } ?>
                        </tbody>
            </table>
        <?php } else { ?>
        </section>
        <p>Nothing is inserted!</p>
    <?php } ?>
    <br>
    <br>
    <div class="container">

        <a href="index.php" class="btn btn-secondary px-4 py-2">Return to Form page</a>
    </div>
    </main>

    <!-- sweet alert js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>

    <script>
        // turning on popup showing code
        const on = document.getElementById("on");
        on.addEventListener("click", function(stop) {
            stop.preventDefault();
            Swal.fire({
                position: "bottom-end",
                title: "Turned ON!",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = on.href;
                }
            })
        })

        // turning off popup showing code
        const off = document.getElementById("off");
        off.addEventListener("click", function(stop) {
            stop.preventDefault();
            Swal.fire({
                position: "bottom-start",
                title: "Turned OFF!",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = on.href;
                }
            })
        })



        // delete confirmation code
        const del = document.getElementById("del");

        del.addEventListener('click', function(pause) {
            pause.preventDefault();
            Swal.fire({
                title: "Are you sure to delete?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes! Delete"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        position:"bottom-start",
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        // Redirect to the delete.php page with the ID parameter
                        window.location.href = del.href; // This will navigate to the URL in the 'href' attribute of the <a> tag
                    })
                }
            });
        });



        // edit confirmaiton popup
        const edit = document.getElementById("edit");
        edit.addEventListener('click', function(stop) {
            stop.preventDefault();
            Swal.fire({
                title: "Are you sure you want to edit?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = edit.href; 
                }
            });
        });
    </script>
</body>

</html>