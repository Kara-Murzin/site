$(document).ready(function() {
    $('#questionForm').submit(function(event) {
        event.preventDefault(); // Предотвращение стандартного поведения отправки формы

        var formData = $(this).serialize(); // Сериализация данных формы в строку
        $.ajax({
            type: 'POST', // Метод HTTP-запроса - POST
            url: $(this).attr('action'), // URL-адрес, указанный в атрибуте 'action' формы
            data: formData, // Данные, отправляемые на сервер
            success: function(response) {
                alert('Ответы успешно сохранены!'); // Функция, выполняющаяся при успешном выполнении запроса
            },
            error: function() {
                alert('Произошла ошибка при сохранении ответов.'); // Функция, выполняющаяся при ошибке выполнения запроса
            }
        });
    });
});
