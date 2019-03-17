from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
    return HttpResponse("<h1>Hey Everyone!</h1>")

def addteachers(request):
    return HttpResponse("<h1>Hey Add teachers<h1>")
    