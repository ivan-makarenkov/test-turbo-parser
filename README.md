**TurboParser. Тестовое задание на вакансию Senior PHP Developer**
#
**Задача**

Разработать микросервис обработки текста и UnitTest, проверяющий корректность работы микросервиса на основе генерируемых заданий.
Предполагаемое время выполнения: 2-4 часа.

**Описание**

Есть 6 методов обработки текста:

- Очистить от тегов
- Удалить пробелы
- Заменить все пробелы на переносы строк
- Экранировать спец-символы
- Удалить символы [.,/!@#$%^&*()]
- Преобразовать в целое число (найти в тексте)


Сервис висит фоновым процессом и ждет работу. Работа приходит в следующем виде:
```
{
    "job": {
        "text": "Привет, мне на <a href=\"test@test.ru\">test@test.ru</a> пришло приглашение встретиться, попить кофе с <strong>10%</strong> содержанием молока за <i>$5</i>, пойдем вместе!"
        "methods": [
            "stripTags", "removeSpaces", "replaceSpacesToEol", "htmlspecialchars", "removeSymbols", "toNumber"
        ]
    }
}
```
Результат работы возвращается в следующем виде
```
{
    "text": 10
}
```
- Количество методов и их порядок - случайны.
- Методы последовательно обрабатывают текст.

**Ожидания**
- Продемонстрируйте свои навыки использования паттернов проектирования
- Масштабируемость. Делайте так, словно методов обработки текста может быть 100+ штук
- Все неоднозначные моменты решите по своему усмотрению
- Не тартьте много времени на отладку (запускать не будем!), вложитесь в архитектуру!
