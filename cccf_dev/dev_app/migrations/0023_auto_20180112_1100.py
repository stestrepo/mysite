# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2018-01-12 11:00
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('dev_app', '0022_delete_conference'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='answer_log',
            name='answerat',
        ),
        migrations.RemoveField(
            model_name='mail_sent_log',
            name='mailsentat',
        ),
    ]
