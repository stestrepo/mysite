# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2018-01-05 10:02
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('dev_app', '0009_mail_msg_titles'),
    ]

    operations = [
        migrations.RenameField(
            model_name='mail_send',
            old_name='grp_at_id',
            new_name='question_id',
        ),
    ]
