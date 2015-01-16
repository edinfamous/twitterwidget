<div class="twitterwidget-line">
	<span class="logo"><?php echo $items[0][0]['screen_name'];?></span>
	<span class="comillas-1"></span>

	<ul class="bxslider twitter-line">

		<?php if(!empty($items[0][0]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][0]['tweet'];?> 
				</li>	
		<?php endif; ?>

		<?php if(!empty($items[0][1]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][1]['tweet'];?>
				</li>
		<?php endif; ?>

		<?php if(!empty($items[0][2]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][3]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][4]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][5]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][6]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][7]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][8]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
		<?php if(!empty($items[0][9]['tweet'])) : ?>
				<li class="item-twitter">
					<?php echo $items[0][2]['tweet'];?>
				</li>
		<?php endif; ?>
	  
	</ul>

	<span class="comillas-2"> </span>

	<div class="twitter-footer">
		<ul class="bxslider twitter-hour">
			<li><?php echo  $items[0][0]['hour'];?></li>
			<li><?php echo  $items[0][1]['hour'];?></li>
			<li><?php echo  $items[0][2]['hour'];?></li>
			<li><?php echo  $items[0][3]['hour'];?></li>
			<li><?php echo  $items[0][4]['hour'];?></li>
			<li><?php echo  $items[0][5]['hour'];?></li>
			<li><?php echo  $items[0][6]['hour'];?></li>
			<li><?php echo  $items[0][7]['hour'];?></li>
			<li><?php echo  $items[0][8]['hour'];?></li>
			<li><?php echo  $items[0][9]['hour'];?></li>
		</ul>

		<?php if(!empty($items[0][1]['screen_name'])) : ?> 
			<span class="link-twitter"><?php echo $items[0][0]['screen_name'];?></span>
		<?php endif; ?>

	</div>
</div>