-- 1. feladat: Készítsen új adatbázist lotto6 néven! A mellékelt három – tabulátorokkal tagolt – állományt  importálja az adatbázisba! 

CREATE DATABASE lotto6;

-- 2. feladat: Készítsen lekérdezést, amely megadja, hogy az előző évezredben (2001. január 1. előtt) mikor volt hat találatos szelvény! A húzáshoz tartozó évet és hetet jelenítse meg időrendben! (31 rekord)

SELECT ev, het, talalat
FROM huzas INNER JOIN nyeremeny ON huzas.id=nyeremeny.huzasid
WHERE ev<2001 AND nyeremeny.talalat="6"
ORDER BY ev, het;
