# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2018-01-09 08:26
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('dev_app', '0011_mail_send_user_token'),
    ]

    operations = [
        migrations.CreateModel(
            name='answer_log',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('id_mail_log_sent', models.CharField(default='null', max_length=100)),
                ('questionid', models.CharField(default='null', max_length=100)),
                ('answerkey', models.TextField(default='null')),
            ],
        ),
        migrations.CreateModel(
            name='mail_sent_log',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('mail_id', models.CharField(default='null', max_length=300)),
                ('telid', models.CharField(default='null', max_length=100)),
                ('questionid', models.CharField(default='null', max_length=100)),
                ('usr_mail_token', models.TextField(default='null')),
            ],
        ),
    ]
