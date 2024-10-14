<?php

echo "Montassar";
echo '</br>';
print "Ben Brahim";
echo '</br>';
ECHO "Mohamed";
echo '</br>';
PRINT "Ben Brahim";



?>

<!-- Embedding PHP in HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Example</title>
</head>
<body>
    <h1>Welcome to my website!</h1>
    <p>Today's date is: 
        <?php 
            echo date('Y-m-d'); // PHP instruction inside PHP tags
        ?>
    </p>
</body>
</html>

<!-- Separation of PHP Logic and HTML : For better read the code. -->

<?php
    // PHP logic at the top
    $name = "Montassar";
    $currentTime = date("h:i:sa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Hello, <?= $name; ?>!</h1> <!-- Embedded PHP inside HTML -->
    <p>The current time is <?= $currentTime; ?></p> <!-- Using shorthand echo -->
</body>
</html>
