# University Registration System

This is a simple web-based university registration system that allows students to register for courses.

## Features

- **Registration**: Students can register for courses by providing their name, email, and selecting a course from the available list.
- **View Courses**: Students can view the list of available courses.
- **Login**: Registered students can log in to access their dashboard.
- **Dashboard**: Logged-in students have access to a dashboard where they can view their registered courses and other member-specific content.

## Technologies Used

- HTML
- CSS
- PHP
- MySQL

## Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/university-registration-system.git
    ```

2. Import the database schema provided in `database.sql` to set up the required database tables.

3. Update the database connection details in `connect.php` to match your MySQL server settings.

4. Make sure your web server (e.g., Apache, Nginx) and MySQL server are running.

5. Navigate to the project directory in your web server's document root.

6. Access the application through your web browser.

## Directory Structure

university-registration-system/
│
├── index.php
├── register.php
├── view_courses.php
├── login.php
├── dashboard.php
├── contact.php
│
├── styles.css
├── connect.php
├── register_process.php
├── login_process.php
├── logout.php
│
├── database.sql
├── README.md
└── images/

python
Copy code

## Contributing

Contributions are welcome! If you have any ideas or improvements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
