# 🚚 SKYTRACK: GPS & Radio Inventory and Sales Management System

## 📌 Overview
**SKYTRACK** is a web-based Inventory and Sales Management System developed for **Sky Track Company**, a provider of GPS tracking solutions, two-way radios, and related communication equipment.  

The system streamlines **inventory management**, **sales tracking**, and **customer records** for improved operational efficiency and real-time monitoring of business processes.

**Project Date:** May 2023  
**Developers:**  
- **Agliam, Bim Rochee P.**  
- **Ellaga, Jasper C.**  

**Instructor:** Meljohn Aborde  
**Course:** Advanced Information Management – University of Southeastern Philippines  

---

## ✨ Features

### **Inventory Management**
- Track stock levels of GPS devices and radios.
- Record product details including:
  - Product ID, Name, Cost, Price, Profit
  - Supplier information
  - On-hand quantity, quantity sold
  - Expiry date and date of arrival
- Manage supplier database with contact details and notes.
- Record and inspect product deliveries from suppliers.

### **Sales Management**
- Manage customer information with contact details and purchase history.
- Process sales orders from multiple channels:
  - Phone orders
  - Facebook orders
  - In-store purchases
- Validate orders with required documentation (e.g., NTC permit).
- Track order details:
  - Products purchased
  - Quantity, Price, Discounts
- Manage payments with GCash or in-store cash payments.
- Generate sales invoices and reports.

### **Delivery Management**
- Coordinate with shipping partners (e.g., J&T Express).
- Provide order tracking and notifications.
- Track delivery date, status, and related sales order IDs.

---

## 🛠 Technology Stack
- **Language:** PHP  
- **Database:** MySQL  
- **Frontend:** HTML, CSS, JavaScript  
- **Server:** Apache (XAMPP)  
- **Additional Tools:** Bootstrap for UI, jQuery for dynamic interactions

---

## 📂 Database Design

### **Key Tables**
- **Products** – Stores product details and stock information.  
- **Supplier** – Manages supplier profiles.  
- **Purchases** – Tracks product purchases from suppliers.  
- **Sales** – Records completed sales transactions.  
- **Sales_Order** – Tracks items within each sales transaction.  
- **Customer** – Stores customer details and purchase expectations.  
- **Collection** – Tracks payments received.  

---

## 🎯 Business Process Flow
1. **Determine Inventory Needs** – Based on sales data and market trends.
2. **Track Inventory Levels** – Through the system and physical stock audits.
3. **Place Supplier Orders** – Maintain supplier relationships and negotiate pricing.
4. **Receive & Inspect Deliveries** – Ensure quality and accuracy.
5. **Process Customer Orders** – Validate details and confirm availability.
6. **Manage Payments & Deliveries** – Record transactions and coordinate shipping.

---

## ⚙ Installation & Setup
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/skytrack.git
2. **Move project to your server directory (e.g., htdocs in XAMPP)**
3. **Import the database:**
   - Open phpMyAdmin
   - Create a new database (e.g., skytrack_db)
   - Import the provided .sql file.
4. **Configure database connection:**
   - Update DB credentials in the configuration file (e.g., config.php).
5. **Start Apache & MySQL in XAMPP.**
6. **Access the system in your browser**

---

## 📜 License
This project is for educational purposes only and is not intended for commercial deployment without further development and security hardening.
