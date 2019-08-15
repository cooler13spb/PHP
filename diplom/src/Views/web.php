<div class="service_page">
    <div class="container">
      <div class="title">Web-разработка</div>
      <div class="service_page_blocks">
<div class="left_block">
        <div>
          <div>
                    <h3>Сайт-визитка</h3>
                    <div class="block_ser">
                    <div>Иногда сам факт наличия у компании собственного онлайн-ресурса — признак того, что она заслуживает доверия. Это небезосновательно. Даже простой сайт-визитка позволит покупателю или клиенту узнать о компании больше, познакомиться с товарами и услугами, получить дополнительную информацию.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
          <div>
                    <h3>Лендинг</h3>
                    <div class="block_ser">
                    <div>Лендинг — идеальное решение для случаев, когда мы только тестируем нишу или продукт, или же наш товар/услуга предельно конкретны, а информация о компании не так обширна, чтобы посвящать ей несколько страниц.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
          <div>
                    <h3>Интернет-магазин</h3>
                    <div class="block_ser">
                    <div>Разработка интернет-магазина - это один из самых сложных видов сайтостроения. Совершать покупки, не выходя из дома, иметь возможность сравнить цену товаров и их технические характеристики, не посещая двадцать торговых точек, расположенных в разных концах города - все это стало возможным с появлением одного из наиболее значимых достижений современного товарооборота - интернет-магазина.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
        </div>
      </div>
      <div class="right_block">
            <?php if ($auth):?>
            <div>Форма заказа услуги</div>
        <form action="/orders/addOrder/" method="post">
            <div class="form_server">
            <select class="select_service" name="id_category">
           <option selected disabled>Выберите услугу</option>
         <?php foreach ($services as $service):?>
           <option value="<?php echo $service['id']?>"><?php echo $service['service']?></option>
           <?php endforeach; ?>
        </select>
            <textarea class="text_service" placeholder="Здесь можете добавить комментарий к заказу" name="comment" cols="30" rows="10"></textarea>  
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