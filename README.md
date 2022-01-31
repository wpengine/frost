# Theme Experiments by WP Engine

A collection of experimental block-based WordPress themes by WP Engine.

![Frost for WordPress](https://user-images.githubusercontent.com/4832319/147150948-25dfe270-e281-46ca-94af-f1dd94716760.jpg)

## Getting Started

You can download the latest stable release of each experimental theme using the links below.

- [Frost v0.8.4](https://github.com/wpengine/themes/releases/download/2022.01.31/frost-0.8.4.zip)
- *more coming soon...*

Alternatively, install the entire repository for development purposes:

1. Set up a local WordPress development environment, we recommend using [Local](https://localwp.com/).
2. Ensure you are using WordPress 5.9 or version 5.8+ with the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) active.
3. Clone / download this repository into the `/wp-content/` directory of your new WordPress instance replacing the existing `/wp-content/themes/` directory.
4. In the WordPress admin, use the Appearance > Themes screen to activate any of the available themes.

**Coding Standards**

Themes adhere to the [WordPress coding standards](https://developer.wordpress.org/coding-standards/). To optionally test standards locally, you will need [Composer](https://getcomposer.org/) on your machine. Run `composer install` to install test-specific development dependencies. The following commands are available:

- `composer run lint` Checks all PHP files for syntax errors
- `composer run standards:check` Checks all PHP files for standards errors
- `composer run standards:fix` Attempts to automatically fix all PHP standards errors

## Resources

- [Frost website](https://frostwp.com/)
- [Set up a development environment with Local](https://localwp.com/)