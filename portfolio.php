<?php
$pageName = "Portfolio";
include ("inc_head.php");
?>
		<h1 class="banner">~ <?php echo $pageName; ?> ~</h1>
		<main class="content">

			<div class="cipherDemo">
				  <div id="widget">
				     <form>
				        Enter Key Text:<br>
				        <textarea name="plaintext2" id="plaintext2"></textarea>
				        <br>
				        Enter Your Text:<BR>
				        <textarea name="plaintext" id="plaintext"></textarea><br> 
				        <input type="radio" name="direction" id="encrypt" value="en" checked> Encipher<br>
				        <input type="radio" name="direction" id="decrypt" value="de"> Decipher<br>
				        <br>
				        <button type="button" id="av_button" class="button" onclick="ascii_vigenere(
				          document.getElementById('plaintext').value, 
				          document.getElementById('plaintext2').value,
				          document.getElementById('encrypt').value                                 
				        )">Encipher</button>
				     </form>

			     	<div  id="afields" class="fields">
			          Your Key:<br>
			        <div id="cyphertext2" class="outfields">
			          Key
			        </div>
			        Your Text:<br>
			        <div id="cyphertext" class="outfields">
			          Text
			        </div>

			        Your Cipher:<br>
			        <div id="outputtext" class="outfields">
			          OUT
			        </div> 
			      </div>
			    </div>

			</div>

			<hr>


<!--
			<div class="typing">
				<h1 class ="Xtyping">TYPING EFFECT</h1>
			</div><div class="typing">
				<h1>Left Aligned</h1>
			</div>
-->




		</main> 

<?php
include ("inc_foot.php");
?>