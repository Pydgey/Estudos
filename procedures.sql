select * from Person.Person
select * from Person.Address

CREATE PROCEDURE BuscaCity
		@nomeCity VARCHAR(50)
		AS
		SET @NOMECITY = '%'+@nomeCity+'%';

		SELECT PP.FirstName,PP.MiddleName,PP.LastName,PA.City,PA.AddressLine1
		FROM Person.address PA
			INNER JOIN Person.Person PP ON PP.BusinessEntityID = PA.AddressID
		WHERE PA.City LIKE @nomeCity;

EXEC BuscaCity 'the';

CREATE PROCEDURE prc_TESTE
	AS
		SELECT * FROM tempTable;
	GO

BEGIN TRY
	EXEC prc_TESTE;
END TRY
BEGIN CATCH
	SELECT
		ERROR_NUMBER() AS Numero_erro,
		ERROR_MESSAGE() AS Mensagem_erro;
END CATCH;


----------------------

SELECT * FROM Production.Product;

CREATE PROCEDURE addProduct
	@nomeProd	VARCHAR (50),
	@prodNumb	VARCHAR (50),
	@colorProd	VARCHAR (30),
	@stock		INT,
	@reorder	INT
	AS
	BEGIN
		DECLARE @vProdID    INT;
		DECLARE @vExistProd INT;

		SELECT @vExistProd = ProductID 
			FROM Production.Product
			WHERE Name = @nomeProd;

		IF @vExistProd > 0
			BEGIN 
				SELECT 'Produto Existente' as RETORNO
			END
		ELSE
			BEGIN
				SELECT @vProdID = MAX(ProductID) +1 FROM Production.Product;

				INSERT INTO Production.Product (Name,ProductNumber,Color,SafetyStockLevel,ReorderPoint)
					VALUES (@nomeProd,@prodNumb,@colorProd,@stock,@reorder);

				SELECT @vProdID = ProductID
				FROM Production.Product
				WHERE ProductID = @vProdID;

				SELECT @vProdID AS RETORNO;
			END
		END

		DROP PROCEDURE addProduct;

		EXEC addProduct 'Chave de Fenda','XD-999J','Blue',200,600;



		

