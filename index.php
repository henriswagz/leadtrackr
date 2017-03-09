<?php
require('db.php');
require('utils.php');
require('header.php');

?>
    <div  data-role="page">
	<div data-role="header">
	<h1>LeadTracker</h1>
	</div>
	<div data-role="content">

<?php 
$action = $_REQUEST['action'];
if ($action == 'addnew') {
   showOneOpp(-1);
} else if ($action == 'upsert') {
	if ($_REQUEST['id'] == '-1') {
		addOpp($_REQUEST['person'],$_REQUEST['contact'],$_REQUEST['description']); 
	} else {
		updateOpp($_REQUEST['id'],$_REQUEST['person'],$_REQUEST['contact'],$_REQUEST['description']);
	}
   showOpps();
} else if ($action == 'delete') {
	killOpp($_REQUEST['id']);
	showOpps();
} else if ($action == 'details') {
	showOneOpp($_REQUEST['id']);
} else {
	showOpps();
}
?>
	</div>
	<div data-role="footer">
	&copy;2017. ADS Studios
	</div>
	</div>
<?php require('footer.php'); ?>
</body>
</html>


