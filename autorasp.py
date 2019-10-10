import RPi.GPIO as GPIO
import time
file = open('inter.log', 'r')
lista = []
for linha in file:
    lista.append(linha.strip())
print(lista)
