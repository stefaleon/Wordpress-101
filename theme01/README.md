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

## 0.0.4
## Use the post loop
* Edit *index.php* to loop through all posts.
## Customize body classes
* Use the *body_class()* in the header.  
* Add logic for adding different classes to the home page and to other pages.
