Intelligent Ticket Booking System



RUN THESE COMMANDS IN MYSQL SHELL BEFORE LOADING PHP IN ORDER

1. Create Database OATS;

2. Use Database OATS;

3. CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName varchar(255),
    lastName varchar(255),
    email varchar(255),
    password varchar(255) NOT NULL,
    reset_token varchar(255),
    reset_token_expiry varchar(255),
    role char(4) NOT NULL
    );

4. CREATE TABLE flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    flight_number VARCHAR(10) NOT NULL,
    from_city VARCHAR(50) NOT NULL,
    to_city VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    seats_available INT NOT NULL
);

5. CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    flight_id INT NOT NULL,
    booking_date DATE NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (flight_id) REFERENCES flights(id)
);