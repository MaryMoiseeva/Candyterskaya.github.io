const login = document.getElementById('login');

// Добавляем обработчик события onSubmit
feedback.addEventListener('submit', function(event) {
    event.preventDefault(); // Отменяем переход на другую страницу при отправке формы

    // Получаем значения из полей формы
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const role = document.getElementById('role').value;

    // Отображаем данные из формы в консоли
    console.log('Имя пользователя:', username);
    console.log('Пароль:', password);
    console.log('Роль:', role);

    // Добавляем сообщение об успешной обработке данных (можно использовать библиотеку jQuery Modal или Bootstrap Modal Dialog)
    alert('Вы зашли под ролью:');

    // Очищаем поля формы
    document.getElementById('username').value = '';
    document.getElementById('password').value = '';
    document.getElementById('role').value = '';
});

