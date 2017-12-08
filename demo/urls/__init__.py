from django.conf.urls import include,url
from demo import views
from . import views

app_name = 'doodle_cc'

urlpatterns = [
    url(r'^ls/', views.index, name='index'),
   
    url(r'^userlogin/', include('demo.urls.userlogin')),
]












# call as "polls:index"




# from mysite.views import hello, my_homepage_view

# urlpatterns = [
#     url(r'^$', my_homepage_view),
#     # ... 
    # ]

    