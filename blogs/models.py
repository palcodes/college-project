from django.db import models
from django.utils import timezone

# Create your models here.
class Posts(models.Model):
    posts_title = models.CharField(max_length=500)
    posts_content = models.TextField()
    posts_date = models.DateTimeField(default=timezone.now)

class News(models.Model):
    news_title = models.CharField(max_length=500)
    news_content = models.TextField()
    news_date = models.DateTimeField(default=timezone.now)

    def __str__(self):
        return self.news_content
