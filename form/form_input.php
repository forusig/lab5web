<?php
require_once 'database.php';
require_once 'form.php';

$db = new Database();
$conn = $db->getConnection();
$form = new Form($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modular Lab5Web</title>
  <link rel="stylesheet" type="text/css" href="form/form.css">
</head>
<body>
	<h1>Modular Lab5Web</h1>
	<?php
	// Check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Process form data
		$form->processForm($_POST);
	}
	// Display form
	$form->displayForm();
	?>
</body>
</html>