<?php
$pageName = "Portfolio";
include ("inc_head.php");
?>
		<h1 class="banner">~ <?php echo $pageName; ?> ~</h1>
		<main class="content">


			<div class="typing">
				<h1 class ="Xtyping">This is a TYPING EFFECT. It is good for headlines.</h1>
			</div>

			<hr>

			<div class="cipherDemo">
				<form action="submit">
					<label class="cdescription" for="ctype">Cipher Type: </label><br>
					<select class="cipher" id="ctype" name="ctype"> 
						<option value="1"  selected="selected">Caesar</option>
						<option value="2" >Vigenere</option>
						<option value="3" >ASCII Vigenere</option>
					</select><br><br>
					<label class="cdescription" for="cdir">Cipher Direction: </label><br>
						<input type="radio" name="cdirection" id="cencrypt" value="en" checked> Encipher<br>
        				<input type="radio" name="cdirection" id="cdecrypt" value="de"> Decipher<br>
					<br>
					<label class="cdescription" for="textKey">Key Text: </label><br>
						<textarea id="textKey" name="textKey" class="element text" type="text" maxlength="255" ></textarea><br><br>
					<label class="cdescription" for="textIn">Input Text: </label><br>
						<textarea id="textIn" name="textIn" class="element text" type="text" maxlength="255" ></textarea><br><br>

					<button type="button" id="cbutton" class="button" onclick="cipherDemo(
			          document.getElementById('ctype').value, 
			          document.getElementById('cdir').value,
			          document.getElementById('textKey').value,
			          document.getElementById('textIn').value                                 
			        )">Encipher</button>
				</form>
				<div class="cipherDemoOut">
					<p id="cipherOut" class="cipherDemoOut">
					</p>
				</div>

			</div>




		</main> 

<?php
include ("inc_foot.php");
?>