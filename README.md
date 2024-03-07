
# Evento - Event Management Platform

Evento is an innovative platform developed by the company "Evento" for managing and booking event tickets. It aims to provide an optimal user experience for participants, organizers, and administrators.

## Project Overview

Evento allows users to discover, book, and generate tickets for a variety of events. Organizers can create and manage their own events through the platform.

## Features

### User Features

- Register on the platform by providing name, email, and password.
- Login to the account using credentials.
- Reset password via email.
- View list of available events with pagination.
- Filter events by category.
- Search events by title.
- View event details including description, date, location, and available seats.
- Reserve a seat for an event.
- Generate a ticket once reservation is confirmed.

### Organizer Features

- Create a new event specifying title, description, date, location, category, and available seats.
- Manage own events.
- Access statistics on event bookings.
- Choose between automatic reservation acceptance or manual validation.

### Administrator Features

- Manage users by restricting access.
- Manage event categories by adding, modifying, or deleting categories.
- Validate events created by organizers before publication.
- Access statistics.

## Setup Instructions

1. Clone the repository.
   ```bash
   git clone https://github.com/Youcode-Classe-E-2023-2024/Hafsa_Moatassim_Billah_Evento.git
2. Set up the database and configure the `.env` file.
3. Run migrations and seed data using `php artisan migrate --seed`.
4. Start the server using `php artisan serve`.

## Technologies Used

- Laravel
- PostgreSQL
- HTML/CSS
- JavaScript
