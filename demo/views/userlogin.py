from django.http import HttpResponse
from demo.models import Question
from django.template import loader

def userlogin(request):
    # print "reached uptill"
    # return HttpResponse("Hello, world. 2ns part ppppppppzzzzzzzppppppppppp :D.")

    latest_question_list = Question.objects.order_by('-pub_date')[:5]
    template = loader.get_template('demo/index.html')
    # template = loader.get_template('demo/index.php')
    detail="ls/"
    print "op"

    context = {
        'latest_question_list': latest_question_list,
        'detail':detail,
    }
    return HttpResponse(template.render(context, request))


    



def login(request):
    template = loader.get_template('demo/login_page.html')
    context = {
    }
    return HttpResponse(template.render(context, request))

def login_user(request):
    print request
    print request.method
    print request.POST
    print request.GET

    username = request.POST.get('username')
    password = request.POST.get('password')
    print username,password

    template = loader.get_template('demo/dashboard.html')
    context = {
        'username':username,
        'password':password,
    }
    return HttpResponse(template.render(context, request))



def invite_people_poll(request):
    print request,request.POST,request.GET
    template = loader.get_template('demo/poll.html')
    context = {
        'poll':'poll34',
    }
    return HttpResponse(template.render(context, request))





def poll_options(request):
    print request
    template = loader.get_template('demo/poll.html')
    context = {
        # 'username':username,
        # 'password':password,
        'poll':'poll12', 
    }
    return HttpResponse(template.render(context, request))







def invite_people_conf(request):
    print request
    template = loader.get_template('demo/conference.html')
    context = {
        # 'username':username,
        # 'password':password,
        'poll':'poll12', 
    }
    return HttpResponse(template.render(context, request))











def create_group(request):
    print request
    template = loader.get_template('demo/group.html')
    context = {
        # 'username':username,
        # 'password':password,
        'poll':'poll12', 
    }
    return HttpResponse(template.render(context, request))




