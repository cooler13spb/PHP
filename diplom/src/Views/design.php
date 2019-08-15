<div class="service_page">
    <div class="container">
    	<div class="title">Дизайн</div>
    	<div class="service_page_blocks">
    	<div class="left_block">
    		<div>
    			<div>
                    <h3>Web-дизайн</h3>
                    <div class="block_ser">
                    <div>Дизайн сайтов — это визуальное оформление веб-страниц. Грамотный дизайн производит правильное впечатление, помогает ориентироваться, акцентирует внимание и рассказывает, как пользователю совершить важное действие</div>
                    <div>2-5 рабочих дней <br> от 5000 руб.</div>
                    </div>
                </div>
    			<div>
                    <h3>Дизайн логотипа</h3>
                    <div class="block_ser">
                    <div>Мы знаем, как сделать ваш логотип неординарным и запоминающимся. Готовы помочь реализовать ваши идеи. Работаем открыто в диалоге со своими клиентами!
                    </div>
                    <div>1-3 рабочих дней <br> от 500 руб.</div>
                    </div>
                </div>
    			<div>
                    <h3>Фирменый стиль</h3>
                    <div class="block_ser">
                    <div>Фирменный стиль, он же корпоративный стиль или айдентика, нужен для того, чтобы компания производила правильное впечатление, узнавалась и запоминалась своему клиенту.Это визуальный образ бренда. Он делает легче и дешевле любую задачу: создание сайта, оформление интерьера, проведение мероприятия, конференции, маркетинговой кампании.
                    </div>
                    <div>2-7 рабочих дней <br> от 3000 руб.</div>
                    </div>
                </div>
    		</div>
    	</div>
    	<div class="right_block">
            <?php if ($auth):?>
            <div>Форма заказа услуги</div>
    		<form action="/orders/addOrder/" method="post">
            <div class="form_server">
            <select class="select_service" name="id_category" required>
       		 <option selected disabled>Выберите услугу</option>
     		 <?php foreach ($services as $service):?>
      		 <option value="<?php echo $service['id']?>" ><?php echo $service['service']?></option>
        	 <?php endforeach; ?>
    		</select>
            <textarea class="text_service" placeholder="Здесь можете добавить комментарий к заказу" name="comment" cols="30" rows="10" ></textarea>	
      		<button type="submit">Заказать</button>
            </div>  
    		</form>
            <?php else: ?>
                <div>Для оформления заказа вам необходимо авторизироваться или ппройти регистрацию по ссылке ниже:</div>
            <a href="/account/registration">РЕГИСТРАЦИЯ</a>
            <?php  endif;?>
    	</div>
    	</div>
    </div>
</div>



                    
                    