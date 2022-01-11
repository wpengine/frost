# Theme Experiments by WP Engine

A collection of experimental block-based WordPress themes by WP Engine.

![Frost for WordPress](https://user-images.githubusercontent.com/4832319/147150948-25dfe270-e281-46ca-94af-f1dd94716760.jpg)

## Getting Started

There are a couple ways to get started. First, navigate to each theme in this repository using the links below. There you will be able to directly download the latest stable release.

* [Frost](https://github.com/wpengine/themes/blob/trunk/frost/README.md)
* more to come...

Alternatively, install the entire repository for development purposes:

1. Set up a local WordPress instance, we recommend using [Local](https://localwp.com/).
2. Ensure you are using WordPress 5.9. You can use WordPress 5.8 with the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) active.
3. Clone / download this repository into the `/wp-content/` directory of your new WordPress instance replacing any `/themes/` directory that might already exist.
4. Activate any theme in this repository from the Appearance → Themes screen in the WordPress admin.

To optionally run tests locally, you will need [Composer](https://getcomposer.org/) on your machine. Run `composer install` to install test-specific development dependencies. The following test commands are available:

- `composer run lint` Checks all PHP files for syntax errors
- `composer run standards:check` Checks all PHP files for errors according to [WordPress coding standards](https://developer.wordpress.org/coding-standards/)
- `composer run standards:fix` Attempts to automatically fix all PHP coding standards errors
