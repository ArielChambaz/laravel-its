# Laravel Project

Two page in the project : The Me page and the projects page

Blade Component use for the navigation between this two page

![Screenshot from 2024-09-09 16-36-41](https://github.com/user-attachments/assets/381627a1-21a2-411b-bc0b-d9c034ecc685)

![Screenshot from 2024-09-09 16-37-10](https://github.com/user-attachments/assets/d74d636b-c232-4698-8eff-566b51414f70)

## Description

This project is a Laravel application designed to showcase best practices in web development using the Laravel framework. It includes modern features and utilizes advanced development tools to ensure a smooth and efficient development experience.

## Requirements

- PHP ^8.2
- Composer
- Node.js and npm

## Installation

1. Clone the repository:
    ```sh
    git clone git@github.com:ArielChambaz/laravel-its.git
    cd laravel-its
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install JavaScript dependencies:
    ```sh
    npm install
    ```

4. Copy the [`.env.example`](.env.example) file to a new `.env` file and configure your environment variables:
    ```sh
    cp .env.example .env
    ```

5. Generate the application key:
    ```sh
    php artisan key:generate
    ```

## Development Scripts

- To start the development server:
    ```sh
    php artisan serve
    ```

- To compile assets:
    ```sh
    npm run dev
    ```

- To compile assets for production:
    ```sh
    npm run build
    ```
