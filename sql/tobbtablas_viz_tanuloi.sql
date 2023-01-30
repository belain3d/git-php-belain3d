--1. Adatbázis létrehozás viz néven:
CREATE DATABASE viz;
--2. Kővárosi utcanevek ábécé sorrendben: (86 rekord)
SELECT utca
FROM hely
WHERE telepules="Kőváros"
ORDER BY utca;
--3. Átlagos kezdési év: (1 rekord)
SELECT AVG(kezdev)
FROM szerelo;
--4. Mi volt a legnagyobb anyagár, amellyel Erdei Imre dolgozott? (1 rekord)
SELECT MAX(anyagar)
FROM szerelo INNER JOIN munkalap ON szerelo.az=munkalap.szereloaz
WHERE szerelo.nev = "Erdei Imre";
--5. Mi volt a legkisebb anyagár, amivel Kővárosban dolgoztak? (1 rekord)
SELECT MIN(anyagar)
FROM hely INNER JOIN munkalap ON hely.az=munkalap.helyaz
WHERE telepules="Kőváros";
--6. Szabó Mihály milyen átlagos anyagárral dolgozott Barackfalván? (1 rekord)
SELECT AVG(anyagar)
FROM (hely INNER JOIN munkalap ON hely.az=munkalap.helyaz) INNER JOIN szerelo ON szerelo.az=munkalap.szereloaz
WHERE nev="Szabó Mihály" AND telepules="Barackfalva";
--7. ABC-sorrendben jelenítsük meg azokat a Barackfalvai utcaneveket, 
-- amelyeken Szabó Mihály dolgozott! Mindegyik csak egyszer jelenjen meg a listában! (21 rekord)
SELECT DISTINCT utca
FROM (hely INNER JOIN munkalap ON hely.az=munkalap.helyaz) INNER JOIN szerelo ON szerelo.az=munkalap.szereloaz
WHERE nev="Szabó Mihály" AND telepules="Barackfalva"
ORDER BY utca
--8. A legkisebb anyagárral melyik település melyik utcájában melyik szerelő végzett javítást? (1 rekord)

