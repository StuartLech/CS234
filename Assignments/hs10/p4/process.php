<?php
// Turn on error reporting.
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Function to retrieve and sanitize a value from the POST array.
function getValue($key) {
    if (isset($_POST[$key])) {
        // Use trim to remove whitespace from the beginning and end of the string.
        // Use htmlspecialchars to convert special characters to HTML entities to prevent XSS attacks.
        return htmlspecialchars(trim($_POST[$key]));
    }
    return '';
}

// Function to check if a checkbox is checked and return its sanitized value or null if not checked.
function getCheckboxValue($key, $value) {
    if (isset($_POST[$key]) && in_array($value, $_POST[$key])) {
        return htmlspecialchars($value);
    }
    return null;
}

// Validate the month text box.
$month = getValue('month');
$monthMessage = $month ? "Month: $month" : "Month: Not provided";

// Validate the marital status radio buttons.
$maritalStatus = getValue('maritalStatus');
$maritalStatusMessage = $maritalStatus ? "Marital status: $maritalStatus" : "Marital status: Not provided";

// Validate the favorite music genre check boxes.
$musicGenres = ['Pop', 'Reggae', 'Rock'];
$selectedGenres = [];
foreach ($musicGenres as $genre) {
    $checkedValue = getCheckboxValue('favoriteMusicGenre', $genre);
    if ($checkedValue !== null) {
        $selectedGenres[] = $checkedValue;
    }
}
$musicGenreMessage = $selectedGenres ? "Favorite music genre: <ul><li>" . implode("</li><li>", $selectedGenres) . "</li></ul>" : "Favorite music genre: Not provided";

// Validate the state dropdown.
$state = getValue('state');
$stateMessage = $state ? "State: $state" : "State: Not provided";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Processing Results</title>
    <meta charset="utf-8">
</head>
<body>

    <h1>Form Processing Results</h1>

    <p><?php echo $monthMessage; ?></p>
    <p><?php echo $maritalStatusMessage; ?></p>
    <p><?php echo $musicGenreMessage; ?></p>
    <p><?php echo $stateMessage; ?></p>

</body>
</html>
