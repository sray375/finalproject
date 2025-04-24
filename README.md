
# lana writes– CISC 3300 Final Project

This project is a full-stack web application on lana's lyrics in her discogrpahy 

- discography page featuring four albums
- user writes their own lyric with a randomly generated word (AJAX and JSON)
-  MySQL-powered product 
- RESTful routing via a custom PHP MVC framework

## Access

After starting MAMP and visiting http://localhost:8888/discography, here’s where everything lives:
***please run the SQL file to seed your MySQL database. Then launch via MAMP or equivalent with your document root pointing to /finalproject/public***


### Discography
Go to:  
http://localhost:8888/discography  
This is the main albums page. Click an album image to see:

- Album title
- A featured song with lyrics and my personal comment
- A Spotify embed of the song

Includes:
- Born to Die 
- Ultraviolence 
- Honeymoon 
- Blue Banisters 

Go to:  
http://localhost:8888/album/lyric-challenge  
Generate a random word and write your own lyric. Submissions saved to a static JSON array and viewable in the UI.

Products Page (MySQL Integration)
Go to:  
 http://localhost:8888/products
 This page pulls product data from a **MySQL database** using PDO and displays:

- Product name
- Description
- Image
- Price


- Backend: PHP (MVC structure with controllers, models, and views)
- Frontend: HTML, CSS, JavaScript, jQuery, Google Fonts
- Database: MySQL (via MAMP)
- AJAX: Used for lyric submission + display
- Routing: Custom PHP `Router.php` file for RESTful URIs


Folder Structure Overview

- public/ → Front-facing pages (index.php, assets folder)
- app/controllers/ → PHP controller classes
- app/models/ → PHP models (e.g. for products)
- assets/views/ → HTML/PHP views for albums, homepage, lyric challenge
- api/ → Lyric POST + GET endpoints (JSON)
- .env → Database credentials (not tracked in Git)


 How to Run

1. Open MAMP, start servers.
2. Place project folder inside /Applications/MAMP/htdocs/.
3. Visit http://localhost:8888/discography/`.
4. Explore each route!

Project folder: finalproject
http://localhost:8888/finalproject/public/index.php?url=discography
only Product DB view: http://localhost:8888/products

