# GameVault - Retro API Browser

A retro-themed full-stack web application built with a Laravel 8 REST API backend
and a Vue 3 frontend. Browse, search, and filter a collection of video games by
genre and platform, and click any game to view its full details and cover image.

**Authors:** Ajay Chakaravarthy Antony Raj & Daljit  
**Course:** Multimedia and the Internet / Multimedia Authoring 4  
**Semester:** Winter Semester 4

---

## Project Structure

```
Assignment/
├── backend/      ← Laravel 8 REST API
├── frontend/     ← Vue 
└── README.md
```

---

## Backend Setup (Laravel 8)

> You must have **PHP**, **Composer**, and **MySQL** installed.

### 1. Navigate to the backend folder

```bash
cd backend
```

### 2. Install Laravel dependencies

```bash
composer install
```

### 3. Copy the environment file

```bash
cp .env.example .env
```

### 4. Update your database credentials in `.env`

```
DB_DATABASE=videogames
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Run migrations and seed the database

```bash
php artisan migrate:fresh --seed
```

This creates all tables and seeds **8 genres** and **20 video games**.

### 7. Start the Laravel development server

```bash
php artisan serve
```

The API will be live at: `http://localhost:8000/api`

---

## API Endpoints

### Video Games

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/video-games` | List all video games |
| GET | `/api/video-games?search=zelda` | Search games by title |
| GET | `/api/video-games?genre_id=2` | Filter games by genre |
| GET | `/api/video-games?platform=PS5` | Filter games by platform |
| POST | `/api/video-games` | Create a new video game |
| GET | `/api/video-games/{id}` | Get a single video game |
| PATCH | `/api/video-games/{id}` | Update a video game |
| DELETE | `/api/video-games/{id}` | Delete a video game |

### Genres

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/genres` | List all genres |
| POST | `/api/genres` | Create a new genre |
| GET | `/api/genres/{id}` | Get a single genre |
| PATCH | `/api/genres/{id}` | Update a genre |
| DELETE | `/api/genres/{id}` | Delete a genre |

---

## Frontend Setup (Vue 3)

> You must have **SASS** installed globally. Run `npm install -g sass` if you do not.

### 1. Navigate to the frontend folder

```bash
cd frontend
```

### 2. Compile SASS to CSS

```bash
sass sass/main.scss css/main.css --watch
```

Leave this running. It will auto-recompile on every save.

### 3. Open in browser

Since the frontend is inside XAMPP's `htdocs`, open it directly at:

```
http://localhost/HW3-Assignment/frontend/index.html
```

> Make sure both **Apache** (XAMPP) and **php artisan serve** (backend) are running at the same time.

---

## Frontend Features

- Retro arcade design with CRT scanline effect (pure CSS)
- Sticky navigation bar with burger menu on mobile
- Click the **GAME VAULT** header to reset all filters and return to the full list
- Search games by title using the search bar
- Filter games by genre using the dropdown
- Click any game card to view its full details in a side panel
- Cover images displayed in the detail panel for available games
- GSAP animations on page load, card reveal, and detail panel slide-in
- Fully responsive from mobile to desktop (768px breakpoint)

---

## Technologies Used

| Technology | Purpose |
|---|---|
| Laravel 8 | REST API backend |
| PHP / MySQL | Server-side language and database |
| Vue 3 (ESM Browser) | Frontend framework via importmap |
| GSAP 3 | Animations and transitions |
| SASS (7-1 pattern) | CSS preprocessing |
| XAMPP | Local Apache + MySQL server |
