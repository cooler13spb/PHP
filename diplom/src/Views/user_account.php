<div class="user_account">
	<div class="container">
		<div class="title"><?php echo $name?>, добро пожаловать в личный кабинет</div>
		<div class="user_acc_text">Здесь Вы видете свои заказы и их статус</div>
		<div class="user_acc_tab">
			<div class="user_acc_text">Наименование заказа</div>
			<div class="user_acc_text">Статус</div>
		</div>
		<?php foreach ($orders as $order):?>
		<div class="user_acc_order">
		<div><?php echo $order['service']?></div>
		<div><?php echo $order['status']?></div>
		</div>
		<?php endforeach; ?> 
	</div>
</div>


