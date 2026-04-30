# Willow Theme

This is a custom WP Block Theme made for Aviam Design and their client Willow Cremation.

## 🚀 Features

- Obits - Provided as an iframe by Tribute Tech
- Locations - Provided through the plugin [WP Store Locator](https://wpstorelocator.co/)

## 📦 Getting Started

Follow these steps to get a local copy up and running.

### Prerequisites

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com
   ```
2. Navigate to the directory:
   ```bash
   cd repo-name
   ```

## 🛠 Usage

For local development, use the Local software to create a new local install of WP, and then install and activate the theme through a zip file.

For live sites, install and activate a zip file of the theme.

## WP Store Locator

This theme uses the WP Store Locator plugin to show the locations of the stores on a google map.

### API Keys

The plugin uses custom Google API Keys that must be created through a [Google Cloud Platform Account](https://cloud.google.com/).

### Styling

There is custom CSS to display the map is it is. This CSS is located in the /assets/additional-css.css file, as well as saved to the theme.json file.
There is also a custom map styling JSON object that is pasted directly into the plugin settings. This can be found in /assets/google-maps
Each the plugin creates a "store" custom post type. The store category "Show on Map" must be created, and checked for each location.

### Shortcode

The map is added through a shortcode: [wpsl_map category="show-on-map"].

### Custom Functions and Markers

There are some additional custom functions in the functions.php file that add custom marker icons. The marker icon image files are located in /assets/wpsl-markers.
