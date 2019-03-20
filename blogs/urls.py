from django.urls import path
from . import views

urlpatterns = [
    path('addposts/', views.addposts, name="addposts"),
    path('addnews/', views.addnews, name="addnews")
]