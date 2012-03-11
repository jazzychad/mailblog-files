# mailblog-files

Files used in jazzychad's mailblog tutorial

## bucket_policy.txt

replace 'mailblog.domain.tld' with your blog's domain

Where does it go? Paste it into your s3 bucket permission policy.

## do_blog.sh

replace /home/chad/blog with the full path to your blog directory

Where does it go? Copy it to the root of your home directory.

## hook.php

replace /home/chad/blog/_posts with full path to your blog/_posts directory

Where does it go? Copy to your /var/www directory somewhere it can be
accessed by Mailgun (or other email provider) webhook service.