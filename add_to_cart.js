function btnClick(item) {
    $.ajax({
        type: 'POST',
        url: 'add_to_cart.php',
        data: {
            'product_id': item.getAttribute('data-id'),
        },
        success: function(data) {
            alert(data);
        }
    });
}

function btnClickDelete(item) {
    $.ajax({
        type: 'POST',
        url: 'delete_from_cart.php',
        data: {
            'id': item.getAttribute('data-id'),
        },
        success: function(response) {
            const data = JSON.parse(response);
            if (data.success) {
                $(item).closest('.product').remove();
                $('#total h3').text('Итого: ' + data.newTotal + ' рублей'); // Обновляем итоговую сумму на странице
            } else {
                console.error('Не удалось удалить товар.');
            }
        }
    });
}

