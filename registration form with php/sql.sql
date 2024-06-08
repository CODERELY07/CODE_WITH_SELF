-- create table and colum array
CREATE TABLE form_input (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    selector VARCHAR(255) -- Adjust the length as needed
);

-- Insert data with comma-separated values
INSERT INTO form_input (selector, name) VALUES ('Face-to-Face,Online', 'register_place');


--Registered Sql
CREATE TABLE trainee (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    srn_number VARCHAR(255) NOT NULL,
    register_place VARCHAR(255) NOT NULL,
    fname VARCHAR(255) NOT NULL,
    mname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    suffix VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    position VARCHAR(255) NOT NULL,
    civil_status VARCHAR(255) NOT NULL,
    date_birth DATE NOT NULL,
    contact VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    place_of_birth VARCHAR(255) NOT NULL
);
