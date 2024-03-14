# Pico Assignment - User Management

Follow these steps to set up this project:

1. **Clone the Project:**

    ```bash
    git clone https://github.com/nyz83/user-management.git
    ```

2. **Navigate to the Project Directory:**

    ```bash
    cd user-management
    ```

3. **Copy Environment Configuration:**

    ```bash
    cp .env.example .env
    ```

4. **Install PHP Dependencies:**

    ```bash
    composer install
    ```

5. **Install JavaScript Dependencies:**

    ```bash
    npm install
    ```

6. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

7. **Database Setup:**

    Configure your database connection details in the `.env` file.

    ```bash
    php artisan migrate
    ```

    Seed the database

    ```bash
    php artisan db:seed
    ```

8. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

9. **Compile Assets:**

    ```bash
    npm run dev
    ```

10. **Demo Login:**

    Use the following credentials to log in to the demo account:

    - **Email:** <admin@gmail.com>
    - **Password:** admin123
