Algoritmo sin_titulo
	num <- 0
	comprobar <- 0
	media <- 0
	Repetir
		Escribir 'inserte numero'
		Leer num
		media <- media+num
		Escribir 'el numero metido en la media es ',media
		comprobar <- comprobar+1
		Escribir 'la comprobacion va por ',comprobar
	Hasta Que comprobar>=10
	media <- media/10
	Escribir 'la media es ',media
FinAlgoritmo

