#Permite el paso de la corriente electrica
#!usr/bin/env/ python
#enciende.py
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(22, GPIO.IN)

