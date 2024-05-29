DELIMITER //

CREATE PROCEDURE GetUsernamePassword(
    IN p_user_id INT,
    OUT p_username VARCHAR(20),
    OUT p_password VARCHAR(255)
)
BEGIN
    SELECT username, password INTO p_username, p_password
    FROM userInfo
    WHERE user_id = p_user_id;
END //

DELIMITER ;
