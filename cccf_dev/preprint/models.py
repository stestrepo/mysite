# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.db import models
import datetime
from django.utils.encoding import python_2_unicode_compatible

# Create your models here.

@python_2_unicode_compatible  # only if you need to support Python 2
class utility(models.Model):

    title = models.CharField(max_length=250)
    asso_author = models.TextField(default='null')
    arxiv = models.CharField(default='null', max_length=100 )
    jour_name = models.CharField(max_length=250)
    volume = models.CharField(max_length=150)
    year = models.CharField(max_length=50)
    noofpages = models.IntegerField(default=0)

    def __str__(self):
        return self.title


class author(models.Model):

    author_name = models.CharField(max_length=200,unique=True)
    author_inst = models.CharField(max_length=500)

    def __str__(self):
        return self.author_name

        