<?php

require 'Logger.php';

$logger = new Logger('./error.log');

try {
    throw new Exception('Login et ou mot de passe incorrect', 500);
} catch (Exception $e) {
    $logger->write($e);
}

?>
<html>
    <head>
        <title>Logger</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-striped">
            <tr>
                <th>Date</th>
                <th>Message</th>
                <th>Code</th>
                <th>Line</th>
                <th>File</th>
            </tr>
        <?php foreach ($logger->read() as $row) : ?>
            <tr>
                <td><?php echo $row['datetime'] ?></td>
                <td><?php echo $row['message'] ?></td>
                <td><?php echo $row['code'] ?></td>
                <td><?php echo $row['line'] ?></td>
                <td><?php echo $row['file'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
