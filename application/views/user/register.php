<?php echo $header; ?>
<div id="main_content">
<?php if(Session::has('success')): ?>
	<h1>Registration Completed Successfully</h1>
	<p>You may now login with the details that you have provided.</p>
	<p>Thank you for choosing Classic Wars and we are happy to have you!</p>
<?php else: ?>
	<?php 
	if(Session::has('errors')){
		$errors = Session::get('errors');
		echo HTML::ul($errors->get());
	} ?>
	<?php echo Form::open(); ?>
	<?php echo Form::token(); ?>
	<dl id="registration_form">
		
		<div style="width:300px; float:left;">
			
			<dt><?php echo Form::label('username', 'Username'); ?><sup class="isRequired">&#042;</sup></dt>
			<dd><?php echo Form::text('username', Input::old('username'), array('class' => 'styled')); ?></dd>
			
			<dt><?php echo Form::label('password', 'Password'); ?><sup class="isRequired">&#042;</sup></dt>
			<dd><?php echo Form::password('password', array('class' => 'styled')); ?></dd>
			
			<dt><?php echo Form::label('password_confirmation', 'Confirm Password'); ?><sup class="isRequired">&#042;</sup></dt>
			<dd><?php echo Form::password('password_confirmation', array('class' => 'styled')); ?></dd>
			
			<dt><?php echo Form::label('email', 'E-mail Address'); ?><sup class="isRequired">&#042;</sup></dt>
			<dd><?php echo Form::text('email', Input::old('email'), array('class' => 'styled')); ?></dd>
			
			<dt><?php echo Form::label('security_question', 'Security Question'); ?><sup class="isRequired">&#042;</sup></dt>
			<dd><?php echo Form::select('security_question', $securityQuestions, Input::old('security_question')); ?></dd>
			
			<dt><?php echo Form::label('security_answer', 'Security Answer'); ?><sup class="isRequired">&#042;</sup></dt>
			<dd><?php echo Form::text('security_answer', Input::old('security_answer'), array('class' => 'styled')); ?></dd>
			
			<dt><?php echo Form::label('emails', 'Would you like to receive emails from Classic Wars?'); ?></dt>
			<dd><?php echo Form::checkbox('emails', '1', Input::old('emails')); ?></dd>
			
		</div>
		
		<div id="choose_character" style="float:right; margin-right:20px;">
			<div id="choose_image" style="margin-left:-4px; padding-top:12px;">
				<img id="reg_image_holder" src="/images/classes/blank.gif" />
			</div>
			<div style="padding-top:15px; margin-left:-4px;">
				<dt style="float:left; margin-left:17px;"><?php echo Form::label('archer', 'Archer'); ?></dt>
				<dd style="float:left; padding-right:10px;"><?php echo Form::radio('class', 'Archer', (Input::old('class') == 'Archer') ? true : false, array('id' => 'archer', 'onclick' => 'switch_image(this.value);')); ?></dd>
				
				<dt style="float:left;"><?php echo Form::label('darkKnight', 'Dark Knight'); ?></dt>
				<dd style="float:left; padding-right:10px;"><?php echo Form::radio('class', 'Dark Knight', (Input::old('class') == 'Dark Knight') ? true : false, array('id' => 'darkKnight', 'onclick' => 'switch_image(this.value);')); ?></dd>
				
				<dt style="float:left;"><?php echo Form::label('mage', 'Mage'); ?></dt>
				<dd style="float:left;"><?php echo Form::radio('class', 'Mage', (Input::old('class') == 'Mage') ? true : false, array('id' => 'mage', 'onclick' => 'switch_image(this.value);')); ?></dd>
			</div>
		</div>
		
		<input id="register_submit" type="image" src="/images/buttons/register.jpg" name="submit" />
		
	</dl>
	<?php echo Form::close(); ?>
<?php endif; ?>
</div>
<?php echo $footer; ?>