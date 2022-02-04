Шаблон для разработки тем для WordPress с использованием ACF Pro

Перед использованием требуется распаковать вашу версию ACF Pro в следующий каталог: `/wp-content/themes/wpus/includes/vendors/acf/`

## Структура



`.gitignore` - исключает все файлы WordPress, кроме текущей темы. Т.е. манипулирование репозиторием происходит из корня сайта (установки WordPress).

`/wp-content/themes/wpus` - папка текущей темы/шаблона.

`archive-books.php` - шаблон списка записей кастомного типа записи.

`taxonomy-book_authors.php` - шаблон вывода записей кастомного типа таксономии.

`functions.php` - основной функциональный файл. В него подключается всё сущее.

`footer.php`
`header.php`
`index.php`
`screenshot.png`
`style.css`

```
\---wpus
|   
+---assets
|   +---css
|   |       styles.css
|   |       
|   \---js
|           scripts.js
|           
\---includes
|   helpers.php
|   hooks.php
|   menu.php
|   
+---blocks
|       init.php
|       team-display.php
|       team.php
|       
+---fields
|       book-author-image.php
|       init.php
|       options-header.php
|       options.php
|       
+---pages
|       books.php
|       home.php
|       other.php
|       page.php
|       post.php
|       posts.php
|       single.php
|       
+---posts
|       books.php
|       init.php
|       
+---taxonomies
|       book-authors.php
|       init.php
|       
+---vendors
|   |   init.php
|   |   
|   \---acf
|                   
\---widgets
covid.php
init.php
```
                        
