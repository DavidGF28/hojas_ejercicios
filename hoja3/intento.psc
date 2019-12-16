Algoritmo Ejercicio8
	c <- 0
	x <- 1
	Escribir 'introduce un numero'
	Leer c
	Si c/2=0 Entonces
		Repetir
			Escribir '<div>',x,'</div>'
			x <- x+2
		Hasta Que x=c-1
	SiNo
		Repetir
			Escribir '<div>',x,'</div>'
			x <- x+2
		Hasta Que x=c
	FinSi
FinAlgoritmo

