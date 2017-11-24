from django.http import HttpResponse
from demo.models import Question
from django.template import loader


# def index(request):
#     return HttpResponse("Hello, world. You're at the polls index.")

def second(request):
    return HttpResponse("Hello, world. 2ns part.")

def detail(request, question_id):
    return HttpResponse("You're looking at question %s." % question_id)

def results(request, question_id):
    response = "You're looking at the results of question %s."
    return HttpResponse(response % question_id)

def vote(request, question_id):
    return HttpResponse("You're voting on question %s." % question_id)


# def index(request):
#     latest_question_list = Question.objects.order_by('-pub_date')[:5]
#     output = ', '.join([q.question_text for q in latest_question_list])
#     return HttpResponse(output)  
#     # this displays all the questions in the db one after other
# 	# Leave the rest of the views (detail, results, vote) unchanged



def index(request):
    latest_question_list = Question.objects.order_by('-pub_date')[:5]
    template = loader.get_template('demo/index.html')
    # template = loader.get_template('demo/index.php')
    detail="/ls"

    print "op"

    context = {
        'latest_question_list': latest_question_list,
        'detail':detail,
    }
    return HttpResponse(template.render(context, request))
    # to load templates



# def detail(request, question_id):
#     try:
#         question = Question.objects.get(pk=question_id)
#     except Question.DoesNotExist:
#         raise Http404("Question does not exist")
#     return render(request, 'demo/details.html', {'ques


def results(request, question_id):
    question = get_object_or_404(Question, pk=question_id)
    return render(request, 'polls/results.html', {'question': question})


