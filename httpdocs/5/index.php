<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Assignment 5</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css" />
        <style>
            .container {
                max-width: 500px;
            }

            h1 {
                text-align: center;
            }

            .decreased {
                color: red;
            }

            .increased {
                color: green;
            }
        </style>
    </head>
    <body>
        <?php
            $census = [
                '1790' => 3929214,
                '1800' => 5236631,
                '1810' => 7239881,
                '1820' => 9638453,
                '1830' => 12866020,
                '1840' => 17069453,
                '1850' => 23191876,
                '1860' => 31443321,
                '1870' => 38558371,
                '1880' => 49371340,
                '1890' => 62979766,
                '1900' => 76212168,
                '1910' => 92228531,
                '1920' => 106021568,
                '1930' => 123202660,
                '1940' => 132165129,
                '1950' => 151325798,
                '1960' => 179323175,
                '1970' => 203211926,
                '1980' => 226545805,
                '1990' => 248709873,
                '2000' => 281421906,
                '2010' => 308745538
            ];
        ?>
        <main class="container">
            <div class="row">
                <div class="column">
                    <h1>US Census Population Change Calculator</h1>
                    <form method="post">
                        <fieldset>
                            <label for="year-one">Year 1:</label>
                            <select name="year-one" id="year-one">
                                <?php foreach($census as $year => $pop){
                                    $selected = (!empty($_POST["year-one"]) && $_POST["year-one"] == $year) ? "selected='selected'" : "";
                                    print "<option value='$year' $selected>$year</option>";
                                } ?>
                            </select>
                            <label for="year-two">Year 2:</label>
                            <select name="year-two" id="year-two">
                                <?php foreach($census as $year => $pop){
                                    $selected2 = (!empty($_POST["year-two"]) && $_POST["year-two"] == $year) ? "selected='selected'" : "";
                                    print "<option value='$year' $selected2>$year</option>";
                                } ?>
                            </select>
                            <input type="submit" value="submit" />
                        </fieldset>
                    </form>
                    <?php
                    if(
                        $_SERVER['REQUEST_METHOD'] == 'POST' &&
                        !empty($_POST["year-one"]) &&
                        !empty($_POST["year-two"])
                    ){
                        $y1 = $_POST['year-one'];
                        $y2 = $_POST['year-two'];
                        $diff = $census[$y1] - $census[$y2];
                        $isNegative = ($diff < 0) ? true : false;
                        $direction = ($isNegative) ? "increased": "decreased";

                        print "<table>
                                <tbody>
                                    <tr>
                                        <td>
                                         Population $y1:
                                        <strong>".number_format($census[$y1])."</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                         Population $y2:
                                        <strong>".number_format($census[$y2])."</strong>
                                        </td>
                                    </tr>
                                    <tr class='$direction'>
                                        <td colspan='2'>
                                         <strong>";
                                         if($diff === 0){
                                             print "The population showed no change: 0";
                                         }else{
                                             print "The Population $direction by ".number_format(abs($diff));
                                         }
                                   print "</strong>
                                        </td>
                                    </tr>
                                    </tbody>
                        </table>";
                    }
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>
