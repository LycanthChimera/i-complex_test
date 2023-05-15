<form action="store.php" method="post">
    <p>Введите имя: <input type="text" name="name" /></p>
    <p>Сколько вам лет?: <input type="text" name="age"/></p>
    <p>Выберите пол:
        <select name="sex" id="sex">
            <option value="Мужской">Мужской</option>
            <option value="Женский">Женский</option>
        </select>
    </p>
    <p><input type="submit" name="submit" value="Отправить данные"></p>
</form>