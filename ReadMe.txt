Create this tables in database
----------------------------------
CREATE TABLE usersdata (
    uname VARCHAR(255) NOT NULL,
    umob VARCHAR(20) NOT NULL,
    pass VARCHAR(255) NOT NULL
);
CREATE TABLE workerdata (
    w_name VARCHAR(255) NOT NULL,
    w_email VARCHAR(255) NOT NULL,
    w_num VARCHAR(20) NOT NULL,
    w_adhar VARCHAR(20) NOT NULL,
    w_state VARCHAR(100) NOT NULL,
    w_district VARCHAR(100) NOT NULL,
    w_city VARCHAR(100) NOT NULL,
    w_skill VARCHAR(255) NOT NULL
);