# Omiz Car - Car Rental Service

This is the complete web application for Omiz Car, a car rental service based in Tanger, Morocco. The project consists of a Vue.js frontend and a Laravel backend with MySQL database.

## Project Structure

- `/` - Vue.js frontend
- `/laravel` - Laravel backend API

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur).

## Frontend Setup

```sh
npm install
```

### Compile and Hot-Reload for Development

```sh
npm run dev
```

### Compile and Minify for Production

```sh
npm run build
```

## Backend Setup

The backend is built with Laravel and uses MySQL for the database.

1. Navigate to the Laravel directory:

   ```sh
   cd laravel
   ```

2. Install PHP dependencies:

   ```sh
   composer install
   ```

3. Configure your MySQL database in the `.env` file

4. Run migrations:

   ```sh
   php artisan migrate
   ```

5. Seed the database (optional):

   ```sh
   php artisan db:seed
   ```

6. Start the development server:
   ```sh
   php artisan serve
   ```

## API Documentation

See [laravel/README.md](laravel/README.md) for detailed API documentation.
