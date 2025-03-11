<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information collection Form</title>
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
            <h1 class="fs-1 my-5 text-center">Information collection Form </h1>
            <form action="action/sent.php" method="post" class="container p-5 border rounded-3 border-dark">
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
                <button type="submit" class="btn btn-primary btn-md px-3">submit</button>
            </form>
        </section>
    </main>


    <script>
        const form = document.getElementById("form");

        form.addEventListener("submit",function(pause){
            pause.preventDefault();

        })
    </script>
</body>

</html>