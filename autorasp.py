import RPi.GPIO as GPIO
import time

#------ Configuração das portas GPIO

pin_lamp = 11
pin_tv = 12
pin_pc = 15
pin_air = 18

#------ Define o tempo de delay

sleep = 1

#------ Configuração das portas GPIO

GPIO.setmode(GPIO.BOARD) 
GPIO.setup(11, GPIO.OUT)
GPIO.setup(12, GPIO.OUT)
GPIO.setup(18, GPIO.OUT)
GPIO.setup(15, GPIO.OUT)

#------ Loop principal

while (True):

    #----- ler o arquivo inter.log

    file = open('inter.log', 'r')
    lista = []
    for linha in file:
        lista.append(linha.strip())
    
    #----- cria uma lista com os valores do arquivo 

    varLamp = lista[0] 
    varTv = lista[1]
    varPc = lista[2]
    varAir = lista[3]

    #------- Validação das portas -------#

    if(varLamp == 'on'):
        GPIO.output(pin_lamp,1)
    else:
        GPIO.output(pin_lamp,0)

    if(varTv == 'on'):
        GPIO.output(pin_tv,1)
    else:
        GPIO.output(pin_tv,0)

    if(varPc == 'on'):
        GPIO.output(pin_pc,1)
    else:
        GPIO.setmode(pin_pc,0)

    if(varAir == 'on'):
        GPIO.output(pin_air,1)
    else:
        GPIO.output(pin_air,0)

    #---- Faz uma pusa no codigo 

    time.sleep(sleep)

    #--- fim while -----