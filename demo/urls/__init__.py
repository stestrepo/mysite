from django.conf.urls import include,url
from demo import views
from . import views

app_name = 'doodle_cc'

urlpatterns = [
    url(r'^ls/', views.index, name='index'),
    # url(r'^$', views.index, name='second'),
    # url(r'^$', views.second, name='second'),
    # (r'^data[\/]?', include('gnowsys_ndf.ndf.urls.adminDashboard')),
    # url(r'^sec',views.second, name='second'),
    # url(r'^$/', include('demo.urls')),

    # ex: /polls/
    url(r'^$', views.index, name='index'),
    # ex: /polls/5/
    url(r'^(?P<question_id>[0-9]+)/$', views.detail, name='detail'),
    # ex: /polls/5/results/
    url(r'^(?P<question_id>[0-9]+)/results/$', views.results, name='results'),
    # ex: /polls/5/vote/
    url(r'^(?P<question_id>[0-9]+)/vote/$', views.vote, name='vote'),

    

    # ex: /polls/
    # url(r'^$', views.index, name='index'),
    # ex: /polls/5/
    url(r'^(?P<question_id>[0-9]+)/$', views.detail, name='detail'),
    # url(r'^blob/(?P<question_id>[0-9]+)/$', views.detail, name='detail'),

    # ex: /polls/5/results/
    url(r'^(?P<question_id>[0-9]+)/results/$', views.results, name='results'),
    # ex: /polls/5/vote/
    url(r'^(?P<question_id>[0-9]+)/vote/$', views.vote, name='vote'),
    # url(r'^sec/',include('urls.second')),
    url(r'^pl/', include('demo.urls.second')),
    
    url(r'^userlogin/', include('demo.urls.userlogin')),
]
# call as "polls:index"




# from mysite.views import hello, my_homepage_view

# urlpatterns = [
#     url(r'^$', my_homepage_view),
#     # ... 
    # ]

    