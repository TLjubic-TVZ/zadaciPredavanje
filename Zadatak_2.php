<!DOCTYPE html>
<head>

    

    <title>Zadatak 2</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            padding: 0;
            margin: 0;
            font-family: "Poppins";
        }
        form {
            width: 30%;
            margin: 5% auto auto;
            padding: 3%;

            -webkit-box-shadow: 0px 0px 20px -10px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 20px -10px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 20px -10px rgba(0,0,0,0.75);
        }
        form label {
            display: block;
        }
        form input {
            background-color: #E7E7E7;
            border: none;
            outline: none;
            padding: 7px;
            width: 70%;
        }
        form input[type="submit"] {
            background-color: #D5F9D3 !important;
            text-transform: uppercase;
            padding: 10px 20px;
            font-weight: 600;
            font-size: 12px;
            width: 30%;
        }
        form input[type="submit"]:hover {
            cursor: pointer;
        }
        .rezultat {
            background-color: #D5F9D3;
            width: 30%;
            margin: 2% auto auto;
            padding: 3%;

            -webkit-box-shadow: 0px 0px 20px -10px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 20px -10px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 20px -10px rgba(0,0,0,0.75);
        }

    </style>

</head>
<body>

    <form action="Zadatak_2.php" method="GET">

        <label>Ime studenta: </label><input type="text" name="imeStudenta"><br><br>
        <label>Ocijena 1. kolokvija: </label><input type="number" name="kolokvij_1" min="1" max="5"><br><br>
        <label>Ocijena 2. kolokvija: </label><input type="number" name="kolokvij_2" min="1" max="5"><br><br>

        <input type="submit" value="Potvrditi">

    </form>

    <?php
        if (!empty($_GET["imeStudenta"]) || !empty($_GET["kolokvij_1"]) || !empty($_GET["kolokvij_2"]) ) {
            $student = $_GET["imeStudenta"];
            $kolokvij_1 = $_GET["kolokvij_1"];
            $kolokvij_2 = $_GET["kolokvij_2"];
        }
    ?>
        <div class="rezultat">
            <?php
                if (!empty($_GET["imeStudenta"]) || !empty($_GET["kolokvij_1"]) || !empty($_GET["kolokvij_2"]) ) {
                    if ($kolokvij_1 == 1 || $kolokvij_2 == 1) {
                        echo "Student " . $student . " je iz kolegija ostvario ukupnu ocijenu: 1.";
                    }
                    else if ($kolokvij_1 > 1 && $kolokvij_2 > 1) {
            
                        $prosjek = ($kolokvij_1 + $kolokvij_2) / 2;
                        $ocijena = round($prosjek);
            
                        echo "Student " . $student . " je iz kolegija ostvario ukupnu ocijenu: " . $ocijena . ", s ukupnim prosjekom ocijena iz dva kolokvija: " . $prosjek . ".";
                    }
                    else {
                        echo "Student " .$student . " mora izaći na ispit.";
                    }
                }
            ?>
        </div>


</body>
</html>