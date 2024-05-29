DELIMITER //

CREATE PROCEDURE AddUser(
    IN p_username VARCHAR(20),
    IN p_firstName VARCHAR(50),
    IN p_lastName VARCHAR(50),
    IN p_password VARCHAR(255),
    IN p_email VARCHAR(255)
)
BEGIN
    INSERT INTO userInfo (username, firstName, lastName, password, email)
    VALUES (p_username, p_firstName, p_lastName, p_password, p_email);
END //

DELIMITER ;
