# QuickWay Rental

A comprehensive car rental management system built with PHP and MySQL, allowing customers to browse, book, and manage car rentals while providing administrators with full control over inventory and bookings.

## Table of Contents

- [Features](#features)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Configuration](#configuration)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [User Roles](#user-roles)
- [Technologies Used](#technologies-used)
- [Default Login Credentials](#default-login-credentials)
- [File Descriptions](#file-descriptions)

## Features

### Customer Features
- **User Registration & Authentication** - Sign up and securely log in
- **Browse Cars** - View available cars with detailed information
- **Make Bookings** - Book cars for specific dates
- **Manage Bookings** - View, modify, and cancel bookings
- **My Profile** - Update personal information and change password
- **Feedback System** - Leave reviews and feedback about rental experience
- **Order Management** - Track rental orders and return vehicles

### Admin/Manager Features
- **Dashboard** - Manage all system operations
- **Car Management** - Add, edit, and delete vehicles from inventory
- **Booking Management** - View and manage all customer bookings
- **Customer Management** - Manage customer accounts
- **Feedback Management** - Review and manage customer feedback
- **Order Returns** - Process vehicle returns and manage rental completion
- **Profile Management** - Update manager profile and change password

## System Requirements

- **PHP Version**: 5.6.3 or 7.4.12 (recommended)
- **Web Server**: Apache with mod_rewrite enabled
- **Database**: MySQL 5.5+
- **Browser**: Modern browser with JavaScript enabled

## Installation

### Step 1: Clone or Download the Project
```bash
git clone <repository-url>
cd quickway-rental
```

### Step 2: Set Up Web Server
1. Move the project folder to your web server directory:
   - **Apache**: `htdocs` folder
   - **Nginx**: `www` folder
   - **XAMPP/WAMP**: `htdocs` folder

2. Access the project via: `http://localhost/quickway-rental/`

### Step 3: Create Database
```sql
CREATE DATABASE carrental;
```

### Step 4: Import Database Schema
Import the database tables using phpMyAdmin or MySQL command line. Tables needed:
- `customers` - Customer accounts and information
- `cars` - Vehicle inventory
- `bookings` - Customer car bookings
- `orders` - Rental orders
- `employees` - Admin/Manager accounts
- `feedback` - Customer reviews and feedback

### Step 5: Update Database Connection
Edit `connection.php` and update the credentials:
```php
$dbhost = "localhost";
$dbuser = "root";        // Your MySQL username
$dbpass = "";            // Your MySQL password
$dbname = "carrental";   // Database name
```

## Configuration

### Environment Settings
- Ensure your MySQL server is running before accessing the application
- Enable file uploads if cars include images
- Configure CORS headers if API integration is needed

## Usage

### For Customers
1. Go to the home page (`index.php`)
2. Click "Sign Up" to create an account
3. Log in with your credentials
4. Browse available cars on "Cars" page
5. Make a booking through the "Booking" page
6. Manage your profile and bookings in "My Account"

### For Administrators/Managers
1. Access admin panel via `admin.php`
2. Log in with manager credentials
3. Use the dashboard to:
   - Add/Edit/Delete cars
   - View and manage bookings
   - Process vehicle returns
   - Manage customer accounts
   - Review feedback

## Project Structure

```
quickway-rental/
├── index.php                    # Home page
├── connection.php               # Database connection
├── session_customer.php          # Customer session handler
├── session_client.php            # Client/Admin session handler
│
├── CUSTOMER PAGES
├── customersignup.php            # Customer registration
├── customerlogin.php             # Customer login
├── cars.php                      # Browse available cars
├── booking.php                   # Make new booking
├── bookingconfirm.php            # Confirm booking details
├── myorder.php                   # View my orders/bookings
├── return_order.php              # Return rental vehicle
├── myprofile.php                 # Edit profile
├── change_password.php           # Change password
├── create_feedback.php           # Submit feedback
├── update_profile.php            # Update profile (backend)
├── update_order.php              # Update order status
├── complete_order.php            # Complete rental order
├── delete_profile.php            # Delete account
│
├── ADMIN PAGES
├── admin.php                     # Admin dashboard
├── entercar.php                  # Add new car
├── editcar.php                   # Edit car details
├── updatecar.php                 # Update car (backend)
├── deletecar.php                 # Delete car
├── viewcars.php                  # View all cars
├── update_client.php             # Update admin profile
├── delete_client.php             # Delete account
│
├── UTILITY PAGES
├── login_client.php              # Admin login processor
├── login_customer.php            # Customer login processor
├── logout.php                    # Logout functionality
├── insert_client.php             # Register manager
├── contact.php                   # Contact page
├── contactus.php                 # Contact form processor
├── about.php                     # About page
├── privacy.php                   # Privacy policy
├── terms.php                     # Terms and conditions
├── save_feedback.php             # Save feedback (backend)
├── update_feedback.php           # Update feedback
├── delete_feedback.php           # Delete feedback
├── customer_registered_success.php # Registration confirmation
│
├── CSS STYLING
├── index.css                     # Home page styles
├── admin.css                     # Admin page styles
├── cars.css                      # Cars page styles
├── booking.css                   # Booking styles
├── bookingconfirm.css            # Booking confirmation styles
├── contact.css                   # Contact page styles
├── profile.css                   # Profile page styles
├── login.css                     # Login page styles
├── signup.css                    # Signup page styles
├── styles.css                    # Global styles
│
├── JAVASCRIPT
├── script.js                     # Main scripts
├── Untitled-1.js                 # Additional scripts
│
└── ASSETS
    ├── css/
    │   ├── bookingconfirm.css
    │   ├── clientlogin.css
    │   ├── clientpage.css
    │   ├── clientsignup.css
    │   ├── customerlogin.css
    │   ├── privacy.css
    │   ├── user.css
    │   └── viewshopdetails.css
    ├── js/
    │   ├── bootstrap.min.js
    │   ├── custom.js
    │   ├── jquery-1.10.2.min.js
    │   ├── jquery.easing.min.js
    │   ├── jquery.lightbox.js
    │   ├── jquery.min.js
    │   ├── main.js
    │   ├── templatemo_custom.js
    │   └── theme.js
    └── img/
        └── cars/
```

## User Roles

### Customer
- Browse and search for cars
- Create bookings and manage reservations
- View booking history and status
- Update profile information
- Provide feedback and reviews

### Employee/Manager
- Full administrative access
- Add and manage car inventory
- Process customer bookings
- Handle vehicle returns
- Manage customer accounts
- Review customer feedback

## Technologies Used

- **Backend**: PHP 5.6.3 / 7.4.12
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Libraries**: 
  - jQuery
  - Bootstrap
  - jQuery Lightbox
  - Font Awesome Icons

## Default Login Credentials

### Customer Account
- **Username**: lucas
- **Password**: password

### Manager Accounts
- **Username**: harry
- **Password**: password

- **Username**: jenny
- **Password**: jenny

> **Warning**: Change these credentials immediately in production environment!

## File Descriptions

### Core Files
- **connection.php** - Establishes MySQL database connection
- **index.php** - Main homepage with navigation
- **admin.php** - Administrative dashboard

### Authentication & Sessions
- **session_customer.php** - Maintains customer user sessions
- **session_client.php** - Maintains admin/manager sessions
- **login_customer.php** - Customer login processor
- **login_client.php** - Admin login processor
- **logout.php** - Logout functionality

### Database Operations
- **insert_client.php** - Register new manager/employee
- **update_client.php** - Update manager profile
- **delete_client.php** - Delete manager account
- **update_profile.php** - Update customer profile
- **delete_profile.php** - Delete customer account

## Security Recommendations

1. **Change Default Credentials** - Update login credentials for all default accounts
2. **Use HTTPS** - Implement SSL/TLS for secure data transmission
3. **Input Validation** - Sanitize and validate all user inputs
4. **SQL Injection Prevention** - Use prepared statements
5. **Password Hashing** - Use strong hashing algorithms for password storage
6. **Session Security** - Implement proper session timeout
7. **Database Backups** - Regular backup of the carrental database

## Support & Contribution

For issues, bugs, or feature requests, please contact the development team.

## License

This project is provided as-is. Please refer to the project's license file for details.

## Version

**Version**: 1.0
**Last Updated**: 2025



