<div align="center">

# 🛒 mkshop - Modern E-Commerce Web Application

![mkshop Logo](resourses/logo.png)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange.svg)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.0-purple.svg)](https://getbootstrap.com)
[![Contributions Welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](CONTRIBUTING.md)
[![Made with ❤️](https://img.shields.io/badge/Made%20with-❤️-red.svg)](https://github.com/isharax9/Ecommerce-web-application)

**A fully functional, modern e-commerce web application designed to facilitate seamless buying and selling of products online.**

[🚀 Live Demo](#) | [📖 Documentation](#table-of-contents) | [🐛 Report Bug](https://github.com/isharax9/Ecommerce-web-application/issues) | [💡 Request Feature](https://github.com/isharax9/Ecommerce-web-application/issues)

</div>

---

## 📑 Table of Contents

1. [🌟 Introduction](#-introduction)
2. [✨ Features](#-features)
3. [🏗️ Architecture](#️-architecture)
4. [🚀 Getting Started](#-getting-started)
   - [📋 Prerequisites](#-prerequisites)
   - [⚙️ Installation](#️-installation)
   - [🔧 Configuration](#-configuration)
   - [🗄️ Database Setup](#️-database-setup)
5. [📖 Usage Guide](#-usage-guide)
   - [👥 User Roles](#-user-roles)
   - [🧭 Navigation](#-navigation)
   - [📦 Product Management](#-product-management)
   - [👤 User Profile](#-user-profile)
   - [❤️ Wishlist & Cart](#️-wishlist--cart)
   - [📊 Sales Dashboard](#-sales-dashboard)
   - [💬 Messaging](#-messaging)
   - [📋 Reporting](#-reporting)
6. [🛠️ Technologies Used](#️-technologies-used)
7. [📚 API Documentation](#-api-documentation)
8. [🔒 Security Features](#-security-features)
9. [⚡ Performance Optimization](#-performance-optimization)
10. [🚀 Deployment](#-deployment)
11. [🧪 Testing](#-testing)
12. [🔧 Troubleshooting](#-troubleshooting)
13. [🤝 Contributing](#-contributing)
14. [📄 License](#-license)
15. [🙏 Acknowledgments](#-acknowledgments)
16. [❓ FAQ](#-faq)
17. [📱 Screenshots](#-screenshots)
18. [📊 Database Schema](#-database-schema)

---

## 🌟 Introduction

**mkshop** is a cutting-edge, fully functional e-commerce web application built with modern web technologies. Designed to provide a seamless experience for both sellers and buyers, mkshop offers a comprehensive platform for online commerce with robust features, secure transactions, and an intuitive user interface.

### 🎯 Mission
To democratize e-commerce by providing an accessible, feature-rich platform that empowers individuals and businesses to buy and sell products online with confidence and ease.

### 🌍 Vision
To become the go-to open-source e-commerce solution that bridges the gap between functionality and simplicity, enabling entrepreneurs worldwide to build their online presence.

---

## ✨ Features

### 🔐 User Management
- **User Registration & Authentication**: Secure user registration with email verification
- **Login System**: Robust authentication with session management
- **Password Recovery**: Email-based password reset functionality
- **Profile Management**: Comprehensive user profile updates (excluding email)
- **Role-Based Access**: Distinct seller and buyer roles with appropriate permissions

### 🛍️ Shopping Experience
- **Product Catalog**: Beautiful product showcase with detailed information
- **Advanced Search**: Powerful search functionality with filters and sorting
- **Wishlist**: Save favorite products for later purchase
- **Shopping Cart**: Full-featured cart with quantity management
- **Product Reviews**: User-generated reviews and ratings (coming soon)

### 💼 Seller Tools
- **Product Management**: Easy-to-use product addition and editing interface
- **Inventory Tracking**: Real-time stock management
- **Sales Dashboard**: Comprehensive analytics and reporting
- **Order Management**: Track and manage customer orders
- **Revenue Analytics**: Detailed sales and revenue tracking

### 💳 Payment & Transactions
- **PayHere Integration**: Secure payment processing with PayHere gateway
- **Multiple Payment Methods**: Support for various payment options
- **Invoice Generation**: Automated invoice creation for completed transactions
- **Transaction History**: Complete purchase and sales history

### 📱 User Interface
- **Responsive Design**: Mobile-first, fully responsive layout
- **Modern UI/UX**: Clean, intuitive interface built with Bootstrap 5
- **Cross-Browser Compatibility**: Works seamlessly across all modern browsers
- **Accessibility**: WCAG compliant design for inclusive user experience

### 🔧 Administrative Features
- **User Management**: Admin tools for user oversight
- **Product Moderation**: Content review and approval system
- **System Monitoring**: Performance and security monitoring tools
- **Backup & Recovery**: Automated data backup solutions

### 📋 Original Features List
- User registration and login
- Product home page showcasing seller's products
- Wishlist and cart functionality for buyers
- Advanced product search and full-page product search
- User profile management, including profile details updates
- Sellers can add new products with a customizable product add page
- Sales dashboard for sellers (under maintenance)
- My products page for sellers to manage their listed products
- Watchlist page for buyers
- Purchase history for buyers
- Messaging functionality for communicating with sellers (under construction)
- Contact administration or report issues

---

## 🏗️ Architecture

mkshop follows a modular, MVC-inspired architecture built on PHP with MySQL database:

```
mkshop/
├── 📁 frontend/          # User interface components
│   ├── index.php         # Landing/Authentication page
│   ├── home.php          # Main dashboard
│   ├── style.css         # Custom styling
│   └── script.js         # Client-side functionality
├── 📁 backend/           # Server-side logic
│   ├── connection.php    # Database connection
│   ├── *Process.php      # Business logic processors
│   └── Exception.php     # Error handling
├── 📁 assets/            # Static resources
│   ├── resourses/        # Images, icons, media
│   └── font/             # Typography assets
├── 📁 vendor/            # Third-party libraries
│   ├── PHPMailer/        # Email functionality
│   └── bootstrap/        # UI framework
└── 📁 docs/              # Documentation
    ├── README.md
    ├── CONTRIBUTING.md
    └── LICENSE
```

---

## 🚀 Getting Started

### 📋 Prerequisites

Before you begin, ensure you have the following installed on your system:

| Software | Version | Purpose | Download Link |
|----------|---------|---------|---------------|
| **PHP** | 7.4+ | Server-side scripting | [php.net](https://php.net/downloads) |
| **MySQL** | 5.7+ | Database management | [mysql.com](https://dev.mysql.com/downloads/) |
| **Apache/Nginx** | Latest | Web server | [apache.org](https://httpd.apache.org/) / [nginx.org](https://nginx.org/) |
| **Composer** | Latest | Dependency management | [getcomposer.org](https://getcomposer.org/) |
| **Git** | Latest | Version control | [git-scm.com](https://git-scm.com/) |

#### 🔧 PHP Extensions Required:
- `mysqli` - MySQL database connectivity
- `pdo` - Database abstraction layer
- `json` - JSON manipulation
- `curl` - HTTP client functionality
- `openssl` - Encryption and security
- `mbstring` - Multibyte string handling
- `gd` - Image processing

### ⚙️ Installation

#### Method 1: Quick Setup (Recommended)

```bash
# 1. Clone the repository
git clone https://github.com/isharax9/Ecommerce-web-application.git
cd Ecommerce-web-application

# 2. Set up web server document root
# Point your web server to the project directory

# 3. Configure database connection
cp config/database.example.php config/database.php
# Edit database.php with your credentials

# 4. Import database schema
mysql -u your_username -p your_database < database/mkshop_schema.sql

# 5. Set up PayHere credentials
cp config/payhere.example.php config/payhere.php
# Add your PayHere API credentials

# 6. Configure email settings (for password reset)
cp config/email.example.php config/email.php
# Add your SMTP credentials
```

#### Method 2: Manual Setup

1. **Download the Source Code**
   ```bash
   wget https://github.com/isharax9/Ecommerce-web-application/archive/main.zip
   unzip main.zip
   cd Ecommerce-web-application-main
   ```

2. **Set Up Web Server**
   - **Apache**: Place files in `htdocs` directory
   - **Nginx**: Configure server block to point to project directory
   - **XAMPP/WAMP**: Place in respective www directory

3. **Database Configuration**
   - Create a new MySQL database
   - Import the provided SQL schema
   - Update connection details in `connection.php`

### 🔧 Configuration

#### Database Configuration

Edit `connection.php` with your database credentials:

```php
<?php
class Database {
    public static $connection;
    
    private static function setUpConnect() {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli(
                "localhost",    // Host
                "your_username", // Username
                "your_password", // Password
                "mkshop_db",    // Database name
                3306            // Port
            );
        }
        return Database::$connection;
    }
}
?>
```

#### PayHere Payment Gateway Setup

1. **Create PayHere Account**
   - Visit [PayHere.lk](https://www.payhere.lk/)
   - Create a merchant account
   - Obtain API credentials

2. **Configure Payment Settings**
   ```php
   // In payNowProcess.php
   $merchant_id = "your_merchant_id";
   $merchant_secret = "your_merchant_secret";
   ```

#### Email Configuration (PHPMailer)

```php
// Email settings for password reset
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com';
$mail->Password = 'your_app_password';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
```

### 🗄️ Database Setup

#### 1. Create Database Schema

```sql
-- Create database
CREATE DATABASE mkshop_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mkshop_db;

-- Core tables (simplified schema)
-- See full schema in /database/schema.sql
```

#### 2. Sample Data (Optional)

```bash
# Import sample data for testing
mysql -u username -p mkshop_db < database/sample_data.sql
```

### 📋 Original Installation Instructions

Before getting started with the application, make sure you have the following installed:

- Web server (e.g., Apache, Nginx)
- PHP
- MySQL
- Git
- PayHere Payment Gateway API credentials

**Installation Steps:**

1. Clone the repository from GitHub:
   ```
   https://github.com/isharax9/Ecommerce-web-application.git
   ```

2. Create a MySQL database and configure the database connection in the application.

3. Configure the PayHere Payment Gateway API with your credentials.

4. Host the application on your web server.

---

## 📖 Usage Guide

### 👥 User Roles

mkshop implements a role-based system with distinct capabilities:

#### 🛒 **Buyers**
- Browse and search products
- Add items to wishlist and cart
- Make purchases through secure payment gateway
- Track order history and status
- Manage personal profile
- Rate and review products (coming soon)

#### 🏪 **Sellers**
- List and manage products
- Set pricing and inventory
- Track sales and revenue
- Manage customer orders
- Access sales analytics
- Communicate with buyers

#### 👨‍💼 **Administrators** (Future Release)
- User management and moderation
- System configuration
- Payment oversight
- Content moderation
- Analytics and reporting

#### 📋 Original User Roles
mkshop supports two main user roles:
- **Sellers**: Users who can list and manage products
- **Buyers**: Users who can browse, add to cart, and purchase products

### 🧭 Navigation

#### Main Navigation Structure
```
Home → Categories → Products → Details → Cart → Checkout → Payment
  ↓
Profile → Wishlist → Orders → Messages → Settings
  ↓
Seller Dashboard → My Products → Add Product → Sales Analytics
```

#### 📋 Original Navigation Guide
- Upon registration or login, users are directed to the home page, where they can browse products
- Navigation menus allow access to various features, such as the user profile, wishlist, and cart

### 📦 Product Management

#### For Sellers: Adding Products

1. **Navigate to Add Product Page**
   ```
   Dashboard → My Products → Add New Product
   ```

2. **Product Information Form**
   - **Basic Details**: Title, Category, Brand, Model
   - **Specifications**: Condition, Color, Quantity
   - **Pricing**: Cost, Delivery fees (Colombo/Other areas)
   - **Media**: Upload product images (up to 3)
   - **Description**: Detailed product description

3. **Product Activation**
   - Products start as inactive
   - Activate after review and approval

#### Product Categories

| Category | Subcategories | Examples |
|----------|---------------|----------|
| Electronics | Mobile, Laptop, Audio | iPhone, MacBook, Headphones |
| Fashion | Men, Women, Kids | Clothing, Shoes, Accessories |
| Home & Garden | Furniture, Decor | Sofas, Plants, Kitchen |
| Sports | Equipment, Apparel | Gym gear, Sports shoes |

#### 📋 Original Product Management
- **Sellers**: Can add new products, edit existing listings, and view their products
- **Buyers**: Can browse, search for, and purchase products

### 👤 User Profile

#### Profile Management Features
- **Personal Information**: Name, contact details, address
- **Security Settings**: Password change, security questions
- **Preferences**: Language, currency, notifications
- **Verification**: Email verification, phone verification

#### 📋 Original User Profile
Users can view and update their profile details, excluding their registered email address.

### ❤️ Wishlist & Cart

#### Wishlist Features
- **Save for Later**: Add products to wishlist
- **Share Lists**: Share wishlist with others (coming soon)
- **Move to Cart**: Easy transfer from wishlist to cart
- **Price Alerts**: Notifications on price changes (coming soon)

#### Shopping Cart
- **Quantity Management**: Adjust item quantities
- **Price Calculation**: Real-time total calculation
- **Delivery Options**: Choose delivery preferences
- **Save Cart**: Persistent cart across sessions

#### 📋 Original Wishlist and Cart
Buyers can add products to their wishlist and cart for later purchase.

### 📊 Sales Dashboard

#### Seller Analytics
- **Revenue Tracking**: Daily, weekly, monthly revenue
- **Product Performance**: Best and worst-selling products
- **Customer Insights**: Buyer demographics and behavior
- **Inventory Alerts**: Low stock notifications

#### 📋 Original Sales Dashboard (Sellers)
Sellers can track their sales through the sales dashboard (if available).

### 💬 Messaging

#### Communication Features (Under Development)
- **Buyer-Seller Chat**: Direct messaging system
- **Order Updates**: Automated status notifications
- **Support Tickets**: Customer service integration

#### 📋 Original Messaging (Under Construction)
Users will soon be able to send messages to sellers for inquiries.

### 📋 Reporting

#### Available Reports
- **Sales Reports**: Revenue and transaction analysis
- **Inventory Reports**: Stock levels and movement
- **Customer Reports**: User activity and engagement
- **Financial Reports**: Payment and commission tracking

#### 📋 Original Reporting
Users can contact administration for assistance or report issues.

---

## 🛠️ Technologies Used

### 🔧 Backend Technologies

| Technology | Version | Purpose | Documentation |
|------------|---------|---------|---------------|
| **PHP** | 7.4+ | Server-side scripting | [php.net](https://php.net/docs) |
| **MySQL** | 5.7+ | Database management | [dev.mysql.com](https://dev.mysql.com/doc/) |
| **PHPMailer** | 6.0+ | Email functionality | [github.com/PHPMailer](https://github.com/PHPMailer/PHPMailer) |
| **Apache/Nginx** | Latest | Web server | Server documentation |

### 🎨 Frontend Technologies

| Technology | Version | Purpose | Documentation |
|------------|---------|---------|---------------|
| **HTML5** | Latest | Markup language | [developer.mozilla.org](https://developer.mozilla.org/en-US/docs/Web/HTML) |
| **CSS3** | Latest | Styling and layout | [developer.mozilla.org](https://developer.mozilla.org/en-US/docs/Web/CSS) |
| **Bootstrap** | 5.0+ | UI framework | [getbootstrap.com](https://getbootstrap.com/docs) |
| **JavaScript** | ES6+ | Client-side interactivity | [developer.mozilla.org](https://developer.mozilla.org/en-US/docs/Web/JavaScript) |
| **AJAX** | - | Asynchronous requests | [developer.mozilla.org](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX) |

### 🔌 Third-Party Integrations

- **PayHere Payment Gateway**: Secure payment processing for Sri Lankan market
- **Bootstrap Icons**: Comprehensive icon library
- **Google Fonts**: Typography enhancement
- **CloudImg**: Image optimization and delivery

### 🏗️ Architecture Patterns

- **MVC Inspired**: Separation of concerns
- **RESTful APIs**: Clean API design
- **Component-Based**: Reusable UI components
- **Progressive Enhancement**: Graceful degradation support

### 📋 Original Technologies List
- PHP
- HTML5
- JavaScript
- CSS (Bootstrap)
- AJAX
- MySQL
- Git and GitHub
- PayHere Payment Gateway API

---

## 📚 API Documentation

### 🔗 Endpoint Overview

mkshop uses AJAX-based communication for seamless user experience:

#### Authentication Endpoints

```javascript
// User Registration
POST /signUpProcess.php
{
    "fname": "John",
    "lname": "Doe", 
    "email": "john@example.com",
    "password": "securepassword",
    "mobile": "+94771234567"
}

// User Login
POST /signinProcess.php
{
    "email": "john@example.com",
    "password": "securepassword",
    "rememberme": true
}

// Password Reset
POST /forgotPasswordProcess.php
{
    "email": "john@example.com"
}
```

#### Product Management

```javascript
// Add Product
POST /addProductProcess.php
FormData: {
    "category": "1",
    "brand": "2",
    "model": "iPhone 15",
    "title": "iPhone 15 Pro Max",
    "condition": "1",
    "color": "Blue",
    "qty": "10",
    "cost": "150000",
    "dwc": "500",    // Delivery within Colombo
    "doc": "1000",   // Delivery outside Colombo
    "desc": "Latest iPhone model",
    "img0": File,
    "img1": File,
    "img2": File
}

// Update Product
POST /updateProductProcess.php
// Similar structure to addProduct

// Search Products
POST /basicSearchProcess.php
{
    "txt": "search term",
    "select": "0"  // Search type
}
```

#### Cart & Wishlist Operations

```javascript
// Add to Cart
GET /addToCartProcess.php?id={productId}

// Remove from Cart  
GET /removeFromCartProcess.php?id={cartId}

// Add to Wishlist
GET /addWatchListProcess.php?id={productId}

// Remove from Wishlist
GET /removeFromWatchListProcess.php?id={watchlistId}
```

#### Payment Processing

```javascript
// Initialize Payment
POST /payNowProcess.php
{
    "payment": JSON.stringify(paymentData),
    // PayHere payment object
}
```

### 📝 Response Formats

#### Success Response
```json
{
    "status": "success",
    "message": "Operation completed successfully",
    "data": {}
}
```

#### Error Response
```json
{
    "status": "error", 
    "message": "Error description",
    "code": "ERROR_CODE"
}
```

---

## 🔒 Security Features

### 🛡️ Data Protection

#### Input Validation & Sanitization
- **SQL Injection Prevention**: Prepared statements and parameterized queries
- **XSS Protection**: Input sanitization and output encoding
- **CSRF Protection**: Token-based request validation
- **File Upload Security**: Type validation and secure storage

#### Authentication & Authorization
- **Password Security**: Bcrypt hashing with salt
- **Session Management**: Secure session handling
- **Role-Based Access**: Granular permission system
- **Rate Limiting**: Protection against brute force attacks

#### Data Encryption
- **Sensitive Data**: Encryption of personal information
- **Payment Data**: PCI DSS compliant processing
- **Communication**: HTTPS enforcement
- **Database**: Encrypted sensitive fields

### 🔐 Security Best Practices

```php
// Example: Secure database query
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

// Example: Password hashing
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Example: Input sanitization
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
```

---

## ⚡ Performance Optimization

### 🚀 Frontend Optimization

#### Code Optimization
- **Minification**: CSS/JS minification for faster loading
- **Image Optimization**: WebP format and responsive images
- **Lazy Loading**: On-demand resource loading
- **CDN Integration**: CloudImg for image delivery

#### Caching Strategies
- **Browser Caching**: Leverage browser cache for static assets
- **Application Caching**: PHP OPcache implementation
- **Database Caching**: Query result caching
- **Session Storage**: Optimized session management

### 🗄️ Database Optimization

#### Query Optimization
```sql
-- Indexed queries for better performance
CREATE INDEX idx_product_category ON products(category_id);
CREATE INDEX idx_user_email ON users(email);
CREATE INDEX idx_order_date ON orders(created_date);

-- Optimized search queries
SELECT p.*, c.name as category_name 
FROM products p 
INNER JOIN categories c ON p.category_id = c.id 
WHERE p.status = 1 
ORDER BY p.created_date DESC 
LIMIT 20;
```

#### Database Design
- **Normalization**: Proper table structure
- **Indexing**: Strategic index placement
- **Connection Pooling**: Efficient connection management
- **Query Analysis**: Regular performance monitoring

---

## 🚀 Deployment

### 🌐 Production Deployment

#### Server Requirements

| Component | Minimum | Recommended |
|-----------|---------|-------------|
| **CPU** | 2 cores | 4+ cores |
| **RAM** | 4GB | 8GB+ |
| **Storage** | 50GB SSD | 100GB+ SSD |
| **Bandwidth** | 100Mbps | 1Gbps+ |

#### Deployment Steps

1. **Server Setup**
   ```bash
   # Ubuntu/Debian
   sudo apt update
   sudo apt install apache2 php mysql-server
   sudo apt install php-mysqli php-curl php-json php-mbstring
   
   # Enable required modules
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

2. **SSL Certificate**
   ```bash
   # Using Let's Encrypt
   sudo apt install certbot python3-certbot-apache
   sudo certbot --apache -d yourdomain.com
   ```

3. **Database Migration**
   ```bash
   # Backup production database
   mysqldump -u root -p mkshop_db > backup.sql
   
   # Restore on new server
   mysql -u root -p mkshop_db < backup.sql
   ```

4. **Environment Configuration**
   ```bash
   # Set production environment variables
   export ENVIRONMENT=production
   export DEBUG_MODE=false
   export DB_HOST=localhost
   export DB_USER=mkshop_user
   export DB_PASS=secure_password
   ```

### 🐳 Docker Deployment

```dockerfile
# Dockerfile
FROM php:7.4-apache

# Install dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy application files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

EXPOSE 80
```

```yaml
# docker-compose.yml
version: '3.8'
services:
  web:
    build: .
    ports:
      - "80:80"
    depends_on:
      - db
    environment:
      - DB_HOST=db
  
  db:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: rootpassword
      MYSQL_DATABASE: mkshop_db
    volumes:
      - mysql_data:/var/lib/mysql

volumes:
  mysql_data:
```

---

## 🧪 Testing

### 🔍 Testing Strategy

#### Unit Testing
- **PHP Unit Tests**: Backend functionality testing
- **JavaScript Tests**: Frontend component testing
- **Database Tests**: Query and schema validation

#### Integration Testing
- **API Testing**: Endpoint functionality
- **Payment Testing**: Transaction flow validation
- **Email Testing**: Notification system verification

#### User Acceptance Testing
- **Manual Testing**: User journey validation
- **Browser Testing**: Cross-browser compatibility
- **Mobile Testing**: Responsive design verification

### 🛠️ Testing Tools

```bash
# PHPUnit for backend testing
composer require --dev phpunit/phpunit

# Run tests
./vendor/bin/phpunit tests/

# Coverage report
./vendor/bin/phpunit --coverage-html coverage/
```

---

## 🔧 Troubleshooting

### 🐛 Common Issues & Solutions

#### Database Connection Issues

**Problem**: "Connection failed: Access denied for user"
```php
// Solution: Check database credentials in connection.php
Database::$connection = new mysqli(
    "localhost",     // Verify host
    "correct_user",  // Verify username  
    "correct_pass",  // Verify password
    "correct_db",    // Verify database name
    3306            // Verify port
);
```

#### PayHere Integration Issues

**Problem**: Payment gateway not working
```php
// Solution: Verify PayHere credentials
$merchant_id = "your_actual_merchant_id";      // Check this
$merchant_secret = "your_actual_merchant_secret"; // And this
$currency = "LKR";  // Ensure correct currency
$amount = number_format($total, 2, '.', ''); // Proper formatting
```

#### Email Not Sending

**Problem**: Password reset emails not delivered
```php
// Solution: Check SMTP settings
$mail->Host = 'smtp.gmail.com';           // Correct SMTP server
$mail->Username = 'your_email@gmail.com'; // Correct email
$mail->Password = 'app_specific_password'; // Use app password, not account password
$mail->Port = 587;                        // Correct port
```

#### File Upload Issues

**Problem**: Product images not uploading
```php
// Solution: Check file permissions and PHP settings
// In php.ini:
upload_max_filesize = 10M
post_max_size = 10M
max_file_uploads = 20

// File permissions:
chmod 755 resourses/products/
```

### 📋 Debug Mode

Enable debug mode for development:

```php
// Add to connection.php for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection with error handling
if (Database::$connection->connect_error) {
    die("Connection failed: " . Database::$connection->connect_error);
}
```

### 📊 Log Analysis

```bash
# Check Apache error logs
tail -f /var/log/apache2/error.log

# Check PHP error logs  
tail -f /var/log/php_errors.log

# Check MySQL logs
tail -f /var/log/mysql/error.log
```

## Contributing

If you'd like to contribute to mkshop, please follow our [Contribution Guidelines](CONTRIBUTING.md).

## Give a Star ⭐

Your support and feedback are highly valued, so if you find this project useful, consider giving it a star ⭐️. I appreciate your interest in my work.

## License

This project is licensed under the mkshop - see the [LICENSE](LICENSE) file for details.

---
## mkShop-Images
#### ScreenShot previews for more conveniently understand the project :-

### Database ER documentation :-

![](/resourses/eshop-new-ER.png)


1\. Navigate to [http://localhost/web_project/index.php](http://localhost/web_project/index.php)


2\. Sign Up Page(registration page)

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/98523f42-bd60-4c5d-9e44-9b83bcd1cc51/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=779,406)


3\. Credentials validation part

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/1cd4d5a8-4cdf-4cc9-af29-2207f4a5843a/ascreenshot.jpeg?tl_px=844,283&br_px=1920,884&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=676,450)


4\. Sign In page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/e277060d-6c5c-4f71-9d79-605d79ba8d1b/ascreenshot.jpeg?tl_px=552,215&br_px=1627,816&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,265)


5\. Forgotten Password Function checking

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/d242cb84-3aeb-44cc-bd78-7fddf5e776a8/ascreenshot.jpeg?tl_px=844,283&br_px=1920,884&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=881,318)


6\. Reset Password Form

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/e9d31a05-bb99-4147-9d9e-1c98f2e82882/ascreenshot.jpeg?tl_px=277,0&br_px=1352,600&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,131)


7\. Add the Verification code here where sent to your mail 

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/28e48c14-2000-4726-9389-bb54a48068dc/ascreenshot.jpeg?tl_px=263,0&br_px=1338,600&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,247)


8\. Click "mkshop Forget Password Verification Code"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/410f2210-b51c-45fe-9286-e3f70eee01dd/ascreenshot.jpeg?tl_px=268,0&br_px=1343,600&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,206)


9\. Click "Your Verification Code is 654491ebc3db8"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/b99520b8-8bb8-469e-b36d-1df84a3d9f74/ascreenshot.jpeg?tl_px=260,136&br_px=1335,737&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,265)


10\. Click "Reset Password"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/9860d9e9-e206-4d60-a2c7-4c4f0a09ffba/ascreenshot.jpeg?tl_px=639,67&br_px=1714,668&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,265)


11\. Home Page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/c0c59ad0-b5fd-4d90-9084-14115c7717f5/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=979,248)


12\. Home page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/a850d2b6-2927-47ed-a538-2c196468507f/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=979,249)


13\. Home page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/e58bc98e-00ea-477c-a735-a8148e39ca80/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=979,249)


14\. Footer

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/2e34ac70-1b09-4cdd-bf85-e156468a4c65/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=571,368)


15\. Type "phone"


16\. Click "Search"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/a68c8bd3-16ab-4326-a9a4-cb263327abb2/ascreenshot.jpeg?tl_px=200,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=739,58)


17\. Click "Advanced"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/e54c7a2c-d827-48bb-a619-c4d7151eaadb/ascreenshot.jpeg?tl_px=200,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=913,50)


18\. Advance search feature

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/2a5007ab-f985-4d07-8d56-a4bcca897c6f/ascreenshot.jpeg?tl_px=0,0&br_px=1719,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=520,125)


19\. Type "apple"


20\. Click here.

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/44ff7401-64ee-42d5-944e-dacd4d226302/ascreenshot.jpeg?tl_px=200,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=729,329)


21\. Going to my profile section

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/ce204b8d-9246-4a2f-adac-93a3fcd7a66a/ascreenshot.jpeg?tl_px=844,0&br_px=1920,600&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=810,51)


22\. Click this text field.

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/ddd6c3f8-5a86-4de5-8dda-69c98f958a44/ascreenshot.jpeg?tl_px=0,0&br_px=1719,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=353,141)


23\. Type "ishara"


24\. Profile data editing and saving 

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/14611dfe-3359-49b2-9c04-a7b547552a98/ascreenshot.jpeg?tl_px=432,0&br_px=1507,600&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,225)


25\. Click "Update My Profile"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/aa0af76a-f624-46f2-9110-72dfc7482ded/ascreenshot.jpeg?tl_px=364,283&br_px=1439,884&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,460)


26\. Add new products page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/c5018a38-eb00-4a50-9dce-f541f941472f/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=608,136)


27\. Add the product or service and  Click "Save Product"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/25b46c14-50e5-4a78-b63e-0d261c11f8cd/ascreenshot.jpeg?tl_px=414,250&br_px=1489,851&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,265)


28\. Click the "Activate Product" field.

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/29e14e0d-bab7-4db7-97aa-753a14517874/ascreenshot.jpeg?tl_px=499,0&br_px=1574,600&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,238)


29\. Watch list page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/a838b1c0-02de-49f5-beae-66293909ca37/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=582,449)


30\. Cart page 

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/c8bc0684-6435-4492-88ba-98911bde9b40/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=132,-6)


31\. Click "Buy Now"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/13a94d3f-47c9-44df-8f57-9cce33217072/ascreenshot.jpeg?tl_px=282,283&br_px=1357,884&force_format=png&wat_scale=95&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=502,315)


32\. Click "Pay Now"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/6e090107-0642-4683-85ba-90a112e233df/ascreenshot.jpeg?tl_px=200,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=530,431)


33\. "PayHere" Payment gateway opened

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/482bde7e-7fac-40e9-8b39-ff2fa7530765/ascreenshot.jpeg?tl_px=0,0&br_px=1719,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=484,232)


34\. Click the "Card Number" field.

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/54ecb5c4-edb9-4223-a21f-c643589b7c66/ascreenshot.jpeg?tl_px=0,0&br_px=1719,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=76,57)


35\. Click "Submit"

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/ad3d431c-f686-482a-9242-cc686f5d9bb7/ascreenshot.jpeg?tl_px=58,0&br_px=1777,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=524,432)


36\. Invoice page

![](https://ajeuwbhvhr.cloudimg.io/colony-recorder.s3.amazonaws.com/files/2023-11-03/a23ce6a4-828c-450a-9b8f-21dc16b395cd/ascreenshot.jpeg?tl_px=0,0&br_px=1920,884&force_format=png&width=1120.0&wat=1&wat_opacity=0.7&wat_gravity=northwest&wat_url=https://colony-recorder.s3.us-west-1.amazonaws.com/images/watermarks/FB923C_standard.png&wat_pad=922,195)
#### [Made with Scribe](https://scribehow.com/shared/mkShop__b-ZX4gj1TICgoko7bNDrnQ)

---

<div align="center">

## 🌟 Give mkshop a Star!

If you find this project useful, please consider giving it a star ⭐️ on GitHub. Your support motivates us to continue improving and adding new features!

[![GitHub stars](https://img.shields.io/github/stars/isharax9/Ecommerce-web-application.svg?style=social&label=Star)](https://github.com/isharax9/Ecommerce-web-application/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/isharax9/Ecommerce-web-application.svg?style=social&label=Fork)](https://github.com/isharax9/Ecommerce-web-application/network)
[![GitHub watchers](https://img.shields.io/github/watchers/isharax9/Ecommerce-web-application.svg?style=social&label=Watch)](https://github.com/isharax9/Ecommerce-web-application/watchers)

---

### 📞 Contact & Support

**Developer**: [mac_knight141](https://github.com/isharax9)  
**Email**: [isharax9@gmail.com](mailto:isharax9@gmail.com)  
**Project**: [mkshop Repository](https://github.com/isharax9/Ecommerce-web-application)

---

*Built with ❤️ by the mkshop community*

**[⬆ Back to Top](#-mkshop---modern-e-commerce-web-application)**

</div>


