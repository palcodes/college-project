from django.shortcuts import render
from django.http import HttpResponse
from blogs.models import news

# Create your views here.
def index(request):
    return render(request, 'mainweb/index.html')

def about(request):
    return render(request, 'mainweb/abtus.html')

def news(request):
    lnews = news.objects.all()
    return render(request, 'mainweb/news.html', {'news': news})
