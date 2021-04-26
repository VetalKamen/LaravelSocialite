Deploy guide:

1. Execute 'composer install' from the root directory.
2. Execute 'npm install' and then 'npm run dev'.
3. Copy .env.example to .env and add your local DB_CONNECTION, DB_HOST, DB_PORT, DB_NAME(don't forget to create empty db with this name) etc., then add following keys/values for the OAuth:
 
GITHUB_CLIENT_ID='value'

GITHUB_CLIENT_SECRET='value'

GITHUB_CALLBACK_URL='value'

Where to get the 'value' parameters mentioned above: https://docs.github.com/en/developers/apps/creating-an-oauth-app

4. Execute 'php artisan migrate'
6. Execute 'php artisan db:seed' - needed to generate some books and authors for the App.
7. Execute 'php artisan:serve' and follow the link that you get + '/register' or '/login' in the url
   Example:  http://127.0.0.1:8000/login



 
