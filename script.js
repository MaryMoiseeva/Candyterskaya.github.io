// Получаем форму обратной связи
const feedback = document.getElementById('feedback');

// Добавляем обработчик события onSubmit
feedback.addEventListener('submit', function(event) {
    event.preventDefault(); // Отменяем переход на другую страницу при отправке формы

    // Получаем значения из полей формы
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Проверка введенных данных (здесь просто пример)
    if (!email.includes('@') || !email.includes('.')) {
        alert('Пожалуйста, введите корректный адрес электронной почты.');
        return;
    }

    // Отображаем данные из формы в консоли
    console.log('Имя:', name);
    console.log('Email:', email);
    console.log('Комментарий:', message);

    // Добавляем сообщение об успешной обработке данных (можно использовать библиотеку jQuery Modal или Bootstrap Modal Dialog)
    alert('Данные успешно отправлены!');

    // Очищаем поля формы
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('message').value = '';
});

// Добавляем функциональность поиска на странице со списком данных
const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value.toLowerCase(); // Получаем значение из поля поиска и переводим его в нижний регистр

    // Проход по всем элементам для поиска и скрытия ненужных
    const items = document.getElementsByClassName('searchable-item');
    Array.from(items).forEach(function(item) {
        const text = item.textContent.toLowerCase();
        if(text.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});

