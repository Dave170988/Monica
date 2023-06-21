<?php
// Simulate a logged-in user
$user = [
  'username' => 'John Doe'
];

// Return the user data as JSON
header('Content-Type: application/json');
echo json_encode($user);
?>
