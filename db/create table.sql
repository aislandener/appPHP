CREATE TABLE carros(
	id int auto_increment,
	marca varchar(40),
	modelo varchar(40),
	motor float,
	ano int,
	preco double,
	cavalo int,
	conEtanol double,
	conGasolina double,
	vlrRevisao double,
	vlrSeguro double,
	primary key(id)
);