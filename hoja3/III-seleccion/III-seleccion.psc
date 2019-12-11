Algoritmo ejercicio3
	numero <- 0
	salida <- ''
	Escribir 'introduce un numero de dia'
	Leer numero
	Segun numero Hacer
		1:
			salida <- 'Lunes'
		2:
			salida <- 'Martes'
		3:
			salida <- 'Miercoles'
		4:
			salida <- 'Jueves'
		5:
			salida <- 'Viernes'
		6:
			salida <- 'Sabado'
		7:
			salida <- 'Domingo'
		De Otro Modo:
			salida <- 'no valido'
	FinSegun
	Escribir salida
FinAlgoritmo

