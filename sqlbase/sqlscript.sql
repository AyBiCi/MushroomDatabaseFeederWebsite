create table types  
    ( 
        ID int primary key, 
        name varchar(16)
    )$$

create table mushrooms
    (
        ID int primary key auto_increment, 
        type_id int, name varchar(64)
    )$$

create table commits
    (
        ID int primary key auto_increment, 
        mushroom_id int, 
        head_radius varchar(256),
        description varchar(1024),
        picture_name varchar(256),
        insertion_date date,
        insertion_time time,
        edit_date date,
        edit_time time
    )$$

CREATE TRIGGER `onNewCommit` BEFORE INSERT ON `commits` FOR EACH ROW 
begin 
    set new.insertion_date = curdate(); 
    set new.insertion_time = curtime(); 
end;$$

CREATE TRIGGER `onEditCommit` BEFORE UPDATE ON `commits` FOR EACH ROW 
begin 
    set new.edit_date = curdate(); 
    set new.edit_time = curtime(); 
end;$$
create view commitsView as 
    select 
        commits.ID, 
        types.name as typename, 
        mushrooms.name as mushroomname, 
        commits.head_radius, 
        commits.description, 
        commits.picture_name, 
        commits.insertion_date, 
        commits.insertion_time, 
        commits.edit_date, 
        commits.edit_time 
    from commits 
    join mushrooms on mushrooms.ID = commits.mushroom_id 
    join types on mushrooms.type_id = types.ID$$