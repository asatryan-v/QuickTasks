# QuickTasks - Task Manager

**QuickTasks** is a simple task management app built with **Laravel**, **Livewire**, and **Tailwind CSS**. It allows users to add, complete, and delete tasks with a real-time interface.

---

## 🚀 Features

- ✅ Add new tasks
- 🔁 Toggle completion status (with "Done" label)
- ❌ Delete tasks
- ⚡ Real-time updates with Livewire
- 💅 Responsive UI with Tailwind CSS

---

## 🧰 Tech Stack

- **Backend:** Laravel
- **Frontend:** Livewire, Tailwind CSS
- **Database:** MySQL

---

## 🛠️ Getting Started

You can either clone a repository or start fresh:

### Option 1: Clone Existing Repository

```bash
git clone https://github.com/yourusername/QuickTasks.git
cd QuickTasks
```

---

### Option 2: Set Up from Scratch

```bash
mkdir QuickTasks
cd QuickTasks
composer create-project --prefer-dist laravel/laravel .
composer require livewire/livewire
```

#### Tailwind CSS Installation

```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

Update your `tailwind.config.js` and CSS config accordingly.

---

## ⚙️ Setup Instructions

### 1. Install PHP Dependencies

```bash
composer install
```

### 2. Set Up Environment File

```bash
cp .env.example .env
```

Then update your `.env` file:

```env
DB_DATABASE=quicktasks
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Run Migrations

```bash
php artisan migrate
```

### 4. Install Node & Frontend Dependencies

> Make sure you have Node.js and npm installed.

```bash
npm install
```

### 5. Compile Frontend Assets

```bash
npm run dev
```

### 6. Serve the Application

```bash
php artisan serve
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🧪 Usage

- Add a task using the input field and "Add" button.
- Mark it done/undone with the ✔️ button (a "Done" label appears).
- Delete a task with the ❌ button.
- All changes update instantly via Livewire.

---

## 📄 License

This project is open-source and available under the MIT License.

---

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/)
- [Livewire](https://laravel-livewire.com/)
- [Tailwind CSS](https://tailwindcss.com/)
