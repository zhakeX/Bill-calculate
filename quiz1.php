<!DOCTYPE html>
<html>

<head>
    <title>Cuboid Calculator</title>
</head>

<body>
    <h2>Cuboid Calculator</h2>
    <form action="" method="post">
        <label for="length">Length:</label>
        <input type="number" name="length" required><br><br>

        <label for="width">Width:</label>
        <input type="number" name="width" required><br><br>

        <label for="height">Height:</label>
        <input type="number" name="height" required><br><br>

        <input type="submit" name="calculate_surface_area" value="Surface Area">
        <input type="submit" name="calculate_volume" value="Volume">
        <input type="submit" name="calculate_length_of_edges" value="Length of Edges">
    </form>

    <?php
    function calculateSurfaceArea($length, $width, $height)
    {
        return 2 * ($length * $width + $width * $height + $height * $length);
    }

    function calculateVolume($length, $width, $height)
    {
        return $length * $width * $height;
    }

    function calculateLengthOfEdges($length, $width, $height)
    {
        return 4 * ($length + $width + $height);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];
        $height = $_POST["height"];

        if (isset($_POST["calculate_surface_area"])) {
            $result = calculateSurfaceArea($length, $width, $height);
            echo "<p>Surface Area: $result</p>";
        } elseif (isset($_POST["calculate_volume"])) {
            $result = calculateVolume($length, $width, $height);
            echo "<p>Volume: $result</p>";
        } elseif (isset($_POST["calculate_length_of_edges"])) {
            $result = calculateLengthOfEdges($length, $width, $height);
            echo "<p>Length of Edges: $result</p>";
        }
    }
    ?>
</body>

</html>