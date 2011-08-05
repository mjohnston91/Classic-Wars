<?php echo $header; ?>

<?php if(Session::has('success')): ?>
<?php endif; ?>

<div id="main_content">

    <div id="main_middle">
    	<?php
    	foreach($news as $post): ?>
		    <!-- NEWS POST -->
		    <div class="news_post" style="color:#70675d; clear:both;">
		
		        <h3 style="font-size:24px; color:#ddd7cd; padding:0; margin:0;"><?php echo $post->title; ?></h3>
		        
		        <small style="color:#423e38;">
		        	added by 
		        	<a style="text-decoration: none; color:#72624d; font-weight: bold;" href="<?php echo URL::to_profile(array($post->username)) . ' ' . date('m/d/Y', strtotime($post->date_posted)); ?>"><?php echo $post->username; ?></a> 
		        </small>
		        
		        <p><?php echo $post->message; ?></p>
		        
		    </div>
		    <!-- END NEWS POST -->
	    <?php
		endforeach; ?>
    </div>
    
    <div id="main_right">
    	<div id="shoutbox">
    		<div class="shout">
    			<a href="<?php echo URL::to_profile(array('bartholomew')); ?>">Bartholomew</a>
    			<date>June 6th, 2011</date>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar, metus vel pellentesque hendrerit, metus leo laoreet felis, blandit convallis orci augue sit amet mi. Suspendisse ac tellus id metus molestie sagittis vitae eu nibh</p>
    		</div>
    		<div class="shout">
    			<a href="<?php echo URL::to_profile(array('bartholomew')); ?>">Bartholomew</a>
    			<date>June 6th, 2011</date>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar, metus vel pellentesque hendrerit, metus leo laoreet felis, blandit convallis orci augue sit amet mi. Suspendisse ac tellus id metus molestie sagittis vitae eu nibh</p>
    		</div>
    	</div>
    	<?php
    	if(Auth::check()): ?>
    	<a id="postShout" href="<?php echo URL::to_new_shout(); ?>">Post a shout</a>
    	<?php
		endif; ?>
    </div>

</div>

<?php echo $footer; ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18058067-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>