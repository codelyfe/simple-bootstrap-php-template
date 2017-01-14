<?php
#SITE TITLE
echo  '<title>Title Goes Here</title>';
?>

<?php
#META
echo  '<meta charset="UTF-8">';
echo  '<meta name="description" content="Site Description">';
echo  '<meta name="keywords" content="PHP,HTML,CSS,XML,JavaScript">';
echo  '<meta name="author" content="CodeLyfe">';
echo  '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
?>

<?php
#JQUERY
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
#BOOTSTRAP CSS
echo "<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";
#BOOTSTRAP JAVASCRIPT
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
?>

<?php
#STYLE
echo '<style>';

#BODY STYLE
echo 'body{background:#31708f;}';
#echo 'body{background:#000;}'; // DARK
#echo 'body{background:#fff;}'; // LIGHT
#echo 'body{background-image: url("paper.gif");}'; //BACKGROUND IMAGE

#END STYLE
echo '</style>';
?>

<?php
#VARIABLES

#TABS
$tab0 ="Home";
$tab1 ="About";
$tab2 ="Contact";
$tab3 ="Portfolio";

#PAGE HEADER
$phh ="Site Name";
$phs ="By:Your Name";
$phc ="#fff"; //Color

#FOOTER
$copyright ="Copyright ©";
$sitename ="YourSite.Com";
$year ="2017";
$footcolor ="#fff";
$ftextalign ="right"; // center,left,right
$ffontweight ="bold";

?>

<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

<br/><br/>

<div class="container">

<div class="page-header">
  <h1 style="color: <?php echo $phc; ?>;"><?php echo $phh; ?> <br/><small><kbd><?php echo $phs; ?></kbd></small></h1>
</div>

</div>

<div class="container" style="background: #fff; border-radius: 5px; padding-bottom: 10px;">
<br/>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
    <a href="#tab0" aria-controls="tab0" role="tab" data-toggle="tab">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> <?php echo $tab0; ?>
    </a>
    </li>
    <li role="presentation">
    <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $tab1; ?>
    </a>
    </li>
    <li role="presentation">
    <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php echo $tab2; ?>
    </a>
    </li>
    <li role="presentation">
    <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> <?php echo $tab3; ?>
    </a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    
    <div role="tabpanel" class="tab-pane active" id="tab0">
    <div class="jumbotron" style="background: #fff;">
	  <h1>Hello, world!</h1>
	  <p>...</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>
    </div>

    <div role="tabpanel" class="tab-pane" id="tab1">
    ...
    </div>
    
    <div role="tabpanel" class="tab-pane" style="text-align: center;" id="tab2">
    <!---->
    <br/><br/>
	<form class="form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
				<?php echo "<p class='text-danger'>$errName</p>";?>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
				<?php echo "<p class='text-danger'>$errEmail</p>";?>
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
				<?php echo "<p class='text-danger'>$errMessage</p>";?>
			</div>
		</div>
		<div class="form-group">
			<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
				<?php echo "<p class='text-danger'>$errHuman</p>";?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<?php echo $result; ?>	
			</div>
		</div>
	</form> 
	
	<?php
		if (isset($_POST["submit"])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$human = intval($_POST['human']);
			$from = 'YOUR SITE FORM'; // From your site form
			$to = 'YOURCONTACT@EMAIL.COM'; // Add your contact email here
			$subject = 'SOMEONE IS TRYING TO CONTACT YOU'; // Add Subject Here
			
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	 
			// Check if name has been entered
			if (!$_POST['name']) {
				$errName = 'Please enter your name';
			}
			
			// Check if email has been entered and is valid
			if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$errEmail = 'Please enter a valid email address';
			}
			
			//Check if message has been entered
			if (!$_POST['message']) {
				$errMessage = 'Please enter your message';
			}
			//Check if simple anti-bot test is correct
			if ($human !== 5) {
				$errHuman = 'Your anti-spam is incorrect';
			}
	 
	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
		} else {
			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		}
	}
		}
	?>

    <!---->
    </div>
    
    <div role="tabpanel" class="tab-pane" id="tab3">
    ...
    </div>
  
  </div>

</div>


<div class="container">
<footer style="text-align: <?php echo $ftextalign; ?>; color: <?php echo $footcolor; ?>; font-weight: <?php echo $ffontweight; ?>;">
<?php echo $copyright; ?> <?php echo $sitename; ?> <?php echo $year; ?>
</footer>
</div>

<?php

?>