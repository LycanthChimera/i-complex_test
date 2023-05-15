<?php foreach ($users as $user):?>
    Имя: <h3><?=$user['name'];?></h3>
    Возраст: <h3><?=$user['age'];?></h3>
    Пол: <h3><?=$user['sex'];?></h3>
    <hr>
<?php endforeach;?>