# Mugdi Investments LLC

The official corporate website and digital service platform for Mugdi Investments LLC, developed and maintained by Irfan Dossani.

## Business areas

- Corporate gifts and live supplier catalogue
- Event management and brand experiences
- Full-stack websites, custom ERP systems and business applications
- Custom AI assistants, voice agents and workflow automation

## Application

The website is built with Laravel, PHP, Blade, JavaScript and CSS. It includes:

- A responsive public website
- Live corporate-gift catalogue integration
- Gemini-powered customer assistance
- Contact and enquiry workflows
- Dedicated IT solutions and AI agents pages
- Mugdi-branded original media assets

## Local development

Requirements:

- PHP 8.3 or newer
- Composer
- Node.js and npm

Install the project:

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Configure the database, mail delivery, Gemini integration and vendor catalogue credentials in `.env`. Credentials must never be committed to the repository.

## Testing

```bash
php artisan test
```

## Deployment

Production is deployed through the Git repository in Plesk. After pulling the latest release, clear and rebuild Laravel's caches:

```bash
php artisan optimize:clear
php artisan optimize
```

## Ownership

Copyright Mugdi Investments LLC. All rights reserved.

Developed by [Irfan Dossani](https://www.irfandossani.online).
