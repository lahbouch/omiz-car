# Omiz Car Laravel Backend

This is the backend API for the Omiz Car rental service, built with Laravel and MySQL.

## API Endpoints

### Cars

-   `GET /api/cars` - Get all cars
-   `GET /api/cars/available` - Get available cars
-   `GET /api/cars/{id}` - Get a specific car
-   `POST /api/cars` - Create a new car
-   `PUT /api/cars/{id}` - Update a car
-   `DELETE /api/cars/{id}` - Delete a car

### Bookings

-   `GET /api/bookings` - Get all bookings
-   `GET /api/bookings/{id}` - Get a specific booking
-   `POST /api/bookings` - Create a new booking
-   `PUT /api/bookings/{id}` - Update a booking
-   `DELETE /api/bookings/{id}` - Cancel a booking

## Database Structure

The database includes the following tables:

1. **car_categories** - Car categories with pricing information
2. **cars** - Individual vehicles with details
3. **customers** - Customer information
4. **bookings** - Rental bookings with dates and status

## Setup Instructions

1. Configure your MySQL database in the `.env` file
2. Run migrations: `php artisan migrate`
3. Seed the database: `php artisan db:seed`
4. Start the server: `php artisan serve`

## Models

-   **CarCategory** - Represents a category of cars (e.g., Economic, Compact, SUV)
-   **Car** - Represents an individual vehicle
-   **Customer** - Represents a customer
-   **Booking** - Represents a rental booking
