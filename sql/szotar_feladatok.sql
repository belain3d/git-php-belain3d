-- 1. Milyen magyar jelentését találták a "relaxation" szónak?

SELECT magyar
FROM szolista
WHERE angol="relaxation";

-- 2. Írassuk ki a z-vel kezdődő angol szavakat és jelentésüket!

SELECT angol, magyar
FROM szolista
WHERE angol LIKE "z%";

-- 3. Melyek a "white" azon magyar megfelelői, amiket 10-nél kevesebben találtak helytelennek?

SELECT magyar
FROM szolista
WHERE angol="white" AND helytelen<10;

-- 4. Írassuk ki az adatbázis minden adatát a felvitel dátuma szerinti sorrendben! Azonos dátumok esetén az angol szó 
--    szerinti ábécérendben jelenjenek meg az adatok!

SELECT *
FROM szolista
ORDER BY felvetel, angol;

-- 5. Melyik volt az utolsó nap, amikor szó+jelentés került az adatbázisba?

SELECT MAX(felvetel)
from szolista;

-- 6. Melyik 2 szót vitték fel a fenti napon? Az angol és a magyar jelentés is szerepeljen!

SELECT angol, magyar
FROM szolista
ORDER BY felvetel DESC
LIMIT 2;

-- 7. Melyik 2 szót vitték fel az ez előtti felvételi napon?

SELECT angol, magyar
FROM szolista
ORDER BY felvetel DESC
LIMIT 2,2;

-- 8. Mennyi volt a helyes ítéletek száma összesen?

SELECT SUM(helyes)
FROM szolista;

-- 9. Mennyi volt a helytelen ítéletek száma átlagosan? Az oszlop fejléce "atlag" legyen!

SELECT AVG(helytelen) AS atlag
FROM szolista;

-- 10. Hány olyan szópár van, amit senki nem talált helytelennek? (Egy szám a válasz.)

SELECT COUNT(helytelen)
FROM szolista
WHERE helytelen=0;

-- 11. Az egyes angol szavak hány jelentése található meg az adatbázisban?

SELECT angol, COUNT(angol)
FROM szolista
GROUP BY angol;