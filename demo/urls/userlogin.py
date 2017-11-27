from django.conf.urls import include,url
from . import views
from demo import views
from demo.views import userlogin

urlpatterns = [
    url(r'^$', views.userlogin.userlogin , name='userlogin'),
    url(r'^ls/', views.userlogin.second , name='second'),
    
    url(r'^login/', views.userlogin.login , name='login'),

]
