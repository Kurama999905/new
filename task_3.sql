SELECT authors.author_name, Sum(books.sold_copies) as sold_sum FROM authors, books WHERE authors.book_name=books.book_name GROUP BY authors.author_name ORDER BY `sold_sum` DESC LIMIT 3;
SELECT authors.author_name, Sum(books.sold_copies) as sold_sum FROM authors JOIN books ON authors.book_name=books.book_name GROUP BY authors.author_name ORDER BY `sold_sum` DESC LIMIT 3;
