from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
    HttpResponse("<h1>Hey this is the home page</h1>")

def about(request):
    HttpResponse("<h1>Hey this is the about page</h1>")

def comp(request):
    HttpResponse("<h1>Hey this is the comps page</h1>")