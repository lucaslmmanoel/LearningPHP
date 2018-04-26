-- Criando uma tabela de clientes no sql

CREATE TABLE customers (		 
       --in english
        id int(11) NOT NULL,		
        name varchar(255) NOT NULL,
        cpf_cnpj varchar(14) NOT NULL,		
        birthdate date NOT NULL,		
        address varchar(255) NOT NULL,		
        hood varchar(100) NOT NULL,	
        zip_code int(8) NOT NULL,		
        city varchar(100) NOT NULL,		
        state varchar(100) NOT NULL,		
        phone int(13) NOT NULL,	
        mobile int(13) NOT NULL,	
        ie int(11) NOT NULL,
        created datetime NOT NULL,
        modified datetime NOT NULL		);

--Adicionando os atributos de chave primária e auto incrementação do id

    ALTER TABLE customers		  ADD PRIMARY KEY (id);		  	
    ALTER TABLE customers		  MODIFY id int(11) NOT NULL AUTO_INCREMENT,
                                                             AUTO_INCREMENT=1;

--ou se preferir pode criar a tabela em portugês
--table in portuguese
-- CREATE TABLE clientes (		 
--        --em protuguês
--         id int(11) NOT NULL,		
--         nome varchar(255) NOT NULL,
--         cpf_cnpj varchar(14) NOT NULL,		
--         datanasc date NOT NULL,		
--         endereco varchar(255) NOT NULL,		
--         bairro varchar(100) NOT NULL,	
--         cep int(8) NOT NULL,		
--         cidade varchar(100) NOT NULL,		
--         estado varchar(100) NOT NULL,		
--         telefone int(13) NOT NULL,	
--         celular int(13) NOT NULL,	
--         ie int(11) NOT NULL,
--         criacao datetime NOT NULL,
--         modificacao datetime NOT NULL		);

    -- ALTER TABLE clientes		  ADD PRIMARY KEY (id);		  	
    -- ALTER TABLE clientes		  MODIFY id int(11) NOT NULL AUTO_INCREMENT,
                                                    -- AUTO_INCREMENT=1;