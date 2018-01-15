from django.shortcuts import render
from django.template import loader
from django.http import HttpResponse


def one(request):
	print "first page land"
	return HttpResponse("Hello, world. You're at the polls index.")


