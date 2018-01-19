from django.conf.urls import include,url
from cccf_dev import settings
from . import views
from preprint import views
# from preprint.views import userlogin
from preprint.views import userlogin,paper,report,pending,prep

urlpatterns = [

    url(r'^[0-9]+$', views.userlogin.login , name='login'),
    url(r'^login_user', views.userlogin.login_user , name='login_user'),
    
    url(r'^apply/(?P<pid>\d*)', views.prep.apply , name='apply'),
    url(r'^savereq/(?P<pid>\d*)', views.prep.savereq , name='savereq'),


    url(r'^paper_fetch', views.paper.paper_fetch , name='paper_fetch'),
    url(r'^report_fetch', views.report.report_fetch , name='report_fetch'),
    url(r'^pending_fetch', views.pending.pending_fetch , name='pending_fetch'),


#     # * - 0 or more parameters
#     # + - 1 or more parameters
#     # url(r'^[0-9]/[a-zA-Z0-9]+$', views.poll_collect.poll_render , name='poll_render'),
#     url(r'^ques/(?P<qid>[0-9]+)', views.poll.quesdetails , name='quesdetails' ),
#     url(r'^conference', views.conference.conference_fetch , name='conference_fetch' ),
#     url(r'^group', views.group.group_fetch , name='group_fetch' ),  
#     # url(r'^[a-zA-Z0-9]+', views.poll_collect.poll_render , name='poll_render' ),
#     # url(r'^(?P<tid>\d+)/[a-zA-Z0-9]+', views.poll_collect.poll_render , name='poll_render' ),
#     url(r'^(?P<tid>[a-zA-Z0-9]+)', views.poll_collect.poll_render , name='poll_render' ),

]
