from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name="index"),
    path('about', views.about, name="about"),
    path('news', views.news, name="news"),
    path('contact', views.contact, name="contact"),
    path('computer', views.computer, name='computer'),
    path('gymkhana', views.gymkhana, name='gymkhana'),
    path('library', views.library, name='library')
]
