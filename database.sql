CREATE DATABASE railway_reservation;
USE railway_reservation;
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255)
);
CREATE TABLE trains (
    train_id INT AUTO_INCREMENT PRIMARY KEY,
    train_name VARCHAR(100),
    source VARCHAR(50),
    destination VARCHAR(50),
    departure_time TIME,
    arrival_time TIME,
    seats_available INT,
    fare DECIMAL(10, 2)
);
CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    train_id INT,
    seats_booked INT,
    total_fare DECIMAL(10, 2),
    status VARCHAR(20) DEFAULT 'Confirmed',
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (train_id) REFERENCES trains(train_id)
);