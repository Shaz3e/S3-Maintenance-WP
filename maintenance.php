<?php
/**
 * maintenace page
 * Displays the page while wordpress is being updated.
 *
 * This will file stay at /wp-content/ folder
 *
 * @package WordPress
 * @subpackage S3Wordpress
 * @since S3 Framework 1.0
 */
$RetryTime = 60; //  Change refresh time (second)
$ops = "Ops!"; // Ops Text
$title = "You cought us while we updating our website."; // Change Title whatever here
$quote = "Patience is not simply the ability to wait <span>it's how we behave while we're waiting</span>"; // Change Quote here
$link = "https://www.diligentcreators.com"; // Change Website Link
$credit = "DiligentCreators"; // Change Credit but it's not good it will only be visible for 60 seconds and we deserve it

/* Stop Editing below this line */

/* Tell search engines that the site is temporarily unavilable */
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
	header( "$protocol 503 Service Unavailable", true, 503 );
	header( 'Content-Type: text/html; charset=utf-8' );
	header( 'Retry-After: '.$RetryTime );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset='UTF-8'>
	<title>Ops! We are updating our website</title>
	<link rel="stylesheet" href="/wp-content/maintenance/layout.css">
</head>
<body>
	<header>
		<img src="/wp-content/maintenance/logo.png" alt="DiligentCreators">
	</header>
	<div class="page-container">
		<div id="message">
			<h2>
				<strong><?php echo $ops; ?></strong>
				<?php echo $title; ?>
			</h2>
			<blockquote><?php echo $quote;?></blockquote>
			<div class="note">Page will reload in</div>
			<div id="countdown"></div>
			<div id="reload">
				<button type="button" onClick="window.location.reload();">Refresh Page</button>
			</div>
		</div>
	</div>

	<footer>
		<p>All &copy; rights <?php echo date("Y"); ?> are reserved by <a href="<?php echo $link;?>"><?php echo $credit;?></a></p>
	</footer>
	<script type="text/javascript">
		var timeLeft = <?php echo $RetryTime; ?>;
		var elem = document.getElementById('countdown');
		var timerId = setInterval(countdown, 1000);
		function countdown() {
			if (timeLeft == 0) {
				clearTimeout(timerId);
				window.location.reload();
			} else {
				elem.innerHTML = timeLeft + ' seconds remaining';
				timeLeft--;
			}
		}
	</script>
</body>
</html>