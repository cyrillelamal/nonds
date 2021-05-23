# nonds

This is a shell script removing OS X stuff.

You know, these .DS_Store files after you've searched for a file on your Windows using the OS X remote.

## How to use

Run the `index.php` pointing to a directory, e.g. using a PHP interpreter or via shebang.

This will remove .DS_store in the `./Music` directory and **all** nested directories.

```
php index.php ./Music
```

This will remove .DS_store in the current (`.`) directory and **all** nested directories.

```
php index.php
```
