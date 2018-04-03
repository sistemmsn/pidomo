#Impide el paso de la corriente electrica 
 #!usr/bin/env/ python
#apaga.py
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(23, GPIO.OUT)
