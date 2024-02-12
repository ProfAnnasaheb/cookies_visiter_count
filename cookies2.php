<?php
// Check if the cookie is set
if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    // If the cookie is not set, initialize the visit count to 1
    $visit_count = 1;
}

// Set the cookie to expire in 30 days
// setcookie('visit_count', $visit_count, time() + (30 * 24 * 60 * 60));
// Set the cookie to expire in 8 days in seconds format ie 691200
setcookie('visit_count', $visit_count, time() + (691200));

// Display the visit count
echo "You have visited this page $visit_count times.";
?>