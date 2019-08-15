<div class="cont">
    <div class="title">Заполните форму регистрации</div>
    <form class="form_reg" method="post" action="/account/registration">
        <div class="block_reg">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" placeholder="введите имя" required>
        </div>
        <div class="block_reg">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="введите E-mail" required>
        </div>
        <div class="block_reg">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="введите пароль" required>
        </div>
        <div class="block_reg">
            <label for="phone">Телефон</label>
            <input type="text" id="phone" name="phone" placeholder="введите телефон" required>
        </div>
        <button type="submit">Регистрация</button>
    </form>
</div>