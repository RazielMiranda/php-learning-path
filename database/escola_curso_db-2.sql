CREATE TABLE Alunos (
	id_alunos INT NOT NULL AUTO_INCREMENT,
		CONSTRAINT pk_aluno PRIMARY KEY (id_alunos)
  );
  
  CREATE TABLE Cursos(
	id_cursos INT NOT NULL AUTO_INCREMENT,
		CONSTRAINT pk_curso PRIMARY KEY (id_cursos)
  );
  
  CREATE TABLE Notas(
	ID_NOTAS INT NOT NULL AUTO_INCREMENT,
		CONSTRAINT PK_NOTAS PRIMARY KEY (ID_NOTAS)
  );

ALTER TABLE alunos 
	ADD COLUMN `nome` VARCHAR(100) NOT NULL AFTER `id_alunos`,
	ADD COLUMN `data_nascimento` DATE NOT NULL AFTER `nome`,
	ADD COLUMN `endereco` VARCHAR(255) NOT NULL AFTER `data_nascimento`,
	ADD COLUMN `cidade` VARCHAR(100) NOT NULL AFTER `endereco`,
	ADD COLUMN `estado` VARCHAR(2) NOT NULL AFTER `cidade`,
	ADD COLUMN `cpf` VARCHAR(11) NOT NULL AFTER `estado`;

ALTER TABLE cursos 
	ADD COLUMN `nome` VARCHAR(100) NOT NULL AFTER `id_cursos`;

ALTER TABLE notas 
	ADD COLUMN `descricao_atividade` VARCHAR(100) NOT NULL AFTER `id_notas`,
	ADD COLUMN `vlr_notas` DECIMAL(5,2) NOT NULL AFTER `descricao_atividade`;

INSERT INTO alunos 
values (DEFAULT, 'Raziel Miranda Rodrigues','1999-01-01','Rua Argentina, 15-53','São Paulo', 'SP','45497795862');

INSERT INTO alunos 
values (2, 'Marcos Roberto','1979-04-13','Rua Itapiruna, 1231','São Paulo', 'SP','12345678911');

delete from alunos
where id_alunos = 2;

select * from alunos;

select nome,cpf
from alunos;

select *
from alunos
where cidade = 'São Paulo';

select *
from alunos
order by nome asc;

select *
from alunos
order by nome desc;

select *
from alunos
order by 1 desc;

select *
from alunos
where id_alunos = 1 or id_alunos = 5;

select *
from alunos
where cidade = 'São Paulo' and estado = 'SP';

select *
from alunos 
where id_alunos = 1;

select *
from alunos 
where data_nascimento > '1999-01-01';

select *
from alunos 
where data_nascimento < '1999-01-01';

select *
from alunos 
where data_nascimento <> '1999-01-01';

select *
from alunos 
where data_nascimento >= '1999-01-01';

select *
from alunos 
where data_nascimento <= '1999-01-01';

SELECT * FROM `aluno` WHERE nome like '%Miranda%' 
https://demo.phpmyadmin.net/master-config/tbl_sql.php?db=rz_database&table=aluno