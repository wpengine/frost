# Theme Experiments by WP Engine

A collection of experimental block-based WordPress themes by WP Engine.

![Frost for WordPress](https://user-images.githubusercontent.com/4832319/147150948-25dfe270-e281-46ca-94af-f1dd94716760.jpg)

## Getting Started

You can download the latest stable release of each experimental theme using the links below.

- [Frost - 0.8.1](https://github.com/wpengine/themes/releases/download/2022.01.10/frost-0.8.1.zip)
- **more coming soon**

Alternatively, install the entire repository for development purposes:

1. Set up a local WordPress development environment, we recommend using [Local](https://localwp.com/).
2. Ensure you are using WordPress 5.9. You can use WordPress 5.8 with the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) active.
3. Clone / download this repository into the `/wp-content/` directory of your new WordPress instance replacing any `/themes/` directory that might already exist.
4. In the WordPress admin, use the Appearance > Themes screen to activate themes.

To optionally run tests locally, you will need [Composer](https://getcomposer.org/) on your machine. Run `composer install` to install test-specific development dependencies. The following test commands are available:

- `composer run lint` Checks all PHP files for syntax errors
- `composer run standards:check` Checks all PHP files for errors according to [WordPress coding standards](https://developer.wordpress.org/coding-standards/)
- `composer run standards:fix` Attempts to automatically fix all PHP coding standards errors

## Resources

- [Frost website](https://frostwp.com/)
- [Setting up a development environment with Local](https://localwp.com/)

