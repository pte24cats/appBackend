

CREATE TABLE userInfo(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    password varchar(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT,
    phone VARCHAR(50),
    register_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    admin_status TINYINT(1)
);