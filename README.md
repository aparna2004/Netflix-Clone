# Netflix Clone

This project is a simple Netflix Clone built using HTML, CSS, JavaScript, and PHP, and runs on a XAMPP server environment. The purpose of this project is to replicate the basic features and user interface of Netflix, including:

- User authentication (login and signup)
- Display of movies and TV shows
- Basic movie/TV show details pages

### Tech Stack
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL (handled via XAMPP)
Server: XAMPP (Apache and MySQL)

## Netflix Clone - README


### Setup Instructions

1. **Install XAMPP**:  
   Download and install XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/). XAMPP includes PHP, MySQL, and Apache, which are needed to run the project locally.

2. **Clone the Repository**:  
   Download or clone this repository into your `htdocs` folder inside the XAMPP installation directory (typically located at `C:/xampp/htdocs/` for Windows users).

   ```
   git clone https://github.com/your-repo/netflix-clone.git
   ```

3. **Start XAMPP**:  
   Open the XAMPP Control Panel and start both **Apache** and **MySQL**.

4. **Set Up the Database**:  
   - Open your browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Create a new database named `netflix_clone`.
   - Import the `netflix.sql` file located in the `/database` folder to set up the required tables.

5. **Configure Database Connection**:  
   - Open the `includes/config.php` file and update the database credentials if necessary.

   ```php
   <?php
   // Database connection settings
   $host = 'localhost';
   $username = 'root';
   $password = ''; // Default password for XAMPP
   $database = 'netflix_clone';
   ?>
   ```

6. **Access the Application**:  
   Open your browser and go to [http://localhost/netflix-clone](http://localhost/netflix-clone) to access the Netflix clone.

7. **Testing**:  
   - Create a new account via the signup page.
   - Log in with the newly created credentials.
   - Explore the user dashboard and browse through the movies.
