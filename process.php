<?php
// Connect to database
$conn = mysqli_connect('10.0.2.4', 'newuser', 'Sangita@11', 'nitishdb');
// Check connection
if (!$conn) {
die('Connection failed: ' . mysqli_connect_error());
}
// Handle form submission
if (isset($_POST['add'])) {
// Add new record
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email',
'$phone')";
mysqli_query($conn, $sql);
} elseif (isset($_POST['update'])) {
// Update existing record
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone' WHERE
id=$id";
mysqli_query($conn, $sql);
} elseif (isset($_POST['delete'])) {
// Delete existing record
$id = $_POST['id'];
$sql = "DELETE FROM contacts WHERE id=$id";
mysqli_query($conn, $sql);
}
// Close connection
mysqli_close($conn);
?>