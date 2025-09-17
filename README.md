Endpoints and parameters
1. Endpoint: https://api.telegram.org/bot
2. Parameter
  Token = Obtained from BotFather
  Text = Message content
  Chat_id = Telegram user chat id

Telegram Bot Registration
To get a Telegram Bot account, chat with Bot Father to request the API code. The steps are as follows:
  1. Login to Telegram on your smartphone or on Telegram web
  2. Open the chat list, then search for BotFather
  3. Chat with Bot Father
  4. To see a list of commands send /help

Test sending and receiving messages
After getting the API code, test the API code with the following URL format
  1. Test send
     https://api.telegram.org/bot{TOKEN}/sendMessage?chat_id={chat_id}&text={message}
  2. Receive messages
     https://api.telegram.org/bot{TOKEN}/getUpdates 
