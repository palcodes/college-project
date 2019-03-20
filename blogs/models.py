from django.db import models

# Create your models here.
class posts(models.Model):
    posts_title = models.CharField(max_length=500)
    posts_content = models.TextField()
    posts_date = models.DateTimeField(auto_now=True)

class news(models.Model):
    news_title = models.CharField(max_length=500)
    news_content = models.TextField()
    news_date = models.DateTimeField(auto_now=True)
