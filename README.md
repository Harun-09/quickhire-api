# QuickHire API

Laravel REST API for the QuickHire job board project.

## Features

- Jobs CRUD endpoints (list, details, create, delete)
- Applications submission endpoint
- Basic input validation (required fields, email, URL)
- MySQL persistence for jobs and applications

## Stack

- PHP 8.2+
- Laravel 12
- MySQL

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Update `.env` database values, then run:

```bash
php artisan migrate
php artisan db:seed --class=JobSeeder
php artisan serve
```

API base URL:

- `http://localhost:8000/api`

## Main Endpoints

- `GET /api/jobs`
- `GET /api/jobs/{id}`
- `POST /api/jobs`
- `DELETE /api/jobs/{id}`
- `POST /api/applications`

## Sample Payloads

Create Job (`POST /api/jobs`)

```json
{
  "title": "Frontend Developer",
  "company": "Acme",
  "location": "Dhaka, Bangladesh",
  "category": "Engineering",
  "type": "Full-time",
  "salary_range": "$1200-$1800",
  "description": "Build and maintain UI features"
}
```

Create Application (`POST /api/applications`)

```json
{
  "job_id": 1,
  "full_name": "John Doe",
  "email": "john@example.com",
  "resume_url": "https://example.com/resume.pdf",
  "cover_letter": "I am interested in this role"
}
```

## Validation Notes

- `email` must be valid format
- `resume_url` must be a valid URL
- `job_id` must exist in `jobs` table

## Notes

- No authentication is applied yet for admin endpoints.
- This project is intended for assessment/demo scope.
