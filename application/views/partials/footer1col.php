</div>
<!-- END MAIN CONTENT -->

</div>
<!-- END CONTENT REPEAT -->      

</div>
<!-- END WRAPPER -->

<div id="footer2">

</div>

</div>
<!-- END BACKGROUND -->

<?php
if(Auth::check()): ?>
<!-- STATUS BAR -->
<div id="bar">

	<div>XP <?php echo $user->stats->exp; ?>/200</div>

    <div id="exp_container">
    	
    	<div id="exp_bar" style="width:<?php echo ($user->stats->exp / 200) * 100; ?>%;"></div>
    	
    </div>

</div>
<!-- END STATUS BAR -->
<?php
endif; ?>

</body>
</html>