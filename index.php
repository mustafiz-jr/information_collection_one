<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information collection Form</title>
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- sweet alert css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css">

    <style>
        input:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <h1 class="fs-1 my-5 text-center">Information collection Form </h1>
            <form action="action/sent.php" method="post" class="container p-5 border rounded-3 border-dark" id="form">
                <input type="text" name="name" placeholder="Enter your name in here!" class=" fs-5 p-2 w-100 border-0 border-bottom ">
                <br>
                <br>
                <br>
                <input type="email" name="email" placeholder="Enter your email in here!" class=" fs-5 p-2 w-100 border-0 border-bottom ">
                <br>
                <br>
                <br>
                <input type="text" name="contact" placeholder="Enter your contact number here" class="fs-5 p-2 w-100 border-0 border-bottom">
                <br>
                <br>
                <br>
                <input type="text" name="course" placeholder="Enter your course name here" class="fs-5 p-2 w-100 border-0 border-bottom">
                <br>
                <br>
                <br>
                <input type="date" name="date" title="Enter your joining date here" class="fs-5 p-2 w-100 border-0 border-bottom">
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

    <!-- sweet alert js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>

    <script>
        const form = document.getElementById("form");

        form.addEventListener("submit", function(pause) {
            pause.preventDefault();
            const sweet = Swal.fire({
                title: "Are you sure to submit?",
                // text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Submit!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "submitted!",
                        text: "Your data has been submitted.",
                        icon: "success"
                    });
                    form.submit();
                }
            });

        })
    </script>
</body>

</html>