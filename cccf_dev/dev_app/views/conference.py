from django.http import HttpResponse
from dev_app.models import Question
from django.template import loader

def conference_fetch(request):

    template = loader.get_template('dev_app/all_poll.html')

    context = {
        # 'latest_question_list': latest_question_list,
        # 'detail':detail,
    }
    return HttpResponse(template.render(context, request))