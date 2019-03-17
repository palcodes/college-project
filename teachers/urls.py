from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name='teachers'),
    path('addteachers/', views.addteachers, name='add'),
]

