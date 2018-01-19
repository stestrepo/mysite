"""cccf_dev URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.conf.urls import url,include
admin.autodiscover()

urlpatterns = [
    url(r'^admin/', admin.site.urls),

    url(r'^dev/', include('dev_app.urls',namespace='dev_app',app_name='dev_app')),
    url(r'^dj/dev/', include('dev_app.urls',namespace='dev_app',app_name='dev_app')),

    url(r'^pre/', include('preprint.urls',namespace='preprint',app_name='preprint')),
    url(r'^dj/pre/', include('preprint.urls',namespace='preprint',app_name='preprint')),

]
