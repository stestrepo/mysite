
from django.conf.urls import include,url
# from dev_app import views
from preprint import views
from . import views

# app_name = 'devapp'
app_name = 'preprint'

urlpatterns = [
	# url(r'^$', views.one, name='one' ),
	# url(r'^$', views.one, name='one', app_name = 'devapp' ),
	
	url(r'^$/', include('preprint.urls.utility')),
	url(r'^preprint/', include('preprint.urls.utility')),


]









