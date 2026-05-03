# GhostBoard - clean & distraction-free WordPress dashboard

[![WordPress-Version](https://img.shields.io/badge/WordPress-6.4+-blue.svg)](https://wordpress.org/plugins/ghostboard/)
[![PHP-Version](https://img.shields.io/badge/PHP-7.4+-777bb4.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-GPLv2-green.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

**GhostBoard** is a lightweight, high-performance WordPress plugin designed to completely declutter your admin area. It silences all promotional banners, update nags, and intrusive notices with a single activation.

---

## Why GhostBoard?

Modern plugins often clutter the dashboard with "Pro" upsells, discount alerts, and messy notifications that distract users and clients. GhostBoard was created to:
* **Provide a clean experience** for clients after site delivery.
* **Improve workflow** by eliminating visual noise.
* **Maintain performance** by preventing unnecessary elements from rendering in the backend.

## Key Features

- **Silence all notices:** automatically hides core, plugin, and theme admin notices.
- **Disable update nags:** removes persistent update alerts for WP core, plugins, and themes.
- **Sidebar cleanup:** removes update bubbles and counters from the admin menu.
- **Zero configuration:** plug-and-play functionality. No complex settings required.
- **Developer friendly:** built with Object-Oriented Programming (OOP) following strict WordPress Coding Standards.

## Installation

1. Download the latest [release](https://github.com/pasqualeviglianesi/GhostBoard/releases).
2. Upload the `ghostboard` folder to your `/wp-content/plugins/` directory.
3. Activate the plugin via the WordPress 'Plugins' menu.
4. *Alternatively:* Search for "GhostBoard" directly in the official WordPress Plugin Repository.

## Under the hood

This project is built with a focus on performance and clean architecture:
* **WordPress Hooks:** Advanced use of `add_action` and `add_filter` with high-priority execution to intercept notices before rendering.
* **PHP OOP:** Code organized into classes to prevent namespace conflicts and ensure maintainability.
* **Security:** Strict implementation of `ABSPATH` checks to prevent direct file access.
* **Admin UI Customization:** Strategic and lightweight CSS injection to refine the backend user experience without bloat.

---

## License

Distributed under the GPLv2 License. See `LICENSE` for more information.

---
Developed by [Pasquale Viglianesi](https://github.com/pasqualeviglianesi)
