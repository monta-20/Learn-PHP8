<?php

/*
    PHP DateTime Examples
*/

// 1. Creating DateTime Object
echo "<h3>1. Creating DateTime Object</h3>";

$now = new DateTime();
echo "Current Date and Time: " . $now->format('Y-m-d H:i:s') . "<br>";

$specificDate = new DateTime('2024-10-10 15:00:00');
echo "Specific Date and Time: " . $specificDate->format('Y-m-d H:i:s') . "<br>";

// 2. Modifying DateTime
echo "<h3>2. Modifying DateTime</h3>";

$now->modify('+1 day');
echo "After Adding 1 Day: " . $now->format('Y-m-d H:i:s') . "<br>";

$now->modify('-2 hours');
echo "After Subtracting 2 Hours: " . $now->format('Y-m-d H:i:s') . "<br>";

// 3. Comparing DateTime Objects
echo "<h3>3. Comparing DateTime Objects</h3>";

$date1 = new DateTime('2024-01-01');
$date2 = new DateTime('2024-12-31');

if ($date1 < $date2) {
  echo "Date1 (2024-01-01) is earlier than Date2 (2024-12-31)<br>";
} else {
  echo "Date1 is later than Date2<br>";
}

// 4. DateTime Formatting
echo "<h3>4. DateTime Formatting</h3>";

$date = new DateTime();
echo "Year-Month-Day: " . $date->format('Y-m-d') . "<br>";
echo "Formatted Date: " . $date->format('l, jS F Y') . "<br>";
echo "Time: " . $date->format('H:i:s') . "<br>";

// 5. Date Intervals
echo "<h3>5. Date Intervals</h3>";

$date = new DateTime('2024-10-10');
$interval = new DateInterval('P2M'); // 2 months interval
$date->add($interval); // Add 2 months
echo "After Adding 2 Months: " . $date->format('Y-m-d') . "<br>";

$date->sub(new DateInterval('P15D')); // Subtract 15 days
echo "After Subtracting 15 Days: " . $date->format('Y-m-d') . "<br>";

// 6. DateTime Difference
echo "<h3>6. DateTime Difference</h3>";

$date1 = new DateTime('2024-01-01');
$date2 = new DateTime('2024-12-31');
$diff = $date1->diff($date2);

echo "Difference Between 2024-01-01 and 2024-12-31: " . $diff->format('%y years, %m months, %d days') . "<br>";

// 7. Timezones
echo "<h3>7. Timezones</h3>";

$date = new DateTime('now', new DateTimeZone('UTC'));
echo "Current Time in UTC: " . $date->format('Y-m-d H:i:s') . " UTC<br>";

$date->setTimezone(new DateTimeZone('America/New_York'));
echo "Time in New York: " . $date->format('Y-m-d H:i:s') . " New York<br>";

// 8. Create DateTime from Timestamp
echo "<h3>8. Create DateTime from Timestamp</h3>";

$timestamp = time();
$date = new DateTime();
$date->setTimestamp($timestamp);
echo "Current Date and Time from Timestamp: " . $date->format('Y-m-d H:i:s') . "<br>";

// 9. Clear File Cache Example
echo "<h3>9. File Cache Example (clearstatcache)</h3>";

$filename = "example.txt";
if (file_exists($filename)) {
  echo "File exists before cache clearing.<br>";
} else {
  echo "File does not exist before cache clearing.<br>";
}

file_put_contents($filename, "Hello World!");
clearstatcache();

if (file_exists($filename)) {
  echo "File exists after creating and clearing cache.<br>";
} else {
  echo "File still does not exist.<br>";
}

unlink($filename);
clearstatcache();

if (!file_exists($filename)) {
  echo "File successfully deleted.<br>";
} else {
  echo "File still exists after deletion.<br>";
}

?>
/*
1. Creating DateTime Object
Current Date and Time: 2024-10-15 13:14:30
Specific Date and Time: 2024-10-10 15:00:00
2. Modifying DateTime
After Adding 1 Day: 2024-10-16 13:14:30
After Subtracting 2 Hours: 2024-10-16 11:14:30
3. Comparing DateTime Objects
Date1 (2024-01-01) is earlier than Date2 (2024-12-31)
4. DateTime Formatting
Year-Month-Day: 2024-10-15
Formatted Date: Tuesday, 15th October 2024
Time: 13:14:30
5. Date Intervals
After Adding 2 Months: 2024-12-10
After Subtracting 15 Days: 2024-11-25
6. DateTime Difference
Difference Between 2024-01-01 and 2024-12-31: 0 years, 11 months, 30 days
7. Timezones
Current Time in UTC: 2024-10-15 11:14:30 UTC
Time in New York: 2024-10-15 07:14:30 New York
8. Create DateTime from Timestamp
Current Date and Time from Timestamp: 2024-10-15 13:14:30
9. File Cache Example (clearstatcache)
File does not exist before cache clearing.
File exists after creating and clearing cache.
File successfully deleted.
*/