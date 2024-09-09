# Laravel Project

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
