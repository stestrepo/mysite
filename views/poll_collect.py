from django.http import HttpResponse
from django.shortcuts import redirect
from dev_app.models import *
from django.template import loader
import cccf_dev.settings
from django.core.mail import send_mail
import mysql.connector as mariadb
import mysql.connector 
from mysql.connector import MySQLConnection, Error
# from python_mysql_dbconfig import read_db_config
from django.db import connections


def poll_render(request, tid=None ):
    print request
    print tid

    template = loader.get_template('dev_app/data_collect.html')
    token = tid

    if token:

        print token,type(token)

        get_token_ob = mail_sent_log.objects.get(usr_mail_token=token)
        grp_ques = get_token_ob.questionid
        grp_mail_id = get_token_ob.mail_id


        print grp_ques

        ques = Question.objects.get(id=grp_ques)

        question_ask = ques.ques
        question_choice = ques.choicecheck
        question_opt = ques.noofoptions
        question_ans = ques.anschoice
        questionid = ques.id

        str1 = question_ans
        str1 = str1.replace('u','')
        str1 = str1.replace("'","")
        str1 = str1.replace("[","")
        str1 = str1.replace("]","")
        str1 = str1.replace(" ","")
        print str1
        str2=str1.split(',')
        question_ans = str2

        if question_choice =='multi' :
            ques_ch = 'checkbox'
        elif question_choice == 'single':
            ques_ch = 'radio'

    context = {
        # 'username':username,
        # 'last':last,
        # 'image_path':image_path,
        'question_ask' : question_ask,
        'ques_ch' : ques_ch,
        'question_opt' : question_opt,
        'question_ans' : question_ans,
        'username' : grp_mail_id,
        'questionid' : questionid,
        'token' : token,
    }

    # context = { }

    return HttpResponse(template.render(context, request))
    


   
