
<?php
// Задание 1: Вывод текста с использованием echo и print
echo "Период отпусков закончился!<br>";
print "Период отпусков закончился!<br>";

// Задание 2 и 3: Определение переменных и вывод их на экран
$number = 288; // Целочисленное значение
$string = "Все возвращаются на работу!"; // Строчного типа
echo $number . "<br>"; // Вывод числа
echo $string . "<br>"; // Вывод строки

// Задание 4: Вывод строки, состоящей из конкатенации переменных
echo "В " . $number . " день, приблизительно ... " . $string . "<br>";

// Задание 5: Вывод суммы чисел и различия в выводе строк
echo 45 + 67 . "<br>"; // Выводит 112
echo "45+67<br>"; // Выводит строку 45+67
echo '45+67<br>'; // Выводит строку 45+67

// Задание 6: Вывод предложения с правильным использованием кавычек
echo "Книга \"Герой\" выйдет в октябре, этого года!<br>";

// Задание 7: Добавление и вывод стиха с правильным форматированием
$poem = "Осенний лист тихо к земле коснулся,
Туман над рекой плавно лёг.
Прощальный взгляд солнца на свет угасающий,
Золото лучей в воде отразилось.";
echo nl2br($poem); // Функция nl2br добавит HTML тег <br> для каждой новой строки в строке
?>
