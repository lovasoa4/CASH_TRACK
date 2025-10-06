create table users(
    id int AUTO_INCREMENT primary key,
    nom varchar(50),
    email varchar(200) unique not null,
    mdp varchar(50) not null
)

create table transaction(
    id int AUTO_INCREMENT primary key,
    type varchar(50) not null,
    date_transaction datetime DEFAULT CURRENT_TIMESTAMP,
    montant decimal not null,
    description text
)