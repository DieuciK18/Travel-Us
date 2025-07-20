CREATE DATABASE IF NOT EXISTS travel_us;
USE travel_us;

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(100),
    start_date DATE,
    end_date DATE,
    travelers VARCHAR(50),
    flight_included BOOLEAN,
    hotel_included BOOLEAN,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(150),
    phone VARCHAR(50),
    special_requests TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
