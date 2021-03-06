$(function () {
    let offset = 3;
    $('#btn').click(function() {
        if (offset < allNewsCount) {
            $.ajax({
                /* адрес файла-обработчика запроса */
                url: '/ajax/get_news.php',
                /* метод отправки данных */
                method: 'POST',
                /* данные, которые мы передаем в файл-обработчик */
                data: {"offset": offset},
                /* что нужно сделать по факту выполнения запроса */

            }).done(function(data) {
                /* Если массив не пуст (т.е. статьи там есть) */
                if (data.length > 0) {
                    $('#ajax-content').append(data);
                    // Увеличиваем на 3 порядковый номер статьи, с которой надо начинать выборку из базы
                    offset += 3;
                    if (offset >= allNewsCount) {
                        $('#btn').hide();
                    }
                }
            });
        }
    });
});
