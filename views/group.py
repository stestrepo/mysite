from django.http import HttpResponse
from dev_app.models import Group
from django.template import loader
import cccf_dev.settings
from django.core.mail import send_mail

def group_fetch(request):

    group_list = Group.objects.all()
    print group_list

    grp_d={}
    for v in group_list:
    	name = v.grp_name
    	email = v.grp_email
    	str1 = v.grp_email
    	str1 = str1.replace('u','')
    	str1 = str1.replace("'","")
    	str1 = str1.replace("[","")
    	str1 = str1.replace("]","")
    	str1 = str1.replace(" ","")
    	print str1
    	str2=str1.split(',')

    	grp_d[name]=str2
        print v.grp_name
        print v.grp_email
        
    # print Group.lists.all()
    # lists = topic.lists.all() # returns List object instances QuerySet
    # for a in lists:
    #     a.activites.all()

    template = loader.get_template('dev_app/all_group.html')
    context = {
        'group_list':group_list, 
        'grp_d':grp_d, 
        'image_path':request.session.get('image_path', False),
        'username':request.session.get('username', False),
        
    }
    return HttpResponse(template.render(context, request))
    