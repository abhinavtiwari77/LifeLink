<div align="center">
  <img src="public/imgs/bloodDropLogo.png" alt="LifeLink Logo" width="100"/>
  <h1>LifeLink - Blood Donation Platform</h1>
  <p>A modern, responsive Laravel web application connecting blood donors with those in emergency need.</p>
</div>

---

## 🩸 About LifeLink

LifeLink is a centralized blood donation platform designed to bridge the gap between voluntary blood donors and patients in need. Whether you are looking to register as a hero to donate blood, or you urgently need to find a donor in your city, LifeLink provides a seamless, real-time solution.

## ✨ Features

- **User Authentication:** Secure login and registration. Users can opt-in to become visible blood donors during registration.
- **Find a Donor:** Search the extensive database of registered donors by Blood Group (e.g., A+, O-) and City.
- **Emergency Blood Requests:** Post urgent requirements for blood. Requests display emergency levels (Critical, High, Medium) and are instantly visible to the community.
- **Dedicated Dashboards:** 
  - **User Dashboard:** Manage your profile, view your donation status, and track your active requests.
  - **Admin Dashboard:** Centralized management for platform administrators.
- **Responsive & Modern UI:** Built with Tailwind CSS and custom glassmorphism design for a beautiful, premium user experience across all devices.

## 🛠️ Tech Stack

- **Backend:** Laravel 11 (PHP)
- **Frontend:** Blade Templating, Tailwind CSS, Vanilla JavaScript
- **Database:** MySQL / SQLite
- **Authentication:** Laravel Breeze

## 🚀 Complete Workflow & Installation

Follow these steps to set up the project on your local machine:

### 1. Prerequisites
Ensure you have the following installed:
- PHP (v8.2 or higher)
- Composer
- Node.js & NPM
- Git

### 2. Clone the Repository
```bash
git clone https://github.com/abhinavtiwari77/LifeLink.git
cd LifeLink
```

### 3. Install Dependencies
Install PHP dependencies via Composer and frontend assets via NPM:
```bash
composer install
npm install
npm run build
```

### 4. Environment Setup
Create a `.env` file from the example and generate the application key:
```bash
cp .env.example .env
php artisan key:generate
```
*Configure your database credentials inside the `.env` file.*

### 5. Database Migration & Seeding
Run the database migrations to create the tables. You can also seed the database with initial dummy data to test the platform:
```bash
php artisan migrate --seed
```

### 6. Run the Application
Start the Laravel development server:
```bash
php artisan serve
```
Visit `http://localhost:8000` in your browser.

## 📱 User Workflow

1. **Landing Page:** Users are welcomed by a clean landing page explaining the mission.
2. **Registration:** Users create an account. They can check "Register as a Blood Donor" to provide their Blood Group, City, Age, Gender, and Phone number.
3. **Emergency Requests:** Anyone logged in can visit "Request Blood" to post a requirement. They specify the blood group, units needed, hospital, and emergency level.
4. **Finding Donors:** The "Find Donor" page allows users to instantly search the database for matches in their city and contact the donor directly via a one-click phone link.
5. **Dashboard:** Users land on their personalized dashboard post-login.

## 🤝 Contributing
Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](../../issues).

## 📝 License
This project is open-source and available under the [MIT License](LICENSE).
