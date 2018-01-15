# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.db import models
# import datetime
from django.utils.encoding import python_2_unicode_compatible
# Create your models here.

@python_2_unicode_compatible  # only if you need to support Python 2
class Question(models.Model):
    choice = (
        ('1','radio'),
        ('2','checkbox'),
        )

    ques = models.CharField(max_length=250)
    choicecheck = models.CharField(default='null',choices=choice, max_length=10 )
    noofoptions = models.IntegerField(default=0)
    anschoice = models.TextField(default='null')
    # anschoice = models.ManyToManyField('self',blank='true',default='null')
    # anschoice = models.TypedMultipleChoiceField(default='null')

    def __str__(self):
        return self.ques

    # def was_published_recently(self):
    #     return self.pub_date >= timezone.now() - datetime.timedelta(days=1)



# @python_2_unicode_compatible  # only if you need to support Python 2
class Group(models.Model):
    grp_name = models.CharField(max_length=250)
    grp_email = models.TextField(default='null')


class Mail_send(models.Model):
    grp_at_mail=models.TextField(default='null')
    grp_attached=models.CharField( max_length=200 ,default='null')
    question_id=models.CharField(max_length=150)
    grp_mail=models.TextField(default='null')
    user_token=models.TextField(default='null')


class mail_msg_titles(models.Model):
    msg_header=models.CharField(max_length=300,default='null')
    msg_body=models.TextField(default='null')        


class mail_sent_log(models.Model):
    mail_id = models.CharField(max_length=300,default='null') #mail id of user who mail is sent
    telid = models.CharField(max_length=100,default='null') #telid of user who mail is sent
    questionid = models.CharField(max_length=100,default='null') #questionid of the poll
    usr_mail_token = models.TextField(default='null')        
    # mailsentat = models.DateTimeField(auto_now=True)


class answer_log(models.Model):
    id_mail_sent_log = models.CharField(max_length=100,default='null',unique=True) #id belonging to mail_sent_log
    questionid = models.CharField(max_length=100,default='null') #questionid of the poll
    answerkey = models.TextField(default='null') #individual answer key
    # answerat = models.DateTimeField(auto_now=True)
    



class Conference(models.Model):
    conf_name = models.CharField(max_length=250)
    location = models.CharField(max_length=500)     
    note = models.TextField(max_length=500)     
    note2 = models.TextField(max_length=500)     
    # date_from = models.DateField()
    # date_to = models.DateField()
    # time_from = models.TimeField()
    # time_to = models.TimeField()    

    # date_from = models.DateField(blank=True, null=True,default=datetime.date.today)
    # date_to = models.DateField(blank=True, null=True,default=datetime.date.today)
    # time_from = models.TimeField(default='HH:MM:ss')
    # time_to = models.TimeField(default='HH:MM:ss')    