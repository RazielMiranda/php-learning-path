INSERT INTO alunos (id_alunos,nome,data_nascimento,endereco,cidade,estado,cpf) 
VALUES 
	(1,"Judah Salazar","2018-09-28","635 Nunc Street","Luziânia","GO",86841146042),
	(2,"Genevieve Parker","2020-02-19","481-7505 Cum Ave","Rio de Janeiro","RJ",99106634060),
	(3,"Cherokee Franco","2019-06-08","7811 Non Rd.","Uberlândia","MG",23037849053),
	(4,"Fletcher Patterson","2019-11-18","Ap #514-744 Velit. Rd.","Maracanaú","CE",60635413060),
	(5,"Fletcher Pierce","2018-07-14","Ap #266-6729 Semper Av.","Paulista","PE",68112259046),
	(6,"John Santiago","2019-11-03","Ap #541-2025 Etiam Av.","Campina Grande","PB",56032536068),
	(7,"Scott Norman","2020-02-13","4761 Semper St.","Osasco","SP",51467036048),
	(8,"Josephine Thompson","2019-10-07","6581 Neque Avenue","Belford Roxo","RJ",73897616017),
	(9,"Colby Russell","2019-07-17","3197 Nunc Av.","Rio Verde","GO",73897616017),
	(10,"Jameson Fulton","2019-10-29","Ap #924-5003 Sed Ave","Joinville","SC",15452812032);

INSERT INTO CURSOS
VALUES 
	(DEFAULT,'Desenvolvimento Web'),
	(DEFAULT,'Machine learning'),
	(DEFAULT,'PHP e Python para internet');

insert into alunos_cursos
values 
	(default,1,2),
	(default,2,1),
	(default,3,2),
	(default,4,1),
	(default,5,3),
	(default,6,3),
	(default,7,2),
	(default,8,1),
	(default,9,1),
	(default,10,3);

insert into NOTAS
values 
	(default,1,'Prova Bimestral',10.00),
	(default,2,'Seminario',7.00),
	(default,3,'Trabalho',3.00),
	(default,4,'Atividade',7.20),
	(default,5,'Prova Bimestral',10.00),
	(default,6,'Seminario',8.00),
	(default,7,'Trabalho',6.50),
	(default,8,'Atividade',5.00),
	(default,9,'Atividade 2',6.00),
	(default,10,'Recuperação',00.00);

select * from alunos;
select * from alunos_cursos;
select * from cursos;
select * from notas;

SELECT A.nome , C.nome , N.descricao_atividade , N.vlr_notas
FROM alunos A,
	cursos C,
	alunos_cursos AC,
	notas N,
WHERE A.id_alunos = AC.id_alunos and C.id_curso = AC.id_curso and AC.aluno_curso = N.id_aluno_notas



