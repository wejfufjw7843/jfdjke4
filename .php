<?php
// Создание многомерного массива с информацией о книгах в библиотеке
let libraryBooks = [
    { title: "Война и мир", author: "Лев Толстой", genre: "Роман" },
    { title: "1984", author: "Джордж Оруэлл", genre: "Научная фантастика" },
    { title: "Гарри Поттер и философский камень", author: "Джоан Роулинг", genre: "Фэнтези" },
    { title: "Преступление и наказание", author: "Федор Достоевский", genre: "Детектив" },
    { title: "Алиса в Стране чудес", author: "Льюис Кэрролл", genre: "Детская литература" }
];

// Функция для поиска книг по определенному жанру
function findBooksByGenre(library, genre) {
    let books = [];
    for (let book of library) {
        if (book.genre === genre) {
            books.push(book.title + " - " + book.author);
        }
    }
    return books;
}

let genreToFind = "Детектив";
let booksInGenre = findBooksByGenre(libraryBooks, genreToFind);

// Вывод найденных книг по жанру
console.log("Книги в жанре '" + genreToFind + "': ");
booksInGenre.forEach(book => {
    console.log(book);
});
?>