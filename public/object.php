<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'question' => '',
	'description' => '',
	'code' => '',
	'date' => '',
);

$server = 'loclahost';
$username = 'root';
$password = '';








if ($id == 1) {
	$object = array(
		'title' => 'Programming Question #1',
		'question' => 'I\'m having trouble displaying a JavaScript alert',
		'description' => 'I think I\'m using the correct function, but I can\'t figure out what\'s wrong. could you point me in the right directon?',
		'code' => 'alert(This is a message)',
		'date' => 'June 1, 2015',			
	);

} elseif ($id == 2) {
	$object = array(
		'title' => 'Programming Question #2',
		'question' => 'My HTML list isn\'t displaying properly',
		'description' => 'I think I\'m using the correct list function,',
		'code' => '&lt;ul&gt;
			item 1
			item 2
			item 3
			&lt;/ul&gt;',
		'date' => 'June 16, 2015',
	);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $ojbect['title']; ?></title>
    </head>
    <body>
    	<h1><?php echo $object['question']; ?></h1>
        <p><?php echo $object['description']; ?></p>
        <pre>
        	<?php echo $object['code']; ?>
        </pre>
        <p> Question Date: <?php echo $object['date']; ?></p>
    </body>
</html>




