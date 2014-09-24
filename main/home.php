<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Home page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				The Home Page
			</div>
			
			<?php include("./resource/header/header.php");?>
			
			<div id="content" style="color: white;">
				<h1>Hello Sanni !!!</h1>
                
                <div id="countdown" style="font-size: 2em; font-family: exocetlight;">
                  Moving in:
                  <script language="JavaScript">
                    TargetDate = "9/1/2014 0:00 AM";
                    BackColor = "transparent";
                    ForeColor = "white";
                    CountActive = true;
                    CountStepper = -1;
                    LeadingZero = true;
                    DisplayFormat = "%%D%% Days, %%H%% Hrs, %%M%% Mins, %%S%% Secs.";
                    FinishMessage = "It is finally here!";
                  </script>
                  <script language="JavaScript" src="http://scripts.hashemian.com/js/countdown.js"></script>
                </div>
                
				<br><br>
				Love is… <br>
				Love is feeling cold in the back of vans<br>
				Love is a fanclub with only two fans<br>
				Love is walking holding paintstained hands<br>
				Love is.<br>
				Love is fish and chips on winter nights<br>
				Love is blankets full of strange delights<br>
				Love is when you don’t put out the light<br>
				Love is<br>
				Love is the presents in Christmas shops<br>
				Love is when you’re feeling Top of the Pops<br>
				Love is what happens when the music stops<br>
				Love is<br>
				Love is white panties lying all forlorn<br>
				Love is pink nightdresses still slightly warm<br>
				Love is when you have to leave at dawn<br>
				Love is<br>
				Love is you and love is me<br>
				Love is prison and love is free<br>
				Love’s what’s there when you are away from me<br>
				Love is…<br>
				<br>
				
			</div>
		
			<?php include("./resource/footer/footer.php");?>
			
		</div>
	</body>
   
</html>