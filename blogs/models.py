from django.db import models

# Create your models here.
class posts(models.Model):
    title = models.CharField(max_length=500)
    content = models.TextField()
    date = models.DateTimeField(auto_now=True)

class news(models.Model):
    title = models.CharField(max_length=500)
    content = models.TextField()
    date = models.DateTimeField(auto_now=True)
