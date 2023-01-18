# Bioteca

Bioteca is a web application to keep track of biological collections, focused on Mexico with data from CONABIO's enciclovida with all the species located in the Mexican territory. It was developed using the Laravel framework as the backend and VueJS 3 with InertiaJS as the frontend. It supports MySQL, MariaDB and PostgreSQL databases.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Note](#note)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

- PHP 7.4 or higher
- Node.js and npm (for the frontend)
- MySQL, MariaDB or PostgreSQL
- Composer

## Installation

1. Clone the repository to your local machine:
```
git clone https://github.com/rebjai/bioteca.git
```

2. Navigate to the project directory:
```
cd bioteca
```


3. Install the dependencies:
```
composer install
npm install
```

4. Create a copy of the .env.example file and rename it to .env:
```
cp .env.example .env
```

5. Configure the database settings in the .env file to match your local MySQL, MariaDB or PostgreSQL setup.

6. Generate an application key:
```
php artisan key:generate
```

7. Run the migrations and seeders:
```
php artisan migrate:refresh --seed
```

This will create the tables of taxonomical categories and the localities and also seed test data if the environment is not in production.

8. Build the frontend
```sh
npm run dev
```

9. Start the development server:
```sh
php artisan serve
```

The application should now be accessible at `http://localhost:8000`.

## Usage

The usage of the application is simple and intuitive, you can use the navigation bar at the top of the page to access different sections of the application.

## Note

The enviroment variable "USE_SSL" makes all calls https if is set to true and the enviroment is in production.

In case you want to build the project for production you can use:

```
npm run build
```


## Contributing

If you want to contribute to the development of Bioteca, please feel free to submit a pull request.

## License

Bioteca is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
