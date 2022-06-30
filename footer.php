	<footer>
        <br>
        <div class="last-modified">
            <p>The php file rendering this page was last modified on
                <?php echo date ("F d, Y, g:i a T", filemtime(__FILE__));?>
            </p>
        <br>
        </div>
        <br>
        <div class="validator">
            <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fphp.ad4mtech.com%2F"><img src="http://php.ad4mtech.com/images/w3c.png" alt="W3C Validator"></a>
        </div>
        <br>
        <div class="social">
            <a href="https://facebook.com"><img src="http://php.ad4mtech.com/images/social.webp" alt="Social Media Icons"></a>
        </div>
        <br>
		<p><a href="/index.php">CSIS410 WEB ENTERPRISE TECHNOLOGIES HOMEPAGE</a></p>
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
            echo '<p><a href="/logout.php">LOG OUT</a></p>';
            }
            $today = new DateTime('now');
            ?>

		<p>&copy Copyright <?php echo $today->format('Y'); ?> by Ben Lamb</p>
        <br>
	</footer>
</main>

</body>

</html>