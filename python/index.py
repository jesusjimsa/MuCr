#!/usr/bin/env python

import cgi, cgitb
import MySQLdb

cgitb.disable()

form = cgi.FieldStorage()


first_name = form.getvalue('email')
last_name  = form.getvalue('password')

redirectURL = "http://localhost:9000/MuCr_main.html"



DB_HOST = 'localhost'
DB_USER = 'root'
DB_PASS = '9uk6vw6e'
DB_NAME = 'orfeo'


def run_query(query=''):
    datos = [DB_HOST, DB_USER, DB_PASS, DB_NAME]

    conn = MySQLdb.connect(*datos) # Conectar a la base de datos
    cursor = conn.cursor()         # Crear un cursor
    cursor.execute(query)          # Ejecutar una consulta

    if query.upper().startswith('SELECT'):
        data = cursor.fetchall()   # Traer los resultados de un select
    else:
        conn.commit()              # Hacer efectiva la escritura de datos
        data = None

    cursor.close()                 # Cerrar el cursor
    conn.close()                   # Cerrar la conexión

    return data
