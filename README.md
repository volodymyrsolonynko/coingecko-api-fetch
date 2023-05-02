This project is to develop a Laravel/Lumen artisan command that fetches data from the Coingecko API endpoint and store the data in a database.

# Lumen PHP Framework

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

# Instructions Guide

## Prerequisites 
- PHP >=8.0, Composer, MySQL

## How to install the project
- Install necessary packages using `composer update` in terminal.
- Make a new copy `.env.example` and rename it to `.env`
- In `.env` file, configure MySQL settings in `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- Create a MySQL database configured in `DB_DATABASE` (e.g, coingecko)
- Create a `coins` table schema by running `php artisan migrate` command in terminal. 

## How to run the command
- Run `php artisan fetch:coin-data` in terminal. 

It will fetch data from Coingecko API endpoint and store the data in the `coins` table. Once the command is finished to execute, the message "Data fetched successfully and stored in database!" will be displayed in terminal. Finally, You can check data stored in `coins` table.