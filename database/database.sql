CREATE TABLE organizations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    rating FLOAT DEFAULT 0,
    description TEXT,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    model VARCHAR(100),
    year INT,
    mileage VARCHAR(50),
    color VARCHAR(50),
    auction_location VARCHAR(100),
    price_range VARCHAR(100),
    image_url VARCHAR(255), -- ✅ Added this line for the picture URL
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE cars ADD image_url VARCHAR(255);
