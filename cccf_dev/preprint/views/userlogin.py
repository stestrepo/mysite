from django.http import HttpResponse
from django.shortcuts import redirect
from preprint.models import *
from django.template import loader
import cccf_dev.settings
from django.core.mail import send_mail
import mysql.connector as mariadb
import mysql.connector 
from mysql.connector import MySQLConnection, Error
# from python_mysql_dbconfig import read_db_config
from django.db import connections
import os,binascii
from django.core.exceptions import ObjectDoesNotExist

def login(request):
    # x1 = tag.objects.get('tag'=tag)
    # x = request.GET.get('id', '')
    x = request.get_full_path()
    print x,"the id found is:"
    x1 = x.split('/')
    print x1
    # for l in x1:
    #     last =l
    last=x1[4]
    cursor = connections['appadmin'].cursor()
    cursor.execute("SELECT title,restname,surname,photo FROM people1 WHERE telid ="+last)
    row=cursor.fetchone()
    # for e in row:
    #     print e
    username = row[0]+" "+row[1]+" "+row[2]
    image_path = "http://www.tifr.res.in/"+row[3]
    
    print last,username

    if last:
        template = loader.get_template('preprint/dashboard.html')
    else :
        template = loader.get_template('preprint/dashboard.html')
        
    request.session['username'] = username
    request.session['telid'] = last
    request.session['image_path'] = image_path
    context = {
        'username':username,
        'last':last,
        'image_path':image_path,
    }
    return HttpResponse(template.render(context, request))






def login_user(request):
    # print request.method,request.POST, request.GET
    # username = request.POST.get('username')
    # password = request.POST.get('password')
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)
    print username,image_path

    template = loader.get_template('preprint/dashboard.html')
    context = {
        'image_path':image_path,
        'username':username,
    }
    return HttpResponse(template.render(context, request))
        
