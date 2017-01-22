#### Wordpress 101 by [Alessandro Castellani](https://www.youtube.com/user/williamprey)

## Create a Wordpress theme from scratch

## 0.0.1 Main files
* Make the *theme01* folder in *wp-content/themes*. Add the stylesheet *style.css* and the template *index.php*.
* Create the header and footer files, *header.php* and *footer.php*.
* Call *get_header()* and *get_footer()* in *index.php*.

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

## 0.0.7.1.1 Enable jQuery, add a Bootstrap Navigation Bar
* Add comments.
* Include jQuery (native in Wordpress).
* Download, copy minified version in *css* folder and include *Bootstrap*.
* Add the bootstrap navbar in header.

## 0.0.7.1.2 Style the default post template
* Use the HTML5 *article* tag to wrap inside the *content.php* content.
* Customize the *article* tag with Wordpress functions, provide a unique anchor identifier to each post with *the_ID()* and show the *post_class* CSS classes based on the post content with *post_class()*.
* Use more HTML5 features, such as *header* and add Bootstrap classes and logic to display post columns depending on the presence of a thumbnail in the post.

## 0.0.8 Sidebar and Widgets
* In *functions.php* create a function that registers the sidebar and specifies its parameters. Then call an *add_action* hook to activate this custom function.
* The sidebar is available through the widgets menu which now shows up as an *Appearance* submenu in the Dashboard and can be filled with widgets.
* Create the *sidebar.php* file and call the *dynamic_sidebar* hook in it with the sidebar's id which was registered in its creation custom function.
* Call *get_sidebar()* in *index.php*.
* Style *index.php* with Bootstrap grid in order to place the sidebar on the right side of the grid.
* In order for the sidebar to appear on pages with templates different than the default (per *index.php*), the same markup which includes the *dynamic_sidebar* hook has to be recreated in the respective template file.

## 0.0.9 Customize the frontpage using instances of the *WP Query* class
* Create a new template *page-home.php* to use for the frontpage, starting with a copy of *index.php*, instead of editing *index.php* with an *is_front_page* if-else statement, so that the overall code remains cleaner.
* Edit the new template to the desired markup, using new instances of the *WP Query* class. Ensure that the original *WP Query* class is not affected, by resetting the post data with *wp_reset_postdata()*.

## 0.0.10.1 Style the main page featured content
* Create *content-featured.php* which can be used as a component. Apply the desired Bootstrap grid column styling when calling to it with *get_template_part('content','featured')* inside *page-home.php*.

## 0.0.10.2 Filter the WP Query with categories
* Add a *category_in* filter in the arguments array of the *WP Query* object, which allows the display of certain categories of posts only, declared by the tag_IDs of the desired categories which can be seen in each category's URI the Dashboard.
* The undesired categories can be filtered out with the use of the *category_not_in* filter.
* In order to include the last post of each selected category instead of the latest of all posts of all desired categories, the loop logic needs a rearrangement. The desired categories are included in an argument provided to *get_categories()* and the result is introduced into a foreach loop whereof one post for each selected category is extracted via the performed post loop on each single category *WP Query* object.

## 0.0.10.3.1 Add a Bootstrap carousel
* Insert the php code which contains the *WP Query* class definition and the call to the post loop inside the carousel's slides wrapper.
* Instead of the *get_template_part()* call in the post loop, the carousel's single slider markup is applied.
* The *the_post_thumbnail* function is called in place of the carousel's image tag.
* The *the_title* and the *the_category* calls are placed inside the carousel's caption tag.
* Increase the counter *$count* in the end of every foreach loop and use it to set the active state of the carousel when it is equal to 0.
* In order for the carousel to have its bullet indicators functioning properly, create a *$bullets* variable and, from inside the post loop, append *(.= )* to it the relevant code snippet with *data-slide-to* set to *$count*. Echo the *$bullets* variable to the carousel's indicators ordered list declaration.
* For the active indicator class the variable *$bulletsactive* is being set to active when *$count* is set to 0.

## 0.0.10.3.2 Style the carousel
* Dynamically adjust the way the post images are presented in the carousel as well as the appearance of the post titles that link to the posts by assigning appropriate values to the relevant carousel classes in *theme01.css*.
* Add an empty string as an argument in *the_category()* so that the default *li* bullet gets overridden.

## 0.0.11 The *single.php* file
* Create the *single.php* file, add the header, the footer and the post loop wherein the post content and thumbnail will be displayed.
* Add the *the_tags()* function to display tags.
* Add the *edit_post_link* function which displays the *"Edit This"* link if an authorized user is logged in.
* Use the *comments_template()* function to present the commments section if *comments_open()* function is set to true. Comments are by default ebnabled for each post. To prevent the comments form from displaying they have to be disabled on post creation via the *discussions* panel (made visible via the *Screen Options* tab).
