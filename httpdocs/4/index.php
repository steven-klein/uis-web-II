<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Assignment 4</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css" />
        <style>
            .container {
                max-width: 500px;
            }

            h1,
            table th, table td {
                text-align: center;
            }

            table strong {
                color: red;
            }
        </style>
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div class="column">
                    <h1>Number Chart</h1>
                    <form  method="post">
                        <fieldset>
                            <label for="limit">Enter Limit:</label>
                            <input type="number" name="limit" min="10" max="500" step="10" value="<?php echo (!empty($_POST["limit"])) ? $_POST["limit"] : ""; ?>" required/>
                            <input type="submit" value="submit" />
                        </fieldset>
                    </form>
                    <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST["limit"]))
                    {
                        $limit = $_POST['limit'];
                        print "<table>
                                <thead>
                                    <tr>
                                        <th colspan='10'>
                                            1 - $limit Prime Numbers Are Red
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>";
                                    $num = 1;
                                    do
                                    {
                                        $isPrime = true;
                                        $endRow = ($num % 10 === 0);

                                        if($num == 1 || ($num != 2 && $num % 2 == 0))
                                        {
                                            $isPrime = false;
                                        }
                                        else
                                        {
                                            $ceil = ceil(sqrt($num));
                                            for($i = 3; $i <= $ceil; $i = $i + 2)
                                            {
                                                if($num % $i == 0)
                                                {
                                                    $isPrime = false;
                                                }
                                            }

                                        }

                                        print ($isPrime) ? "<td>
                                            <strong>
                                                $num
                                            </strong>
                                        </td>" : "<td>
                                            $num
                                        </td>";

                                        print($endRow) ? ($num != $limit) ? "</tr><tr>" : "</tr>" : "";

                                        $num++;

                                    } while ($num <= $limit);
                        print "</tbody>
                        </table>";
                    }
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>
