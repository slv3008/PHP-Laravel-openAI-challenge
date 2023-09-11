# OpenAI Chatbot

This project is a technical test in PHP and Laravel Lumen: complete and correct code and consume the OpenAI API to generate chatGPT responses.

## Project Structure

The project structure is as follows:

```
openai-chatbot
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── ChatbotController.php
│   │   └── Middleware
│   │       └── VerifyCsrfToken.php
│   ├── Providers
│   │   └── AppServiceProvider.php
│   └── openai
│       └── OpenAI.php
├── bootstrap
│   └── app.php
├── config
│   └── app.php
├── database
│   └── migrations
│       └── 2022_01_01_000000_create_chatbot_table.php
├── public
│   └── index.php
├── resources
│   └── views
│       └── chatbot.blade.php
├── routes
│   └── web.php
├── storage
│   ├── app
│   ├── framework
│   │   ├── cache
│   │   ├── sessions
│   │   └── views
│   └── logs
├── tests
│   └── ChatbotTest.php
├── vendor
├── .env
├── .env.example
├── .gitignore
├── composer.json
├── composer.lock
├── phpunit.xml
└── README.md
```

## Instructions

To complete the challenge, follow the steps below:

1. Clone the repository to your local machine.
2. Install the project dependencies by running the `composer install` command.
3. Create an OpenAI account and get an API key.
4. Copy the `.env.example` file to `.env` and add your API key to the `OPENAI_API_KEY` variable.
5. Run the `php -S localhost:8000 -t public` command to start the local server.
6. Open your browser and visit the URL `http://localhost:8000`.
7. Fill in the code in the `ChatbotController.php` file to make the chatbot work correctly.
8. Run the tests with the `phpunit` command.
9. When you have completed the challenge, upload your changes to your own repository and send the repository URL.

Good luck!