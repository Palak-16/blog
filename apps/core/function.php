<?php
create_tables();
function create_tables()
{
 
require ('./connection.php');
if(!$conn)
   echo "no connection";
else{

    $sql = "create table if not exists users(
        id int primary key auto_increment,
        username varchar(20) not null,
        email varchar(30) not null,
        password varchar(30) not null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        role varchar(10) not null,

         key name (username),
         key email (email)
    )";
    $result= mysqli_query($conn,$sql);
    if($result)
       echo "1";
   
    $sql1 = "create table if not exists categories(
        id int primary key auto_increment,
        category varchar(50) not null,
        slug varchar(100) not null,
        disabled tinyint default 0,

         key slug (slug),
         key category (category)
    )";
    $result1= mysqli_query($conn,$sql1);
  

    $sql2 = "create table if not exists posts(
        id int primary key auto_increment,
        user_id int,
        category_id int,
        title varchar(100) not null,
        content text null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        slug varchar(100) not null,
        disabled tinyint default 0,

        key user_id (user_id),
        key category_id (category_id),
        key title (title),
        key slug (slug),
        key date (date)
    )";
    $result2= mysqli_query($conn,$sql2);

    }
}
?>