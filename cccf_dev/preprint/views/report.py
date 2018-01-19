from django.shortcuts import render
from django.template import loader
from django.http import HttpResponse
from django.shortcuts import redirect
from preprint.models import *
import cccf_dev.settings
from django.core.mail import send_mail
import mysql.connector as mariadb
import mysql.connector 
from mysql.connector import MySQLConnection, Error
# from python_mysql_dbconfig import read_db_config
from django.db import connections
import os,binascii
from django.core.exceptions import ObjectDoesNotExist

def report_fetch(request):
	print "first page land"
	return HttpResponse("Hello, world. You're at the polls index.")


