<h2>Профиль</h2>

<div class="row">
    <form method="post" action="/user/profile">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" name="login" class="form-control" id="login" value="<?= $login ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input required type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" class="form-control" id="name" value="<?= $name ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?= $email ?>">
        </div>
        <button type="submit" class="btn">Обновить</button>
    </form>
    <form method="post" action="/user/upload" enctype="multipart/form-data">
        <br/>
        <div class="form-group">
            <input type="file" name="img_upload">
        </div>
        <input type="submit" name="upload" value="Загрузить">
    </form>
    <img src="data:image/jpeg;base64, <? $show_img ?>" alt="avatar">

</div>
