from django.http import HttpResponse
from dev_app.models import Question,mail_sent_log,answer_log
from django.template import loader
import cccf_dev.settings
from django.core.mail import send_mail

def poll_fetch(request):

    question_list = Question.objects.all()
    grp_d={}
    in_grp={}

    print question_list
    print question_list.count() #display no of ques
    i = 0
    ques_bank=[]

    for v in question_list:
        ques = v.ques
        choicecheck = v.choicecheck
        noofoptions = v.noofoptions
        anschoice = v.anschoice
        # print v.ques,v.choicecheck,v.noofoptions,v.anschoice
        in_grp={'ques':ques,'choicecheck':choicecheck,'noofoptions':noofoptions,'anschoice':anschoice }

        q_bank={ v.id:v.ques }
        ques_bank.append(q_bank)

        grp_d[i]=in_grp
        # print i , in_grp
        i = i+1
        
    # print grp_d 
    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)
       
    print image_path,username    
    template = loader.get_template('dev_app/all_poll.html')
    context = {
        'grp_d':grp_d,
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
        'ques_bank':ques_bank,
        
        # 'in_grp':in_grp,
    }
    return HttpResponse(template.render(context, request))



def quesdetails(request,qid=None ):

    print request.POST 
    print qid

    qr= Question.objects.get(id=qid)
    print qr.id,qr.ques,qr.anschoice 
    question_asked = qr.ques

    ch = qr.anschoice
    str1 = ch
    str1 = str1.replace('u','')
    str1 = str1.replace("'","")
    str1 = str1.replace("[","")
    str1 = str1.replace("]","")
    str1 = str1.replace(" ","")
    print str1
    str2=str1.split(',')
    question_choices = str2

    people = []
    akey = answer_log.objects.filter(questionid=qid)
    
    # akey = answer_log.objects.filter(questionid=10)

    for k in akey:
        person_ans = k.answerkey
        print k.answerkey
        print k.id_mail_sent_log


        mail_id = k.id_mail_sent_log
        amail = mail_sent_log.objects.get(id = mail_id )
        person_mail = amail.mail_id
        print amail.mail_id

        q_bank={ person_ans : person_mail }
        people.append(q_bank)
    












    image_path = request.session.get('image_path', False)
    username = request.session.get('username', False)
    print image_path,username 

    template = loader.get_template('dev_app/quesdetails.html')
    context = {
        # 'grp_d':grp_d,
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
        'question_asked':question_asked,
        'question_choices':question_choices,
        'people':people,
        
        # 'in_grp':in_grp,
    }
    return HttpResponse(template.render(context, request))
