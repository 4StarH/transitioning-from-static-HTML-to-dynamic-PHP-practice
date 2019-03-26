# transitioning-from-static-HTML-to-dynamic-PHP-practice
Lab work from my CST8285 - Web Programming class where I transitioned a static HTML page into a dynamic PHP page.

Upon completion of this lab, you should be able to:

- Transform a static HTML file into a dynamic PHP template
- Create a web site using dynamic web page elements
- Use the object-oriented capabilities of PHP to define a class, and add methods and properties to that class

Instructions

Step 1 - Download lab files from BlackBoard
Download the file Week10Lab.zip and save it to your computer in a folder called Week10Lab. The ZIP file contains some HTML files, a css folder with the style.css stylesheet, and an images file with some restaurant-related images.

Step 2 - Create the dynamic web page elements
PHP gives you the power to re-use code all over a website. This way, you can edit one file, and have those changes ripple through all of the pages that use that code.

In this step, you will use the index.html file to create re-usable header and footer elements.

Rename all the html files to .php files

Create two files - header.php, and footer.php.
The header.php will contain the HTML code needed to produce the <head> section, plus the web page header and the navigation menu.
The footer.php will return the HTML code needed to produce the footer(copyright) section of the webpage, plus any closing tags for elements opened (but not closed) in the header.php file.
Use the include statement in the index.php to include both the header and footer php files created.

Step 3 - Modify the menu.php and contact.php pages to include the header and footer files

Step 4 - Create a new PHP class called menuItem
The Menuitem class should contain the following:

A private property called itemName
A private property called description
A private property called price
A three-argument constructor that populates each of the above-mentioned properties
Public methods for each of the above mentioned properties
You can create a separate php file for your class, or define it directly in the header.php file. If you create a separate file, remember to include the file.

Step 5 - Instantiate two instances of the Menuitem class
Using the information provided in the index.html file, populate two instances of the menuItem class in the index.php file.

Step 6 - Use the menuItem objects to display the daily special information on the home page
Replace the static HTML that displays the daily specials by using the public functions created in the above Menuitem classes.

Step 7 - Use PHP to display the current year in the footer
Replace the hard-coded year in the copyright statement with code that will output the current year.

Step 8 - Use PHP to replace the word "Today's" in "Today's Specials" with the current day of the week
For example, if it's Monday, it should read "Monday's Specials".
