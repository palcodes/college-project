from django.db import models

# Create your models here.
class teachers(models.Model):
    name = models.CharField(max_length=200)
    dpt = models.CharField(max_length=200)
    status = models.CharField(max_length=200)

    def __str__(self):
        return self.name