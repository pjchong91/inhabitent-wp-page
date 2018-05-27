# Project 3: Inhabitent
* Author: P. Chong, WDP Student 2018 Q2

## Description and Objective: 
- For the inhabitent project, our goal was to create a multi-page website with a blog using WordPress as a content manager sytem.
- The inhabitent theme is built from using "Red Starter @ https://github.com/redacademy/redstarter" as a base

## Using:
- WordPress, SASS, PHP, and Gulp

## Questions Encountered and Learning Acquired:
* Extensive CSS Management Across Multi-Page
It doesn't make sense to code CSS for every individual page.  Many of the pages have similar styles (ie. About page & Front page).  The goal for this project was to be strategic in how the CSS was written, such that the same CSS would not be repeated unnecessarily.

* Plug-in vs Theme - Where should different functionalities go?
Anything coded into themes should be largely for aesthetic purposes.  The user should not lose vital functionalities if changing to another theme.  If a functionality is vital for the site, it should be written in a plug-in which can be used across different themes.

* Custom Post Types & Taxonomies
Custom post types (CPT) can be used when the admin wants to create posts that do not necessarily fit into the default page type.  In this project, we used the CPT for Products and Adventures.  With products, specifically, we added a custom field of 'Price'.  We further sorted our Product CPT into different taxonomies (ie. Eat, sleep, do, wear).

* Wordpress Template Hierarchy
Inhabitent used a variety of .php files as needed for front-page.php, home.php, archive.php etc.  Wordpress uses the template hierarchy to determine which page to load, there are default fall-backs if a more specific page is not available.


## Goals for Future Improvement:

TO DO LIST:

Margins, Contact Form, Leave Comments, Clean up indentation, validate

