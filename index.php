<!-- use this as a template to start a bootstrap page -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=none">
		<title>Firee | Time's Up!</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container container-fluid cover">
		<center><img src="images/logo.png" class="logo"></center>
			<div class="jumbotron header">
				<h1 class="pitch">Know if it is a good day to fire one of your employees. Then fire them.</h1>
				<!--<form action="result.php" method="GET">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3">
							<div class="form-group">
								<input class="form-control input-custom" type="text" name="twhandle" placeholder="Enter Your Twitter Handle" id="twitterhandle">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-sm-offset-3">
										<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-send"></span> &nbsp;Should I fire him today?</button>
									</div>	
								</div>
							</div>	
						</div>
					</div>
				</form>	-->
				<form action="result.php" method="get">
				<input type="text" name="twhandle" class="form-control input-custom" placeholder="handle of the lucky person" />
				<br>
				<input type="submit" value="Submit" class="btn btn-default" style="font-size: 45px;">
				</form>
			</div>
			<div class="footer">
			<p class="footer-description"><i>Firing is as important as hiring. Seriously. We're not Kidding. </i>

Every idea starts with a problem. Ours was simple - hiring was getting too much importance. We couldn't take it anymore. Hence, Firee was born with one very simple goal: <b>
Help managers FIRE better</b>.
The concept of Firee was inspired on 12 December 2015 at API Hackday. However, it was not the first idea we had for the day. We started with improving customer care, went on the help you get the most food for the least money. Everything we came up with was just too mainstream. We hate cliches, and that is the reason Firee is growing at a very fast pace and is used by 900+ companies to meet their current firing needs.
Along with many other peaks Firee has scaled, Firee proudly wears the tag of "Fastest from Shit-to-Shittier" in recruitment space, with its recent Series-NULL funding on feburary 30, 2015.
</p>
			</div>
		</div>
	</body>
</html>
