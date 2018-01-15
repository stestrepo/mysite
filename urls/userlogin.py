from django.conf.urls import include,url
from cccf_dev import settings
from . import views
from dev_app import views
# from dev_app.views import userlogin
from dev_app.views import userlogin,poll,conference,group,poll_collect

urlpatterns = [
    # url(r'^$', views.userlogin.userlogin , name='userlogin'),
    # url(r'^login/', views.userlogin.login , name='login'),

    url(r'^[0-9]+$', views.userlogin.login , name='login'),
    # url(r'^$', views.userlogin.login , name='login'),
    url(r'^login_user', views.userlogin.login_user , name='login_user'),
    
    url(r'^invite_people_poll', views.userlogin.invite_people_poll , name='invite_people_poll'),
    url(r'^invite_people_conf', views.userlogin.invite_people_conf , name='invite_people_conf'),
    url(r'^create_group', views.userlogin.create_group , name='create_group'),

    # * - 0 or more parameters
    # + - 1 or more parameters
    
    url(r'^poll_options', views.userlogin.poll_options , name='poll_options'),
    url(r'^poll_mail', views.userlogin.poll_mail , name='poll_mail'),
    # url(r'^[0-9]/[a-zA-Z0-9]+$', views.poll_collect.poll_render , name='poll_render'),



    url(r'^group_options', views.userlogin.group_options , name='group_options'),

    url(r'^poll', views.poll.poll_fetch , name='poll_fetch' ),
    url(r'^ques/(?P<qid>[0-9]+)', views.poll.quesdetails , name='quesdetails' ),



    url(r'^conference', views.conference.conference_fetch , name='conference_fetch' ),


    url(r'^group', views.group.group_fetch , name='group_fetch' ),  




    url(r'^thankyou', views.userlogin.thankyou , name='thankyou' ),  


    # url(r'^[a-zA-Z0-9]+', views.poll_collect.poll_render , name='poll_render' ),
    # url(r'^(?P<tid>\d+)/[a-zA-Z0-9]+', views.poll_collect.poll_render , name='poll_render' ),
    url(r'^(?P<tid>[a-zA-Z0-9]+)', views.poll_collect.poll_render , name='poll_render' ),



]
