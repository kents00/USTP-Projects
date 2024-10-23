# USTP Projects

Welcome to the **USTP Projects** repository! This repository contains a collection of academic projects and tools developed by students at the University of Science and Technology of Southern Philippines (USTP).

---

## 📁 Repository Contents

This repository includes the following projects:

1. **PHP Introduction**
    - **Description**: Introduction of PHP.
    - **Technologies Used**: PHP.
    - **How to Run**: Download the PHP Server plugin to run this script.
    - [Link to Project Folder](https://www.notion.so/Php-Introduction)
2. **Form Handling**
    - **Description**: Using PHP w/ HTML
    - **Technologies Used**: PHP.
    - **How to Run**: Download the PHP Server plugin to run this script.
    - [Link to Project Folder](https://www.notion.so/Form-Handling)
3. **Activities**
    - **Description**: For Loop, While Loop, Do-While, Index Array, Associative Array.
    - **Technologies Used**: PHP.
    - **How to Run**: Download the PHP Server plugin to run this script.
    - [Link to Project Folder](https://www.notion.so/Activities)
4. **Assignment**
    - **Description**: Student Management (Login,Register,Dashboard).
    - **Technologies Used**: PHP, Xampp.
    - **How to Run**: Download and run Xampp to run this script.
    - **Add this Database:**
    
    ```php
    CREATE DATABASE student_management;
    
    USE student_management;
    
    -- Users table
    CREATE TABLE users (
      id INT AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(50) UNIQUE NOT NULL,
      password VARCHAR(255) NOT NULL
    );
    
    -- Students table
    CREATE TABLE students (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(100) NOT NULL,
      email VARCHAR(100),
      course VARCHAR(50)
    );
    ```
    
    - [Link to Project Folder](https://www.notion.so/Assignment)

---

## 🚀 Getting Started

Follow these steps to get started with any project in this repository.

### Prerequisites

Make sure you have the following installed:

- **PHP 3.x.x** (Operating inside of the machine)
- **PHP Server** (Vscode Plugin)

### Installation

1. Clone the repository:
    
    ```bash
    git clone <https://github.com/kents00/USTP-Projects.git>
    cd USTP-Projects
    ```
