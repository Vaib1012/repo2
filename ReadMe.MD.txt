**Title**:

**Sources** used to collect the data :
Goodreads website
Young and adult genre books dataset from Kaggle
Google Books API

this package contains **5 classes** : 
**Book** - this class represents a book entity
**GoodReads** - this class scrapes data of books of genre Young and Adult from one of the [GoodReads webpage] (https://www.goodreads.com/list/show/43.Best_Young_Adult_Books) and creates a list of books instances. BeautifulSoup library is used to pull and parse the HTML source code of the above website.
**BookDataSet** -this class uses a dataset downloaded from Kaggle to obtain Books' info of young and adult genres. Pandas library is used to read and perform operations on the CSV file. 
**GoogleBookApi** - this class uses the Google Books API to obtain information on books from the young adult fiction category.
**BookShelf** - this class performs operations on a books list obtained from any one of the three sources selected by the user. 3 main functions are:
getRandomBook(): suggests a random book from the list
findHighestRating(): suggests a book with the highest ratings
searchByKeyword(keyword): searches and recommends a list of books as per the keyword given by the user

This is a menu-driven application. It asks the user about the source from where he/she wants to get the book recommendation. It further allows the user to perform operations such as getting a random book, get a book with the highest ratings, or get suggestions by the keyword.