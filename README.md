# HosPa - Hospital Management System

**HosPa** is a free, open-source, web-based Hospital Management System built with PHP, MySQL, and Bootstrap. Originally forked from the [Hospital Management System](https://codeastro.com/hospital-management-system-in-php-with-source-code-adv) by Martin Mbithi Nzilani, it is now actively maintained and enhanced by [Miragek](https://miragek.com) starting from version 2.0. For a complete history of changes, please review the `CHANGELOG.md` file.

NOTE: NOT AVAILABLE FOR PUBLIC USE YET. STILL VERY BUGGY AND UNDERGOING V2. WE WILL REMOVE THIS WARNING ONCE THE PROJECT IS FINISHED.

---

## Purpose

HosPa is designed to provide a complete, real-world solution for managing day-to-day hospital operations. It serves as an excellent learning resource for IT students, a solid foundation for developers building healthcare applications, and a functional tool for small to medium-sized healthcare facilities. The system handles everything from patient records and staff management to pharmacy inventory, accounting, and surgical scheduling.

---

## System Overview

The application features two primary user interfaces: an **Admin Panel** with full system control, and an **Employee/Doctor Panel** with role-based access to essential daily tasks. All data is centralized in a MySQL database, with a responsive frontend powered by Bootstrap.

### Core Workflows

- **Patient Lifecycle:** Registration → Treatment → Prescription → Lab Tests → Transfer or Discharge.
- **Staff Management:** Employee registration → Department assignment → Payroll processing.
- **Pharmacy & Inventory:** Medicine categorization → Stock management → Prescription fulfillment.
- **Financial Tracking:** Manage payable/receivable accounts and generate payroll.
- **Reporting:** Access comprehensive records for patients, staff, pharmacy, accounting, and medical history.

---

## Key Features (At a Glance)

### Admin Panel
- **Patient Management:** Add, transfer, and discharge patients with complete medical history.
- **Employee Management:** Add staff, assign departments (Pharmacy, Accounting, Surgery, etc.), and manage transfers. Employees assigned to Surgery are designated as doctors.
- **Pharmacy & Prescriptions:** Manage medicine categories, inventory, vendors, and patient prescriptions. Each medicine gets a unique barcode.
- **Accounting:** Handle payable and receivable accounts with descriptions and amounts.
- **Inventory & Assets:** Track pharmaceuticals and hospital equipment (name, code, vendor, department, quantity).
- **Laboratory:** Add and manage patient lab tests, vitals (temperature, heart rate, respiratory rate, blood pressure), and view lab results/reports.
- **Surgical Theatre:** Add patients to surgery lists, assign surgeons, manage equipment, and track surgery status (ongoing/completed).
- **Payroll:** Add salary details, generate payroll receipts, and print them.
- **Vendors:** Manage vendor information (name, address, contact, email).
- **Reporting:** Generate detailed reports for InPatients, OutPatients, employees, pharmacy, accounting, and medical records.

### Employee/Doctor Panel
- **Patient Care:** Manage patient records, create and update prescriptions, and capture vitals/lab results.
- **Pharmacy & Inventory Access:** View and manage medicine and inventory records (limited to assigned modules).
- **Personal Management:** View and update profile information.
- **Payroll:** View and print personal payroll receipts.

### Additional Highlights
- **Role-Based Access Control:** Ensures data security and proper permissions for each user type.
- **Responsive User Interface:** Works seamlessly on desktops, tablets, and mobile devices.
- **Intuitive Dashboard:** Clean, color-coded interface for easy navigation and quick access to key modules.
- **Modern Tech Stack:** PHP 7.4+ (tested on PHP 8.x), MySQL, and Bootstrap.

---

## Technology Stack

| Component       | Technology                          |
|-----------------|-------------------------------------|
| **Backend**     | PHP (7.4+ / 8.x)                    |
| **Database**    | MySQL                               |
| **Frontend**    | Bootstrap, Vanilla CSS              |
| **Type**        | Web Application                     |

---

## Installation Guide

Follow these steps to get HosPa running on your local machine or live server:

### Prerequisites
- A web server (XAMPP, WAMP, or a live hosting environment).
- PHP version 7.4 or higher.
- MySQL database.

### Step-by-Step Setup

1.  **Download & Extract:**
    Download the project zip file and extract its contents.

2.  **Move to Server Directory:**
    Copy the extracted folder to your server's root directory:
    - **XAMPP:** `htdocs`
    - **WAMP:** `www`
    - **Live Server:** Public HTML folder.

3.  **Create Database:**
    - Open phpMyAdmin (e.g., `http://localhost/phpmyadmin`).
    - Create a new database (e.g., `hospa_db`).

4.  **Import Database Structure:**
    - In phpMyAdmin, select your new database.
    - Go to the **Import** tab.
    - Choose the `.sql` file located in the `DATABASE FILE` folder of the project.
    - Click **Go** to import the tables and sample data.

5.  **Configure Application:**
    - Open the `config.php` file in the project root.
    - Update the following settings:
        - Database credentials (host, username, password, database name).
        - Website name and other custom configurations.

6.  **Launch the Application:**
    - Open your browser and go to `http://localhost/[PROJECT_FOLDER_NAME]/`.
    - Use the login credentials provided in the `DATABASE FILE` folder to access the admin or employee panel.

---

## Important Notes

- **PHP Compatibility:** This project requires **PHP 7.4 or higher**. It is fully tested on PHP 8.x. Using outdated PHP versions (below 5.6) will cause errors.
- **Official Sources:** Download the latest version from this official GitHub repository or the [EqualFaith Sales](https://equalfaith.org/sales/products) page or directly at [our listing page](https://equalfaith.org/sales/free/hospa-hospital-management-system).
- **Support:** For issues or contributions, please refer to the project's issue tracker or contact us from EqualFaith contact page. 

---

## Conclusion

HosPa is a comprehensive, feature-rich Hospital Management System that bridges the gap between academic learning and real-world application development. With its modular architecture, clean codebase, and extensive feature set, it is an invaluable resource for students, developers, and healthcare organizations alike. Whether you're building a portfolio project, launching a startup, or managing a small clinic, HosPa provides a solid, scalable foundation.

---

**Start building your healthcare solution with HosPa today!**