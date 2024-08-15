<?php
phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Document</title>
</head>


<body>
    <article>Hasil = <span id="hasil"></span>
    </article>

    <button>Hasil</button>
    <button name="action" value="save">Simpan</button>
    <button name="action" value="edit">Edit</button>
    <button name="action" value="delete">Delete</button>


    <script>
        let total = 10;
        total += 5;

        $(document).ready(function() {
            $("#hasil").html(total);
        })

        // mendefinisikan fungsi dengan expresi fungsi
        let myFunction = function() {
            alert("this is my function")
        }
        // mendefinisikan fungsi anonim
        $(document).ready(function() {
            alert("hello this is my function")
        })

        // menambahkan event onclick dengan jquery dengan selector attribute name
        $("button[name='action']").on("click", function() {
            let action = $(this).attr("value");
            alert(action);
        })
    </script>


</body>

</html>