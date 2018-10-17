<?php
$pageName = "Main";
include ("inc_head.php");
?>


<main>
	<div class="outter">
		<div class="comp">
			<br>
			<h1 class="comp">
			**** COMMODORE&nbsp;64&nbsp;BASIC&nbsp;V.2&nbsp;****
			</h1>
			<h1 class="comp">
			64K&nbsp;RAM&nbsp;SYSTEM&nbsp;38911&nbsp;BASIC&nbsp;BYTES&nbsp;FREE
			</h1>
			<br>
			<span class="comp">READY.</span><br>
			<span class="comp">LOAD "CURRICULUMVITAE",8</span><BR><br>
			<span class="comp">SEARCHING FOR CURRICULUMVITAE</span><BR>
			<span class="comp">LOADING</span><BR><br>
			<span class="comp">READY.</span><BR>
			<span class="comp">LIST</span><BR>
			<br>
			<h2 class="comp" id="cl">10 NAME = "J. NATHAN ALLEN"</h2>
			<h2 class="comp" id="cl">20 EMAIL = "NATEONMISSION@GMAIL.COM"</h2>
			<h2 class="comp" id="cl">25 PRINT "              "</h2>
			<h2 class="comp" id="cl">30 PRINT "************************"</h2>
			<h2 class="comp" id="cl">40 PRINT "*** CLICKABLE SKILLS ***"</h2>
			<h2 class="comp" id="cl">50 PRINT "************************"</h2>
			<h2 class="comp" id="cl">55 PRINT "              "</h2>
			<h2 class="comp pointer" id="cl" onclick="popUpBox('exp_cl')">60 PRINT "PROGRAMMING LANGUAGES"</h2>
				<div class="popuptext" id="exp_cl">
					<ul>
						<li>Python</li>
						<li>JavaScript</li>
						<li>C / C++ </li>
					</ul>
				</div>
			<h2 class="comp pointer" id="hw" onclick="popUpBox('exp_hw')">70 PRINT "HARDWARE AND TROUBLESHOOTING"</h2>
				<div class="popuptext" id="exp_hw">
					<ul>
						<li>PC Construction</li>
						<li>Home Networking</li>
						<li>Internet Help Desk</li>
					</ul>
				</div>
			<H2 class="comp pointer" id="hl" onclick="popUpBox('exp_hl')">80 PRINT "HUMAN LANGUAGES"</H2>
				<div class="popuptext" id="exp_hl">
					<ul>
						<li>English</li>
						<li>German</li>
						<li>French </li>
						<li>Portuguese</li>
					</ul>
				</div>
			<H2 class="comp pointer" id="chl" onclick="popUpBox('exp_chl')">90 PRINT "CHURCH LEADERSHIP"</H2>
				<div class="popuptext" id="exp_chl">
					<ul>
						<li>Teens' Education</li>
						<li>Elementary Dept Coordination</li>
						<li>Mission Trip Leader</li>
					</ul>
				</div>
			<br>
			<span class="comp">READY.</span><br>
			<span class="comp">&#9646;</span><br><br>
		</div>
	</div>


</main>

  </body>

</html>
<script src="js/main.js"></script>



<!--
		<main class="marquee">
			<h1 class="marquee">Hello, I am nateonmission (&nbsp;Nathan&nbsp;Allen&nbsp;)</h1>
			<h2 class="marquee"></h2>
			<h3 class="marquee"></h3>


			<form method="#" id="skills">
				<select name="domains" id="domains">
				  <option value="cs">Coding / Software</option>
				  <option value="cw">Computer Hardware</option>
				  <option value="hl">Human Lanuages</option>
				  <option value="chs">Christian Service</option>
				  <option value="ent">Entrepreneurship</option>
				</select>
				<button type="button" onclick="skills(document.getElementById('domains').value)" class="button" id="skillBtn">Update Skill List</button>
			</form>

			<content id="skillList">
			</content>


		</main> 


?php
include ("inc_foot.php");
?>
-->