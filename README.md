#### Wordpress 101 by [Alessandro Castellani](https://www.youtube.com/user/williamprey)

## Create a Wordpress theme from scratch

## 0.0.1 Main files
* Make the *theme01* folder in *wp-content/themes*. Add the stylesheet *style.css* and the template *index.php*.
* Create the header and footer files, *header.php* and *footer.php*.

## 0.0.2 *functions.php*
* Add the *css* and *js* folders and add basic styling in *theme01.css*.
* Create the *functions.php* file and use Wordpress methods, expressions and hooks in order to include the CSS and JS files.

## 0.0.3 Create custom menus
* Add support for menus with *add_theme_support* in *functions.php*.
* Add custom menus with *register_nav_menu*.
* Add the appropriate *wp_nav_menu()* hooks in the header and footer, in order to be able to show menus there.

## 0.0.4.1 Use the post loop
* Edit *index.php* to loop through all posts.

## 0.0.4.2 Customize body classes
* Use the *body_class()* in the header.  
* Add logic for adding different classes to the home page and to other pages.

## 0.0.5 Custom specialized page templates
* The default template is *index.php*.
* Assign a custom template manually for an existing page: Create the *page-[specific-page-permalink].php* e.g. *page-about.php* and custom edit it. Another way to assign a specific template that is not affected by *permalink* changes is to use the *page-id* instead, hence create the *page-[page-id].php*.
* Create a page-template and assign it to each page that requires such a template. The template property of a page is declared with a comment stating the *Template Name* inside a php tag in the relevant file.

## 0.0.6 Add theme features
* Use the *add_theme_support* hook in order to add various features, such as custom background, header and post thumbnails.
* Add the code for header image in *header.php* in order to see it in every page.
* Add the code for the posts' thumbnails in *index.php*.

## 0.0.7 Post formats
* Add theme support for post formats.
* Use the *get_template_part* function in *index.php* in order to include template markups assigned to files.
* Use along the *get_post_format* function in order to be able to select the template that matches the selected post format. The files containing the templates have to be named as [name given for the standard format]-[post-format].php, e.g. *"content-aside".php* and *"content-image".php* for the post formats *aside* and *image* respectively, given that the standard template container file is named *"content.php"* in this example.

## 0.0.7.1 Enable jQuery, add a Bootstrap Navigation Bar
* Add comments.
* Include jQuery (native in Wordpress).
* Download, copy minified version in *css* folder and include *Bootstrap*.
* Add the bootstrap navbar in header.
