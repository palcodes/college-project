from django.contrib import admin
from .models import posts, news

# Register your models here.
admin.site.register(posts)
admin.site.register(news)