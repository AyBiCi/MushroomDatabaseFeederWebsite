create table types  
    ( 
        ID int primary key, 
        name varchar(16)
    );

create table mushrooms
    (
        ID int primary key auto_increment, 
        type_id int, name varchar(64)
    );

create table commits
    (
        ID int primary key auto_increment, 
        mushroom_id int, 
        head_radius varchar(256),
        description varchar(1024),
        picture_name varchar(256),
        insertion_date date,
        edit_date date
    );