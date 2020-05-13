-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Equipe (
idequipe VARCHAR(10) PRIMARY KEY,
nome VARCHAR(10),
regiao VARCHAR(10)
)

CREATE TABLE Atendente (
id_atendente VARCHAR(10) PRIMARY KEY,
status_denuncia VARCHAR(10),
nome VARCHAR(10)
)

CREATE TABLE Den�ncia (
iddenuncia VARCHAR(10) PRIMARY KEY,
descri��o VARCHAR(10),
dataHora VARCHAR(10),
endere�oOcorrencia VARCHAR(10)
)

CREATE TABLE CadastroPessoa (
id_pessoa VARCHAR(10) PRIMARY KEY,
bairro VARCHAR(10),
nome_completo VARCHAR(10),
email VARCHAR(10),
senha NUMERIC(10),
cidade VARCHAR(10),
telefone NUMERIC(10),
endere�o VARCHAR(10),
cpf NUMERIC(10),
rg NUMERIC(10),
usuario VARCHAR(10)
)

CREATE TABLE Recebe (
id_atendente VARCHAR(10),
iddenuncia VARCHAR(10),
FOREIGN KEY(id_atendente) REFERENCES Atendente (id_atendente),
FOREIGN KEY(iddenuncia) REFERENCES Den�ncia (iddenuncia)
)

CREATE TABLE Repassa (
idequipe VARCHAR(10),
id_atendente VARCHAR(10),
FOREIGN KEY(idequipe) REFERENCES Equipe (idequipe),
FOREIGN KEY(id_atendente) REFERENCES Atendente (id_atendente)
)

CREATE TABLE Acessa (
iddenuncia VARCHAR(10),
id_pessoa VARCHAR(10),
FOREIGN KEY(iddenuncia) REFERENCES Den�ncia (iddenuncia),
FOREIGN KEY(id_pessoa) REFERENCES CadastroPessoa (id_pessoa)
)

