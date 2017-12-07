from django.conf.urls import include,url
from . import views
from demo import views
from demo.views import userlogin

urlpatterns = [
    url(r'^$', views.userlogin.userlogin , name='userlogin'),
    url(r'^ls/', views.userlogin.second , name='second'),

    url(r'^login/', views.userlogin.login , name='login'),
    url(r'^login_user', views.userlogin.login_user , name='login_user'),
    url(r'^invite_people_poll', views.userlogin.invite_people_poll , name='invite_people_poll'),
    url(r'^invite_people_conf', views.userlogin.invite_people_conf , name='invite_people_conf'),
    url(r'^create_group', views.userlogin.create_group , name='create_group'),

    
    url(r'^poll_options', views.userlogin.poll_options , name='poll_options'),

]
