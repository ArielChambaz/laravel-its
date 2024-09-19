# Laravel Project

The Laravel project includes two main pages: the "Me" page and the "Projects" page. These two pages are accessible through a Blade component, which is used to handle the navigation between them. The "Me" page is designed to present personal information or specific details about the user, while the "Projects" page showcases completed or ongoing projects. The Blade component plays a key role in the project’s structure, enabling smooth navigation between these two sections. By utilizing Blade, transitions between pages are streamlined, enhancing the user experience, while ensuring that the code remains modular and reusable. This architecture supports clean, maintainable, and scalable code development

![Screenshot from 2024-09-09 16-36-41](https://github.com/user-attachments/assets/381627a1-21a2-411b-bc0b-d9c034ecc685)

![Screenshot from 2024-09-09 16-37-10](https://github.com/user-attachments/assets/d74d636b-c232-4698-8eff-566b51414f70)

I Have had a Controller that give Fake data to my projects view and it look like this

![Screenshot from 2024-09-11 15-10-14](https://github.com/user-attachments/assets/5dfae6e5-ad92-4559-aefe-1140b136f0ef)

Now I have improve my controller and a Model to manage my projects view and i can add some projects with a forms. Like in the video below

[Screencast from 19-09-2024 16:12:27.webm](https://github.com/user-attachments/assets/0f418a44-44c1-45a4-b4ca-899b8fe4e65c)

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
