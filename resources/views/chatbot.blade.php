<!-- resources/views/chatbot.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
</head>
<body>
    <form action="/chatbot" method="post">
        <textarea name="prompt" required></textarea>
        <input type="hidden" name="chatbot" value="gpt-3.0-turbo"> 
        <button type="submit">Send</button>
    </form>
    
</body>
</html>
