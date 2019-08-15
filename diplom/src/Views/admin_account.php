<div class="user_account">
  <div class="container">
    <div class="title"><?php echo $name?>, добро пожаловать в личный кабинет</div>
      <div class="admin_acc_tab">
        <div class="user_acc_text">id user</div>
        <div class="user_acc_text">Наименование заказа</div>
        <div class="user_acc_text">Статус заказа</div>
        <div class="user_acc_text">Комментарий</div>
        <div class="user_acc_text">Изменить статус</div>
        </div>
        <div>
          <?php foreach ($orderAll as $order):?>
          <div class="admin_acc_order">
            <div><?php echo $order['id']?></div>
            <div><?php echo $order['service']?></div>
            <div><?php echo $order['status']?></div>
            <div><textarea rows="5"><?php echo $order['comment']?></textarea></div>
            <div><form action="/orders/addStatus/" method="post">
                  <select name="id_status">
                 <option selected disabled>Выберите статус</option>
                <?php foreach ($statuse as $status):?>
                 <option value="<?php echo $status['id']?>"><?php echo $status['id']?></option>
                 <?php endforeach; ?>
                  </select>
                  <div class="id_ord"><input name="id_ord" value="<?php echo $order['id_ord']?>"></div>
                  <input type="submit" name="button" value="Изменить статус">
                  </form>
            </div>
            </div>
          <?php endforeach; ?>
        </div>
      
  </div>
</div>





<!-- 

<div>
	

    </div>
 -->