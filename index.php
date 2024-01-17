<?php



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <main>
        <section class="container-fluid">
            <div class="row">
                <h1 class="text-light text-center">Strong Password Generator</h1>
                <h2 class="text-light fs-3 text-center mb-5">Generate a strong, secure, awesome, beautiful and clean
                    password.
                </h2>
                <form class="col-10 offset-1 bg-light p-3 rounded">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password length</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Letters</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Numbers</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Symbols</label>
                    </div>
                    <!-- ripetizione caratteri -->
                    <div class="row mb-3">
                        <p>Allow repetition of characters: </p>
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </main>


</body>

</html>