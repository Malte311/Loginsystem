# :closed_lock_with_key: Loginsystem

[![GitHub license](https://img.shields.io/github/license/Malte311/Loginsystem)](https://github.com/Malte311/Loginsystem/blob/master/LICENSE)

> This repository contains a simple login system template.

## :whale: Installation (via Docker)
> Coming soon.

## :key: Usage

In order to manage user accounts, one can use the `src/userAdministration.php` file. This file allows the admin to add new users, change passwords of users, delete users or list all existing users. It can be used as follows:

- `php userAdministration.php add` Asks for a username and password and adds a new user to the system.
- `php userAdministration.php edit` Asks for a user id and allows to change the password or to generate an authentication code for that user.
- `php userAdministration.php delete` Asks for a user id and deletes that user.
- `php userAdministration.php list` Lists all existing usernames with their corresponding ids.

Currently, there is no support for the users to change their password by themselves. There is no interface for user administration, only a simple console script in order to keep things simple.

In order to adjust the name of the application, simply replace the term 'Loginsystem' in the `.html` files.

Some countries, like Germany, require special legal notice on websites, like _Impressum_ and _Datenschutz_ in Germany. If these are not necessary, simply remove them from the page footer in the `.html` files.

## :page_facing_up: License

This project is licensed under the [MIT License](https://github.com/Malte311/Loginsystem/blob/master/LICENSE).
