<?php
if ($_GET && isset($_GET['password_length'])) {
    // recuper la password
    $password_length = $_GET['password_length'];

    // $cryptedPassword = genera una password nuova della stessa lunghezza
    $cryptedPassword = createRandomPassword($password_length, isset($_GET['letters']), isset($_GET['numbers']), isset($_GET['symbols']));
};


// funzione per generare la password randomicamente
function createRandomPassword($length, $includeLetters, $includeNumbers, $includeSymbols)
{
    $length = (int)$length;

    $characters = '';

    // inserire caratteri, numeri, simboli
    if ($includeLetters) {
        $characters .= 'abcdefghilmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    };

    if ($includeNumbers) {
        $characters .= '0123456789';
    };

    if ($includeSymbols) {
        $characters .= '+"*¬°#@¦ç&/(=?!£)à{]}[.,-;:_\~';
    };



    // shuffle dei caratteri
    $shuffle_characters = str_shuffle($characters);

    // return il risultato -> nuova password criptata della stessa lunghezza
    return substr($shuffle_characters, 0, $length);
};


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
                <form class="col-10 offset-1 bg-light p-3 rounded" method="GET" action="">
                    <!-- lunghezza password -->
                    <div class="mb-3">
                        <label for="password-length" class="form-label">Password length</label>
                        <input type="number" class="form-control" id="password-length" name="password_length" required>
                    </div>

                    <!-- inclusione lettere -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="letters">
                        <label class="form-check-label" for="letters">Letters</label>
                    </div>

                    <!-- inclusione numeri -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="numbers">
                        <label class="form-check-label" for="numbers">Numbers</label>
                    </div>

                    <!-- inclusione simboli -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="symbols">
                        <label class="form-check-label" for="symbols">Symbols</label>
                    </div>

                    <!-- ripetizione caratteri -->
                    <div class="row mb-3">
                        <p>Allow repetition of characters: </p>
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="radio" name="character-repetition-yes"
                                id="character-repetition-yes">
                            <label class="form-check-label" for="character-repetition-yes">
                                Yes
                            </label>
                        </div>
                        <div class="form-check ms-2">
                            <input class="form-check-input" type="radio" name="character-repetition-no"
                                id="character-repetition-no">
                            <label class="form-check-label" for="character-repetition-no">
                                No
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- Div con la nuova password -->
                <div class="col-10 offset-1 mt-3 bg-light">
                    <p>New Password: <?php echo isset($cryptedPassword) ? $cryptedPassword : ''; ?></p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>