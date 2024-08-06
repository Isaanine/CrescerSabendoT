-- Criar o banco de dados
CREATE DATABASE crescersabendo;

-- Usar o banco de dados
USE crescersabendo;

-- Criação da tabela Login
CREATE TABLE Login (
    id_login INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Criação da tabela Responsavel
CREATE TABLE Responsavel (
    id_responsavel INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    Nascimento DATE,
    Telefone VARCHAR(15),
    Endereco VARCHAR(255),
    cep VARCHAR(10),
    estado VARCHAR(2),
    cidade VARCHAR(255),
    complemento VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    id_login INT,
    FOREIGN KEY (id_login) REFERENCES Login(id_login)
);

-- Criação da tabela Professor
CREATE TABLE Professor (
    id_professor INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    Nascimento DATE,
    Telefone VARCHAR(15),
    formacao VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    id_login INT,
    FOREIGN KEY (id_login) REFERENCES Login(id_login)
);

-- Criação da tabela Curso
CREATE TABLE Curso (
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sobre TEXT,
    horario TIME,
    dias VARCHAR(255),
    id_professor INT,
    foto BLOB,
    itens_aula TEXT,
    FOREIGN KEY (id_professor) REFERENCES Professor(id_professor)
);

-- Criação da tabela Aluno
CREATE TABLE Aluno (
    RM INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    Nascimento DATE,
    id_responsavel INT,
    FOREIGN KEY (id_responsavel) REFERENCES Responsavel(id_responsavel)
);

-- Criação da tabela Matricula
CREATE TABLE Matricula (
    id_matricula INT PRIMARY KEY AUTO_INCREMENT,
    situacao VARCHAR(255),
    id_curso INT,
    RM INT,
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso),
    FOREIGN KEY (RM) REFERENCES Aluno(RM)
);

-- Criação da tabela Ong
CREATE TABLE Ong (
    id_ong INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cnpj VARCHAR(18),
    responsavel VARCHAR(255),
    cpf VARCHAR(11),
    Endereco VARCHAR(255),
    cep VARCHAR(10),
    estado VARCHAR(2),
    cidade VARCHAR(255),
    complemento VARCHAR(255),
    Telefone VARCHAR(15),
    linkdoacao TEXT,
    sobre TEXT,
    email VARCHAR(255),
    senha VARCHAR(255),
    id_login INT,
    id_voluntario INT,
    id_curso INT,
    FOREIGN KEY (id_login) REFERENCES Login(id_login),
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso)
);

-- Criação da tabela Vaga_voluntario
CREATE TABLE Vaga_voluntario (
    id_vaga INT PRIMARY KEY AUTO_INCREMENT,
    nomearea VARCHAR(255),
    Telefone VARCHAR(15),
    email VARCHAR(255),
    cidade VARCHAR(255),
    sobre TEXT,
    dias VARCHAR(255),
    horario TIME,
    id_curso INT,
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso)
);
