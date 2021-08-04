SELECT * 
FROM Person.Person
WHERE Suffix <> 'NULL';

SELECT * FROM Person.Person;
SELECT COUNT(DISTINCT Title) FROM Person.Person;

SELECT * FROM Production.Product;
SELECT COUNT(Name) FROM Production.Product; --504
SELECT COUNT(Size)FROM Production.Product; --211
SELECT COUNT(DISTINCT Size) FROM Production.Product; --18

SELECT TOP 10 * FROM Production.Product;
SELECT * FROM Person.Person ORDER BY FirstName ASC;

SELECT * FROM Production.Product;

SELECT TOP 10 ProductID,Name,ListPrice
FROM Production.Product
ORDER BY ListPrice DESC;

SELECT TOP 20 *
FROM Production.Product
WHERE ListPrice BETWEEN 1000 AND 1500
ORDER BY ListPrice ASC;

SELECT *
FROM Person.Person
WHERE BusinessEntityID IN (2,7,13);

SELECT *
FROM Person.Person
WHERE FirstName LIKE 'ovi%';

SELECT COUNT (*) 
FROM Production.Product
WHERE ListPrice > 1500;

SELECT COUNT (LastName)
FROM Person.Person
WHERE LastName LIKE 'p%';

SELECT COUNT (DISTINCT City)
FROM Person.Address;

SELECT DISTINCT City 
FROM Person.Address;

SELECT COUNT (*)
FROM Production.Product
WHERE Color = 'RED' 
AND ListPrice BETWEEN 500 AND 1000;

SELECT COUNT (*)
FROM Production.Product
WHERE Name LIKE '%road%';

SELECT * 
FROM Sales.SalesOrderDetail

SELECT TOP 10 SUM (LineTotal) AS "SOMA" -- SUM , MIN , MAX , AVG
FROM Sales.SalesOrderDetail

SELECT SpecialOfferID, SUM(UnitPrice) AS "SOMA"
FROM Sales.SalesOrderDetail
GROUP BY SpecialOfferID;

SELECT FirstName, COUNT(FirstName) AS "CONTAGEM"
FROM Person.Person
GROUP BY FirstName

SELECT COLOR, AVG(ListPrice) AS "PREÇO"
FROM Production.Product
WHERE Color = 'Silver'
GROUP BY Color

SELECT MiddleName,COUNT (MiddleName) AS "SOBRE NOME" 
FROM Person.Person
GROUP BY MiddleName

SELECT TOP 10 ProductID, SUM(LineTotal) AS "SomaTotal"
FROM Sales.SalesOrderDetail
GROUP BY ProductID 
ORDER BY SUM (LineTotal) DESC;

SELECT ProductID, COUNT(ProductID)AS "Contagem", AVG(OrderQty)AS "Média"
FROM Production.WorkOrder
GROUP BY ProductID

SELECT ProductID, SUM(LineTotal) AS "TOTAL"
FROM Sales.SalesOrderDetail
GROUP BY ProductID
HAVING SUM(LineTotal) BETWEEN 16200 AND 500000

SELECT FirstName,COUNT(FirstName) AS "QUANTIDADE" 
FROM Person.Person
WHERE Title = 'Mr.'
GROUP BY FirstName
HAVING COUNT(FirstName) > 10;

SELECT * 
FROM Person.Person
SELECT * 
FROM Person.EmailAddress

SELECT P.BusinessEntityID, P.FirstName, P.LastName, PE.EmailAddress
FROM Person.Person AS P
INNER JOIN Person.EmailAddress AS PE ON P.BusinessEntityID = PE.BusinessEntityID

SELECT TOP 10 * FROM Person.BusinessEntityAddress
SELECT TOP 10 *	FROM Person.Address

SELECT TOP 10 *
FROM Person.BusinessEntityAddress AS BA
INNER JOIN Person.Address PA ON PA.AddressID = BA.AddressID;

SELECT PPP.BusinessEntityID, PPN.Name, PPP.PhoneNumberTypeID, PPP.PhoneNumber
FROM Person.PhoneNumberType AS PPN
INNER JOIN Person.PersonPhone AS PPP ON PPN.PhoneNumberTypeID = PPP.PhoneNumberTypeID;

SELECT SalesOrderID, DATEPART(MONTH, OrderDate) AS MES 
FROM Sales.SalesOrderHeader

SELECT AVG(TotalDue) AS MEDIA, DATEPART(YEAR, OrderDate) AS ANO
FROM Sales.SalesOrderHeader
GROUP BY DATEPART(YEAR,OrderDate)
ORDER BY ANO;
