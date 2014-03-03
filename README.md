# ‘FAQ’ application

Allow you to easily create a FAQ for your website.

## Requirements

* The FAQ app runs on Novius OS Chiba 2.
* ‘local/applications’ directory must be writeable.

## Installation

* [How to install a Novius OS application](http://community.novius-os.org/how-to-install-a-nos-app.html)

## Documentation & support

All you need to know when editing the main config file of the FAQ application
* key "use_css" set to true by default : include a small css file to render your FAQ correctly
* key "ques_order" can be used to define how Q&As are orderered :
** if set to false, then the enhancer will allow you to choose alphabetical order
** if set to a string, this will be considered as a property of the Model_Question
** if set to an array, first item will be considered as a property of the Model_Question, second one as the sort direction