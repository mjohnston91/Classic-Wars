<?php echo $header; ?>
<div id="main_content">
	<div id="profileTop">
		<h3 id="profileName"><?php echo $profile->username; ?> of the Altairoeno Kingdom</h3>
		<ul id="profileLinks">
			<li><a href="<?php echo URL::to_attack_new(array($profile->username)); ?>">Attack</a> - </li>
			<li><a href="<?php echo URL::to_compose(array($profile->username)); ?>">Message</a></li>
		</ul>
		<br style="clear:both;" />
	</div>
	<div id="profileLeft" style="width:300px; float:left;">
		<img src="/images/profiles/profile.gif" />
	</div>
	<div id="profileRight" style="width:370px; float:right; margin-right:15px;">
		<h3 style="margin:0;">Profile Description</h3>
		<p>Ut praesent tation facilisis, nulla velit, minim tation te vero consectetuer duis. Dolore quis, et sit ad augue enim vel dolore dolor. Ea lorem diam molestie consequatvel duis ex et?</p>
	</div>
</div>
<?php echo $footer; ?>