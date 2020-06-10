<form>
    <div class="row">
        <div class="input-field">
            <input placeholder="Ваше имя" name="name" id="signup-name" type="text">
            <label for="signup-name">Имя</label>
        </div>
        <div class="input-field">
            <input placeholder="Ваш пароль" name="pass" id="signup-pass" type="password">
            <label for="signup-pass">Пароль</label>
        </div>
        <div class="input-field">
            <input placeholder="Ваш адрес электронной почты" name="email" id="signup-email" type="email">
            <label for="signup-email">Адрес электронной почты</label>
        </div>
        <div class="input-field">
            <input placeholder="Ваш день рождения" name="birthday" id="signup-birthday" type="text"
                   class="datepicker">
            <label for="signup-birthday">День рождения</label>
        </div>
        <div>
            <p>
                <label>
                    <input type="radio" value="male" name="sex" class="sex" checked>
                    <span>Мужчина</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="radio" value="female" name="sex" class="sex">
                    <span>Женщина</span>
                </label>
            </p>
        </div>
        <div>
            <p>
                <label>
                    <input type="checkbox" id="agree-rules">
                    <span>Я согласен</span>
                </label>
            </p>
            <p class="read-rules">(правила)</p>
        </div>
        <div>
            <button id="signup-submit">Зарегистрироваться</button>
        </div>
    </div>
</form>
