<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Assignment 2 | Customer</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css" />
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div class="column column-75">
                    <h1>Customer Record</h1>
                    <?php
                        $name = !empty($_POST["name"]) ? $_POST["name"] : "";
                        $address = isset($_POST["address"]) ? $_POST["address"] : "";
                        $city = isset($_POST["city"]) ? $_POST["city"] : "";
                        $state = isset($_POST["state"]) ? $_POST["state"] : "";
                        $zipcode = isset($_POST["zipcode"]) ? $_POST["zipcode"] : "";
                        $email = isset($_POST["email"]) ? $_POST["email"] : "";
                        $type = isset($_POST["customer"]) ? $_POST["customer"] : "";
                        $notes = isset($_POST["notes"]) ? $_POST["notes"] : "";
                        if(isset($_POST) && !empty($_POST))
                        {
                            print "<table>
                                    <tbody>
                                        <tr>
                                            <td>Name: </td>
                                            <td>$name</td>
                                        </tr>
                                        <tr>
                                            <td>Address: </td>
                                            <td>$address</td>
                                        </tr>
                                        <tr>
                                            <td>City: </td>
                                            <td>$city</td>
                                        </tr>
                                        <tr>
                                            <td>State: </td>
                                            <td>$state</td>
                                        </tr>
                                        <tr>
                                            <td>Zip Code: </td>
                                            <td>$zipcode</td>
                                        </tr>
                                        <tr>
                                            <td>Email: </td>
                                            <td>$email</td>
                                        </tr>
                                        <tr>
                                            <td>Customer Type: </td>
                                            <td>$type</td>
                                        </tr>
                                        <tr>
                                            <td>Notes: </td>
                                            <td>$notes</td>
                                        </tr>
                                    </tbody>
                                </table>";
                        }
                        else
                        {
                            echo "<p>No customer record available!</p>";
                        }
                    ?>
                </div>
            </div>
        </main>
    </body>
</html>
