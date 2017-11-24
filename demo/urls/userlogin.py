from django.conf.urls import include,url
from . import views
from demo import views

urlpatterns = [
    url(r'^$/', demo.views.userlogin, name='userlogin'),
]
