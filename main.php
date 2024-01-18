<?php 

$words = array("sol", "luna", "cielo", "oceano", "tierra");
$unorder_words = array();

foreach ($words as $word) {
    $unorder_words[] = str_shuffle($word);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order words</title>
    <!-- Enlazar archivos CSS de Bootstrap desde el CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Enlazar archivos JS de Bootstrap desde el CDN (opcional, pero necesario para algunas funcionalidades) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>Order the words</h1>
        <form action="app.php">
            <?php 
                for ($i=0; $i < count($words); $i++) {
                    echo "<div class='form-group'>";
                    echo "<label for='word-".$i."'>".$unorder_words[$i]."</label>";
                    echo "<input type='text' class='form-control' name='word-".$i."' id='word-".$i."'>";
                    echo "</div>";
                }
            ?>
            <button class="btn btn-primary" type="submit">Send</button>
        </form>
    </div>
</body>
</html>
