# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2018-01-10 09:13
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('dev_app', '0013_auto_20180109_0855'),
    ]

    operations = [
        migrations.RenameField(
            model_name='answer_log',
            old_name='id_mail_log_sent',
            new_name='id_mail_sent_log',
        ),
    ]
