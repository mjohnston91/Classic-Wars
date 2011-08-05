<html>
	<title>Admin Panel</title>
	
	<body>
		<?php
		if(Session::get('success')) ?>
			News successfully posted!
		<?php echo Form::open(); ?>
		<dt><?php echo Form::label('title', 'Post Title'); ?></dt>
		<dd><?php echo Form::text('title'); ?></dd>
		
		<dt><?php echo Form::label('message', 'Message'); ?></dt>
		<dd><?php echo Form::textarea('message'); ?></dd>
		
		<dt>Username: <?php echo $user->username; ?></dt>
		<br/>
		<?php echo Form::submit('Post News'); ?>
		
		<?php echo Form::close(); ?>
	</body>
</html>