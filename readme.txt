=== GhostBoard ===
Contributors: pasqualeviglianesi
Tags: dashboard, clean, notices, updates, minimal
Requires at least: 6.4
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Clean your WordPress dashboard by hiding all admin notices, update alerts, and nag screens for a distraction-free workflow.

== Description ==
GhostBoard is a lightweight plugin designed to declutter your WordPress admin area. It silences all annoying update nags, promotional banners, and admin notices with a single activation.

It is the perfect tool for developers who want to deliver a \"clean\" site to their clients, or for anyone who prefers a minimalist, distraction-free workflow.

Main Features:
    - Silence all notices: automatically hides core, plugin, and theme admin notices.
    - Hide update alerts: removes update nags for WordPress core, plugins, and themes.
    - Minimalist UI: removes update bubbles and counters from the admin sidebar.
    - Performance first: extremely lightweight code with no database bloat.
    - Zero configuration: just activate it and enjoy a clean dashboard instantly.

Unlike other heavy plugins, GhostBoard uses clean PHP hooks to prevent notices from rendering, ensuring your admin area stays fast and professional.

== Installation ==
- Go to Plugins > Add New in your WordPress dashboard.
- Search for \"GhostBoard\".
- Click \"Install now\" and then \"Activate\".
- (Optional) Alternatively, upload the ghostboard.zip file via the Upload Plugin button.
- There are no settings to configure; the dashboard will be cleaned automatically.

== Frequently Asked Questions ==
- Question 1

Q: Does this plugin delete my updates?
A: No, GhostBoard only hides the notifications and alerts. It does not prevent you from updating your plugins or themes manually via the Updates screen.

- Question 2

Q: Will it slow down my website?
A: Absolutely not. GhostBoard is extremely lightweight. It uses native WordPress hooks to prevent notices from displaying, which can actually make your admin area feel slightly faster and cleaner.

- Question 3

Q: What happens if I deactivate the plugin?
A: Everything goes back to normal instantly. GhostBoard doesn\'t make permanent changes to your database; it only filters the dashboard view while active.

- Question 4

Q: Does it work with all themes and plugins?
A: Yes, it is designed to target the standard WordPress notice classes. While some very poorly coded plugins might bypass these standards, GhostBoard covers the vast majority of notifications.

== Screenshots ==
1. The clean, distraction-free WordPress dashboard after activating GhostBoard.
2. The admin sidebar menu with all update bubbles and counters removed.

== Changelog ==
1.0.0
* Initial release.
* Added functionality to hide all admin notices (core, plugins, and themes).
* Added filters to disable update notifications for core, plugins, and themes.
* Injected custom CSS to hide persistent nag screens and update bubbles.
* Initial documentation and FAQ setup.

== Upgrade Notice ==
1.0.0
This is the first stable release of GhostBoard. Install it to immediately enjoy a clean and distraction-free WordPress dashboard.
