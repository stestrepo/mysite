# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2017-11-14 06:01
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('demo', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='question',
            name='question_no',
            field=models.CharField(default='null', max_length=10),
        ),
    ]
