login.addEventListener('submit', function(event) {
    // Предотвращаем стандартное поведение отправки формы
    event.preventDefault();

    // Получаем значения полей формы
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    // Выводим значения в консоль
    console.log('Имя пользователя:', username);
    console.log('Пароль:', password);
    console.log('Роль:', role);
});
