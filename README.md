# CKBox Laravel example

This repository contains an example of a Laravel application that integrates CKBox and covers the popular usage scenarios.

The full guide describing the code of this example can be found [in the CKBox Documentation](https://ckeditor.com/docs/ckbox/latest/guides/integrations/frameworks/laravel.html).

## Prerequisites
To run this example you will need access credentials required to connect to the CKBox service that you can obtain in the [CKEditor Ecosystem dashboard](https://dashboard.ckeditor.com/login).

## Running the application

1. Clone this repository.
2. Enter the project directory.
3. Create `.env` file using the `.env.example` template.
4. Add access credentials to the created `.env` file.

   ```
   # .env
   CKBOX_ENVIRONMENT_ID=REPLACE-WITH-ENVIRONMENT-ID
   CKBOX_ACCESS_KEY=REPLACE-WITH-ACCESS-KEY
   ```

5. Install required dependencies.

   ```bash
   composer install
   ```

6. Run the application.

   ```bash
   php artisan serve
   ```

7. Open [http://127.0.0.1:8000](http://127.0.0.1:8000).

