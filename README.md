<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Real-Time Chat with Laravel Reverb

This project is built with **Laravel 11**, **PHP 8.2**, and **Node.js 16** to provide a real-time chat experience using Laravel Reverb.

## Installation and Setup

1. **Clone the repository**:

    ```bash
    git clone https://github.com/yourusername/real-time-chat-laravel-reverb.git
    ```

2. **Navigate to the project directory**:

    ```bash
    cd real-time-chat-laravel-reverb
    ```

3. **Install dependencies**:

    ```bash
    composer install
    ```

    ```bash
    npm install
    ```

4. **Install Vite.js Vue plugin**:

    ```bash
    npm install @vitejs/plugin-vue --save-dev
    ```

5. **Setup environment variables**:

    ```bash
    cp .env.example .env
    ```

6. **Generate application key**:

    ```bash
    php artisan key:generate
    ```

7. **Install Reverb**:

    ```bash
    php artisan install:broadcasting
    ```

8. **Start the development server**:

    ```bash
    php artisan serve
    ```

9. **Open a new terminal and run Vite**:

    ```bash
    npm run dev
    ```

10. **Open another terminal and start Reverb**:

    ```bash
    php artisan reverb:start
    ```

## Video Tutorial

Watch the full tutorial on how to set up this project on [Riyast College](https://www.youtube.com/watch?v=-vCqN1nkt18&list=PLh6u0mdhcxha1f4Zke3rVU-vY-qndN4ta).


