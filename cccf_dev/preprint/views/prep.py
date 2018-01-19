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

def apply(request,pid=None):

    print request,request.POST,request.GET 
    print pid
    print "telid",request.session.get('telid', False)
    print request.session.get('username', False)
    print request.session.get('image_path', False)
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)

    template = loader.get_template('preprint/request.html')
    context = {
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
        'pid':pid
    }
    return HttpResponse(template.render(context, request))






def savereq(request,pid=None):
     # not sure what this does.. check out

    print request,request.POST,request.GET 
    print pid
    print "telid",request.session.get('telid', False)
    print request.session.get('username', False)
    print request.session.get('image_path', False)
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)

    template = loader.get_template('preprint/request.html')
    context = {
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
        'pid':pid
    }
    return HttpResponse(template.render(context, request))


