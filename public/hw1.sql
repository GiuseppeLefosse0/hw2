create database hw1;
use hw1;

CREATE TABLE piani (
    titolo varchar(40) primary key,
    immagine varchar(100)
)engine=InnoDb;

CREATE TABLE utenti (
    username varchar(20) unique,
    password varchar(255),
    email varchar(50),
    nome varchar(20),
    cognome varchar(20),
    piano varchar(40),
    primary key(username)
)engine=InnoDb;

CREATE TABLE ListaEsercizi (
titolo varchar(50) primary key,
immagine varchar(100)
)engine=InnoDb;

CREATE TABLE schede (
    username varchar(20) ,
    esercizio varchar(50),
    primary key(username,esercizio),
    foreign key (username) references utenti(username),
    foreign key (esercizio) references ListaEsercizi(titolo)
)engine=InnoDb;



insert into piani(titolo,immagine) values("1 Month Membership", "immagini/1month.png"),
("3 Months Membership", "immagini/3month.png"),
("6 Months Membership", "immagini/6month.png");

insert into ListaEsercizi(titolo, immagine) values("Chest Press", "immagini/panca_piana.jpg"),
("Leg Press", "immagini/pressa.jpg"),
("Push Up", "immagini/pushups.jpg"),
("Squat", "immagini/squat.jpg"),
("Biceps Curl", "immagini/curl_bilanciere.jpg"),
("Dumbbell Press", "immagini/distensioni_manubri.jpg"),
("Leg Curl", "immagini/leg_curl.jpg"),
("Leg Extension", "immagini/leg_extension.jpg"),
("Crosses", "immagini/croci_manubri_pancainclinata.jpg");

select * from piani;
select * from utenti;
select * from schede;