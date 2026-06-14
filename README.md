# Point of Sale Web App

A web-based Point of Sale (POS) system I built to manage the day-to-day sales operations of a small café. Staff log in with a role, and the app gives each role its own dashboard for ringing up sales, managing the product inventory and customers, and (for an administrator) managing employees and pulling sales reports. It runs on a classic PHP + MySQL stack with a Bootstrap front end.

## Tech stack

- **PHP** for the server-side pages and request handling
- **MySQL** accessed through **PDO** with prepared statements
- **HTML / CSS / JavaScript** for the UI
- **Bootstrap**, **jQuery**, **DataTables**, **Chosen** and **Facebox** for the front-end widgets (vendored under `app/main/`)

## Features

- **Role-based login** — three roles (Administrator, Cashier, Customer), each landing on its own dashboard after authentication. Every page under `main/` is guarded by a session check.
- **Product inventory** — add, edit and delete products, with original/selling price, profit, quantities and a low-stock highlight when quantity left drops below ten.
- **Customer management** — add, edit and delete customers and tie them to purchases.
- **Sales & checkout** — record a sale by cash or credit, capture the customer name, and generate a printable invoice preview.
- **Sales report** (Administrator) — filter transactions by date range and see the totalled amount and profit, with a print-friendly view.
- **Employee management** (Administrator) — maintain the staff records.

## Screenshots

> The login screen and dashboards render with the Bootstrap theme bundled in `app/main/`. Drop a screenshot in `docs/` and link it here, e.g. `![Dashboard](docs/dashboard.png)`.

## Prerequisites

- PHP with the PDO MySQL extension (`pdo_mysql`) enabled
- MySQL / MariaDB
- A web server to serve the PHP (Apache via XAMPP/MAMP works out of the box)

## Setup & running

1. **Create the database.** Create a MySQL database named `sales` and import the schema and seed data:

   ```sql
   CREATE DATABASE sales;
   USE sales;
   SOURCE db/sales.sql;
   ```

2. **Point the app at your database.** The connection settings live in `app/connect.php`. The defaults assume a local setup (`localhost`, user `root`, empty password); update them if yours differ.

3. **Serve the app.** Place the `app/` folder under your web server's document root (for example `htdocs/` in XAMPP) and browse to `app/index.php`.

4. **Log in.** The schema seeds one account per role:

   | Username   | Password   | Role          |
   |------------|------------|---------------|
   | `admin`    | `admin`    | Administrator |
   | `employee` | `employee` | Cashier       |
   | `customer` | `customer` | Customer      |

## Tests

This project doesn't ship an automated test suite — I verified it manually by walking through each role's flow (logging in, adding/editing products and customers, completing a cash and a credit sale, and generating a sales report).

## Project structure

```
.
├── app/                 # The POS application
│   ├── connect.php      # Shared PDO database connection
│   ├── index.php        # Login screen
│   ├── login.php        # Authentication handler
│   ├── style.css        # App styles
│   └── main/            # Authenticated pages (dashboards, CRUD, sales, reports)
│       ├── auth.php     # Session guard included by every page here
│       └── ...          # plus the bundled front-end libraries (css/, js/, vendors/, ...)
├── db/
│   └── sales.sql        # Database schema and seed data
├── docs/                # Project description document (and a place for screenshots)
├── LICENSE
└── README.md
```

## Context / what I learned

I built this as a university software-engineering project to get hands-on with a full server-rendered web application end to end: session-based authentication, role-based access, and CRUD over a relational schema. It's where I first got comfortable wiring PHP to MySQL through PDO and prepared statements, and structuring a multi-page app around a shared connection and a session guard.

## License

Released under the [MIT License](LICENSE).
