# CLA-2-Case-study-on-Build-a-feedback-submission-and-management-system-for-a-website

# 🌟 Feedback Submission & Management System

A modern web-based Feedback Management System built with **PHP**, **MySQL**, **Bootstrap**, and **HTML/CSS**. It allows users to submit feedback and enables administrators to manage and view feedback entries securely via a login-protected dashboard.

---

## ✨ Features

- 📝 Feedback form for users (name, email, rating, and message)
- 🛡️ Admin login system (username/password)
- 📊 Admin dashboard to view, delete feedback
- 📱 Mobile-responsive layout using Bootstrap 5
- 💾 MySQL database integration
- 🔐 Secure login with password hashing

---

## 🗂️ Technologies Used

- PHP
- MySQL (XAMPP / MySQL Workbench)
- HTML5
- CSS3
- Bootstrap 5
- JavaScript

---

## 📁 Folder Structure

feedback-system/ ├── index.html # Feedback form (public) ├── submit_feedback.php # PHP script to store feedback ├── db.php # Database connection ├── css/ │ └── style.css # Custom styles & dark mode ├── admin/ │ ├── login.php # Admin login page │ ├── dashboard.php # Admin feedback dashboard │ ├── delete.php # Delete feedback │ └── logout.php # Admin logout └── database.sql # MySQL setup script


---

## ⚙️ Setup Instructions

1. **Clone this repo into XAMPP's `htdocs` folder:**
git clone https://github.com/your-username/feedback-system.git


2. **Start Apache and MySQL in XAMPP**

3. **Create the database:**
- Open MySQL Workbench or phpMyAdmin
- Run `database.sql` to create `feedback_db` and required tables

4. **Access the system:**
- User feedback form: `http://localhost/feedback-system/`
- Admin dashboard: `http://localhost/feedback-system/admin/login.php`
- Default Admin: `admin / admin123`

---

## 🧑‍💻 Admin Login Credentials

| Username | Password   |
|----------|------------|
| admin    | admin123   |

> Passwords are securely hashed in the database using PHP's `password_hash()` function.

---

## 📜 License

This project is open-source and free to use under the MIT License.

---

## 🤝 Contributing

Feel free to fork this repository and submit pull requests if you'd like to add features like:
- Email notifications for new feedback
- Export to CSV
- Feedback reply system

---

## 🙌 Acknowledgments

Thanks to all the open-source tools and communities that make projects like this possible!

