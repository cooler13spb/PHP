<div class="service_page">
    <div class="container">
      <div class="title">Продвижение</div>
      <div class="service_page_blocks">
      <div class="left_block">
                <div>
          <div>
                    <h3>Контекстная реклама</h3>
                    <div class="block_ser">
                    <div>Контекстная реклама – быстрый и эффективный способ увеличения продаж. Объявления такого типа привлекают на сайт только целевых пользователей, которые уже заинтересованы в ваших товарах или услугах. Так контекстное объявление помогает расти посещаемости вашего ресурса и конверсии в заказ. Рекламные объявления могут быть показаны на поиске, тематических сайтах и в рекламных сетях Яндекс.Директ и Google Adwords.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
          <div>
                    <h3>SEO</h3>
                    <div class="block_ser">
                    <div>SEO-продвижение – сложный, но действенный метод интернет-маркетинга, который позволяет развить ваш сайт и бизнес в целом. В ходе него проводятся работы с семантическим ядром, контентом, со структурой и содержанием страниц сайта. Производится оптимизация ресурса, работа над юзабилити и многое другое. Все это повышает доверие поисковых систем к вашему сайту и помогает ему встать в ТОП выдачи.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
          <div>
                    <h3>SMM</h3>
                    <div class="block_ser">
                    <div>Соцсети — место, где можно максимально близко подобраться к аудитории. А еще это самая простая для потребителя точка контакта с компанией. И вроде бы идеальное совпадение, но контент коммерческих компаний интересует людей в соцсетях в последнюю очередь. Поэтому коммуникация часто не складывается: компания что-то говорит, а ей никто не отвечает. Мы находим баланс между целями бизнеса и тем, что заинтересует его аудиторию. Создаём контент, который принесёт пользу, вдохновит и вызовет желание вступить в разговор.</div>
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