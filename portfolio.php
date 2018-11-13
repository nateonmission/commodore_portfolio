<?php
$pageName = "Portfolio";
include ("inc_head.php");
?>
		<h1 class="banner">~ <?php echo $pageName; ?> ~</h1>
		<main class="content">

			<div class="cipherDemo">
				<h2>ASCII-Vigenere</h2>
				<p class="cipherDemo">
					This widget demonstrates the a variation on the Vigenere cipher. In a traditional Vigenere cipher, a KEY text is given, each letter of the KEY represents that letter's place in the alphabet (e.g. A=1, B=2, C=3). Each letter of the PLAIN text is then shifted by that amount. If the result goes past Z the start over at A. When you reach the end of the KEY, start back at the beginning. For example:
				</p>
				<p class="cipherDemo">
					KEY: ALOE<br>
					gives: 1, 12, 15, 5
					<br><br>
					PLAIN text:<br> "Help me"
					<br><br>
					Renders a CIPHER of:<br>
					"Iqau nq"
				</p>
				<p class="cipherDemo">
					This variation uses the ASCII table as its basis. a space is 0, and exclamation point is 1 and a tilda is 94. This also means that upper and lower case letter have different values.
					This widget only works for non-accented letter and the most common puctuation used in North American English. 
				</p>

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




		</main> 

<?php
include ("inc_foot.php");
?>