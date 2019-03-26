from django.contrib import admin
from .models import Posts, News

# Register your models here.
admin.site.register(Posts)
admin.site.register(News)

admin.site.site_header = 'GPT Admin Panel'