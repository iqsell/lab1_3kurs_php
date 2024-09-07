<?php

namespace LibrarySystem\Library;

class Library
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBookByTitle(string $title): void
    {
        foreach ($this->books as $index => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$index]);
                $this->books = array_values($this->books); // Переиндексация массива
                echo "Книга с названием '$title' удалена из библиотеки.\n";
                return;
            }
        }
        echo "Книга с названием '$title' не найдена.\n";
    }

    public function findBooksByAuthor(string $author): array
    {
        return array_filter($this->books, fn($book) => $book->getAuthor() === $author);
    }

    public function listAllBooks(): void
    {
        if (empty($this->books)) {
            echo "Библиотека пуста.\n";
            return;
        }

        foreach ($this->books as $book) {
            echo $book->getBookInfo() . "\n";
        }
    }
}
