<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

echo "<strong>First Name:</strong> " . $_POST[firstname]. "<br />";
echo "<strong>Last Name:</strong> " . $_POST[lastname]. "<br />";
echo "<strong>Company:</strong> " . $_POST[company]. "<br />";
echo "<strong>Subject:</strong> " . $_POST[subject]. "<br />";
echo "<strong>Email:</strong> " . $_POST[email]. "<br />";

echo "<strong>Message:</strong> " . $_POST[comments]. "<br />";


?>
</body>
</html>