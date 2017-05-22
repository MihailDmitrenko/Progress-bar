<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>

	<link rel="stylesheet" href="../css/style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- initialize all tooltips -->


</head>
<body>	
	<div class="container">		
		<div class="progress"> 
			<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-placement="top" title="Доставлено писем 12" style="width:5%">
				15% 
			</div>
			<div class="progress-bar progress-bar-warning progress-bar-striped" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="width:20%"> 
				20% 
			</div>
			<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="width:10%"> 
				10% 
			</div>
			<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="width: 35%">
				35%
			</div>
			<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="width: 10%">
				10%	
			</div>
		</div>
		<hr>
		<form action="../models/data.php" method="post"> </br>
			<input type="text" placeholder="totat_count" name="total_count">
			<input type="text" placeholder="delivered" name="delivered">
			<input type="text" placeholder="fail" name="fail">
			<input type="text" placeholder="open" name="open">
			<input type="text" placeholder="click" name="click">
			<input type="submit" placeholder="Отправить">
		</form>
	</div>

	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

</body>
</html>