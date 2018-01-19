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
        template = loader.get_template('dev_app/dashboard.html')
    else :
        template = loader.get_template('dev_app/login_page.html')
        
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

    template = loader.get_template('dev_app/dashboard.html')
    context = {
        'image_path':image_path,
        'username':username,
    }
    return HttpResponse(template.render(context, request))
        




def invite_people_poll(request):
    print request,request.POST,request.GET 
    print "telid",request.session.get('telid', False)
    print request.session.get('username', False)
    print request.session.get('image_path', False)
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)

    template = loader.get_template('dev_app/poll.html')
    context = {
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
    }
    return HttpResponse(template.render(context, request))



def poll_options(request):
    # print request,request.POST
    question = request.POST.get('question')
    tag_name = request.POST.getlist('tag_name')
    ansc = request.POST.get('ansc')
    # options = request.POST.get('options')
    further = request.POST.get('further')
    # print request.POST.getlist('tag_name')
    # for x in tag_name:
    #     print x
    if request.method == 'POST':
        poll_in = Question(ques=question,choicecheck=ansc,anschoice=tag_name)
        # poll_in = Question(ques=question,choicecheck=ansc,noofoptions=options,anschoice=tag_name)
        poll_in.save()

    poll_max= Question.objects.last()
    poll_max_id = poll_max.id

    print poll_max_id
    # this will return the max id
    # res = Image.objects.filter().aggregate(max_id=Max('pk'))
    # res.get('max_id')

    g_obj= Group.objects.all()
    group_obj = []
    for e in g_obj:
        opr = { e.id:e.grp_name }
        group_obj.append(opr)

    # print
    if further == 'add':
        # template = loader.get_template('dev_app/invite.html')
        return redirect('group.poll_fetch')
    elif further == 'mail' :
        template = loader.get_template('dev_app/invite.html')
        # template = loader.get_template('dev_app/invite.html')
        context = {
            'poll_max_id':poll_max_id, 
            'group_obj':group_obj,
            'image_path':request.session.get('image_path', False),
            'username':request.session.get('username', False),

        }
        return HttpResponse(template.render(context, request))
        
# >>> import cccf_dev.settings
# >>> 
# >>> from django.core.mail import send_mail
# >>> send_mail('subject','message','sayali.goregaonkar@tifr.res.in',['sayali.goregaonkar@tifr.res.in'],fail_silently=False, )
# 1
# >>> send_mail('subject','message','opr@laravel.tifr.res.in',['tifrmail@gmail.com','sayali.goregaonkar@tifr.res.in'],fail_silently=False, )
# 1
# >>> send_mail('subject','message','kkr@laravel.tifr.res.in',['tifrmail@gmail.com','sayali.goregaonkar@tifr.res.in'],fail_silently=False, )
# 1

