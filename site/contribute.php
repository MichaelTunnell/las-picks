<?php 
include 'common.php';
$pagetitle	= $pt_contribute;
$pagenav	= $nav_contribute;
$pageakey	= $ak_contribute;
include 'header.php';
?>
	<div class="wrapper">
		<div class="dhead">
			<h3>Contributions are Welcomed and Encouraged</h3>
		</div>
		<div class="about">				
			<p>These are the weekly picks provided by the Jupiter Broadcasting podcast, the Linux Action Show.</p>
			<p>This site includes a separate picks lists for the "Runs Linux", Desktop Apps, Spotlight Picks, Android Picks, and Distro Picks.</p>
		</div>
	</div>
	<div class="wrapper howtoapi">
		<div class="howto">
			<div class="inwrap">
				<h3>How to Contribute</h3>
				<ul>
					<li>You'll need a GitHub Account</li>
					<li>Fork this repository to your account.</li>
					<li>Edit just ONE file, <strong>data.php</strong></li>
					<li>Submit a Pull Request</li>
				</ul>
				<p>Watch the video to know how to structure the updates. The process is actually very simple and straight-forward...you will need to edit these files but you don't need to know how to code in order to do it. The video explains everything you need to know.</p>
				<br />
				Link: not ready yet
				<br /><br />
				<h3>How to Keep your Forked Repo in Sync with the Master Repo</h3>
				<ul>
					<li>I have created a video to explain it because GitHub is kind of weird about how this is done.</li>
				</ul>
				<iframe width="560" height="315" src="//www.youtube.com/embed/C5WxrnRVmuY?rel=0" frameborder="0" allowfullscreen></iframe><br />
				Link: <a href="http://youtu.be/C5WxrnRVmuY">http://youtu.be/C5WxrnRVmuY</a>
			</div>
		</div>
		<div class="api">
			<div class="inwrap">
				<h3>API</h3>
				<p>JSON<br /><a href="api.php?of=json">api.php?of=json</a></p>
				<p>XML<br /><a href="api.php?of=xml">api.php?of=xml</a></p>
				<p>PHP<br /><a href="api.php?of=php">api.php?of=php</a></p>
				<p class="note">Note* - the PHP data is Serialized so you will need to use the <strong>unserialize();</strong> function to use the array.</p>
			</div>
		</div>
	</div>
	<div class="wrapper contribute">
		<div class="contributors">
			<div class="inwrap">
				<h3>Contributors - <a href="https://github.com/MichaelTunnell/las-picks/graphs/contributors">view commits</a></h3>
				<ul>
					<li><strong>Michael Tunnell<br />(aka RottNKorpse)</strong><br />
						Links: <a href="http://michaeltunnell.com">Website</a> | <a href="https://github.com/MichaelTunnell">GitHub</a><br />
						Contributions:<br />
						Site Designer &amp; Developer<br />
						Data Array Construction<br />
						List Structure Development<br />
						API Developer<br />
						Data Contributor
					</li>
					<li><strong>andrewlivi</strong><br />
						Links: <a href="https://github.com/andrewlivi">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>computerfr33k</strong><br />
						Links: <a href="https://github.com/computerfr33k">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>crossroads1112</strong><br />
						Links: <a href="https://github.com/crossroads1112">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>dardevelin</strong><br />
						Links: <a href="https://github.com/dardevelin">GitHub</a><br />
						Contributions:<br />
						List Structure Development<br />
						Data Array Construction
					</li>
					<li><strong>Dave H. Taylor</strong><br />
						Links: <a href="https://github.com/davehtaylor">GitHub</a><br />
						Contributions:<br />
						Archive Data Contributor
					</li>
					<li><strong>htesligte</strong><br />
						Links: <a href="https://github.com/htesligte">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>hubertbanas</strong><br />
						Links: <a href="https://github.com/hubertbanas">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>skullplate</strong><br />
						Links: <a href="https://github.com/skullplate">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>spletni.janez</strong><br />
						Contributions:<br />
						Archive Data Contributor
					</li>
					<li><strong>textheadmin</strong><br />
						Links: <a href="https://github.com/textheadmin">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>thefenriswolf</strong><br />
						Links: <a href="https://github.com/thefenriswolf">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>thercast</strong><br />
						Links: <a href="https://github.com/thercast">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
					<li><strong>TimoDJatomika</strong><br />
						Links: <a href="https://github.com/TimoDJatomika">GitHub</a><br />
						Contributions:<br />
						Data Contributor
					</li>
				</ul>
				</div>
		</div>
		<div class="clr"></div>
	</div>
<?php
include 'footer.php';
?>