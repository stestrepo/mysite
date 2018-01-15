
from django.conf.urls import include,url
from dev_app import views
from . import views

app_name = 'devapp'

urlpatterns = [
	url(r'^$', views.one, name='one'),
	
	url(r'^userlogin/', include('dev_app.urls.userlogin')),


]









