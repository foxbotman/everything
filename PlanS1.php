<html>
	<head>
		<title>ผลสำเร็จตามแผนปฏิบัติการ</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<title>BOT TRAIN PEA S.1</title>
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<style type="text/css">
			.row-center
			{
				text-align:center;
			}
			body
			{
				font-family: 'Kanit', sans-serif;
			}
		</style>
		<?php
			$server = "us-cdbr-iron-east-01.cleardb.net";
			$username = "b798786b8aa714";
			$password = "2e0e0451";
			$db = "heroku_ce52199dd4f50e1";
			$conn = new mysqli($server, $username, $password, $db);
			mysqli_query($conn, "SET NAMES utf8");
		?>
	</head>
	<body>
		<div class="container-fluid" style="background-color:pink;">
		<div class="row row-center">
				<div class="col-lg-4 offset-lg-4" style="background-color:yellow;">
					<h4>ผลสำเร็จตามแผนปฏิบัติการ</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12"style="background-color:gray;">
					<form>
						<div class="form-group">
						<label for="sel1">ชื่อ กฟฟ.:</label>
						<select class="form-control" id="sel1">
						<option>เพชรบุรี</option>
						<option>ราชบุรี</option>
						<option>สมุทรสงคราม</option>
						<option>ประจวบฯ</option>
						<option>ชุมพร</option>
						<option>ระนอง</option>
						<option>หัวหิน</option>
						<option>ปราณบุรี</option>
						<option>โพธาราม</option>
						<option>ชะอำ</option>
						<option>บางสะพาน</option>
						<option>จอมบึง</option>
						<option>หลังสวน</option>
						<option>ท่าแซะ</option>
						</select>
						</div>
					</form>
					<form>
						<div class="form-group">
						<label for="sel1">ไตรมาสที่:</label>
						<select class="form-control" id="sel1">
						<option>ไตรมาสที่ 1</option>
						<option>ไตรมาสที่ 2</option>
						<option>ไตรมาสที่ 3</option>
						<option>ไตรมาสที่ 4</option>
						</select>
						</div>
							<div class="form-group">
							<input class="btn btn-primary btn-block" type="submit" value="send">
							</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
