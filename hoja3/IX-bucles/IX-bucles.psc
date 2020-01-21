Algoritmo sin_titulo
	tope <- 0
	x <- 0
	a <- 0
	Escribir 'introduce numero'
	Leer c
	Si tope<=1 Entonces
		Escribir tope
	SiNo
		x <- 1
		Repetir
			a <- x+a
			x <- x+2
		Hasta Que x<=tope
	FinSi
	Escribir 'la suma de los valores impares es ',a
FinAlgoritmo

