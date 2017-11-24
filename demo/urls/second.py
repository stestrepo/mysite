from django.conf.urls import url

from demo import views

urlpatterns = [
    # url(r'^$', views.index, name='index'),
    # url(r'^$', views.index, name='second'),
    url(r'^$', views.second, name='second'),
    # (r'^data[\/]?', include('gnowsys_ndf.ndf.urls.adminDashboard')),
    # url(r'^(?P<group_id>[^/]+)/meeting','gnowsys_ndf.ndf.views.meeting.dashb', name='meeting'),
    # url(r'^/create_group/', GroupCreateEditHandler.as_view(), {'action': 'create'}, name='create_group'),


]