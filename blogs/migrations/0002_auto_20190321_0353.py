# Generated by Django 2.1.5 on 2019-03-20 22:23

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('blogs', '0001_initial'),
    ]

    operations = [
        migrations.RenameField(
            model_name='news',
            old_name='content',
            new_name='news_content',
        ),
        migrations.RenameField(
            model_name='news',
            old_name='date',
            new_name='news_date',
        ),
        migrations.RenameField(
            model_name='news',
            old_name='title',
            new_name='news_title',
        ),
        migrations.RenameField(
            model_name='posts',
            old_name='content',
            new_name='posts_content',
        ),
        migrations.RenameField(
            model_name='posts',
            old_name='date',
            new_name='posts_date',
        ),
        migrations.RenameField(
            model_name='posts',
            old_name='title',
            new_name='posts_title',
        ),
    ]