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
                    <?php if(isset($_POST) && !empty($_POST)): ?>
                    <table>
                        <tbody>
                            <tr>
                                <td>Name: </td>
                                <td><?php echo !empty($_POST["name"]) ? $_POST["name"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>Address: </td>
                                <td><?php echo isset($_POST["address"]) ? $_POST["address"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>City: </td>
                                <td><?php echo isset($_POST["city"]) ? $_POST["city"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>State: </td>
                                <td><?php echo isset($_POST["state"]) ? $_POST["state"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>Zip Code: </td>
                                <td><?php echo isset($_POST["zipcode"]) ? $_POST["zipcode"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td><?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>Customer Type: </td>
                                <td><?php echo isset($_POST["customer"]) ? $_POST["customer"] : ""; ?></td>
                            </tr>
                            <tr>
                                <td>Notes: </td>
                                <td><?php echo isset($_POST["notes"]) ? $_POST["notes"] : ""; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php else: ?>
                        <p>
                            No customer record available!
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </body>
</html>
