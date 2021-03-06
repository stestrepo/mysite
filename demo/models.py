# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.db import models
import datetime
from django.utils.encoding import python_2_unicode_compatible

# Create your models here.



@python_2_unicode_compatible  # only if you need to support Python 2
class Question(models.Model):
    question_text = models.CharField(max_length=200)
    question_no = models.CharField(max_length=10,default='null')
    pub_date = models.DateTimeField('date published')

    def __str__(self):
        return self.question_text

    # def was_published_recently(self):
    #     return self.pub_date >= timezone.now() - datetime.timedelta(days=1)


        
@python_2_unicode_compatible  # only if you need to support Python 2
class Choice(models.Model):
    question = models.ForeignKey(Question, on_delete=models.CASCADE)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)

    def __str__(self):
        return self.choice_text

@python_2_unicode_compatible  # only if you need to support Python 2
class group(models.Model):
    # group  file, get it as a dict/tuple file, process it to fetch each object and then validate ech object
    def __str__(self):
        return self.choice_text



