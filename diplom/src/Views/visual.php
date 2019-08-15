<div class="service_page">
    <div class="container">
      <div class="title">3D моделирование</div>
      <div class="service_page_blocks">
   <div class="left_block">
            <div>
          <div>
                    <h3>Визуализация</h3>
                    <div class="block_ser">
                    <div>Мы можем визуализировать всё: от спички до атомного крейсера. Как правило, этот вариант подходит для стартапов, чтобы показать инвесторам или потенциальным клиентам свой будущий продукт, или правильно поставить задачу для производства. Проектируем интерьер любой сложности: от дизайна квартиры-студии в новостройке, до магазинов и модных городских лофтов. Учитываем всё: от особенностей целевой аудитории, до деталей инженерных решений в проекте.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
          <div>
                    <h3>CAD</h3>
                    <div class="block_ser">
                    <div>CAD-модель отличается реалистичностью и высокой детализацией. В нее легко внести изменения, например, настроить размер, убрать или добавить детали. Компьютерные программы (зачастую используются SolidWork, Компас 3D, ProE(Creo)) предоставляют необходимые проектировщикам инструментарий и шаблоны. Они совместимы с любым другим ПО: программами для станков, приложениями для проведения инженерных расчетов, пр. Обеспечивают экономию ресурсов, упрощают работу и повышают производительность.</div>
                    <div>5-10 рабочих дней <br> от 100 руб.</div>
                    </div>
                </div>
          <div>
                    <h3>Анимация</h3>
                    <div class="block_ser">
                    <div>Техническая анимация — 3D-анимация, демонстрирующая работу техники. Отлично подходит для любых людей. У вас есть продукт или услуга, которые требуют времени, чтобы объяснить вашему клиенту? 3D-анимация в кратчащие сроки покажет то, что вы можете предложить. С помощью текстур, освещения, различных ракурсов – мы можем смоделировать любой предмет; показать все, что угодно.</div>
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