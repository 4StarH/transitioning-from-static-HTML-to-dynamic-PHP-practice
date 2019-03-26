# transitioning-from-static-HTML-to-dynamic-PHP-practice
Lab work from my CST8285 - Web Programming class where I transitioned a static HTML page into a dynamic PHP page.

Upon completion of this lab, you should be able to:

- Transform a static HTML file into a dynamic PHP template
- Create a web site using dynamic web page elements
- Use the object-oriented capabilities of PHP to define a class, and add methods and properties to that class

<b>Instructions</b>

<b>Step 1 - Create the dynamic web page elements</b>
PHP gives you the power to re-use code all over a website. This way, you can edit one file, and have those changes ripple through all of the pages that use that code.

In this step, you will use the index.html file to create re-usable header and footer elements.

Rename all the html files to .php files

Create two files - header.php, and footer.php.
The header.php will contain the HTML code needed to produce the <head> section, plus the web page header and the navigation menu.
The footer.php will return the HTML code needed to produce the footer(copyright) section of the webpage, plus any closing tags for elements opened (but not closed) in the header.php file.
Use the include statement in the index.php to include both the header and footer php files created.

<b>Step 2 - Modify the menu.php and contact.php pages to include the header and footer files</b>

<b>Step 3 - Create a new PHP class called menuItem</b>
The Menuitem class should contain the following:

A private property called itemName
A private property called description
A private property called price
A three-argument constructor that populates each of the above-mentioned properties
Public methods for each of the above mentioned properties
You can create a separate php file for your class, or define it directly in the header.php file. If you create a separate file, remember to include the file.

<b>Step 4 - Instantiate two instances of the Menuitem class</b>
Using the information provided in the index.html file, populate two instances of the menuItem class in the index.php file.

<b>Step 5 - Use the menuItem objects to display the daily special information on the home page</b>
Replace the static HTML that displays the daily specials by using the public functions created in the above Menuitem classes.

<b>Step 6 - Use PHP to display the current year in the footer</b>
Replace the hard-coded year in the copyright statement with code that will output the current year.

<b>Step 7 - Use PHP to replace the word "Today's" in "Today's Specials" with the current day of the week</b>
For example, if it's Monday, it should read "Monday's Specials".
