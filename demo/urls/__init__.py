from django.conf.urls import url

from demo import views

urlpatterns = [
    url(r'^$', views.index, name='index'),
    # url(r'^(?P<group_id>[^/]+)/meeting','gnowsys_ndf.ndf.views.meeting.dashb', name='meeting'),



]