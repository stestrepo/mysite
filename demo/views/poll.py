from django.http import HttpResponse
from demo.models import Question
from django.template import loader

def poll_fetch(request):

    template = loader.get_template('demo/all_poll.html')

    context = {
        # 'latest_question_list': latest_question_list,
        # 'detail':detail,
    }
    return HttpResponse(template.render(context, request))