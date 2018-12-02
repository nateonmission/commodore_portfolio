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
			<h2 class="comp" id="cl">005 NAME = "J. NATHAN ALLEN"</h2>
			<h2 class="comp" id="cl">010 EMAIL = "NATEONMISSION@GMAIL.COM"</h2>
			<h2 class="comp" id="cl">015 MYJOB = "FRONT-END DEVELOPER"</h2>
			<h2 class="comp" id="cl">020 PRINT "              "</h2>
			<h2 class="comp" id="cl">025 PRINT "************************"</h2>
			<h2 class="comp" id="cl">030 PRINT "***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MENU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***"</h2>
			<h2 class="comp" id="cl">035 PRINT "************************"</h2>
			<h2 class="comp" id="cl">040 PRINT "              "</h2>
			<h2 class="comp" id="cl">045 PRINT "<a href="gallary.php" class="comp">GALLARY</a>"</h2>
			<h2 class="comp" id="cl">050 PRINT "<a href="portfolio.php" class="comp">PORTFOLIO</a>"</h2>
			<h2 class="comp" id="cl">055 PRINT "<a href="gallary.php" class="comp">ABOUT</a>"</h2>
			<h2 class="comp" id="cl">060 PRINT " "</h2>
			<h2 class="comp" id="cl">065 PRINT "************************"</h2>
			<h2 class="comp" id="cl">070 PRINT "*** CLICKABLE SKILLS ***"</h2>
			<h2 class="comp" id="cl">075 PRINT "************************"</h2>
			<h2 class="comp" id="cl">080 PRINT "              "</h2>
			<h2 class="comp pointer" id="cl" onclick="popUpBox('exp_cl')">085 PRINT "PROGRAMMING LANGUAGES"</h2>
				<div class="popuptext" id="exp_cl" onclick="popUpBox('exp_cl')">
					<ul>
						<li class="comp">JavaScript</li>
						<li class="comp">Python</li>
						<li class="comp">C# </li>
					</ul>
				</div>
			<h2 class="comp pointer" id="hw" onclick="popUpBox('exp_hw')">090 PRINT "HARDWARE AND TROUBLESHOOTING"</h2>
				<div class="popuptext" id="exp_hw" onclick="popUpBox('exp_hw')">
					<ul>
						<li class="comp">PC Construction</li>
						<li class="comp">Home Networking</li>
						<li class="comp">Internet Help Desk</li>
					</ul>
				</div>
			<H2 class="comp pointer" id="hl" onclick="popUpBox('exp_hl')">095 PRINT "HUMAN LANGUAGES"</H2>
				<div class="popuptext" id="exp_hl" onclick="popUpBox('exp_hl')">
					<ul>
						<li class="comp">English</li>
						<li class="comp">German</li>
						<li class="comp">French </li>
					</ul>
				</div>
			<H2 class="comp pointer" id="chl" onclick="popUpBox('exp_chl')">100 PRINT "CHURCH LEADERSHIP"</H2>
				<div class="popuptext" id="exp_chl" onclick="popUpBox('exp_chl')">
					<ul>
						<li class="comp">Teens' Education</li>
						<li class="comp">Preschool Dept Coordination</li>
						<li class="comp">Mission Trip Leader</li>
					</ul>
				</div>
			<h2 class="comp" id="cl">105 PRINT "              "</h2>
			<h2 class="comp" id="cl">110 PRINT "************************"</h2>
			<h2 class="comp" id="cl">115 PRINT "***&nbsp;&nbsp;&nbsp;SOCIAL MEDIA&nbsp;&nbsp;&nbsp;***"</h2>
			<h2 class="comp" id="cl">120 PRINT "************************"</h2>
			<h2 class="comp" id="cl">125 PRINT "              "</h2>
			<h2 class="comp" id="cl">130 PRINT "<a href="https://github.com/nateonmission" target=_blank class="comp">GITHUB</a>"</h2>
			<h2 class="comp" id="cl">135 PRINT "<a href="http://www.linkedin.com/in/nateonmission/" target=_blank class="comp">LINKEDIN</a>"</h2>
			<h2 class="comp" id="cl">140 PRINT "<a href="http://www.twitter.com/nateonmission" target=_blank class="comp">TWITTER</a>"</h2>
			<h2 class="comp" id="cl">145 PRINT " "</h2>
			<span class="comp">READY.</span><br>
			<span class="comp">&#9646;</span><br><br>
		</div>
	</div>




		<div class="marquee">
			<hr class="marquee">
			<h1 class="marquee">J. Nathan Allen</h1>
			<h2 class="marquee">nateonmission@gmail.com</h2>
			<hr class="marquee">

			<h3 class="marquee" onclick="expandUL('mcl')">Programming Languages</h3>
			<ul class="marquee" id="mcl">
				<li class="marquee"><span class="marquee">Python</span></li>
				<li class="marquee"><span class="marquee">JavaScript</span></li>
				<li class="marquee"><span class="marquee">C / C++</span></li>
			</ul>

			<h3 class="marquee" onclick="expandUL('mht')">Hardware & Troubleshooting</h3>
			<ul class="marquee" id="mht">
				<li class="marquee"><span class="marquee">PC Construction</span></li>
				<li class="marquee"><span class="marquee">Home Networking</span></li>
				<li class="marquee"><span class="marquee">Internet Help Desk</span></li>
			</ul>

			<h3 class="marquee" onclick="expandUL('mhl')">Human Languages</h3>
			<ul class="marquee" id="mhl">
				<li class="marquee"><span class="marquee">English</span></li>
				<li class="marquee"><span class="marquee">German</span></li>
				<li class="marquee"><span class="marquee">French</span></li>
				<li class="marquee"><span class="marquee">Portuguese</span></li>
			</ul>

			<h3 class="marquee" onclick="expandUL('mchl')">Church Leadership</h3>
			<ul class="marquee" id="mchl">
				<li class="marquee"><span class="marquee">Teens' Education</span></li>
				<li class="marquee"><span class="marquee">Elementary Dept Coordination</span></li>
				<li class="marquee"><span class="marquee">Mission Trip Leader</span></li>
			</ul>
		</div>

</main>


<?php
include ("inc_foot.php");
?>




	


