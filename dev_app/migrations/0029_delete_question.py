# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2018-01-15 05:37
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('dev_app', '0028_auto_20180115_0534'),
    ]

    operations = [
        migrations.DeleteModel(
            name='Question',
        ),
    ]