def poll_mail(request):
    # print request,request.POST 
    # write models.. to save whixh  question is send to people
    grp_name = request.POST.get('grp_name1')
    tag_name = request.POST.getlist('tag_name')
    poll_max_id = request.POST.get('poll_max_id')
    # for x in tag_name:
    #     print x
    # based on max id fetched, find the poll questions.
    # ran_token = binascii.b2a_hex(os.urandom(15))
    # print ran_token

    # import string
    # import random
    # lst = [random.choice(string.ascii_letters + string.digits) for n in xrange(30)]
    # str = "".join(lst)
    # print str
    # ocwbKCiuAJLRJgM1bWNV1TPSH0F2Lb



    print poll_max_id,tag_name,grp_name

    if request.method == 'POST':
        poll_in = Mail_send(question_id=poll_max_id,grp_attached=grp_name,grp_mail=tag_name)
        # poll_in = Mail_send(question_id=poll_max_id,grp_attached=grp_name,grp_mail=tag_name,user_token=ran_token)
        poll_in.save()

    # lk = mail_msg_titles.objects.all()
    lk = mail_msg_titles.objects.get(msg_header='Poll head')
    mail_head = lk.msg_header
    mail_body1 = lk.msg_body

    telid = request.session.get('telid')
    telid = telid.encode('utf-8')

    # print telid , type(telid)
    # print ran_token ,type(ran_token)




    usr_mail_token = 0

    for a in tag_name:
        print a
        mail_body = mail_body1
        usr_mail_token = 0
        usr_mail_token = binascii.b2a_hex(os.urandom(15))
        usr_m = mail_sent_log(mail_id=a, questionid=poll_max_id, usr_mail_token=usr_mail_token )
        usr_m.save()

        urln = "https://158.144.1.152/dj/dev/userlogin/"+usr_mail_token
        print urln
        mail_body = mail_body.replace("#link",urln)
        print mail_body
        send_mail(mail_head,mail_body,'opr@laravel.tifr.res.in',[a],fail_silently=False, )
        # usr_m = mail_sent_log(mail_id=a, telid=telid, questionid=poll_max_id, usr_mail_token=usr_mail_token )

    usr_mail_token = 0

    if (grp_name != '0') :
        # print grp_name,type(grp_name)
        get_grp_tg = Group.objects.get(id=grp_name)
        grp_people = get_grp_tg.grp_email
        str1 = grp_people
        str1 = str1.replace('u','')
        str1 = str1.replace("'","")
        str1 = str1.replace("[","")
        str1 = str1.replace("]","")
        str1 = str1.replace(" ","")
        print str1
        str2=str1.split(',')
        grp_people = str2

        print grp_people

        for a in grp_people:
            print a 
            mail_body = mail_body1
            usr_mail_token = 0
            usr_mail_token = binascii.b2a_hex(os.urandom(15))
            usr_m = mail_sent_log(mail_id=a, questionid=poll_max_id, usr_mail_token=usr_mail_token )
            usr_m.save()
            urln = "https://158.144.1.152/dj/dev/userlogin/"+usr_mail_token
            print urln
            mail_body = mail_body.replace("#link",urln)
            print mail_body
            send_mail(mail_head,mail_body,'opr@laravel.tifr.res.in',[a],fail_silently=False, )
            # usr_m = mail_sent_log(mail_id=a, telid=telid, questionid=poll_max_id, usr_mail_token=usr_mail_token )

    context = { 
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
    }

    template = loader.get_template('dev_app/dashboard.html')
    return HttpResponse(template.render(context, request))








def invite_people_conf(request):
    print request,request.POST
    template = loader.get_template('dev_app/conference.html')
    context = {
        # 'username':username,
        # 'password':password,
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
    }

    return HttpResponse(template.render(context, request))




def create_group(request):
    print request,request.POST
    template = loader.get_template('dev_app/group.html')
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)
    print image_path,username    
    context = {
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
    }
    return HttpResponse(template.render(context, request))


def group_options(request):
    print request,request.POST,request.GET
    if request.method == 'POST':
        grp_name = request.POST.get('grp_name')
        tag_name = request.POST.getlist('tag_name')
        poll_in = Group(grp_name=grp_name,grp_email=tag_name)
        poll_in.save()

    # group_list = Group.objects.all()
    # print group_list
    # for v in group_list:
    #     print v.grp_name
    #     print v.grp_email
    # template = loader.get_template('dev_app/all_group.html')
    # context = {
    #     'group_list':'group_list', 
    # }
    # return HttpResponse(template.render(context, request))
    # return redirect('/poll/')
    return redirect('group.group_fetch')


def prender(request):
    print request

    template = loader.get_template('dev_app/dashboard.html')
    context = {
        'group_list':'group_list', 
    }
    return HttpResponse(template.render(context, request))



def thankyou(request):
    print request,request.POST
    questionid = request.POST.get('questionid')
    options_value = request.POST.get('options_value')
    token = request.POST.get('token')

    get_token_ob = mail_sent_log.objects.get(usr_mail_token=token)
    id_mail_sent_log = get_token_ob.id

    try:
        answer_ob = answer_log.objects.get(id_mail_sent_log=id_mail_sent_log)
        answer_ob_op = answer_ob.answerkey
        answer_ob.answerkey = options_value
        answer_ob.save()
    
    except ObjectDoesNotExist:
        usr_m = answer_log(id_mail_sent_log=id_mail_sent_log, questionid=questionid, answerkey=options_value )
        usr_m.save()
        




    
    template = loader.get_template('dev_app/thankyou.html')
    context = { }

    return HttpResponse(template.render(context, request))    



def conference_options(request):

    template = loader.get_template('dev_app/thankyou.html')
    context = { }

    return HttpResponse(template.render(context, request))    
