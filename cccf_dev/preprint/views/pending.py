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

def pending_fetch(request):
	# print "first page land"
	# return HttpResponse("Hello, world. You're at the polls index.")
    utility_list = utility.objects.all()
    grp_d={}
    in_grp={}

    print utility_list
    print utility_list.count() #display no of ques
    i = 0
    utility_bank=[]
    u_bank = []

    for v in utility_list:
        title = v.title
        asso_author = v.asso_author
        arxiv = v.arxiv
        jour_name = v.jour_name
        # print v.ques,v.choicecheck,v.noofoptions,v.anschoice
        in_grp={'title':title,'asso_author':asso_author,'arxiv':arxiv,'jour_name':jour_name }

        q_bank={ v.id:v.title }
        utility_bank.append(q_bank)
        u_bank.append(in_grp)

        grp_d[i]=in_grp
        # print i , in_grp
        i = i+1
        
    # print grp_d 
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)
       
    print image_path,username    
    template = loader.get_template('preprint/requestpro.html')
    context = {
        'grp_d':grp_d,
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
        'utility_bank':utility_bank,
        'utility_list':utility_list,
        # 'in_grp':in_grp,
    }
    return HttpResponse(template.render(context, request))

