<div class="comunidad-mde-block">
	<?php if(!empty($items)) : ?>	
	<h2>NUESTRA COMUNIDAD</h2>
	<ul>

		<?php if(!empty($items[0][0]['tweet'])) : ?>
		<li class="item-tweet item-1">
			<div class="content-iten">
			<img class="icon-comillas-der" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-der.png" alt="iconos-comillas">
			<span class="tweet-content"><?php echo $items[0][0]['tweet']?></span>
			<span class="link-user"><?php echo $items[0][0]['screen_name']?></span>
			<span class= "hour-twitt"><?php echo $items[0][0]['hour'];?></span>
			<img class="icon-comillas-izq" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-izq.png" alt="iconos-comillas">
			</div>
		</li>
		<?php endif; ?>

		<?php if(!empty($items[0][1]['tweet'])) : ?>
		<li class="item-tweet item-2">
			<div class="content-iten">
			<img class="icon-comillas-der" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-der.png" alt="iconos-comillas">
			<span class="tweet-content"><?php echo $items[0][1]['tweet']?></span>
			<span class="link-user"><?php echo $items[0][1]['screen_name']?></span>
			<span class= "hour-twitt"><?php echo $items[0][1]['hour'];?></span>
			<img class="icon-comillas-izq" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-izq.png" alt="iconos-comillas">
			</div>
		</li>
		<?php endif; ?>

		<?php if(!empty($items[0][2]['tweet'])) : ?>
		<li class="item-tweet item-3">
			<div class="content-iten">
			<img class="icon-comillas-der" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-der.png" alt="iconos-comillas">
			<span class="tweet-content"><?php echo $items[0][2]['tweet']?></span>
			<span class="link-user"><?php echo $items[0][2]['screen_name']?></span>
			<span class= "hour-twitt"><?php echo $items[0][2]['hour'];?></span>
			<img class="icon-comillas-izq" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-izq.png" alt="iconos-comillas">
			</div>	
		</li>
		<?php endif; ?>

		<?php if(!empty($items[0][3]['tweet'])) : ?>
		<li class="item-tweet item-4">
			<div class="content-iten">
			<img class="icon-comillas-der" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-der.png" alt="iconos-comillas">
			<span class="tweet-content"><?php echo $items[0][3]['tweet']?></span>
			<span class="link-user"><?php echo $items[0][3]['screen_name']?></span>
			<span class= "hour-twitt"><?php echo $items[0][3]['hour'];?></span>
			<img class="icon-comillas-izq" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-izq.png" alt="iconos-comillas">
			</div>	
		</li>
		<?php endif; ?>

		<?php if(!empty($items[0][4]['tweet'])) : ?>
		<li class="item-tweet item-5">
			<div class="content-iten">
			<img class="icon-comillas-der" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-der.png" alt="iconos-comillas">
			<span class="tweet-content"><?php echo $items[0][4]['tweet']?></span>
			<span class="link-user"><?php echo $items[0][4]['screen_name']?></span>
			<span class= "hour-twitt"><?php echo $items[0][4]['hour'];?></span>
			<img class="icon-comillas-izq" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-izq.png" alt="iconos-comillas">
			</div>	
		</li>
		<?php endif; ?>

		<?php if(!empty($items[0][5]['tweet'])) : ?>
		<li class="item-tweet item-6">
			<div class="content-iten">
			<img class="icon-comillas-der" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-der.png" alt="iconos-comillas">
			<span class="tweet-content"><?php echo $items[0][5]['tweet']?></span>
			<span class="link-user"><?php echo $items[0][5]['screen_name']?></span>
			<span class= "hour-twitt"><?php echo $items[0][5]['hour'];?></span>
			<img class="icon-comillas-izq" src="sites/all/modules/custom/twitterwidget/images/twitter/comillas-mentions-izq.png" alt="iconos-comillas">
			</div>	
		</li>
		<?php endif; ?>

	</ul>
	<?php endif; ?>
</div>