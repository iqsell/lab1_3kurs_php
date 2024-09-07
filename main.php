<?php

require __DIR__ . '/vendor/autoload.php';

use LibrarySystem\Library\Book;
use LibrarySystem\Library\Library;

$library = new Library();

// Добавляем книги
$book1 = new Book("1984", "Джордж Оруэлл", 1949, "Антиутопия");
$book2 = new Book("О дивный новый мир", "Олдос Хаксли", 1932, "Антиутопия");
$book3 = new Book("Великий Гэтсби", "Фрэнсис Скотт Фицджеральд", 1925, "Классика");

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// вывод книг
echo "Все книги в библиотеке:\n";
$library->listAllBooks();
echo "\n";

// Удаляем по названию
$library->removeBookByTitle("1984");
echo "\n";

// обновленный список книг
echo "Все книги в библиотеке после удаления:\n";
$library->listAllBooks();
echo "\n";

// Поиск по автору
$authorBooks = $library->findBooksByAuthor("Олдос Хаксли");
echo "Книги автора Олдос Хаксли:\n";
foreach ($authorBooks as $book) {
    echo $book->getBookInfo() . "\n";
}
