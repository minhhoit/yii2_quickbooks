# yii2_quickbooks
This extension provides implementation of Quickbooks Online V3.0

==========================================================================================
Yii2-Quickbooks - An app for communicating with Quickbooks via the Quickbooks API
==========================================================================================

This project was forked from [yii2-quickbooks](https://github.com/minhhoit/yii2_quickbooks), originally developed by [andrew](http://vungtauict.com), with contributions from [minh.ho](https://github.com/minhhoit).

yii2-quickbooks handles communicating with the Quickbooks API. Using
this app, you can perform CRUD operations on any of the object classes
supported by both Quickbooks Desktop and Quickbooks Online.

gd-quickbooks knows very little about the actual API schema.

Installation
============

1. Add 'api' to INSTALLED_APPS
2. Include ``api.urls`` from main urls files.
3. If you'd like access to the quickbooks token from templates, add
   ``api.context_processors.token`` to TEMPLATE_CONTEXT_PROCESSORS.
4. Add a settings dictionary. OAUTH_CALLABACK_URL can be a string or
   callable. If it's a callable, it'll be passed the request context.:

```
       QUICKBOOKS = {
            'CONSUMER_KEY': 'consumer_key_from_quickbooks',
            'CONSUMER_SECRET': 'consumer_secret_from_quickbooks',
            'OAUTH_CALLBACK_URL': string_or_callable,
            'ACCESS_COMPLETE_URL': 'string'
        }
```