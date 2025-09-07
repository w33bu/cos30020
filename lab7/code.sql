CREATE OR DROP TABLE cars (
car_id	int AUTO_INCREMENT
, make	VARCHAR(10)
, model	VARCHAR(10)
, price	int
, yom int
, PRIMARY KEY	(car_id))
);
/
insert into cars (make,model,price,yom) value ("Holden","Astra","12000.00","2005");
/
insert into cars (make,model,price,yom) value ("BMW","X3","35000.00","2004");
/
insert into cars (make,model,price,yom) value ("Ford","Falcon","39000.00","2011");
/
insert into cars (make,model,price,yom) value ("Toyota","Corolla","20000.00","2012");
/
insert into cars (make,model,price,yom) value ("Holden","Commodore","13500.00","2005");
/
insert into cars (make,model,price,yom) value ("Holden","Astra","4000.00","2001");
/
insert into cars (make,model,price,yom) value ("Holden","Commodore","15000.00","2009");
/
insert into cars (make,model,price,yom) value ("Ford","Falcon","25000.00","2007");
/
insert into cars (make,model,price,yom) value ("Ford","Falcon","34000.00","2003");
/
insert into cars (make,model,price,yom) value ("Ford","Laser","7000.00","2010");
/
insert into cars (make,model,price,yom) value ("Mazda","RX7","12000.00","2000");
/
insert into cars (make,model,price,yom) value ("Toyota","Corolla","12000.00","2001");
/
insert into cars (make,model,price,yom) value ("Mazda","3","14500.00","2009");
/
1 select * from cars;
2 SELECT make,model,price FROM cars order by make,model;
3.SELECT make,model,price FROM cars where price > 20000;
4.SELECT make,model,price FROM cars where price < 15000;
5. SELECT AVG(price), make FROM cars GROUP BY make;