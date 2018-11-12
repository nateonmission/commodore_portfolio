<?php
$pageName = "About";
include ("inc_head.php");
?>
		<h1 class="banner">~ <?php echo $pageName; ?> ~</h1>
		<main class="content">


			<div id="titlePage">
			<h2> &#60;CodeLouisville&#62; Project </h2>

			<p class="about">presented in partial fulfillment of</p>

			<h2> Front-End Web Development</h2>

			<p class="about">by</p>

			<h2> J. Nathan Allen</h2>
			<p class="about">Fall 2018</p>
			<br><br>
			<p class="about">A live version of this project can be found at: <a href='http://nateonmission.com'>http://nateonmission.com</a></p>
			</div>
			<h2>Description</h2>
			<p>
			My prject is the foundation of a portfolio website.  It includes PHP, JavaScript, and custom CSS. 

			- Since my first computer was a Commodore 64, I gave the main page the apperance of the C64 boot screen.  
			It presents skill catagories that provide pop-ups with details when clicked.  
			The C64 screen colapses to an expandable unordered list on small screens.  

			- The gallery page demonstrates flex-box and a few hover and click effects.

			- The portfolio page contains some additional JavaScript widgets.
			</p>

			<h2> Selected Custom CSS Classes</h2>
			<p>
			.nav-item - This class defines the style details of the upper navagation bar on all the pages.
			on the DIV, it sets the font details (family and size), and the justification.
			It affects the A tags by defining their hover behavior.

			.comp - The Commodore 64 boot screen is built using this class.  It defines an outter DIV and 
			an inner DIV each with differing values of blue, as is the Commodore screen.  The text-related 
			tags are also affected as it defines the teminal-style monospace font and size.

			.portfolio and .portfolioItem - These classes build the flex-box gallery.

			.social-media - In the footer, this is the class that makes the social media links looklike 
			buttons and define their hover effect.
			</p>

			<h2> JavaScript Functions</h2>
			<p>
			popUpBox - When the C64 screen is visible on the index.php page, this function enables 
			the pop-up boxes

			expandUL - On small screens, this function expands the unordered list to reveal 
			the sub-lists.

			ascii_vigenere - This is the functional componant of the ciphering widget on the 
			profile.php page. It takes the key and input text and either encyphers or deciphers 
			the input text.
			</p>











		</main> 

<?php
include ("inc_foot.php");
?>