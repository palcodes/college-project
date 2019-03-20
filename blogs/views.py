from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def addposts(request):
    return HttpResponse("<h1>Add Posts</h1>")

def addnews(request):
    return HttpResponse("<h1>Add News<h1>")