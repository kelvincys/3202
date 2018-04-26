<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "name") {
if (strlen($value) < 1) {
echo "Please fill in your name";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "number") {
if (strlen($value) != 8) {
echo "Please enter a phone number";
} else {
echo "<span>Vaild</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (!preg_match("/([w-]+@[w-]+.[w-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span>Valid</span>";
}
}
?>

