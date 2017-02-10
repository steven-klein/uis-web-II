<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Assignment 3 | Volume Calculator Output</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css" />
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div class="column column-75">
                    <h1>Volume Calculator Output</h1>
                    <?php
                        $rectangleWidth = !empty($_POST["rectangleWidth"]) ? $_POST["rectangleWidth"] : 0;
                        $rectangleLength = isset($_POST["rectangleLength"]) ? $_POST["rectangleLength"] : 0;
                        $rectangleHeight = isset($_POST["rectangleHeight"]) ? $_POST["rectangleHeight"] : 0;
                        $rectangleVolume = $rectangleWidth * $rectangleLength * $rectangleHeight;

                        $coneRadius = isset($_POST["coneRadius"]) ? $_POST["coneRadius"] : 0;
                        $coneHeight = isset($_POST["coneHeight"]) ? $_POST["coneHeight"] : 0;
                        $coneVolume = (1/3) * pi() * pow($coneRadius, 2) * $coneHeight;

                        if(isset($_POST) && !empty($_POST))
                        {
                            print "<p>Summary of Calculations:</p>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan='2'>
                                                <strong>Volume of Rectangle</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Length: </td>
                                            <td>$rectangleLength</td>
                                        </tr>
                                        <tr>
                                            <td>Width: </td>
                                            <td>$rectangleWidth</td>
                                        </tr>
                                        <tr>
                                            <td>Height: </td>
                                            <td>$rectangleHeight</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                The Volume of the Rectangle is:
                                            </td>
                                            <td>
                                                <strong>$rectangleVolume</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='2'>
                                                <strong>Volume of a Cone</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Radius: </td>
                                            <td>$coneRadius</td>
                                        </tr>
                                        <tr>
                                            <td>Height: </td>
                                            <td>$coneHeight</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                The Volume of the Cone is:
                                            </td>
                                            <td>
                                                <strong>$coneVolume</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>";
                        }
                        else
                        {
                            echo "<p>No calculations to report.</p>";
                        }
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>
